<?php

namespace App\Http\Controllers;

use App\Deposits;
use App\Trade;
use App\User;
use App\Withdrawal;
use Illuminate\Http\Request;

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
}
