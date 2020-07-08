<?php

namespace App\Http\Controllers;

use App\Trade;
use App\User;
use Illuminate\Http\Request;

class TradeController extends Controller
{

    public function placeTrade(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'amount' => 'required|numeric',
            'currency_id' =>'required'
        ],['currency_id'=>'Please select a currency']);
        $user = User::findOrFail(auth()->user()->id);


        $data = $request->except('_token');
        if($request->demo == 'on')
        {
            if($request->amount > $user->demo_balance){
                session()->flash('error','Amount cannot be greater than demo balance');
                return redirect()->back();
            }elseif(empty($user->demo_balance)){
                session()->flash('error','Amount cannot be greater than demo balance');
                return redirect()->back();
            }
            $user->update(['demo_balance'=> $user->demo_balance - $request->amount]);
            $data['is_demo'] = 1;
        }else{
            if($request->amount > $user->balance){
                session()->flash('error','Insufficient Balance, fund your account!');
                return redirect()->back();
            }

            $user->update(['balance'=>$user->balance - $request->amount]);
        }
        $trade = new Trade($data);
        $user->trades()->save($trade);
        session()->flash('message', 'Trade placed successfully');
        return redirect()->back();
    }

    public function updateTrade(Request $request,$id)
    {

        $trade = Trade::findOrFail($id);
        $trade->update($request->except('_token'));
        session()->flash('message','Trade updated successfully');
        return redirect()->back();

    }

    public function cancelTrade($id)
    {
        $trade = Trade::findOrFail($id);
        $trade->update(['status'=>0]);
        $bal = $trade->amount + $trade->profit;
        $user = $trade->user;
        $user->update(['balance'=>$user->balance + $bal]);
        session()->flash('message','Trade cancel successfully');
        return redirect()->back();
    }
}
