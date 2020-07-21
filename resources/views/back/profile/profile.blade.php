@extends('layouts.admin')

@section('content')
@if(!isset($user))
    @php
        $user = auth()->user();
    @endphp
@endif
<div class="content-body">

        <div id="user-profile" class="col-12">
            <div class="row">
                <div class="card col-12 profile-with-cover">
                    <div class="media profil-cover-details p-0 w-100">
                        <div class="media-left pl-2 pt-2">
                            <label for="image" class="profile-image">
                                <img src="{{asset(config('constants.profile_image_dir').$user->image)}}" style="width:120px; height:110px;"
                                    class="rounded-circle img-border" alt="Card image" title="Update Profile Picture">
                            </label>
                            <input type="file" name="image" id="image" style="display:none">
                        </div>
                        <div class="media-body pt-3 px-2">
                            <div class="row">
                                <div class="col">
                                    <h3 class="card-title">{{$user->firstname.' '.$user->lastname}}</h3>
                                    <h3 class="card-title">Balance &nbsp; - &nbsp;{{$user->currency->symbol.$user->balance}}</h3>
                                </div>
                                @if($user->is_admin)
                                <div class="col text-right">
                                    <button type="button" class="btn btn-success"><i class="la la-envelope"></i>
                                        Send Mail</button>

                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <nav class="navbar navbar-light navbar-profile align-self-end">
                        <button class="navbar-toggler d-sm-none" type="button" data-toggle="collapse"
                            aria-expanded="false" aria-label="Toggle navigation"></button>
                    </nav>
                </div>

            </div>
        </div>
    <div class="card col-12">
        <div class="card-body p-3">

            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" id="homeIcon-tab" data-toggle="tab" href="#link1"
                        aria-controls="homeIcon" aria-expanded="true"><i class="la la-user"></i>
                        Profile</a>
                </li>
                @if(!auth()->user()->is_admin)
                <li class="nav-item">
                    <a class="nav-link" id="profileIcon-tab" data-toggle="tab" href="#link2"
                        aria-controls="profileIcon" aria-expanded="false"><i class="la la-money"></i>
                        ID & Documents</a>
                </li>
                @endif
            </ul>
            <div class="tab-content pt-1">
                <div role="tabpanel" class="tab-pane active" id="link1" aria-labelledby="homeIcon-tab"
                    aria-expanded="true">
                    <div class="p-2">
                        <div class="mb-2">
                            <h4>Update Profile</h4>
                        </div>
                        <form action="{{route('users.update',$user->id)}}" class="w-100" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <h4 class="form-section"><i class="ft-user"></i> Personal Info</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="firstnamt" class="">First Name</label>
                                            <input type="text" id="firstname" class="form-control"
                                                placeholder="First Name" name="firstname" value="{{$user->firstname}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lastname" class="">Last Name</label>
                                            <input type="text" id="lastname" class="form-control"
                                                placeholder="Last Name" name="lastname" value="{{$user->lastname}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email" class="">E-mail</label>
                                            <input disabled readonly type="text" id="email" value="{{$user->email}}" class="form-control" placeholder="E-mail"
                                                name="email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone" class="">Contact Number</label>
                                            <input type="text" id="phone" class="form-control" value="{{$user->phone}}"
                                                placeholder="Phone eg. +1xxxxxxx" name="phone">
                                        </div>
                                    </div>
                                </div>
                                @if(!auth()->user()->is_admin)
                                <h4 class="form-section"><i class="la la-money"></i> Trade Info</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="currency_id" class="">Account Currency</label>
                                            <select name="currency_id" id="currency_id" class="form-control">
                                                @foreach ($currencies as $currency)
                                                <option value="{{$currency->id}}" @if($currency->id == $user->currency->id) selected @endif>{{$currency->name}} &nbsp; ({{$currency->symbol}})</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="plan_id" class="">Trading Plan</label>
                                            <select name="plan_id" id="plan_id" class="form-control">
                                                @foreach ($plans as $plan)
                                                <option value="{{$plan->id}}" @if($plan->id == $user->plan->id) selected @endif>{{$plan->name}} &nbsp; ({{$user->currency->symbol.$plan->price}})</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                @endif


                                <h4 class="form-section"><i class="ft-check-circle"></i> Security <small class="text-danger">*(leave empty, if not changing password)</small></h4>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput2" class="">New Password</label>
                                            <input type="password" id="password" name="password" class="form-control"
                                                placeholder=">New Password" name="lastname">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput2" class="">Confirm Password</label>
                                            <input type="password" name="password_confirmation" id="password_confirmation"
                                                class="form-control" placeholder="Confirm Password" name="lastname">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="form-actions">
                                {{-- <button type="button" class="btn btn-outline-warning mr-1">
                                    <i class="ft-x"></i> Cancel
                                </button> --}}
                                <div class="text-right">

                                    <button type="submit" class="btn btn-outline-primary">
                                        <i class="ft-check"></i> Update
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

                @if(!auth()->user()->is_admin)
                <div class="tab-pane" id="link2" role="tabpanel" aria-labelledby="profileIcon-tab"
                    aria-expanded="false">
                    <div class="p-2">
                        <div class="mb-2 d-flex justify-content-between">
                            <h4>ID & Documents</h4>
                            <span class="btn btn-primary btn-sm btn-round" onclick="getModal({type:'upload-doc'})">
                                <i class="la la-plus"></i>
                            </span>
                        </div>


                    </div>
                </div>
                @endif

            </div>
        </div>
    </div>
</div>

@endsection
