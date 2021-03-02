@extends('emails.layout.mail')
@section('message')
    Hello Admin,<br>
    <p>A user just signed up on pipstradeway. The user details are:</p><br>
    <p>Email &nbsp; : &nbsp; {{$user->email}}</p>
    <p>Name &nbsp; : &nbsp; {{$user->fullname}}</p>
@endsection
