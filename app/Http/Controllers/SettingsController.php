<?php

namespace App\Http\Controllers;

use App\Currency;
use App\Plan;
use App\PlanFeatures;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        return view('back.admin.settings');
    }

    public function addCurrency(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'symbol' => 'required|string',
            'iso' => 'required|string'
        ]);
        Currency::create($request->except(['_token']));
        session()->flash('message', 'currency added');
        return redirect()->back();
    }

    public function removeCurrency($id)
    {
        $currency = Currency::findOrFail($id);
        $currency->delete();
        session()->flash('message', 'Currency deleted');
        return redirect()->back();
    }

    public function updateCurrency(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'symbol' => 'required|string',
            'iso' => 'required|string'
        ]);
        $currency = Currency::findOrFail($id);
        $currency->update($request->except('_token'));
        session()->flash('message', 'Updated currency');
        return redirect()->back();
    }

    public function addPlan(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric'
        ]);
        $plan = Plan::create($request->except('_token'));
        if ($request->has('values')) {
            foreach ($request->values as $value) {
                $plan->features()->save(new PlanFeatures(['value' => $value]));
            }
        }
        session()->flash('message', 'Plan created');
        return redirect()->back();
    }

    public function updatePlan(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric'
        ]);
        $plan = Plan::findOrFail($id);
        $plan->update($request->except('_token'));
        if ($plan->features()->count() > 0) {
            $plan->features()->delete();
        }
        if($request->has('values')){
            foreach ($request->values as $value) {
                $plan->features()->save(new PlanFeatures(['value' => $value]));
            }
        }

        session()->flash('message', 'Plan updated');
        return redirect()->back();
    }

    public function removePlanFeature($id)
    {
        PlanFeatures::findOrFail($id)->delete();
        return response()->json([
            'success' => true,
            'data' => null
        ]);
    }
}
