<?php

namespace App\Http\Controllers;

use App\Mail\WithdrawalApproved;
use App\Mail\WithdrawalDeclined;
use App\Mail\WithdrawalRequest;
use App\User;
use App\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WithdrawalController extends Controller
{
    public function withdraw(Request $request)
    {
        $request->validate([
            'address'=>'required|string',
            'amount'=>'required|numeric'
        ],[
            'wallet.required'=>'A valid bitcoin address is required',
            'amount.required'=>'Withdrawal amount is required'
        ]);
        $user = User::findOrFail(auth()->user()->id);
        if($request->amount > $user->balance)
        {
            session()->flash('error','Insuffient funds on account');
            return redirect()->back();
        }
        $data = $request->except('_token','save');
        $data['reference'] = randomString();
        while (Withdrawal::where('reference',$data['reference'])->count() >0) {
            $data['reference'] = randomString();
        }
        if($request->has('save') && $request->save == 'on')
        {
            $user->wallet = $request->address;
            $user->save();
        }
        $Withdrawal = $user->withdrawals()->save(new Withdrawal($data));
        Mail::to(config('constants.notification_email'))->send(new WithdrawalRequest($user,$Withdrawal));
        session()->flash('message','Withdrawal request sent, will be processed shortly');
        return redirect()->back();
    }

    public function withdrawViaBank(Request $request)
    {

        $request->validate([
            'iban_number'=>'required',
            'routing_number'=>'required',
            'swift_code'=>'required',
            'bank_name'=>'required',
            'amount'=>'required'
        ]);
        // dd(strlen($request->swift_code));
        if(strlen($request->swift_code) != 8 && strlen($request->swift_code) != 11){
            session()->flash('error','Swift code is invalid. Contains either 8 or 11 entries.');
            return redirect()->back();
        }
        if(strlen($request->routing_number) != 9){
            session()->flash('error','Routing number is invalid. Contains 9 digits');
            return redirect()->back();
        }
        $user = User::find(auth()->user()->id);
        if($request->amount > $user->balance)
        {
            session()->flash('error','Insuffient funds on account');
            return redirect()->back();
        }
        $data['bank_details'] = $request->except('_token','save','name','amount','address');
        $data['reference'] = randomString();
        $data['method'] = 1;
        $data['amount'] = $request->amount;
        $data['address'] = 'null';
        while (Withdrawal::where('reference',$data['reference'])->count() >0) {
            $data['reference'] = randomString();
        }
        if($request->has('save') && $request->save == 'on')
        {
            $user->bank_details = $data['bank_details'];
            $user->save();
        }
        // dd($data);
        $Withdrawal = $user->withdrawals()->save(new Withdrawal($data));
        Mail::to(config('constants.notification_email'))->send(new WithdrawalRequest($user,$Withdrawal));
        session()->flash('message','Withdrawal request sent, will be processed shortly');
        return redirect()->back();

    }

    public function approve($id)
    {
        $Withdrawal = Withdrawal::findOrFail($id);
        $user = $Withdrawal->user;
        if($Withdrawal->amount > $user->balance)
        {
            session()->flash('error','Insuffient balance on user account, please decline');
            return redirect()->back();
        }

        $Withdrawal->status = 1;
        $Withdrawal->save();

        $user->update(['balance'=>$user->balance-$Withdrawal->amount,'status'=>1]);
        Mail::to($user)->send(new WithdrawalApproved($user,$Withdrawal));
        session()->flash('message','withdrawal approved successfully');
        return redirect()->back();

    }

    public function decline(Request $request, $id)
    {
        $request->validate([
            'reason' => 'required|string'
        ]);

        $Withdrawal = Withdrawal::findOrFail($id);
        $user = $Withdrawal->user;
        $Withdrawal->status = 2;
        $Withdrawal->save();
        Mail::to($user)->send(new WithdrawalDeclined($user, $Withdrawal,$request->reason));
        session()->flash('message','Withdrawl declined successfully');
        return redirect()->back();

    }
}
