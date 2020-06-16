@extends('layouts.master')

@section('content_slider')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Get Started</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Get Started<i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
</section>
@endsection

@section('content')

<section class="ftco-section ftco-about ftco-no-pt ftco-no-pb ftco-counter" id="section-counter">
    <div class="container consult-wrap">
        <div class="row d-flex align-items-stretch">
            <div class="col-md-6 wrap-about align-items-stretch d-flex">
                <div class="img" style="background-image: url(images/about.jpg);"></div>
            </div>
            <div class="col-md-6 wrap-about ftco-animate py-md-5 pl-md-5">
                <div class="heading-section mb-4">
                    <span class="subheading">Welcome to Negotiate</span>
                    <h2>The Smartest Thing To Do With Your Consulting Business</h2>
                </div>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="tabulation-2 mt-4">
                    <ul class="nav nav-pills nav-fill d-md-flex d-block">
                      <li class="nav-item">
                        <a class="nav-link active py-2" data-toggle="tab" href="#home1"><span class="ion-ios-home mr-2"></span> Our Mission</a>
                      </li>
                      <li class="nav-item px-lg-2">
                        <a class="nav-link py-2" data-toggle="tab" href="#home2"><span class="ion-ios-person mr-2"></span> Our Vision</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link py-2" data-toggle="tab" href="#home3"><span class="ion-ios-mail mr-2"></span> Our Value</a>
                      </li>
                    </ul>
                    <div class="tab-content bg-light rounded mt-2">
                      <div class="tab-pane container p-0 active" id="home1">
                          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                      </div>
                      <div class="tab-pane container p-0 fade" id="home2">
                          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                      </div>
                      <div class="tab-pane container p-0 fade" id="home3">
                          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                      </div>
                    </div>
                </div>
            <div class="row mt-5">
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
                <div class="icon"><span class="flaticon-doctor"></span></div>
              <div class="text">
                <strong class="number" data-number="1387">0</strong>
                <span>Happy Clients</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
                <div class="icon"><span class="flaticon-doctor"></span></div>
              <div class="text">
                <strong class="number" data-number="310">0</strong>
                <span>Success Reports</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
                <div class="icon"><span class="flaticon-doctor"></span></div>
              <div class="text">
                <strong class="number" data-number="35">0</strong>
                <span>Experienced</span>
              </div>
            </div>
          </div>
      </div>
            </div>
        </div>
    </div>
</section>
    
@endsection