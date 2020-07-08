@extends('layouts.login')

@section('content')

<div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
        <section class="flexbox-container">
            <div class="col-12 d-flex align-items-center justify-content-center p-0">
                <div class="col-md-12 col-lg-5 col-sm-12 box-shadow-2 p-0">
                    <div class="card border-grey border-lighten-3 m-0">
                        <div class="card-header border-0">
                            <div class="card-title text-center">
                                <div class="p-1">
                                    <a href="/">
                                        <img src="{{asset('assets/img/logo/logo.png')}}" style="width:40%;"
                                            alt="branding logo">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-content">
                            <p class="card-subtitle line-on-side text-muted text-center  mx-2">
                                <span>Login</span>
                            </p>
                            <div class="card-body pt-0">
                                <form class="form-horizontal" action="{{route('login')}}" method="POST">
                                    @csrf
                                    <fieldset class="form-group floating-label-form-group">
                                        <label for="email">Your Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Your Email" value="{{old('email')}}">
                                    </fieldset>
                                    <fieldset class="form-group floating-label-form-group mb-1">
                                        <label for="password">Enter Password</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder="Enter Password">
                                    </fieldset>
                                    <div class="form-group row">
                                        <div class="d-flex justify-content-between col-12">
                                            <fieldset>
                                                <input type="checkbox" id="remember" name="remember" class="chk-remember">
                                                <label for="remember"> Remember Me</label>
                                            </fieldset>
                                            <div class=""><a
                                                    href="recover-password.html" class="card-link">Forgot Password?</a>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-outline-info btn-block"><i
                                            class="ft-unlock"></i> Login</button>
                                </form>
                            </div>
                            <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1">
                                <span>New to Lottrades ?</span>
                            </p>
                            <div class="card-body">
                                <a href="{{route('register')}}" class="btn btn-outline-danger btn-block"><i
                                        class="ft-user"></i> Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection
