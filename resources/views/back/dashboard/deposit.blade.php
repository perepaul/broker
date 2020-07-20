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
                            <form class="form" action="{{route('users.deposit.make')}}" method="POST">
                                @csrf
                                <div class="form-group text-left">
                                    <label for="">BTC ADDRESS</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <button class="btn btn-primary copy" type="button">Copy</button>
                                        </div>
                                        <input type="text" readonly class="form-control" id="copy-txt" value="{{config('constants.bitcoin_address')}}">
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
                                   <th class="no-sort">Ref No#</th>
                                   <th class="no-sort">Method</th>
                                   <th class="no-sort">Amount</th>
                                   <th>Status</th>
                                   <th class="no-sort">Date</th>
                               </tr>
                           </thead>
                           <tbody>
                               @foreach (auth()->user()->deposits as $deposit)
                                <tr>
                                    <td>{{$deposit->reference}}</td>
                                    <td>BTC</td>
                                    <td>{{auth()->user()->currency->symbol.$deposit->amount}}</td>
                                    <td>
                                        @if (!$deposit->status)
                                        <span class="btn btn-danger btn-sm" onclick="getModal({type:'deposit-confirmation',deposit_id:{{$deposit->id}}})">Pay</span>
                                        @else
                                        <span class="badge badge-success">Paid</span>
                                        @endif
                                    </td>
                                    <td>{{$deposit->created_at->format('d-m-Y')}}</td>
                                </tr>
                               @endforeach
                           </tbody>
                       </table>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
