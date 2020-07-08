@extends('layouts.admin')

@section('content')


<div class="content-body">
    <div class="col-12">
        <div class="row mt-2">
            <div class="col-xl-3 col-md-6 col-12">
                <div class="card profile-card-with-cover">
                    <div class="card-content card-deck text-center">
                        <div class="card box-shadow">
                          <div class="card-header pb-0">
                            <h2 class="my-0 font-weight-bold danger">
                                <img height="50" src="https://learnbonds.com/wp-content/images/2019/10/bitcoin-225080_640-300x150.png" alt="bitcoin" srcset="">
                            </h2>
                          </div>
                          <div class="card-body">
                            <ul class="list-unstyled mt-0 mb-2">
                              <li>10 users included</li>
                              <li>2 GB of storage</li>
                              <li>Email support</li>
                              <li>Help center access</li>
                            </ul>
                            <button type="button" class="btn btn-lg btn-block btn-danger btn-glow payment-method">Select</button>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12">
                <div class="card profile-card-with-cover">
                    <div class="card-content card-deck text-center">
                        <div class="card box-shadow">
                          <div class="card-header pb-0">
                            <h2 class="my-0 font-weight-bold danger">
                                <img height="20" src="/assets/back/paypal.png" alt="paypal">
                            </h2>
                          </div>
                          <div class="card-body">
                            <ul class="list-unstyled mt-2 mb-2">
                              <li>20 users included</li>
                              <li>10 GB of storage</li>
                              <li>Email support</li>
                              <li>Help center access</li>
                            </ul>
                            <button type="button" class="btn btn-lg btn-block btn-danger btn-glow payment-method disabled">Select</button>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12">
                <div class="card profile-card-with-cover">
                    <div class="card-content card-deck text-center">
                        <div class="card box-shadow">
                          <div class="card-header pb-0">
                            <h2 class="my-0 font-weight-bold danger">
                                <img height="25" src="https://miro.medium.com/max/1009/1*nhszIhUonirsqTPGelkoFg.jpeg" alt="paystack">
                            </h2>
                          </div>
                          <div class="card-body">
                            <ul class="list-unstyled mt-2 mb-2">
                              <li>30 users included</li>
                              <li>15 GB of storage</li>
                              <li>Email support</li>
                              <li>Help center access</li>
                            </ul>
                            <button type="button" class="btn btn-lg btn-block btn-danger btn-glow payment-method disabled">Select</button>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12">
                <div class="card profile-card-with-cover">
                    <div class="card-content card-deck text-center">
                        <div class="card box-shadow">
                          <div class="card-header pb-0">
                            <h2 class="my-0 font-weight-bold danger">
                                <img height="25" src="https://miro.medium.com/max/1009/1*nhszIhUonirsqTPGelkoFg.jpeg" alt="paystack">
                            </h2>
                          </div>
                          <div class="card-body">
                            <ul class="list-unstyled mt-2 mb-2">
                              <li>30 users included</li>
                              <li>15 GB of storage</li>
                              <li>Email support</li>
                              <li>Help center access</li>
                            </ul>
                            <button type="button" class="btn btn-lg btn-block btn-danger btn-glow payment-method disabled">Select</button>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card pay" style="display: none">
            <div class="card-header">
            <h4 class="card-title">Deposit </h4>
            <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>

            </div>
            <div class="card-content collapse show">
                <div class="card-body">

                    <div class="row">
                    <div class="col-md-5 m-auto col-sm-12">
                        <div class="card">
                        <div class="text-center">
                            <div class="card-body p-0">
                            <img src="/assets/back/qr.svg" class="height-100" alt="Card image">
                            </div>
                            <form class="form">
                                <div class="form-group text-left">
                                    <label for="">BTC ADDRESS</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <button class="btn btn-primary copy" type="button">Copy</button>
                                        </div>
                                        <input type="text" class="form-control" id="copy-txt" value="0xceb1b174085b0058201be4f2cd0da6a21bff85d4">
                                    </div>
                                </div>
                                <div class="form-group text-left">
                                    <label for="">AMOUNT</label>
                                    <input type="text" class="form-control" name="amount">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-success btn-block">Complete</button>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
            <h4 class="card-title">Deposit History</h4>
            <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>

            </div>
            <div class="card-content">
                <div class="card-body">

                   <div class="table-responsive">
                       <table class="table dt">
                           <thead>
                               <tr>
                                   <th>Ref No#</th>
                                   <th>Method</th>
                                   <th>Amount</th>
                                   <th>Status</th>
                                   <th>Date</th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <td>oidffi0d0mmdk</td>
                                   <td>BTC</td>
                                   <td>500</td>
                                   <td>Pay</td>
                                   <td>12-34-344</td>
                               </tr>
                           </tbody>
                       </table>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
