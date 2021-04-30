@extends('emails.layout.mail')
@section('message')
    Hello Admin,<br>
    <p>A user just uploaded a document on Smartfxsignals. The upload details are:</p><br>
    <p>Email &nbsp; : &nbsp; {{$user->email}}</p>
    <p>Name &nbsp; : &nbsp; {{$user->fullname}}</p>
    <p>Document name &nbsp; : &nbsp; {{$document->name}}</p>
@endsection
