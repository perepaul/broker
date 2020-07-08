<?php

namespace App\Http\Controllers;

use App\Plan;
use App\User;
use App\Trade;
use App\Currency;
use App\Deposits;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function getmodal(Request $request)
    {
        if (!$request->ajax()) {
            return redirect()->route('home');
        }
        $type = $request->type;
        if (empty($type)) {
            return response()->json([
                'success' => false,
                'data' => null
            ], 400);
        }
        $data['type'] = $type;
        if ($request->has('currency_id')) {
            $data['currency'] = Currency::findOrFail($request->currency_id);
        }

        if ($request->has('plan_id')) {
            $data['plan'] = Plan::findOrFail($request->plan_id);
        }
        if($request->has('trade_id'))
        {
            $data['trade'] = Trade::findOrFail($request->trade_id);
        }

        if($request->has('user_id')){
            $data['user'] = User::findOrFail($request->user_id);
        }

        if($request->has('deposit_id'))
        {
            $data['deposit'] = Deposits::findOrFail($request->deposit_id);
        }
        return response()->json([
            'success' => true,
            'data' => view('layouts.modals', $data)->render()
        ]);
    }

    public function addElement(Request $request)
    {
        if (!$request->ajax()) {
            return redirect()->route('home');
        }

        if (empty($request->type)) {
            return response()->json([
                'success' => false,
                'data' => null
            ], 400);
        }

        $data['type'] = $request->type;

        return response()->json([
            'success' => true,
            'data' => view('partials.elements', $data)->render()
        ]);
    }
}
