@extends('emails.layout.mail')
@section('message')
    Hello {{$user->firstname}},<br>
    <p>
        we have approved your withdrawal request of {{$user->currency_symbol.$withdrawal->amount}}.
    </p>
@endsection
