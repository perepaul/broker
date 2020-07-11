<?php

namespace App\Http\Controllers;

use App\Trade;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function trades()
    {
        $trades = Trade::orderBy('status','asc')->get();
        return view('back.admin.trades',compact('trades'));
    }
}
