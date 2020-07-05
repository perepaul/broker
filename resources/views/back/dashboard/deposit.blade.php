s@extends('layouts.admin')

@section('content')


<div class="content-header row">
</div>

<div class="content-body">
  <section id="chkbox-radio">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Deposit </h4>
            <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
            <div class="heading-elements">
              <ul class="list-inline mb-0">
                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                <li><a data-action="close"><i class="ft-x"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="card-content collapse show">
            <div class="card-body">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <fieldset class="text-center">
                    <h6>Select A Payment Method</h6>
                    <label for="radio-1" class="ui-checkboxradio-label ui-corner-all ui-button ui-widget ui-checkboxradio-radio-label"><span class="ui-checkboxradio-icon ui-corner-all ui-icon ui-icon-background ui-icon-blank"></span><span class="ui-checkboxradio-icon-space"> </span><img height="30" src="https://learnbonds.com/wp-content/images/2019/10/bitcoin-225080_640-300x150.png" alt="bitcoin" srcset=""></label>
                    <input type="radio" name="jui-radio-buttons" id="radio-1" class="jui-radio-buttons ui-checkboxradio ui-helper-hidden-accessible">
                    <label for="radio-2" class="ui-checkboxradio-label ui-corner-all ui-button ui-widget ui-checkboxradio-radio-label"><span class="ui-checkboxradio-icon ui-corner-all ui-icon ui-icon-background ui-icon-blank"></span><span class="ui-checkboxradio-icon-space"> </span><img height="15" src="/assets/back/paypal.png" alt="paypal"></label>
                    <input type="radio" name="jui-radio-buttons" id="radio-2" class="jui-radio-buttons ui-checkboxradio ui-helper-hidden-accessible">
                    <label for="radio-3" class="ui-checkboxradio-label ui-corner-all ui-button ui-widget ui-checkboxradio-radio-label"><span class="ui-checkboxradio-icon ui-corner-all ui-icon ui-icon-background ui-icon-blank"></span><span class="ui-checkboxradio-icon-space"> </span><img height="25" src="https://miro.medium.com/max/1009/1*nhszIhUonirsqTPGelkoFg.jpeg" alt="paystack"></label>
                    <input type="radio" name="jui-radio-buttons" id="radio-3" class="jui-radio-buttons ui-checkboxradio ui-helper-hidden-accessible">
                  </fieldset>
                  <button class="btn btn-primary btn-block">Deposit</button>
                </div>
                <div class="col-md-12 col-sm-12">
                  <div class="card">
                    <div class="text-center">
                      <div class="card-body">
                        <img src="/assets/back/qr.svg" class="height-150" alt="Card image">
                      </div>
                      <div class="card-body">
                        <h4 class="card-title">Btc Address</h4>
                        <h6 class="card-subtitle text-muted">Click To Copy Or Scan</h6>
                      </div>
                      <div class="text-center">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <button class="btn btn-primary" type="button">Copy</button>
                          </div>
                          <input type="text" class="form-control" value="0xceb1b174085b0058201be4f2cd0da6a21bff85d4" aria-describedby="button-addon1">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                {{-- <div class="col-md-4 col-sm-12">
                  <fieldset class="text-center">
                    <h6>Checkbox nested in label</h6>
                    <label for="checkbox-nested-1" class="ui-checkboxradio-label ui-corner-all ui-button ui-widget"><span class="ui-checkboxradio-icon ui-corner-all ui-icon ui-icon-background ui-icon-blank"></span><span class="ui-checkboxradio-icon-space"> </span>2 Double
                      <input type="checkbox" name="checkbox-nested-1" id="checkbox-nested-1" class="jui-nested-checkbox ui-checkboxradio ui-helper-hidden-accessible">
                    </label>
                    <label for="checkbox-nested-2" class="ui-checkboxradio-label ui-corner-all ui-button ui-widget"><span class="ui-checkboxradio-icon ui-corner-all ui-icon ui-icon-background ui-icon-blank"></span><span class="ui-checkboxradio-icon-space"> </span>2 Queen
                      <input type="checkbox" name="checkbox-nested-2" id="checkbox-nested-2" class="jui-nested-checkbox ui-checkboxradio ui-helper-hidden-accessible">
                    </label>
                    <label for="checkbox-nested-3" class="ui-checkboxradio-label ui-corner-all ui-button ui-widget"><span class="ui-checkboxradio-icon ui-corner-all ui-icon ui-icon-background ui-icon-blank"></span><span class="ui-checkboxradio-icon-space"> </span>1 Queen
                      <input type="checkbox" name="checkbox-nested-3" id="checkbox-nested-3" class="jui-nested-checkbox ui-checkboxradio ui-helper-hidden-accessible">
                    </label>
                    <label for="checkbox-nested-4" class="ui-checkboxradio-label ui-corner-all ui-button ui-widget"><span class="ui-checkboxradio-icon ui-corner-all ui-icon ui-icon-background ui-icon-blank"></span><span class="ui-checkboxradio-icon-space"> </span>1 King
                      <input type="checkbox" name="checkbox-nested-4" id="checkbox-nested-4" class="jui-nested-checkbox ui-checkboxradio ui-helper-hidden-accessible">
                    </label>
                  </fieldset>
                </div> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>


</div>





<<<<<<< HEAD
=======

>>>>>>> e4d4118fd0d36484b025ad632aabfaf423e987e3
@endsection
