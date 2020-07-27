@extends('emails.layout.mail')
@section('message')

Hello {{$user->firstname}},<br>

{!!  htmlspecialchars_decode($messageText) !!}
@endsection
