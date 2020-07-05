<?php

namespace App\Http\Controllers;

use App\User;
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

    public function updateUser(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->except('_token'));
        if(auth()->user()->is_admin)
        {
            session()->flash('message','User details updated successfully');
        }else{
            session()->flash('message','profile updated successfully');
        }
        return redirect()->back();
    }

    public function viewUserTrades($id)
    {
        $user = User::findOrFail($id);
        $trades = $user->trades;
        return view('back.admin.trades',compact('trades'));
    }

    public function togleStatus($id)
    {
        $user = User::findOrFail($id);
        $status = 1;
        $message = 'User activated successfully';
        if($user->status){
            $status = 0;
            $message = 'User Deactivated sucessfully';
        }
       $user->update(['status',0]);
        session()->flash('message',$message);
        return redirect()->back();
    }

    public function deleteUser($id)
    {
        $user = user::findOrFail($id);
        $user->trades()->delete();
        // $user->transactions()->delete();
        session()->flash('message','User deleted successfully');
        return redirect()->back();
    }
}
