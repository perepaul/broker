@extends('layouts.users_master')

@section('content')

<div class="clearfix"></div>
{{-- <div class="col-xl-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Linked Account or Card</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table linked_account ">
                    <tbody>
                        <tr>
                            <td>
                                <div class="media">
                                    <span class="mr-3"><i class="fa fa-bank"></i></span>
                                    <div class="media-body">
                                        <h5 class="mt-0 mb-1">Bank of America</h5>
                                        <p>Bank **************5421</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="edit-option">
                                    <a href="#"><i class="fa fa-eye"></i></a>
                                    <a href="#"><i class="fa fa-pencil"></i></a>
                                    <a href="#"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                            <td>
                                <div class="verify">
                                    <div class="verified">
                                        <span><i class="la la-check"></i></span>
                                        <a href="#">Verified</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="media">
                                    <span class="mr-3"><i class="fa fa-credit-card"></i></span>
                                    <div class="media-body">
                                        <h5 class="mt-0 mb-1">Debit Card</h5>
                                        <p>Prepaid Card *********5478</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="edit-option">
                                    <a href="#"><i class="fa fa-eye"></i></a>
                                    <a href="#"><i class="fa fa-pencil"></i></a>
                                    <a href="#"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                            <td>
                                <div class="verify">
                                    <div class="not-verify">
                                        <span><i class="la la-close"></i></span>
                                        <a href="#">Not verified</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="mt-3">
                    <a href="./verify-step-5.html" class="btn btn-primary px-4 py-2 mr-3 my-2">Add Bank
                        Account</a>
                    <a href="./verify-step-1.html" class="btn btn-success px-4 py-2 my-2">Add Debit
                        Account</a>
                </div>
            </div>
        </div>
    </div>
</div> --}}
    
<div class="col-lg-12">
    <section class="box ">
        <header class="panel_header">
            <h2 class="title pull-left">Crypto Wallet addresses</h2>
            <div class="actions panel_actions pull-right">
                <a class="box_toggle fa fa-chevron-down"></a>
                <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                <a class="box_close fa fa-times"></a>
            </div>
        </header>
        <div class="content-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="row tabs-area">
                        <div class="tab-content wallet-address-tab vertical col-xs-12 col-lg-12 left-aligned primary" style="padding-right: 0px;">
                            <div class=">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="mb-15">
                                            <h3 class="boldy mt-0">Linked Account Or Card</h3>
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <div class="form-group mb-0">
                                                        <label class="form-label mb-10"><b>Bank Of America</b></label>
                                                        {{-- <span class="desc ">(You can share it with traders to get Paid)</span> --}}
                                                        <div class="input-group primary">
                                                            <span class="input-group-addon">                
                                                            <span class="arrow"></span>
                                                            <i class="fa fa-bank"></i>
                                                            </span>
                                                            <input type="text" class="form-control" disabled value="Bank**************5421">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mt-30">
                                                    <a href="#" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                                    <a href="#" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger right15"><i class="fa fa-trash"></i></a>
                                                    <a href="#" class="btn btn-success btn-corner">
                                                        <i class="fa fa-check"></i>
                                                    </a>
                                                    <span class=""><b>Verfied</b></span>
                                                </div>
                                            </div>
                                            <div class="row mt-30">
                                                <div class="col-lg-8">
                                                    <div class="form-group mb-0">
                                                        <label class="form-label mb-10"><b>Debit Card</b></label>
                                                        {{-- <span class="desc ">(You can share it with traders to get Paid)</span> --}}
                                                        <div class="input-group primary">
                                                            <span class="input-group-addon">                
                                                            <span class="arrow"></span>
                                                            {{-- <i class="fa fa-card"></i> --}}
                                                            <i class="fa fa-credit-card" aria-hidden="true"></i>
                                                            </span>
                                                            <input type="text" class="form-control" disabled value="Prepaid Card**************5421">    
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mt-30">
                                                    <a href="#" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                                    <a href="#" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger right15"><i class="fa fa-trash"></i></a>
                                                    <a href="#" class="btn btn-danger btn-corner">
                                                        <i class="fa fa-close"></i>
                                                    </a>
                                                    <span class="text-blue"><b>Not Verfied</b></span>

                                                </div>
                                            </div>
                                            <div class="row mt-10">
                                                <div class="col-lg-4">
                                                    <a href="#" class="btn btn-primary right15 mt-10">Add Bank Account</a>
                                                    <a href="#" class="btn btn-success mt-10"> Add Debit Account</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- </div>  -->

                </div>
            </div>
        </div>
    </section>
</div>
@endsection