<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('back.dashboard.index');
    }

    public function deposit()
    {
        return view('back.dashboard.deposit');
    }

    public function withdrawal()
    {
        return view('back.dashboard.withdrawal');
    }

    public function trade()
    {
        return view('back.dashboard.trades');
    }

    public function transactions()
    {
        return view('back.dashboard.transactions');
    }

    public function profile()
    {
        return view('back.profile.profile');
    }
}
