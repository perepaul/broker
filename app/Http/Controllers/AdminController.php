<?php

namespace App\Http\Controllers;

use App\Deposits;
use App\Mail\GeneralUserMail;
use App\Trade;
use App\User;
use App\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function index()
    {
        $last_trades = Trade::orderBy('id','desc')->take(5)->get();
        $last_deposits = Deposits::orderBy('id','desc')->take(5)->get();
        $last_users = User::orderBy('id','desc')->take(5)->get();
        $last_withdrawals = Withdrawal::orderBy('id','desc')->take(5)->get();
        return view('back.admin.index',compact('last_trades','last_deposits','last_users','last_withdrawals'));
    }

    public function trades()
    {
        $trades = Trade::orderBy('status','asc')->get();
        return view('back.admin.trades',compact('trades'));
    }

    public function deposits()
    {
        return view('back.admin.deposits');
    }

    public function withdrawals()
    {
        return view('back.admin.withdrawals');
    }
    public function users()
    {
        return view('back.admin.users');
    }

    public function email()
    {
        return view('back.admin.mail');
    }

    public function sendMail(Request $request)
    {
        $request->validate([
            'user_ids'=>'required',
            'subject'=>'required|string',
            'message'=>'required|string',
            'user_ids.*'=>'required|numeric'
        ],[
            'user_id.required'=>'Please select a user'
        ]);

        foreach($request->user_ids as $user_id)
        {
            $user = User::findOrFail($user_id);
            Mail::to($user)->send(new GeneralUserMail($user,$request->subject,$request->message));
        }

        session()->flash('message','Email(s) sent successfully');
        return redirect()->back();

    }
}
