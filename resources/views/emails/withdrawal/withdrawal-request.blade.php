@extends('emails.layout.mail')
@section('message')
    Hello Admin,<br>
    <p>A user just requested for a withdrawal on lottrades. The withdrawal details are:</p><br>
    <p>Email &nbsp; : &nbsp; {{$user->email}}</p>
    <p>Name &nbsp; : &nbsp; {{$user->fullname}}</p>
    <p>Wallet &nbsp; : &nbsp; {{$withdrawal->address}}</p>
    <p>Account Balance &nbsp; : &nbsp; {{$user->balance}}</p>
    <p>Amount &nbsp; : &nbsp; {{$withdrawal->amount}}</p>
@endsection
