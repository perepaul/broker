@extends('layouts.admin')

@section('content')
@if(!isset($user))
    @php
        $user = auth()->user();
    @endphp
@endif
<div class="content-body">
    <div class="d-flex justify-content-center row">
        <form action="{{route('users.update',$user->id)}}" class="w-100" method="post" enctype="multipart/form-data">
            @csrf
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
                            {{-- <nav class="navbar navbar-expand-lg">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="#"><i class="la la-line-chart"></i> Timeline <span
                                                    class="">(current)</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i class="la la-user"></i> Profile</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i class="la la-briefcase"></i> Projects</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i class="la la-heart-o"></i> Favourites</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i class="la la-bell-o"></i> Notifications</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav> --}}
                        </nav>
                    </div>

                </div>
            </div>
            {{-- <section id="timeline" class="timeline-center timeline-wrapper">
          </section> --}}
            <div class="card col-12">
                <div class="card-header">
                    <h4 class="card-title">Update Profile</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            {{-- <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li> --}}
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            {{-- <li><a data-action="close"><i class="ft-x"></i></a></li> --}}
                        </ul>
                    </div>
                </div>
                <div class="card-content collpase show">
                    <div class="card-body">
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

                            {{-- <div class="form-group">
                                <label for="companyName" class="">Company</label>
                                <input type="text" id="companyName" class="form-control" placeholder="Company Name"
                                    name="company">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="projectinput5" class="">Interested in</label>
                                        <select id="projectinput5" name="interested" class="form-control">
                                            <option value="none" selected="" disabled="">Interested in</option>
                                            <option value="design">design</option>
                                            <option value="development">development</option>
                                            <option value="illustration">illustration</option>
                                            <option value="branding">branding</option>
                                            <option value="video">video</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="projectinput6" class="">Budget</label>
                                        <select id="projectinput6" name="budget" class="form-control">
                                            <option value="0" selected="" disabled="">Budget</option>
                                            <option value="less than 5000$">less than 5000$</option>
                                            <option value="5000$ - 10000$">5000$ - 10000$</option>
                                            <option value="10000$ - 20000$">10000$ - 20000$</option>
                                            <option value="more than 20000$">more than 20000$</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="projectinput8" class="">About Project</label>
                                <textarea id="projectinput8" rows="5" class="form-control" name="comment"
                                    placeholder="About Project"></textarea>
                            </div> --}}
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
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>

@endsection
