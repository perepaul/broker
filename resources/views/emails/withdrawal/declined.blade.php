@extends('emails.layout.mail')
@section('message')
    Hello {{$user->firstname}},<br>
    {!! $reason !!}
@endsection
