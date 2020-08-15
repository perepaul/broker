@extends('layouts.admin')

@section('content')

<div class="content-body">
    <div id="crypto-stats-3" class="row">
        <div class="col-xl-3 col-12">
            <div class="card crypto-card-3 pull-up">
                <div class="card-content">
                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="col-6 pl-2">
                                <h4>Users</h4>
                            </div>
                            <div class="col-4 text-right">
                                <h4>{{$users->where('is_admin',0)->count()}}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <canvas id="btc-chartjs" class="height-75"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-12">
            <div class="card crypto-card-3 pull-up">
                <div class="card-content">
                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="col-6 pl-2">
                                <h4>All Trades</h4>
                            </div>
                            <div class="col-4 text-right">
                                <h4>{{$trades->count()}}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <canvas id="btc-chartjs1" class="height-75"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-12">
            <div class="card crypto-card-3 pull-up">
                <div class="card-content">
                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="col-7 pl-2">
                                <h4>Withdrawals</h4>
                            </div>
                            <div class="col-3 text-right">
                                <h4>{{$withdrawals->count()}}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <canvas id="eth-chartjs" class="height-75"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-12">
            <div class="card crypto-card-3 pull-up">
                <div class="card-content">
                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="col-7 pl-2">
                                <h4>Deposits</h4>
                            </div>
                            <div class="col-3 text-right">
                                <h4>{{$deposits->count()}}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <canvas id="xrp-chartjs" class="height-75"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Candlestick Multi Level Control Chart -->
    <!-- Slaes & Purchase Order -->
    {{-- <div class="row">
        <div class="col-12 col-xl-4">
            <div id="accordionCrypto" role="tablist" aria-multiselectable="true">
                <div class="card collapse-icon accordion-icon-rotate">
                    <div id="heading31" class="card-header bg-info p-1 bg-lighten-1">
                        <a data-toggle="collapse" data-parent="#accordionCrypto" href="#accordionBTC"
                            aria-expanded="true" aria-controls="accordionBTC" class="card-title lead white">BTC</a>
                    </div>
                    <div id="accordionBTC" role="tabpanel" aria-labelledby="heading31"
                        class="card-collapse collapse show" aria-expanded="true">
                        <div class="card-content">
                            <div class="card-body p-0">
                                <div class="media-list list-group">
                                    <div class="list-group-item list-group-item-action media p-1">
                                        <a class="media-link" href="#">
                                            <span class="media-left">
                                                <p class="text-bold-600 m-0">BTC/USD</p>
                                                <p class="font-small-2 text-muted m-0">24h Change</p>
                                                <p class="font-small-2 text-muted m-0">24h Volume</p>
                                            </span>
                                            <span class="media-body text-right">
                                                <p class="text-bold-600 m-0">11916.9</p>
                                                <p class="font-small-2 text-muted m-0 success">283.1 USD (+2.33%)</p>
                                                <p class="font-small-2 text-muted m-0 text-bold-600">1029.1906 BTC</p>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="list-group-item list-group-item-action media p-1 bg-info bg-lighten-5">
                                        <a class="media-link" href="#">
                                            <span class="media-left">
                                                <p class="text-bold-600 m-0">BTC/EUR</p>
                                                <p class="font-small-2 text-muted m-0">24h Change</p>
                                                <p class="font-small-2 text-muted m-0">24h Volume</p>
                                            </span>
                                            <span class="media-body text-right">
                                                <p class="text-bold-600 m-0">9213.3</p>
                                                <p class="font-small-2 text-muted m-0 success">56.1 EUR (+5.52%)</p>
                                                <p class="font-small-2 text-muted m-0 text-bold-600">560.1906 BTC</p>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="list-group-item list-group-item-action media p-1 border-bottom-0">
                                        <a class="media-link" href="#">
                                            <span class="media-left">
                                                <p class="text-bold-600 m-0">BTC/GBP</p>
                                                <p class="font-small-2 text-muted m-0">24h Change</p>
                                                <p class="font-small-2 text-muted m-0">24h Volume</p>
                                            </span>
                                            <span class="media-body text-right">
                                                <p class="text-bold-600 m-0">8015.1</p>
                                                <p class="font-small-2 text-muted m-0 danger">-183.1 USD (-1.33%)</p>
                                                <p class="font-small-2 text-muted m-0 text-bold-600">320.1906 BTC</p>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="heading32" class="card-header bg-info p-1 bg-lighten-1 my-1">
                        <a data-toggle="collapse" data-parent="#accordionCrypto" href="#accordionETH"
                            aria-expanded="false" aria-controls="accordionETH"
                            class="card-title lead white collapsed">ETH</a>
                    </div>
                    <div id="accordionETH" role="tabpanel" aria-labelledby="heading32" class="card-collapse collapse"
                        aria-expanded="false">
                        <div class="card-content">
                            <div class="card-body p-0">
                                <div class="media-list list-group">
                                    <div class="list-group-item list-group-item-action media p-1">
                                        <a class="media-link" href="#">
                                            <span class="media-left">
                                                <p class="text-bold-600 m-0">ETH/USD</p>
                                                <p class="font-small-2 text-muted m-0">24h Change</p>
                                                <p class="font-small-2 text-muted m-0">24h Volume</p>
                                            </span>
                                            <span class="media-body text-right">
                                                <p class="text-bold-600 m-0">11916.9</p>
                                                <p class="font-small-2 text-muted m-0 success">283.1 USD (+2.33%)</p>
                                                <p class="font-small-2 text-muted m-0 text-bold-600">1029.1906 ETH</p>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="list-group-item list-group-item-action media p-1">
                                        <a class="media-link" href="#">
                                            <span class="media-left">
                                                <p class="text-bold-600 m-0">ETH/EUR</p>
                                                <p class="font-small-2 text-muted m-0">24h Change</p>
                                                <p class="font-small-2 text-muted m-0">24h Volume</p>
                                            </span>
                                            <span class="media-body text-right">
                                                <p class="text-bold-600 m-0">9213.3</p>
                                                <p class="font-small-2 text-muted m-0 success">56.1 EUR (+5.52%)</p>
                                                <p class="font-small-2 text-muted m-0 text-bold-600">560.1906 ETH</p>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="list-group-item list-group-item-action media p-1 border-bottom-0">
                                        <a class="media-link" href="#">
                                            <span class="media-left">
                                                <p class="text-bold-600 m-0">ETH/GBP</p>
                                                <p class="font-small-2 text-muted m-0">24h Change</p>
                                                <p class="font-small-2 text-muted m-0">24h Volume</p>
                                            </span>
                                            <span class="media-body text-right">
                                                <p class="text-bold-600 m-0">8015.1</p>
                                                <p class="font-small-2 text-muted m-0 danger">-183.1 USD (-1.33%)</p>
                                                <p class="font-small-2 text-muted m-0 text-bold-600">320.1906 ETH</p>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="heading33" class="card-header bg-info p-1 bg-lighten-1">
                        <a data-toggle="collapse" data-parent="#accordionCrypto" href="#accordionXRP"
                            aria-expanded="false" aria-controls="accordionXRP"
                            class="card-title lead white collapsed">XRP</a>
                    </div>
                    <div id="accordionXRP" role="tabpanel" aria-labelledby="heading33" class="card-collapse collapse"
                        aria-expanded="false">
                        <div class="card-content">
                            <div class="card-body p-0">
                                <div class="media-list list-group">
                                    <div class="list-group-item list-group-item-action media p-1">
                                        <a class="media-link" href="#">
                                            <span class="media-left">
                                                <p class="text-bold-600 m-0">XRP/USD</p>
                                                <p class="font-small-2 text-muted m-0">24h Change</p>
                                                <p class="font-small-2 text-muted m-0">24h Volume</p>
                                            </span>
                                            <span class="media-body text-right">
                                                <p class="text-bold-600 m-0">11916.9</p>
                                                <p class="font-small-2 text-muted m-0 success">283.1 USD (+2.33%)</p>
                                                <p class="font-small-2 text-muted m-0 text-bold-600">1029.1906 XRP</p>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="list-group-item list-group-item-action media p-1">
                                        <a class="media-link" href="#">
                                            <span class="media-left">
                                                <p class="text-bold-600 m-0">XRP/EUR</p>
                                                <p class="font-small-2 text-muted m-0">24h Change</p>
                                                <p class="font-small-2 text-muted m-0">24h Volume</p>
                                            </span>
                                            <span class="media-body text-right">
                                                <p class="text-bold-600 m-0">9213.3</p>
                                                <p class="font-small-2 text-muted m-0 success">56.1 EUR (+5.52%)</p>
                                                <p class="font-small-2 text-muted m-0 text-bold-600">560.1906 XRP</p>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="list-group-item list-group-item-action media p-1 border-bottom-0">
                                        <a class="media-link" href="#">
                                            <span class="media-left">
                                                <p class="text-bold-600 m-0">XRP/GBP</p>
                                                <p class="font-small-2 text-muted m-0">24h Change</p>
                                                <p class="font-small-2 text-muted m-0">24h Volume</p>
                                            </span>
                                            <span class="media-body text-right">
                                                <p class="text-bold-600 m-0">8015.1</p>
                                                <p class="font-small-2 text-muted m-0 danger">-183.1 USD (-1.33%)</p>
                                                <p class="font-small-2 text-muted m-0 text-bold-600">320.1906 XRP</p>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">BTC/USD</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li class="text-center mr-4">
                                <h6 class="text-muted">Last price</h6>
                                <p class="text-bold-600 mb-0">$ 11916.9</p>
                            </li>
                            <li class="text-center mr-4">
                                <h6 class="text-muted">Daily change</h6>
                                <p class="text-bold-600 mb-0">$ 283.1</p>
                            </li>
                            <li class="text-center">
                                <h6 class="text-muted">24h volume</h6>
                                <p class="text-bold-600 mb-0"><i class="cc BTC-alt" title="BTC"></i> 1029.1906 BTC</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body pt-0">
                        <div id="btc-candlestick-control" class="height-350 echart-container"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Trade History & Place Order -->
    {{-- <div class="row">
        <div class="col-12 col-xl-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Trade History</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn round btn-sm btn-outline-info active">
                                <input type="radio" name="options" id="option1" autocomplete="off" checked> Market
                            </label>
                            <label class="btn round btn-sm btn-outline-info">
                                <input type="radio" name="options" id="option2" autocomplete="off"> Yours
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="table-responsive mt-1">
                        <table class="table table-xs">
                            <thead>
                                <tr>
                                    <th>Price($)</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="success">11900.12</td>
                                    <td><i class="cc BTC-alt"></i> 0.215</td>
                                    <td>11:23:25</td>
                                </tr>
                                <tr>
                                    <td class="danger">11903.18</td>
                                    <td><i class="cc BTC-alt"></i> 1.545</td>
                                    <td>11:23:05</td>
                                </tr>
                                <tr>
                                    <td class="success">11899.56</td>
                                    <td><i class="cc BTC-alt"></i> 0.541</td>
                                    <td>11:22:50</td>
                                </tr>
                                <tr>
                                    <td class="danger">11910.52</td>
                                    <td><i class="cc BTC-alt"></i> 0.321</td>
                                    <td>11:22:15</td>
                                </tr>
                                <tr>
                                    <td class="danger">11901.15</td>
                                    <td><i class="cc BTC-alt"></i> 0.548</td>
                                    <td>11:21:25</td>
                                </tr>
                                <tr>
                                    <td class="success">11903.45</td>
                                    <td><i class="cc BTC-alt"></i> 0.587</td>
                                    <td>11:21:01</td>
                                </tr>
                                <tr>
                                    <td class="danger">11895.50</td>
                                    <td><i class="cc BTC-alt"></i> 5.125</td>
                                    <td>11:20:15</td>
                                </tr>
                                <tr>
                                    <td class="danger">11889.56</td>
                                    <td><i class="cc BTC-alt"></i> 0.894</td>
                                    <td>11:20:03</td>
                                </tr>
                                <tr>
                                    <td class="success">11885.69</td>
                                    <td><i class="cc BTC-alt"></i> 0.754</td>
                                    <td>11:19:55</td>
                                </tr>
                                <tr>
                                    <td class="danger">11891.12</td>
                                    <td><i class="cc BTC-alt"></i> 0.889</td>
                                    <td>11:19:15</td>
                                </tr>
                                <tr>
                                    <td class="danger">11889.88</td>
                                    <td><i class="cc BTC-alt"></i> 0.654</td>
                                    <td>11:18:18</td>
                                </tr>
                                <tr>
                                    <td class="success">11881.15</td>
                                    <td><i class="cc BTC-alt"></i> 1.254</td>
                                    <td>11:18:01</td>
                                </tr>
                                <tr>
                                    <td class="success">11875.75</td>
                                    <td><i class="cc BTC-alt"></i> 0.885</td>
                                    <td>11:17:25</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Place Order</h4>
                    <div class="heading-elements">
                        <h6 class="danger">Fee: 0.2%</h6>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <ul class="nav nav-tabs nav-underline no-hover-bg">
                            <li class="nav-item">
                                <a class="nav-link active" id="base-limit" data-toggle="tab" aria-controls="limit"
                                    href="#limit" aria-expanded="true">Limit</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="base-market" data-toggle="tab" aria-controls="market"
                                    href="#market" aria-expanded="false">Market</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="base-stop-limit" data-toggle="tab" aria-controls="stop-limit"
                                    href="#stop-limit" aria-expanded="false">Stop Limit</a>
                            </li>
                        </ul>
                        <div class="tab-content px-1 pt-1">
                            <div role="tabpanel" class="tab-pane active" id="limit" aria-expanded="true"
                                aria-labelledby="base-limit">
                                <div class="row">
                                    <div class="col-12 col-xl-6 border-right-blue-grey border-right-lighten-4 pr-2 p-0">
                                        <div class="row my-2">
                                            <div class="col-4">
                                                <h5 class="text-bold-600 mb-0">Buy BTC</h5>
                                            </div>
                                            <div class="col-8 text-right">
                                                <p class="text-muted mb-0">USD Balance: $ 5000.00</p>
                                            </div>
                                        </div>
                                        <form class="form form-horizontal">
                                            <div class="form-body">
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label"
                                                        for="btc-limit-buy-price">Price</label>
                                                    <div class="col-md-9">
                                                        <input type="number" id="btc-limit-buy-price"
                                                            class="form-control" placeholder="$ 11916.9"
                                                            name="btc-limit-buy-price">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label"
                                                        for="btc-limit-buy-amount">Amount</label>
                                                    <div class="col-md-9">
                                                        <input type="number" id="btc-limit-buy-amount"
                                                            class="form-control" placeholder="0.026547 BTC"
                                                            name="btc-limit-buy-amount">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-3"></div>
                                                    <div class="col-md-9">
                                                        <button type="button"
                                                            class="btn round btn-outline-secondary btn-sm">25%</button>
                                                        <button type="button"
                                                            class="btn round btn-outline-secondary btn-sm">50%</button>
                                                        <button type="button"
                                                            class="btn round btn-outline-secondary btn-sm">75%</button>
                                                        <button type="button"
                                                            class="btn round btn-outline-secondary btn-sm">100%</button>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label"
                                                        for="btc-limit-buy-total">Total</label>
                                                    <div class="col-md-9">
                                                        <input type="number" disabled id="btc-limit-buy-total"
                                                            class="form-control" placeholder="$ 318.1856"
                                                            name="btc-limit-buy-total">
                                                    </div>
                                                </div>
                                                <div class="form-actions pb-0">
                                                    <button type="submit"
                                                        class="btn round btn-success btn-block btn-glow"> Buy BTC
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-12 col-xl-6 pl-2 p-0">
                                        <div class="row my-2">
                                            <div class="col-4">
                                                <h5 class="text-bold-600 mb-0">Sell BTC</h5>
                                            </div>
                                            <div class="col-8 text-right">
                                                <p class="text-muted mb-0">BTC Balance: 1.2654898</p>
                                            </div>
                                        </div>
                                        <form class="form form-horizontal">
                                            <div class="form-body">
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label" for="btc-price">Price</label>
                                                    <div class="col-md-9">
                                                        <input type="number" id="btc-limit-sell-price"
                                                            class="form-control" placeholder="$ 11916.9"
                                                            name="btc-limit-sell-price">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label"
                                                        for="btc-limit-sell-amount">Amount</label>
                                                    <div class="col-md-9">
                                                        <input type="number" id="btc-limit-sell-amount"
                                                            class="form-control" placeholder="0.026547 BTC"
                                                            name="btc-limit-sell-amount">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-3"></div>
                                                    <div class="col-md-9">
                                                        <button type="button"
                                                            class="btn round btn-outline-secondary btn-sm">25%</button>
                                                        <button type="button"
                                                            class="btn round btn-outline-secondary btn-sm">50%</button>
                                                        <button type="button"
                                                            class="btn round btn-outline-secondary btn-sm">75%</button>
                                                        <button type="button"
                                                            class="btn round btn-outline-secondary btn-sm">100%</button>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label"
                                                        for="btc-limit-sell-total">Total</label>
                                                    <div class="col-md-9">
                                                        <input type="number" disabled id="btc-limit-sell-total"
                                                            class="form-control" placeholder="$ 318.1856"
                                                            name="btc-limit-sell-total">
                                                    </div>
                                                </div>
                                                <div class="form-actions pb-0">
                                                    <button type="submit"
                                                        class="btn round btn-danger btn-block btn-glow"> Sell BTC
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="market" aria-labelledby="base-market">
                                <div class="row">
                                    <div class="col-12 col-xl-6 border-right-blue-grey border-right-lighten-4 pr-2 p-0">
                                        <div class="row my-2">
                                            <div class="col-4">
                                                <h5 class="text-bold-600 mb-0">Buy BTC</h5>
                                            </div>
                                            <div class="col-8 text-right">
                                                <p class="text-muted mb-0">USD Balance: $ 5000.00</p>
                                            </div>
                                        </div>
                                        <form class="form form-horizontal">
                                            <div class="form-body">
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label"
                                                        for="btc-market-buy-price">Price</label>
                                                    <div class="col-md-9">
                                                        <input type="number" disabled id="btc-market-buy-price"
                                                            class="form-control" placeholder="Market prise $"
                                                            name="btc-market-buy-price">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label"
                                                        for="btc-market-buy-amount">Amount</label>
                                                    <div class="col-md-9">
                                                        <input type="number" id="btc-market-buy-amount"
                                                            class="form-control" placeholder="0.026547 BTC"
                                                            name="btc-market-buy-amount">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-3"></div>
                                                    <div class="col-md-9">
                                                        <button type="button"
                                                            class="btn round btn-outline-secondary btn-sm">25%</button>
                                                        <button type="button"
                                                            class="btn round btn-outline-secondary btn-sm">50%</button>
                                                        <button type="button"
                                                            class="btn round btn-outline-secondary btn-sm">75%</button>
                                                        <button type="button"
                                                            class="btn round btn-outline-secondary btn-sm">100%</button>
                                                    </div>
                                                </div>
                                                <div class="form-actions pb-0">
                                                    <button type="submit"
                                                        class="btn round btn-success btn-block btn-glow"> Buy BTC
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-12 col-xl-6 pl-2 p-0">
                                        <div class="row my-2">
                                            <div class="col-4">
                                                <h5 class="text-bold-600 mb-0">Sell BTC</h5>
                                            </div>
                                            <div class="col-8 text-right">
                                                <p class="text-muted mb-0">BTC Balance: 1.2654898</p>
                                            </div>
                                        </div>
                                        <form class="form form-horizontal">
                                            <div class="form-body">
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label" for="btc-price">Price</label>
                                                    <div class="col-md-9">
                                                        <input type="number" disabled id="btc-market-sell-price"
                                                            class="form-control" placeholder="Market prise $"
                                                            name="btc-market-sell-price">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label"
                                                        for="btc-market-sell-amount">Amount</label>
                                                    <div class="col-md-9">
                                                        <input type="number" id="btc-market-sell-amount"
                                                            class="form-control" placeholder="0.026547 BTC"
                                                            name="btc-market-sell-amount">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-3"></div>
                                                    <div class="col-md-9">
                                                        <button type="button"
                                                            class="btn round btn-outline-secondary btn-sm">25%</button>
                                                        <button type="button"
                                                            class="btn round btn-outline-secondary btn-sm">50%</button>
                                                        <button type="button"
                                                            class="btn round btn-outline-secondary btn-sm">75%</button>
                                                        <button type="button"
                                                            class="btn round btn-outline-secondary btn-sm">100%</button>
                                                    </div>
                                                </div>
                                                <div class="form-actions pb-0">
                                                    <button type="submit"
                                                        class="btn round btn-danger btn-block btn-glow"> Sell BTC
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="stop-limit" aria-labelledby="base-stop-limit">
                                <div class="row">
                                    <div class="col-12 col-xl-6 border-right-blue-grey border-right-lighten-4 pr-2 p-0">
                                        <div class="row my-2">
                                            <div class="col-4">
                                                <h5 class="text-bold-600 mb-0">Buy BTC</h5>
                                            </div>
                                            <div class="col-8 text-right">
                                                <p class="text-muted mb-0">USD Balance: $ 5000.00</p>
                                            </div>
                                        </div>
                                        <form class="form form-horizontal">
                                            <div class="form-body">
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label"
                                                        for="btc-stop-buy">Stop</label>
                                                    <div class="col-md-9">
                                                        <input type="number" id="btc-stop-buy" class="form-control"
                                                            placeholder="$ 11916.9" name="btc-stop-buy">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label"
                                                        for="btc-stop-buy-limit">Limit</label>
                                                    <div class="col-md-9">
                                                        <input type="number" id="btc-stop-buy-limit"
                                                            class="form-control" placeholder="$ 12000.0"
                                                            name="btc-stop-buy-limit">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label"
                                                        for="btc-stop-buy-amount">Amount</label>
                                                    <div class="col-md-9">
                                                        <input type="number" id="btc-stop-buy-amount"
                                                            class="form-control" placeholder="0.026547 BTC"
                                                            name="btc-stop-buy-amount">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-3"></div>
                                                    <div class="col-md-9">
                                                        <button type="button"
                                                            class="btn round btn-outline-secondary btn-sm">25%</button>
                                                        <button type="button"
                                                            class="btn round btn-outline-secondary btn-sm">50%</button>
                                                        <button type="button"
                                                            class="btn round btn-outline-secondary btn-sm">75%</button>
                                                        <button type="button"
                                                            class="btn round btn-outline-secondary btn-sm">100%</button>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label"
                                                        for="btc-stop-buy-total">Total</label>
                                                    <div class="col-md-9">
                                                        <input type="number" disabled id="btc-stop-buy-total"
                                                            class="form-control" placeholder="$ 318.1856"
                                                            name="btc-stop-buy-total">
                                                    </div>
                                                </div>
                                                <div class="form-actions pb-0">
                                                    <button type="submit"
                                                        class="btn round btn-success btn-block btn-glow"> Buy BTC
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-12 col-xl-6 pl-2 p-0">
                                        <div class="row my-2">
                                            <div class="col-4">
                                                <h5 class="text-bold-600 mb-0">Sell BTC</h5>
                                            </div>
                                            <div class="col-8 text-right">
                                                <p class="text-muted mb-0">BTC Balance: 1.2654898</p>
                                            </div>
                                        </div>
                                        <form class="form form-horizontal">
                                            <div class="form-body">
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label"
                                                        for="btc-stop-sell">Stop</label>
                                                    <div class="col-md-9">
                                                        <input type="number" id="btc-stop-sell" class="form-control"
                                                            placeholder="$ 11916.9" name="btc-stop-sell">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label"
                                                        for="btc-stop-sell-limit">Limit</label>
                                                    <div class="col-md-9">
                                                        <input type="number" id="btc-stop-sell-limit"
                                                            class="form-control" placeholder="$ 12000.0"
                                                            name="btc-stop-sell-limit">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label"
                                                        for="btc-stop-sell-amount">Amount</label>
                                                    <div class="col-md-9">
                                                        <input type="number" id="btc-stop-sell-amount"
                                                            class="form-control" placeholder="0.026547 BTC"
                                                            name="btc-stop-sell-amount">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-3"></div>
                                                    <div class="col-md-9">
                                                        <button type="button"
                                                            class="btn round btn-outline-secondary btn-sm">25%</button>
                                                        <button type="button"
                                                            class="btn round btn-outline-secondary btn-sm">50%</button>
                                                        <button type="button"
                                                            class="btn round btn-outline-secondary btn-sm">75%</button>
                                                        <button type="button"
                                                            class="btn round btn-outline-secondary btn-sm">100%</button>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label"
                                                        for="btc-stop-sell-total">Total</label>
                                                    <div class="col-md-9">
                                                        <input type="number" disabled id="btc-stop-sell-total"
                                                            class="form-control" placeholder="$ 318.1856"
                                                            name="btc-stop-sell-total">
                                                    </div>
                                                </div>
                                                <div class="form-actions pb-0">
                                                    <button type="submit"
                                                        class="btn round btn-danger btn-block btn-glow"> Sell BTC
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--/ Trade History & Place Order -->
    <!-- Sell Orders & Buy Order -->
    <div class="row match-height">
        <div class="col-12 col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Last Five Withdrawals</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <a href="{{route('admin.withdrawals')}}" class="btn btn-sm round btn-primary btn-glow text-white"><i
                            class="la la-eye font-medium-1"></i> View all</a>
                    </div>
                </div>
                <div class="card-content">
                    <div class="table-responsive">
                        <table class="table table-de">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Amount</th>
                                    <th>Date <th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($last_withdrawals as $withdrawal)
                                @if($withdrawal->user)
                                <tr>
                                    <td>{{$withdrawal->user->fullname}}</td>
                                    <td>{{$withdrawal->user->currency_symbol.$withdrawal->amount}}</td>
                                    <td>{{$withdrawal->created_at->format('d-m-Y')}}</td>
                                </tr>
                                @endif
                                @empty
                                    <tr>
                                        <td class="text-center" colspan="3">No withdrawals yet</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Last Five Deposits</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <a href="{{route('admin.deposits')}}" class="btn btn-sm round btn-primary btn-glow text-white"><i
                            class="la la-eye font-medium-1"></i> View all</a>
                    </div>
                </div>
                <div class="card-content">
                    <div class="table-responsive">
                        <table class="table table-de mb-0">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Ammount</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($last_deposits as $deposit)
                                @if($deposit->user)
                                <tr class="">
                                    <td>{{$deposit->user->fullname}}</td>
                                    <td>{{$deposit->user->currencySymbol.$deposit->amount}}</td>
                                    <td>{{$deposit->created_at->format('d-m-Y')}}</td>
                                </tr>
                                @endif
                                @empty
                                <tr>
                                    <td class="text-center" colspan="3">Oops! no deposits yet...</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Sell Orders & Buy Order -->
    <!-- Active Orders -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Recent Users</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <td>
                            <a href="{{route('admin.users')}}" class="btn btn-sm round btn-primary btn-glow text-white"><i
                                    class="la la-eye font-medium-1"></i> View all</a>
                        </td>
                    </div>
                </div>
                <div class="card-content">
                    <div class="table-responsive">
                        <table id="" class="table" >
                        <thead class="border-0">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Balance</th>
                                <th>Demo balance</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($last_users as $user)
                            @if(!$user->is_admin)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td><a href="">{{$user->firstname.' '.$user->lastname}}</a></td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->balance}}</td>
                                <td>{{$user->demo_balance}}</td>
                                <td><span class="badge {{$user->status ? 'badge-success': 'badge-danger'}}">{{$user->status ? 'Active' : 'In-active'}}</span></td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Active Orders -->
</div>




@endsection
