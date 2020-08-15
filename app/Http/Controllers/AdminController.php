<?php

namespace App\Http\Controllers;

use App\User;
use App\Email;
use App\Trade;
use App\Deposits;
use App\Withdrawal;
use Illuminate\Http\Request;
use App\Mail\GeneralUserMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use SebastianBergmann\CodeCoverage\Report\PHP;

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
        $attachment = array('attachment'=>null);
        if($request->has('attachment'))
        {
            foreach($request->attachment as $attach)
            {
                $attachment['attachment'][] = uploadImage(config('constants.email_attachment_dir'),$attach);
            }
        }
        foreach($request->user_ids as $user_id)
        {
            $user = User::findOrFail($user_id);
            // $user->emails()->save(new Email(array_merge($attachment,$request->except('_token','user_ids'))));
            $param = array_merge(['user_id'=>$user_id,'attachment'=>$attachment['attachment']],$request->except('_token','user_ids','attachment'));
            // dd($param);

            Mail::to($user)->send(new GeneralUserMail($user,Email::create($param)));
        }

        session()->flash('message','Email(s) sent successfully');
        return redirect()->back();

    }

    public function emails(Request $request)
    {
        if($request->ajax()){
            $emails = Email::query();

            if($request->has('user_id') && !empty($request->user_id)){
                $emails->where('user_id','=', (int)$request->user_id);
            }
            if($request->has('attachment')){
                // dd($request->attachment);
                if($request->attachment == 'yes'){
                    $emails->whereNotNull('attachment');
                }elseif($request->attachment == 'no'){
                    $emails->whereNull('attachment');
                }
            }
            if($request->has('start') && !empty($request->start) && $request->has('end') && !empty($request->end))
            {
                $emails->whereBetween(DB::raw('date(created_at)'),[$request->start,$request->end]);
            }
            $data = array('data'=>[]);
            // dd($emails->get());
            foreach($emails->get() as $k => $email)
            {
                if($email->user)
                {
                    $d['to'] = $email->user->fullname;
                    $d['subject']=$email->subject;
                    $d['message']= $email->message;
                    $d['attachment'] = !is_null($email->attachment) ?'<span class="badge badge-success">Yes</span>':'<span class="badge badge-info">No</span>';
                    $d['date'] = $email->created_at->format('d-m-Y');
                    $d['action'] = '<span class="dropdown">'. PHP_EOL;
                    $d['action'] .= '<button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"class="btn btn-primary btn-sm dropdown-toggle dropdown-menu-right">'.PHP_EOL;
                    $d['action'] .= '<i class="ft-settings"></i>' . PHP_EOL;
                    $d['action'] .= '</button>' . PHP_EOL;
                    $d['action'] .= '<span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">'. PHP_EOL;
                    $d['action'] .= '<a href="javascript:void(0)" onclick="getModal({type:\'preview-email\',email_id:'.$email->id.' })" class="dropdown-item"><i class="la la-eye"></i> View</a>'. PHP_EOL;
                    $d['action'] .= '</span>'. PHP_EOL;
                    $d['action'] .= '</span>'. PHP_EOL;
                    $data['data'][] = $d;
                }
            }
            return json_encode($data);
        }
        return view('back.admin.emails');
    }
}
