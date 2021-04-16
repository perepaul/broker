@extends('layouts.login')

@section('content')
<div class="content-wrapper">
    <div class="content-body">
        <section class="flexbox-container">
            <div class="col-12 d-flex align-items-center justify-content-center p-0">
                <div class="col-lg-7 col-md-12 box-shadow-2 p-0">
                    <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                        <div class="card-header border-0 pb-0">
                            <div class="card-title text-center">
                                <a href="/">
                                    <img src="/assets/img/logo.png" alt="branding logo"
                                        width="100">
                                </a>
                            </div>
                            <h4 class="card-subtitle line-on-side text-muted text-center pt-2">
                                <span>Create Account</span>
                            </h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body pt-0">
                                <form class="form-horizontal row" action="{{route('register')}}" method="POST">
                                    @csrf
                                    <fieldset class="form-group floating-label-form-group col-md-6">
                                        <label for="firstname">First name</label>
                                        <input type="text" class="form-control" id="firstname" name="firstname"
                                            placeholder="First name" value="{{old('firstname')}}">
                                    </fieldset>
                                    <fieldset class="form-group floating-label-form-group col-md-6">
                                        <label for="lastname">Last name</label>
                                        <input type="text" class="form-control" id="lastname" name="lastname"
                                            placeholder="Last name" value="{{old('lastname')}}">
                                    </fieldset>
                                    <fieldset class="form-group floating-label-form-group col-md-6">
                                        <label for="email">Your email address</label>
                                        <input type="email" name="email" class="form-control" id="email"
                                            placeholder="Your Email Address" value="{{old('email')}}">
                                    </fieldset>
                                    <fieldset class="form-group floating-label-form-group col-md-6">
                                        <label for="phone">Phone</label>
                                        <input type="text" name="phone" class="form-control" id="phone"
                                            placeholder="eg. +1xxxxxxxx" value="{{old('phone')}}">
                                    </fieldset>
                                    <fieldset class="form-group floating-label-form-group col-md-12">
                                        <label for="currency_id">Account currency</label>
                                        <select name="currency_id" id="currency_id" class="form-control">
                                            @foreach($currencies as $currency)
                                            <option value="{{$currency->id}}">{{$currency->name}} ({{$currency->symbol}})</option>
                                            @endforeach
                                        </select>
                                    </fieldset>
                                    <fieldset class="form-group floating-label-form-group col-md-12">
                                        <label for="plan_id">Subscription plan </label>
                                        <span class="pull-right"><a href="/6">view details</a></span>
                                        <select name="plan_id" id="plan_id" class="form-control">
                                            @foreach($plans as $plan)
                                                <option value="{{$plan->id}}">{{$plan->name}} ({{$plan->price}})</option>
                                            @endforeach
                                        </select>
                                    </fieldset>
                                    <fieldset class="form-group floating-label-form-group mb-1 col-md-12">
                                        <label for="password">Enter Password</label>
                                        <span class="pull-right line-height-1 icon-align password-toggle"><i class="la la-eye d-block" style="font-size:22px"></i></span>
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder="Enter Password">
                                    </fieldset>
                                    <fieldset class="form-group floating-label-form-group mb-1 col-md-12">
                                        <label for="password_confirmationss">Confirm password</label>
                                        <span class="pull-right line-height-1 icon-align password-toggle"><i class="la la-eye d-block" style="font-size:22px"></i></span>

                                        <input type="password" class="form-control" name="password_confirmation"
                                            id="password_confirmation" placeholder="Confirm Password">
                                    </fieldset>
                                    <div class="col-md-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="agree"
                                                id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                <span>&nbsp; By click on register,<br>
                                                    you agree to our <a href="{{route('terms')}}" class="card-link">terms</a></span>
                                            </label>
                                            <div class="pull-right">
                                                Already registered?<a href="{{route('login')}}" class="card-link">
                                                    Login.</a></div>
                                        </div>
                                    </div>
                            </div>

                            <div class="text-center pb-3">
                                <button type="submit" class="btn btn-outline-info"><i class="ft-user"></i>
                                    Register</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
