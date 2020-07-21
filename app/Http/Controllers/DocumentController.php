<?php

namespace App\Http\Controllers;

use App\Document;
use App\Mail\DocumentUpload;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DocumentController extends Controller
{
    public function save(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3:max:10',
            'image' => 'required|image|mimes:png,jpg,jpeg'
        ]);
        $user =  User::findOrFail(auth()->user()->id);
        $data = $request->except('_token','image');
        $data['image'] = uploadImage(config('constants.document_dir'),$request->image);
        $document = $user->documents()->save(new Document($data));
        Mail::to(config('constants.notification_email'))->send(new DocumentUpload($user,$document));
        session()->flash('message','Document uploaded successfully');
        return redirect()->back();
    }

    public function delete($id)
    {
        $document = Document::findOrFail($id);
        $document->delete();
        session()->flash('message','Document deleted successfully');
    }
}
