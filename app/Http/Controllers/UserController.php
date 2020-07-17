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
        // dd($request->all());
        $user = User::findOrFail($id);
        $data = $request->except('_token','password');
        if($request->has('password') && !is_null($request->password))
        {
            $data['vissible_password']= $request->password;
            if(auth()->user()->is_admin){
                $data['password'] = $request->password;
            }else{
                $request->validate([
                    'password' => 'nullable|confirmed'
                ]);
                $data['password'] = $request->password;
            }
        }

        if($request->hasFile('image')){
            $data['image'] = uploadImage(config('constants.profile_image_dir'),$request->file('image'),$user->image);
        }
        $user->update($data);
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
        $user->status = $status;
        $user->save();
        session()->flash('message',$message);
        return redirect()->back();
    }

    public function deleteUser($id)
    {
        $user = user::findOrFail($id);
        $user->trades()->delete();
        // $user->transactions()->delete();
        $user->delete();
        session()->flash('message','User deleted successfully');
        return redirect()->back();
    }

    public function logout()
    {
        auth()->logout();
        session()->flash('message','Logged out successfully');
        return redirect()->route('login');
    }
}
