@extends('layouts.users_master')

@section('content')

<div class="col-lg-12">
    <section class="box has-border-left-3 no-shadow">
        <header class="panel_header gradient-blue">
            <h2 class="title pull-left w-text"><b>Withdraw</b></h2>
        </header>
        <div class="content-body mt-15">    
            <div class="row">
                <div class="crypto-info-wrap">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label class="form-label">Destination address</label>
                            <span class="desc"></span>

                            <div class="input-group mb-10">
                                <span class="input-group-addon">
                                    <span class="arrow"></span>
                                    <img src="/assets/back/users/data/crypto-dash/crypto-wallet.png" alt="icon">    
                                </span>
                                <input type="text" class="form-control" placeholder="1BvBMSEYstWetqTFn5Au4m4GFg7xJaNVN2">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label class="form-label">Amount BTC</label>
                            <span class="desc"></span>

                            <div class="input-group mb-10">
                                <span class="input-group-addon">
                                    <span class="arrow"></span>
                                    <img src="/assets/back/users/data/crypto-dash/coin1.png" alt="icon">    
                                </span>
                                <input type="text" class="form-control" placeholder="5000">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label class="form-label"><b>OR</b></label>
                            <span class="desc"></span>

                            <div class="input-group mb-10">
                                <span class="input-group-addon">
                                    <span class="arrow"></span>
                                    <img src="/assets/back/users/data/crypto-dash/exchange-arrows.png" alt="icon">    
                                </span>
                                {{-- <input type="text" class="form-control" placeholder="5000"> --}}
                                <select class="form-control" name="" id="">
                                    <option value="">--Select Prefered Account--</option>
                                    <option value="">Bank Of America</option>
                                    <option value="">Debit Card</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h4 class="title">Bitcoin Network Fee (BTC)</h4>
                            <span>Transactions on the Bitcoin network are priorirized by fees</span>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                        <div class="pull-right">
                            <h4>0.005</h4>
                        </div>
                    </div>
                    <div class="col-lg-8 col-lg-offset-2 col-md-12">
                        <button type="button" class="btn btn-primary btn-lg mt-20 has-gradient-to-right-bottom" style="width:100%">Withdraw Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection