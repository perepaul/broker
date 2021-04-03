@extends('layouts.admin')

@section('content')


<div class="content-header row">
</div>

<div class="content-body">
    <div id="crypto-stats-3" class="row">
        <div class="col-xl-4 col-12">
            <div class="card crypto-card-3 pull-up">
                <div class="card-content">
                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="col-5 pl-2">
                                <h4>Total Deposit</h4>
                            </div>
                            <div class="col-5 text-right">
                                <h4>{{auth()->user()->currency->symbol.auth()->user()->balance}}</h4>
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
        <div class="col-xl-4 col-12">
            <div class="card crypto-card-3 pull-up">
                <div class="card-content">
                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="col-6 pl-2">
                                <h4>Trading Balance</h4>
                            </div>
                            <div class="col-5 text-right">
                                <h4>{{auth()->user()->currency->symbol.auth()->user()->demo_balance}}</h4>
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
        <div class="col-xl-4 col-12">
            <div class="card crypto-card-3 pull-up">
                <div class="card-content">
                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="col-5 pl-2">
                                <h5>Referral Bonus</h5>
                            </div>
                            <div class="col-5 text-right">
                                <h4>{{auth()->user()->trades->count()}}</h4>
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
    <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener"
                target="_blank"><span class="blue-text">Ticker Tape</span></a> by TradingView</div>
        <script type="text/javascript"
            src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
            {
                "symbols": [
                {
                    "proName": "FOREXCOM:SPXUSD",
                    "title": "S&P 500"
                },
                {
                    "proName": "FOREXCOM:NSXUSD",
                    "title": "Nasdaq 100"
                },
                {
                    "proName": "FX_IDC:EURUSD",
                    "title": "EUR/USD"
                },
                {
                    "proName": "BITSTAMP:BTCUSD",
                    "title": "BTC/USD"
                },
                {
                    "proName": "BITSTAMP:ETHUSD",
                    "title": "ETH/USD"
                }
                ],
                "colorTheme": "light",
                "isTransparent": true,
                "displayMode": "adaptive",
                "locale": "en"
            }
        </script>
    </div>
    <!-- Candlestick Multi Level Control Chart -->
    <!-- Slaes & Purchase Order -->
    <div class="row">
        {{-- Forex Chart --}}
        <div class="col-12 col-xl-12">
            <div class="card">
                <div class="card-content collapse show">
                    <div class="card-body p-0">
                        <div class="tradingview-widget-container">
                            <div id="tradingview_e8053">
                                <div id="tradingview_7ecf6-wrapper"
                                    style="position: relative;box-sizing: content-box;width: 100%;height: 550px;margin: 0 auto !important;padding: 0 !important;font-family:Arial,sans-serif;">
                                    <div
                                        style="width: 100%;height: 550px;background: transparent;padding: 0 !important;">
                                        <iframe id="tradingview_7ecf6"
                                            src="https://s.tradingview.com/widgetembed/?frameElementId=tradingview_7ecf6&amp;symbol=BITSTAMP%3ABTCUSD&amp;interval=D&amp;hidesidetoolbar=0&amp;symboledit=1&amp;saveimage=1&amp;toolbarbg=f1f3f6&amp;studies=%5B%5D&amp;theme=Light&amp;style=1&amp;timezone=Etc%2FUTC&amp;withdateranges=1&amp;showpopupbutton=1&amp;studies_overrides=%7B%7D&amp;overrides=%7B%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;showpopupbutton=1&amp;locale=en&amp;utm_source=&amp;utm_medium=widget&amp;utm_campaign=chart&amp;utm_term=BITSTAMP%3ABTCUSD"
                                            style="width: 100%; height: 100%; margin: 0 !important; padding: 0 !important;"
                                            frameborder="0" allowtransparency="true" scrolling="no"
                                            allowfullscreen=""></iframe>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Forex Chart --}}

        {{-- Last Five Trades --}}
        <div class="col-12 col-xl-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Last 5 Trades</h4>
                </div>
                <div class="card-content">
                    <div class="table-responsive mt-1">
                        <table class="table table-xs">
                            <thead>
                                <tr>
                                    <th>Profit</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse (auth()->user()->lastFiveTrades() as $trade)

                                <tr>
                                    <td class="">{{$trade->profit}}</td>
                                    <td>{{auth()->user()->currency->symbol.''.$trade->amount}}</td>
                                    <td>{{$trade->created_at->format('d-m-Y')}}</td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-center">No trades yet</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Last Five Trades --}}


        <div class="col-12 col-xl-8">
            <div class="card">
                <div class="card-header pb-0">
                    <h4 class="card-title">Place trade</h4>
                </div>
                <div class="card-content pl-2 pr-2">
                    <div class="row p-2 pt-0">
                        <div class="col-12 col-xl-6 border-right-blue-grey border-right-lighten-4 pr-2 p-0">
                            <div class="row my-2">
                                <div class="col-4">
                                    <h5 class="text-bold-600 mb-0">Buy</h5>
                                </div>
                            </div>
                            <form class="form form-horizontal" action="{{route('users.trades.place')}}" method="POST">
                                @csrf
                                <input type="hidden" name="type" value="1">
                                <div class="form-body">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label pr-0" for="currency">Currency</label>
                                        <div class="col-md-9">
                                            <select name="currency_id" class="form-control" id="currency">
                                                @foreach ($TradeCurrencies as $currency)
                                                    <option value="{{$currency->id}}">{{strtoupper($currency->name)}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="amount">Amount</label>
                                        <div class="col-md-9">
                                            <input type="number" id="amount" class="form-control"
                                                placeholder="$ 11916.9" name="amount">
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-between">
                                        <div class="col-4">
                                            <span>Use Demo Balance</span>
                                        </div>
                                        <div class="col-4 text-right">
                                            <span><input
                                                type="checkbox" name="demo" data-offstyle="danger"
                                                checked data-toggle="toggle" data-size="mini" data-height="30">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-actions pb-0">
                                        <button type="submit" class="btn round btn-success btn-block btn-glow"> Buy
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-12 col-xl-6 pl-2 p-0">
                            <div class="row my-2">
                                <div class="col-4">
                                    <h5 class="text-bold-600 mb-0">Sell</h5>
                                </div>
                            </div>
                            <form class="form form-horizontal" action="{{route('users.trades.place')}}" method="POST">
                                @csrf
                                <input type="hidden" name="type" value="2">
                                <div class="form-body">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label pr-0" for="currency">Currency</label>
                                        <div class="col-md-9">
                                            <select name="currency_id" class="form-control" id="currency" >
                                                @foreach ($TradeCurrencies as $currency)
                                                    <option value="{{$currency->id}}">{{strtoupper($currency->name)}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="amount">Amount</label>
                                        <div class="col-md-9">
                                            <input type="number" id="amount" class="form-control"
                                                placeholder="$ 11916.9" name="amount">
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-between">
                                        <div class="col-5">
                                            <span>Use Demo Balance</span>
                                        </div>
                                        <div class="col-4 text-right">
                                            <span><input
                                                type="checkbox" name="demo" data-offstyle="danger"
                                                checked data-toggle="toggle" data-size="mini" data-height="30">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-actions pb-0">
                                        <button type="submit" class="btn round btn-danger btn-block btn-glow"> Sell
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="col-12 col-xl-12">
            <div class="card">
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <div class="tradingview-widget-copyright"><a
                            href="https://www.tradingview.com/markets/currencies/forex-heat-map/" rel="noopener"
                            target="_blank"><span class="blue-text">Forex Heat Map</span></a> by TradingView</div>
                    <script type="text/javascript"
                        src="https://s3.tradingview.com/external-embedding/embed-widget-forex-heat-map.js" async>
                        {
                                "width": "100%",
                                "height": "600",
                                "currencies": [
                                "EUR",
                                "USD",
                                "JPY",
                                "GBP",
                                "CHF",
                                "AUD",
                                "CAD",
                                "NZD",
                                "CNY"
                                ],
                                "isTransparent": false,
                                "colorTheme": "dark",
                                "locale": "en"
                            }
                    </script>
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
                    <h4 class="card-title">Active Orders</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <td>
                            <button class="btn btn-sm round btn-danger btn-glow"><i
                                    class="la la-close font-medium-1"></i> Cancel all</button>
                        </td>
                    </div>
                </div>
                <div class="card-content">
                    <div class="table-responsive">
                        <table class="table table-de mb-0">
                            <thead>
                                <tr>
                                    <th>Currency</th>
                                    <th>Type</th>
                                    <th>Amount</th>
                                    <th>Profit/loss</th>
                                    <th>Demo</th>
                                    {{-- <th>USD</th> --}}
                                    <th>Cancel</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @if() --}}
                                @forelse (auth()->user()->trades()->where('status',1)->get() as $trade)
                                    <tr>
                                        <td>{{$trade->currency->name}}</td>
                                        @if($trade->type == 1)<td class="success">Buy</td>@else <td class="info">Sell</td> @endif
                                        <td>{{auth()->user()->currency->symbol.$trade->amount}}</td>
                                        <td>{{$trade->profit}}</td>
                                        <td>@if($trade->is_demo == 1)<span class="danger">Yes</span>@else<span class="success">No</span>@endif</td>
                                        {{-- <td>0.2</td> --}}
                                        <td>
                                            <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                        </td>
                                    </tr>

                                @empty

                                @endforelse
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
