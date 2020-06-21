@extends('layouts.users_master')

@section('content_header')

<div class='col-xs-12'>
    <div class="page-title">

        <div class="pull-left">
            <!-- PAGE HEADING TAG - START -->
            <h1 class="title">Personal Settings</h1>
            <!-- PAGE HEADING TAG - END -->
        </div>

        <div class="pull-right hidden-xs">
            <ol class="breadcrumb">
                <li>
                    <a href="#"><i class="fa fa-home"></i>Home</a>
                </li>
                <li class="active">
                    <strong>Personal Settings</strong>
                </li>
            </ol>
        </div>

    </div>
</div>
    
@endsection

@section('content')

<div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->
                <div class="col-lg-4">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <section class="box has-border-left-3">
                                <div class="content-body">    
                                    
                                   <div class="uprofile-image mt-30">
                                        <div class="prof-contain relative">
                                            <img alt="" src="#" class="img-responsive">
                                            <span class="prof-check fa fa-check"></span>
                                        </div>
                                    </div>
                                    <div class="uprofile-name">
                                        <h3>
                                            <a href="#">Smith Wright</a>
                                            <!-- Available statuses: online, idle, busy, away and offline -->
                                            <span class="uprofile-status online"></span>
                                        </h3>
                                        <p class="uprofile-title">Crypto Trader</p>
                                    </div>
                                    <div class="uprofile-info v2">
                                        <ul class="list-unstyled mb-0">
                                          <li class="pt0"><h5 class="mt-0 mb-0"> <i class='fa fa-envelope'></i> Email</h5><span>info@domain.com</span></li>
                                          <li><h5 class="mt-0 mb-0"> <i class='fa fa-home'></i> Address</h5><span>New York, USA</span></li>
                                          <li><h5 class="mt-0 mb-0"> <i class='fa fa-phone'></i> Phone</h5><span>(+3638) 734-3949</span></li>
                                          <li><h5 class="mt-0 mb-0"> <i class='fa fa-user'></i> Birthday</h5><span>17 September 1989</span></li>
                                          <li><h5 class="mt-0 mb-0"> <i class='fa fa-credit-card'></i> Zip Code</h5><span>17256</span></li>
                                          <li><h5 class="mt-0 mb-0"> <i class='fa fa-bullseye'></i> City</h5><span>New York</span></li>
                                          <li><h5 class="mt-0 mb-0"> <i class='fa fa-crosshairs'></i> Country</h5><span>United States</span></li>
                                            
                                        </ul>
                                    </div>
                                
                                    
                                </div>
                            </section>
                        </div>
                        
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12">
                            <section class="box has-border-left-3">
                                <header class="panel_header gradient-blue">
                                    <h2 class="title pull-left w-text">Personal Information</h2>
                                </header>                                
                                <div class="content-body">    
                                    <div class="row">
                                        <div class="form-container mt-20 no-padding-right no-padding-left over-h">
                                            <form id="icon_validate" action="#" novalidate="novalidate">

                                                <div class=" col-xs-12">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label class="form-label">Name</label>
                                                                <span class="desc">e.g. "If it is not you, Please let us know"</span>
                                                                <div class="controls">
                                                                    <i class=""></i>
                                                                    <input type="text" class="form-control" name="formfield1" value="Smith Wright">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label class="form-label">Email</label>
                                                                <span class="desc">e.g. "info@example.com"</span>
                                                                <div class="controls">
                                                                    <i class=""></i>
                                                                    <input type="text" class="form-control" value="info@domain.com" name="formfield2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Phone Number</label>
                                                                <span class="desc">e.g. "5643 34839"</span>
                                                                <div class="controls">
                                                                    <i class=""></i>
                                                                    <input type="text" class="form-control" value="(+3638) 734-3949" name="formfield1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Birthday</label>
                                                                <span class="desc">e.g. "13 jan 1980"</span>
                                                                <div class="controls">
                                                                    <i class=""></i>
                                                                    <input type="text" class="form-control" value="17 September 1989" name="formfield2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label class="form-label">Zip Code</label>
                                                                <span class="desc">e.g. "xxxxx"</span>
                                                                <div class="controls">
                                                                    <i class=""></i>
                                                                    <input type="text" class="form-control" value="17256" name="formfield1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">City</label>
                                                                <div class="controls">
                                                                    <i class=""></i>
                                                                    <input type="text" class="form-control" value="New York" name="formfield2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Country</label>
                                                                <span class="desc">e.g. "France"</span>
                                                                <div class="controls">
                                                                    <i class=""></i>
                                                                    <input type="text" class="form-control" value="United States" name="formfield2">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <header class="prof-avtar gradient-blue">
                                                                <div class="avatar-img-wrapper">
                                                                    <img src="../data/crypto-dash/profile.png" style="max-width:100px" alt="">
                                                                </div>
                                                                <div class="form-group mb-0">
                                                                    <p class="form-label w-text mb-5">Edit Personal image</p>
                                                                    <label class="form-label w-text">Upload File</label>
                                                                    <span class="desc g-text">"JPG, GIF or PNG Max size of 800K"</span>
                                                                    <div class="controls">
                                                                        <input type="file" class="" id="formfield10" name="formfield10">
                                                                    </div>
                                                                </div>
                                                            </header> 
                                                        </div>
                                                        <div class="pull-right mt-30 mr-10">
                                                            <button type="submit" class="btn btn-primary btn-corner right15"><i class="fa fa-check"></i> Update</button>
                                                            <button type="button" class="btn btn-default btn-corner"><i class="fa fa-times"></i></button>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>

                        <div class="clearfix"></div>

                        
                    </div>
                </div>
    
@endsection