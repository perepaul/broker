@extends('emails.layout.mail')
@section('message')

Hello {{$user->firstname}},<br>
<p>Your request to withdraw {{$user->currency_symbol.$withdrawal->amount}}, was declined</p><br>
<strong>Because : </strong><br>

{!!  htmlspecialchars_decode($reason) !!}
@endsection
