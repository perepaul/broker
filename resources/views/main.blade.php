@extends('layouts.master')

@section('content-why-invest')

<div class="round-btn-sticky__wrap">
  <div class="assets whats-hot" id="assets">
      <div class="wrap">
          <div class="assets__title">300+ assets available</div>
          <div class="assets__subtitle section-title">Invest in the world's most popular assets</div>
          <div class="section-subtitle">From established industries to booming new age up-and-comers — pick
              from over a dozen of different routes to a smart investment.</div>
      </div>
      <div class="assets__slider"><span id="regText">Download</span>
          <div class="cards owl-carousel" id="js-cards"></div>
      </div>
  </div>
  <div class="why-invest">
      <div class="wrap">
          <div class="why-invest__title section-title">Why invest with IQ Option?</div>
          <div class="why-invest__list">
              <div class="why-invest__item why-invest__item--1 rtl-direction">
                  <div class="list-title">Award-winning platform</div>
                  <div class="list-text">Award-winning software recognized and praised by the most respected
                      experts of the industry.</div>
              </div>
              <div class="why-invest__item why-invest__item--2 rtl-direction">
                  <div class="list-title">Customizable interface</div>
                  <div class="list-text">Customize the platform to make it fit better to your needs — from
                      chart type to color theme.</div>
              </div>
              <div class="why-invest__item why-invest__item--3 rtl-direction">
                  <div class="list-title">Convenient withdrawals</div>
                  <div class="list-text">Withdraw your money in an instant using a wide range of available
                      payment systems.</div>
              </div>
              <div class="why-invest__item why-invest__item--4 rtl-direction">
                  <div class="list-title">Support 24/7</div>
                  <div class="list-text">A team of professionals speaking your mother tongue are always here
                      to support you.</div>
              </div>
          </div>
      </div>
  </div>
  <div class="features" id="features">
      <div class="wrap">
          <div class="features__title section-title">Powerful and easy-to-use features</div>
          <div class="features__subtitle section-subtitle">Sometimes investing can be complicated and
              confusing. IQ Option breaks down the complexities of investing with intuitive tools that add
              efficiency and simplicity.</div>
      </div>
      <div class="features__wrap">
          <div class="features__slider owl-carousel" id="js-features">
              <div class="features__item">
                  <div class="features__title">Use smart Newsfeed to make informed decisions</div>
                  <div class="features__img">
                      <picture>
                          <source class="js-set-feature-webp" type="image/webp"
                              data-srcset="https://static.cdnpub.info/lp/mobile/assets/images/feature_1--ios.webp"
                              srcset="{{asset('assets/front/static.cdnpub.info/lp/mobile/assets/images/empty.png')}}"><img
                              class="js-set-feature-img"
                              data-src="https://static.cdnpub.info/lp/mobile/assets/images/feature_1--ios.png"
                              src="{{asset('assets/front/static.cdnpub.info/lp/mobile/assets/images/empty.png')}}"
                              alt="Use smart Newsfeed to make informed decisions"></picture>
                  </div>
              </div>
              <div class="features__item">
                  <div class="features__title">Invest wisely with a variety of indicators</div>
                  <div class="features__img">
                      <picture>
                          <source class="js-set-feature-webp" type="image/webp"
                              data-srcset="https://static.cdnpub.info/lp/mobile/assets/images/feature_2--ios.webp"
                              srcset="{{asset('assets/front/static.cdnpub.info/lp/mobile/assets/images/empty.png')}}"><img
                              class="js-set-feature-img"
                              data-src="https://static.cdnpub.info/lp/mobile/assets/images/feature_2--ios.png"
                              src="{{asset('assets/front/static.cdnpub.info/lp/mobile/assets/images/empty.png')}}"
                              alt="Invest wisely with a variety of indicators"></picture>
                  </div>
              </div>
              <div class="features__item">
                  <div class="features__title">Harness the power of a supportive community</div>
                  <div class="features__img">
                      <picture>
                          <source class="js-set-feature-webp" type="image/webp"
                              data-srcset="https://static.cdnpub.info/lp/mobile/assets/images/feature_3--ios.webp"
                              srcset="{{asset('assets/front/static.cdnpub.info/lp/mobile/assets/images/empty.png')}}"><img
                              class="js-set-feature-img"
                              data-src="https://static.cdnpub.info/lp/mobile/assets/images/feature_3--ios.png"
                              src="{{asset('assets/front/static.cdnpub.info/lp/mobile/assets/images/empty.png')}}"
                              alt="Harness the power of a supportive community"></picture>
                  </div>
              </div>
          </div>
          <div class="btn-non-regulated"><a class="btn access__btn js-btn-app" href="#reg"><span
                      class="hide-desktop">Download app</span><span class="show-desktop">Get started for
                      free</span><svg width="12px" height="14px">
                      <use xlink:href="../assets/images/icon.svg#icon_icon_download" /></svg></a></div>
      </div>
  </div>
  <div class="video">
      <div class="wrap">
          <div class="section-title">Build your investing foundation</div>
          <div class="section-subtitle">We all have to start somewhere. Let us help get you on the right track
              as you start your investing journey. With our video tutorials section you'll be ready to start
              in no time.</div>
          <div class="video__wrap">
              <div class="video__block"><a class="video__item video__item--1"
                      href="https://player.vimeo.com/video/293962934">
                      <div class="video__label">Fundamental Analysis</div>
                      <div class="video__title">How to use news in trading?</div>
                      <div class="video__time">02:03</div>
                      <div class="video__play-btn">▶</div>
                  </a></div>
              <div class="video__block"><a class="video__item video__item--2"
                      href="https://player.vimeo.com/video/178809539">
                      <div class="video__label">Technical Analysis</div>
                      <div class="video__title">How to use technical indicators?</div>
                      <div class="video__time">04:04</div>
                      <div class="video__play-btn">▶</div>
                  </a></div>
          </div>
      </div>
  </div>
  <div class="clients" id="reviews">
      <div class="wrap">
          <div class="clients__title section-title">What our clients say</div>
          <div class="section-subtitle">Trusted by over 46,000,000 investors around the world.</div>
      </div>
      <div class="clients__slider">
          <div class="owl-carousel" id="js-clients">
              <div class="clients__item">
                  <div class="quote rtl-direction">Fell in love with the platform the moment I saw it. Its
                      clean and simple design was what sealed the deal for me.</div>
                  <div class="author">
                      <div class="author__name">Matt Johnson</div><img
                          class="author__photo js-set-client-img client_before_loaded"
                          src="{{asset('assets/front/static.cdnpub.info/lp/mobile/assets/images/empty.png')}}"
                          alt="Matt Johnson">
                  </div>
              </div>
              <div class="clients__item">
                  <div class="quote rtl-direction">I’ve learned a lot about the financial markets while
                      working with this company. Now I can invest and earn money.</div>
                  <div class="author">
                      <div class="author__name">Ashish Khatri</div><img
                          class="author__photo js-set-client-img client_before_loaded"
                          src="{{asset('assets/front/static.cdnpub.info/lp/mobile/assets/images/empty.png')}}"
                          alt="Ashish Khatri">
                  </div>
              </div>
              <div class="clients__item">
                  <div class="quote rtl-direction">An easy and affordable way to dive into investing.</div>
                  <div class="author">
                      <div class="author__name">Ahmad Bramant</div><img
                          class="author__photo js-set-client-img client_before_loaded"
                          src="{{asset('assets/front/static.cdnpub.info/lp/mobile/assets/images/empty.png')}}"
                          alt="Ahmad Bramant">
                  </div>
              </div>
              <div class="clients__item">
                  <div class="quote rtl-direction">What caught my attention about this platform was the
                      resources available. The video tutorials were especially helpful.</div>
                  <div class="author">
                      <div class="author__name">Brian Murphy</div><img
                          class="author__photo js-set-client-img client_before_loaded"
                          src="{{asset('assets/front/static.cdnpub.info/lp/mobile/assets/images/empty.png')}}"
                          alt="Brian Murphy">
                  </div>
              </div>
              <div class="clients__item">
                  <div class="quote rtl-direction">Contacting support was simple and easy. I was surprised by
                      how quickly they actually get back to you.</div>
                  <div class="author">
                      <div class="author__name">Amanda Ricci</div><img
                          class="author__photo js-set-client-img client_before_loaded"
                          src="{{asset('assets/front/static.cdnpub.info/lp/mobile/assets/images/empty.png')}}"
                          alt="Amanda Ricci">
                  </div>
              </div>
              <div class="clients__item">
                  <div class="quote rtl-direction">I enjoy talking to other investors. It’s always interesting
                      to see what others have to say about the market and share ideas.</div>
                  <div class="author">
                      <div class="author__name">Jenn Schaefer</div><img
                          class="author__photo js-set-client-img client_before_loaded"
                          src="{{asset('assets/front/static.cdnpub.info/lp/mobile/assets/images/empty.png')}}"
                          alt="Jenn Schaefer">
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="round-btn__btn btn-non-regulated"><a class="btn access__btn js-btn-app" href="#reg"><span
              class="hide-desktop">Download app</span><span class="show-desktop">Get started for
              free</span><svg width="12px" height="14px">
              <use xlink:href="{{asset('assets/front/iq-options.com/lp/mobile/assets/images/icon.svg#icon_icon_download')}}" /></svg></a></div>
</div>
    
@endsection


@section('content')

<div class="get-started__title section-title">It’s easy to get started</div>
<div class="get-started__list">
    <div class="get-started__item rtl-direction">
        <div class="list-number">1</div>
        <div class="list-title">Sign up</div>
        <div class="list-text">Create an account for free using your email address</div>
    </div>
    <div class="get-started__item rtl-direction hide-desktop">
        <div class="list-number">2</div>
        <div class="list-title">Download app</div>
        <div class="list-text">Install the application and log in to your account</div>
    </div>
    <div class="get-started__item rtl-direction">
        <div class="list-number">
            <div class="hide-desktop">3</div>
            <div class="show-desktop">2</div>
        </div>
        <div class="list-title">Explore the platform</div>
        <div class="list-text">See what it’s like to invest without putting your money at risk</div>
    </div>
    <div class="get-started__item rtl-direction">
        <div class="list-number">
            <div class="hide-desktop">4</div>
            <div class="show-desktop">3</div>
        </div>
        <div class="list-title">Invest & earn profit</div>
        <div class="list-text">Select an asset and make your money work for you</div>
    </div>
</div>
@endsection


@section('content-client')

<div class="access" id="reg">
  <div class="wrap">
      <div class="access__title section-title">Ready to get free access to the world of investing?</div>
      <div class="show-desktop">
          <div class="access__subtitle section-subtitle btn-non-regulated">Create an account to start using
              the platform.</div>
          <div class="btn-non-regulated access__form">
              <div class="sk-circle" id="form__loader">
                  <div class="sk-circle1 sk-child"></div>
                  <div class="sk-circle2 sk-child"></div>
                  <div class="sk-circle3 sk-child"></div>
                  <div class="sk-circle4 sk-child"></div>
                  <div class="sk-circle5 sk-child"></div>
                  <div class="sk-circle6 sk-child"></div>
                  <div class="sk-circle7 sk-child"></div>
                  <div class="sk-circle8 sk-child"></div>
                  <div class="sk-circle9 sk-child"></div>
                  <div class="sk-circle10 sk-child"></div>
                  <div class="sk-circle11 sk-child"></div>
                  <div class="sk-circle12 sk-child"></div>
              </div>
              <style>
                                .sk-circle {
                                    width: 40px;
                                    height: 40px;
                                    position: absolute;
                                    top: 50%;
                                    left: 50%;
                                    z-index: 0;
                                    opacity: 0;
                                    -webkit-transition: opacity .3s ease-out;
                                    transition: opacity .3s ease-out;
                                    -webkit-transform: translate(-50%, -50%);
                                    transform: translate(-50%, -50%)
                                }

                                .sk-circle .sk-child {
                                    width: 100%;
                                    height: 100%;
                                    position: absolute;
                                    left: 0;
                                    top: 0
                                }

                                .sk-circle .sk-child:before {
                                    content: '';
                                    display: block;
                                    margin: 0 auto;
                                    width: 15%;
                                    height: 15%;
                                    background-color: #f70;
                                    border-radius: 100%;
                                    -webkit-animation: sk-circleBounceDelay 1.2s infinite ease-in-out both;
                                    animation: sk-circleBounceDelay 1.2s infinite ease-in-out both
                                }

                                .sk-circle .sk-circle2 {
                                    -webkit-transform: rotate(30deg);
                                    -ms-transform: rotate(30deg);
                                    transform: rotate(30deg)
                                }

                                .sk-circle .sk-circle3 {
                                    -webkit-transform: rotate(60deg);
                                    -ms-transform: rotate(60deg);
                                    transform: rotate(60deg)
                                }

                                .sk-circle .sk-circle4 {
                                    -webkit-transform: rotate(90deg);
                                    -ms-transform: rotate(90deg);
                                    transform: rotate(90deg)
                                }

                                .sk-circle .sk-circle5 {
                                    -webkit-transform: rotate(120deg);
                                    -ms-transform: rotate(120deg);
                                    transform: rotate(120deg)
                                }

                                .sk-circle .sk-circle6 {
                                    -webkit-transform: rotate(150deg);
                                    -ms-transform: rotate(150deg);
                                    transform: rotate(150deg)
                                }

                                .sk-circle .sk-circle7 {
                                    -webkit-transform: rotate(180deg);
                                    -ms-transform: rotate(180deg);
                                    transform: rotate(180deg)
                                }

                                .sk-circle .sk-circle8 {
                                    -webkit-transform: rotate(210deg);
                                    -ms-transform: rotate(210deg);
                                    transform: rotate(210deg)
                                }

                                .sk-circle .sk-circle9 {
                                    -webkit-transform: rotate(240deg);
                                    -ms-transform: rotate(240deg);
                                    transform: rotate(240deg)
                                }

                                .sk-circle .sk-circle10 {
                                    -webkit-transform: rotate(270deg);
                                    -ms-transform: rotate(270deg);
                                    transform: rotate(270deg)
                                }

                                .sk-circle .sk-circle11 {
                                    -webkit-transform: rotate(300deg);
                                    -ms-transform: rotate(300deg);
                                    transform: rotate(300deg)
                                }

                                .sk-circle .sk-circle12 {
                                    -webkit-transform: rotate(330deg);
                                    -ms-transform: rotate(330deg);
                                    transform: rotate(330deg)
                                }

                                .sk-circle .sk-circle2:before {
                                    -webkit-animation-delay: -1.1s;
                                    animation-delay: -1.1s
                                }

                                .sk-circle .sk-circle3:before {
                                    -webkit-animation-delay: -1s;
                                    animation-delay: -1s
                                }

                                .sk-circle .sk-circle4:before {
                                    -webkit-animation-delay: -.9s;
                                    animation-delay: -.9s
                                }

                                .sk-circle .sk-circle5:before {
                                    -webkit-animation-delay: -.8s;
                                    animation-delay: -.8s
                                }

                                .sk-circle .sk-circle6:before {
                                    -webkit-animation-delay: -.7s;
                                    animation-delay: -.7s
                                }

                                .sk-circle .sk-circle7:before {
                                    -webkit-animation-delay: -.6s;
                                    animation-delay: -.6s
                                }

                                .sk-circle .sk-circle8:before {
                                    -webkit-animation-delay: -.5s;
                                    animation-delay: -.5s
                                }

                                .sk-circle .sk-circle9:before {
                                    -webkit-animation-delay: -.4s;
                                    animation-delay: -.4s
                                }

                                .sk-circle .sk-circle10:before {
                                    -webkit-animation-delay: -.3s;
                                    animation-delay: -.3s
                                }

                                .sk-circle .sk-circle11:before {
                                    -webkit-animation-delay: -.2s;
                                    animation-delay: -.2s
                                }

                                .sk-circle .sk-circle12:before {
                                    -webkit-animation-delay: -.1s;
                                    animation-delay: -.1s
                                }

                                @-webkit-keyframes sk-circleBounceDelay {

                                    0%,
                                    100%,
                                    80% {
                                        -webkit-transform: scale(0);
                                        transform: scale(0)
                                    }

                                    40% {
                                        -webkit-transform: scale(1);
                                        transform: scale(1)
                                    }
                                }

                                @keyframes sk-circleBounceDelay {

                                    0%,
                                    100%,
                                    80% {
                                        -webkit-transform: scale(0);
                                        transform: scale(0)
                                    }

                                    40% {
                                        -webkit-transform: scale(1);
                                        transform: scale(1)
                                    }
                                }
              </style>
              <div class="registration">
                  <div class="registration__wrap">
                      <div class="registration__content">
                          <form class="register__form" id="register__form" autocomplete="off"
                              data-invalid-class="invalid" data-valid-class="valid"
                              data-invalid-class-target="closest/.inputs__item"
                              data-valid-class-target="closest/.inputs__item"
                              data-invalid-msg-target="siblings/.js-vld-msg"
                              data-empty-msg-target="siblings/.js-vld-msg" data-empty-value-msg="Empty field"
                              data-invalid-format-msg="Incompatible format"
                              data-invalid-length-msg="Invalid password length"
                              data-required-field="Required field">
                              <div class="inputs">
                                  <div class="inputs__item inputs__item--firstname"><input
                                          class="inputs__field inputs__field--firstname" type="text"
                                          name="first_name" value=""></div>
                                  <div class="inputs__item inputs__item--lastname"><input
                                          class="inputs__field inputs__field--lastname" type="text"
                                          name="last_name" value=""></div>
                                  <div class="inputs__item inputs__item--email"><label
                                          for="email">E-mail</label><input
                                          class="inputs__field inputs__field--email"
                                          placeholder="your@email.com" type="text" name="email" id="email"
                                          data-test-id="reg-email-field">
                                      <div class="js-vld-msg" data-test-id="email-validation-error"></div>
                                  </div>
                                  <div class="inputs__item inputs__item--pass"><label
                                          for="password">Password</label><input
                                          class="inputs__field inputs__field--pass"
                                          placeholder="6+ characters" type="password" name="password"
                                          id="password" data-test-id="reg-password-field">
                                      <div class="js-vld-msg" data-test-id="password-validation-error"></div>
                                  </div>
                              </div>
                              <div class="submits btn__wrap"><button class="btn" type="submit"
                                      data-name="real" id="js-btn-submit"
                                      data-test-id="reg-submit-button"><span>Sign up</span></button>
                                  <div class="js-vld-msg" data-test-id="submit-validation-error"></div>
                              </div>
                              <div class="agreement"><input type="checkbox" id="agreement" name="agreement"
                                      data-test-id="reg-agreement-checkbox"><label for="agreement"
                                      data-test-id="reg-form-agreement-privacy"><span class="show-for-reg">I
                                          agree to the <a
                                              href="https://iq-options.com/lp/regulation/terms-reg/"
                                              target="_blank">Terms and Conditions</a> and <a
                                              href="https://iq-options.com/lp/regulation/privacy-reg/"
                                              target="_blank">Privacy Policy</a></span><span
                                          class="hide-for-reg">I agree to the <a
                                              href="https://iq-options.com/lp/regulation/terms-nonreg/"
                                              target="_blank">Terms and Conditions</a> and <a
                                              href="https://iq-options.com/lp/regulation/privacy-nonreg/"
                                              target="_blank">Privacy Policy</a></span></label>
                                  <div class="js-vld-msg" data-test-id="agreement-validation-error"></div>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
              <div class="authorized">
                  <div class="authorized__content">
                      <div class="authorized__title">Welcome back! You’re already logged in, so click on the
                          button below to enter the traderoom:</div><a class="btn js-go-traderoom"
                          href="https://iq-options.com/traderoom/"
                          data-test-id="auth-traderoom-button"><span>Start trading</span></a>
                  </div>
              </div>
              <div class="ios-unavailable-reg-success show-for-ios-unavailable animated" id="reg-success"
                  hidden>
                  <div class="text">Registration successful! This application is not available on your device
                      in your country. Use your credentials to login from a computer to trade.</div>
              </div>
          </div>
      </div>
      <div class="hide-desktop">
          <div class="access__subtitle section-subtitle">Everything you are looking for in the ultimate
              investment platform — on the device of your choice.</div>
          <div class="access__img">
              <div class="platform">
                  <picture>
                      <source class="screen js-set-platform-webp" type="image/webp"
                          srcset="https://static.cdnpub.info/lp/mobile/assets/images/empty.png"
                          alt="Platform"><img class="screen js-set-platform-img"
                          src="{{('assets/front/static.cdnpub.info/lp/mobile/assets/images/empty.png')}}"
                          alt="Platform">
                      <ul class="desc">
                          <li>Web</li>
                          <li>&middot;</li>
                          <li>iOS</li>
                          <li>&middot;</li>
                          <li>Android</li>
                          <li>&middot;</li>
                          <li>MacOs</li>
                          <li>&middot;</li>
                          <li>Windows</li>
                      </ul>
                  </picture>
              </div>
          </div>
      </div>
  </div>
  <div class="registration_forbidden"><svg height="72" viewbox="0 0 72 72" width="72"
          xmlns="http://www.w3.org/2000/svg">
          <path
              d="m657.420206 316.065739c5.902944 5.540656 13.84506 8.934261 22.579794 8.934261 18.225397 0 33-14.774603 33-33 0-8.610105-3.297454-16.450048-8.698409-22.325878zm-2.09247-2.149927 46.845883-46.356486c-5.858676-5.318428-13.637671-8.559326-22.173619-8.559326-18.225397 0-33 14.774603-33 33 0 8.411336 3.146964 16.087659 8.327736 21.915812zm24.672264 14.084188c-19.882251 0-36-16.117749-36-36s16.117749-36 36-36 36 16.117749 36 36-16.117749 36-36 36z"
              fill="#ff5a3e" transform="translate(-644 -256)" /></svg><span
          class="registration_forbidden__title">Dear user,<br>IQ Option is currently unavailable in your
          country.</span><span class="registration_forbidden__subtitle">If you think you’re seeing this
          message by mistake, please contact <a
              href="mailto:support@iqoption.com">support@iqoption.com</a></span></div>
</div>
<div class="btn__wrap btn--fixed risk-warning__section btn-non-regulated"><a class="btn access__btn js-btn-app"
      href="#reg"><span class="hide-desktop">Download app</span><span class="show-desktop">Get started for
          free</span><svg width="12px" height="14px">
          <use xlink:href="{{asset('assets/front/iq-options.com/lp/mobile/assets/images/icon.svg#icon_icon_download')}}" /></svg></a>
</div>
    
@endsection