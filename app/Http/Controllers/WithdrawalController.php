<?php

namespace App\Http\Controllers;

use App\User;
use App\Withdrawal;
use Illuminate\Http\Request;

class WithdrawalController extends Controller
{
    public function withdraw(Request $request)
    {
        $user = User::findOrFail(auth()->user()->id);
        if($request->amount > $user->balance)
        {
            session()->flash('error','Insuffient funds on account');
            return redirect()->back();
        }
        $data = $request->except('_token');
        $data['reference'] = randomString();
        while (Withdrawal::where('reference',$data['reference'])->count() >0) {
            $data['reference'] = randomString();
        }

        $user->withdrawals()->save(new Withdrawal($data));
        session()->flash('message','Withdrawal request sent, will be processed shortly');
        return redirect()->back();
    }
}
