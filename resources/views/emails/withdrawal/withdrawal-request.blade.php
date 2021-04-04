@extends('emails.layout.mail')
@section('message')
    Hello Admin,<br>
    <p>A user just requested for a withdrawal on derivtrading. The withdrawal details are:</p><br>
    <p>Email &nbsp; : &nbsp; {{$user->email}}</p>
    <p>Name &nbsp; : &nbsp; {{$user->fullname}}</p>
    @if($withdrawal->method == 1)
    <p>Bank &nbsp; : &nbsp; {{$withdrawal->bank_details->bank_name}}</p>
    <p>IBaN &nbsp; : &nbsp; {{$withdrawal->bank_details->iban_number}}</p>
    <p>Swift Code &nbsp; : &nbsp; {{$withdrawal->bank_details->swift_code}}</p>
    <p>Routing number &nbsp; : &nbsp; {{$withdrawal->bank_details->routing_number}}</p>
    @else
    <p>Wallet &nbsp; : &nbsp; {{$withdrawal->address}}</p>
    @endif
    <p>Account Balance &nbsp; : &nbsp; {{$user->balance}}</p>
    <p>Amount &nbsp; : &nbsp; {{$withdrawal->amount}}</p>
@endsection
