<?php

namespace App\Http\Controllers;

use App\User;
use App\Deposits;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    public function deposit(Request $request)
    {
        // dd($request->all());
        $user = User::findOrFail(auth()->user()->id);
        $ref = randomString();
        while (Deposits::where('reference',$ref)->count()) {
            $ref = randomString();
        }
        if($user->plan->price>$request->amount){
            session()->flash('error','Minimum deposit amount for this your plan is '.$user->currency->symbol.$user->plan->price);
            return redirect()->back();
        }
        $deposit = new Deposits(array_merge($request->except('_token'),['reference'=>$ref]));
        $user->deposits()->save($deposit);
        session()->flash('message','Deposit initiated, pay for order via third-party Bitcoin');
        return redirect()->back();
    }

    public function confirm(Request $request,$id)
    {
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg'
        ]);
        $deposit = Deposits::findOrFail($id);
        $data = $request->only('amount');
        if($request->hasFile('image'))
        {
            $data['image'] = uploadImage(config('constants.deposit_image_dir'),$request->image);
        }
        $data['status'] = 1;
        $deposit->update($data);
        session()->flash('message','Deposit Confirmed, your balance will be updated soon');
        return redirect()->back();

    }

    public function approve($id)
    {
        $deposit = Deposits::findOrFail($id);
        $user = $deposit->user;
        $deposit->approved = 1;
        $deposit->save();
        // $deposit->update(['approved',1]);
        $user->update(['balance'=>$user->balance + $deposit->amount]);
        session()->flash('message','Deposit approved');
        return redirect()->back();
    }

    public function depositPage()
    {
        return view('admin.deposit.deposit');
    }
}
