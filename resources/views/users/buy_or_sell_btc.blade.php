@extends('layouts.users_master')

@section('content')
<div class="clearfix"></div>

<div class="col-lg-6">
    <section class="box ">
        <header class="panel_header">
            <h2 class="title pull-left">Buy</h2>
            <div class="actions panel_actions pull-right">
                <a class="box_toggle fa fa-chevron-down"></a>
                <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                <a class="box_close fa fa-times"></a>
            </div>
        </header>
        <div class="content-body">
            <hr>

            <form id="msg_validate" action="javascript:;" novalidate="novalidate">
                <div class="row">
                    <div class="col-xs-12">

                        <div class="form-group has-focus">
                            <label class="form-label">Currency</label>
                            <div class="controls">
                                <div class="input-group">
                                    <span class="input-group-addon">Bitcoin</span>
                                    <input type="text" class="form-control text-right" placeholder="0.234 BTC">
                                </div>
                                {{-- <input type="text" class="form-control" name="formfield1"> --}}
                            </div>
                        </div>

                        <div class="form-group has-focus">
                            <label class="form-label">Payment Method</label>
                            <div class="controls">
                                {{-- <input type="text" class="form-control" name="formfield2"> --}}
                                <select name="" id="" class="form-control">
                                    <option value="">--Select A Payment Method--</option>
                                    <option value="">Bitcoin Wallet</option>
                                    <option value="">Bank Account</option>
                                    <option value="">Debit Card</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group has-focus">
                            <label class="form-label">Enter Your Amount</label>
                            {{-- <span class="desc">e.g. "http://www.example.com"</span> --}}
                            <div class="controls">
                                <input type="text" class="form-control" name="" placeholder="0.0214 BTC">
                            </div>
                        </div>

                        <div class="">
                            <button type="submit" class="btn btn-block btn-primary">Buy</button>
                            {{-- <button type="button" class="btn">Cancel</button> --}}
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </section>
</div>

<div class="col-lg-6">
    <section class="box ">
        <header class="panel_header">
            <h2 class="title pull-left">Sell</h2>
            <div class="actions panel_actions pull-right">
                <a class="box_toggle fa fa-chevron-down"></a>
                <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                <a class="box_close fa fa-times"></a>
            </div>
        </header>
        <div class="content-body">
            <hr>

            <form id="msg_validate" action="javascript:;" novalidate="novalidate">
                <div class="row">
                    <div class="col-xs-12">

                        <div class="form-group has-focus">
                            <label class="form-label">Enter Wallet Address</label>
                            <div class="controls">
                                <div class="input-group">
                                    <span class="input-group-addon">Wallet Address</span>
                                    <input type="text" class="form-control" placeholder=" 3P3QsMVK89JBNqZQv5zMAKG8FK3kJM4rjt">
                                  </div>
                                {{-- <input type="text" class="form-control" name=""> --}}
                            </div>
                        </div>

                        <div class="form-group has-focus">
                            <label class="form-label">Transfer Method</label>
                            <div class="controls">
                                {{-- <input type="text" class="form-control" name="formfield2"> --}}
                                <select name="" id="" class="form-control">
                                    <option value="">--Select A Transfer Method--</option>
                                    <option value="">Bitcoin Wallet</option>
                                    {{-- <option value="">Bank Account</option> --}}
                                    {{-- <option value="">Debit Card</option> --}}
                                </select>
                            </div>
                        </div>

                        <div class="form-group has-focus">
                            <label class="form-label">Enter Your Amount</label>
                            {{-- <span class="desc">e.g. "http://www.example.com"</span> --}}
                            <div class="controls">
                                <input type="text" class="form-control" name="" placeholder="0.0214 BTC">
                            </div>
                        </div>

                        <div class="">
                            <button type="submit" class="btn btn-block btn-danger">Sell</button>
                            {{-- <button type="button" class="btn">Cancel</button> --}}
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
    
@endsection