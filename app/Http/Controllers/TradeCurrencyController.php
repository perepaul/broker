<?php

namespace App\Http\Controllers;

use App\TradeCurrency;
use Illuminate\Http\Request;

class TradeCurrencyController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'name.*' => 'required'
        ]);
        foreach($request->name as $name)
        {
            TradeCurrency::create(['name' => $name]);
        }
       $count =  count($request->name);
       session()->flash('message', "created {$count} Trade currencies");
       return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required'
        ]);
        $tradeCurrency = TradeCurrency::findOrFail($id);
        $tradeCurrency->update(['name'=>$request->name]);
        session()->flash('message', "updated trade currency");
        return redirect()->back();
    }
}
