@extends('emails.layout.mail')
@section('message')
    Hello Admin,<br>
    <p>A user just deposited on lottrades. The deposit details are:</p><br>
    <p>Email &nbsp; : &nbsp; {{$user->email}}</p>
    <p>Name &nbsp; : &nbsp; {{$user->fullname}}</p>
    <p>Amount &nbsp; : &nbsp; {{$deposit->amount}}</p>
    <p>Payment Status &nbsp; : &nbsp; Pending</p>
@endsection
