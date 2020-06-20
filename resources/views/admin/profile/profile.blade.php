@extends('layouts.admin')

@section('content')

<div class="content-header row">
</div>
<div class="content-body">
  <div id="user-profile">
    <div class="row">
      <div class="col-12">
        <div class="card profile-with-cover">
          <div class="card-img-top img-fluid bg-cover height-300" style="background: url('{{asset('assets/back/app-assets/images/carousel/22.jpg')}}') 50%;"></div>
          <div class="media profil-cover-details w-100">
            <div class="media-left pl-2 pt-2">
              <a href="#" class="profile-image">
                <img src="{{asset('assets/back/app-assets/images/portrait/small/avatar-s-8.png')}}" class="rounded-circle img-border height-100"
                alt="Card image">
              </a>
            </div>
            <div class="media-body pt-3 px-2">
              <div class="row">
                <div class="col">
                  <h3 class="card-title">Jose Diaz</h3>
                </div>
                <div class="col text-right">
                  <button type="button" class="btn btn-primary d-"><i class="la la-plus"></i> Follow</button>
                  <div class="btn-group d-none d-md-block float-right ml-2" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-success"><i class="la la-dashcube"></i> Message</button>
                    <button type="button" class="btn btn-success"><i class="la la-cog"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <nav class="navbar navbar-light navbar-profile align-self-end">
            <button class="navbar-toggler d-sm-none" type="button" data-toggle="collapse" aria-expanded="false"
            aria-label="Toggle navigation"></button>
            <nav class="navbar navbar-expand-lg">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="la la-line-chart"></i> Timeline <span class="sr-only">(current)</span></a>
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
        </div>
        </nav>
      </div>
    </div>
  </div>
  {{-- <section id="timeline" class="timeline-center timeline-wrapper">
  </section> --}}
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Update Profile</h4>
      <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
      <div class="heading-elements">
        <ul class="list-inline mb-0">
          <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
          <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
          <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
          <li><a data-action="close"><i class="ft-x"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="card-content collpase show">
      <div class="card-body">
        <div class="card-text">
          <p class="card-text">With supporting text below as a natural lead-in to additional
            content.
          </p>
        </div>
        <form class="form">
          <div class="form-body">
            <h4 class="form-section"><i class="ft-user"></i> Personal Info</h4>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput1" class="sr-only">First Name</label>
                  <input type="text" id="projectinput1" class="form-control" placeholder="First Name" name="fname">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput2" class="sr-only">Last Name</label>
                  <input type="text" id="projectinput2" class="form-control" placeholder="Last Name" name="lname">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3" class="sr-only">E-mail</label>
                  <input type="text" id="projectinput3" class="form-control" placeholder="E-mail" name="email">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput4" class="sr-only">Contact Number</label>
                  <input type="text" id="projectinput4" class="form-control" placeholder="Phone" name="phone">
                </div>
              </div>
            </div>
            <h4 class="form-section"><i class="ft-check-circle"></i> Requirements</h4>
            <div class="form-group">
              <label for="companyName" class="sr-only">Company</label>
              <input type="text" id="companyName" class="form-control" placeholder="Company Name" name="company">
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput5" class="sr-only">Interested in</label>
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
                  <label for="projectinput6" class="sr-only">Budget</label>
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
              <label for="projectinput8" class="sr-only">About Project</label>
              <textarea id="projectinput8" rows="5" class="form-control" name="comment" placeholder="About Project"></textarea>
            </div>
          </div>
          <div class="form-actions">
            <button type="button" class="btn btn-outline-warning mr-1">
              <i class="ft-x"></i> Cancel
            </button>
            <button type="submit" class="btn btn-outline-primary">
              <i class="ft-check"></i> Save
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
    
@endsection