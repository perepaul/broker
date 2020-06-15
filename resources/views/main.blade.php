@extends('layouts.master')

@section('content_slider')

<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image:url(images/bg_1.jpg);">
        <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
        <div class="col-md-7 ftco-animate mb-md-5">
            <span class="subheading">Negotiate Consulting</span>
          <h1 class="mb-4">We Are The Best Consulting Agency</h1>
          <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Our Services</a></p>
        </div>
      </div>
      </div>
    </div>

    <div class="slider-item" style="background-image:url(images/bg_2.jpg);">
        <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
        <div class="col-md-7 ftco-animate mb-md-5">
            <span class="subheading">Negotiate Consulting</span>
          <h1 class="mb-4">We Help to Grow Your Business</h1>
          <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Our Services</a></p>
        </div>
      </div>
      </div>
    </div>
  </section>
    
@endsection

@section('content_form_and_banner')

<section class="ftco-section ftco-no-pt ftco-no-pb ftco-consult">
    <div class="container">
        <div class="row d-flex no-gutters align-items-stretch	consult-wrap">
            <div class="col-md-5 wrap-about align-items-stretch d-flex">
                <div class="ftco-animate bg-primary align-self-stretch px-4 py-5 w-100">
                    <h2 class="heading-white mb-4">Free Consulting</h2>
                    <form action="#" class="appointment-form ftco-animate">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <div class="form-field">
                        <div class="select-wrap">
                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                <select name="" id="" class="form-control">
                    <option value="">Select Guidance</option>
                  <option value="">Finance</option>
                  <option value="">Business</option>
                  <option value="">Auto Loan</option>
                  <option value="">Real Estate</option>
                  <option value="">Other Services</option>
                </select>
              </div>
              </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Phone">
                    </div>
                    <div class="form-group">
              <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Request A Quote" class="btn btn-secondary py-3 px-4">
            </div>
                </form>
                </div>
            </div>
            <div class="col-md-7 wrap-about ftco-animate align-items-stretch d-flex">
                <div class="bg-white p-5">
                    <h2 class="mb-4">Negotiate <br>A Consulting Agency</h2>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="services">
                                <div class="icon mt-2 d-flex align-items-center"><span class="flaticon-collaboration"></span></div>
                                <div class="text media-body">
                                    <h3>Business Solution</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                </div>
                            </div>
                            <div class="services">
                                <div class="icon mt-2"><span class="flaticon-analysis"></span></div>
                                <div class="text media-body">
                                    <h3>Financial Analysis</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services">
                                <div class="icon mt-2"><span class="flaticon-search-engine"></span></div>
                                <div class="text media-body">
                                    <h3>Marketing Strategy</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                </div>
                            </div>
                            <div class="services">
                                <div class="icon mt-2"><span class="flaticon-handshake"></span></div>
                                <div class="text media-body">
                                    <h3>Investment Planning</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-intro ftco-no-pb img" style="background-image: url(images/bg_3.jpg);">
    <div class="container">
        <div class="row justify-content-center">
    <div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
        <h2 class="mb-0">You Always Get the Best Guidance</h2>
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