@extends('layouts.users_master')

@section('content_header')

<div class='col-xs-12'>
    <div class="page-title">

        <div class="pull-left">
            <!-- PAGE HEADING TAG - START -->
            <h1 class="title">Charts For The Day</h1>
            <!-- PAGE HEADING TAG - END -->
        </div>

    </div>
</div>

@endsection

@section('content')
<div class="clearfix"></div>
<div class="col-xs-12">
    <section class="box ">
        <header class="panel_header">
            <h2 class="title pull-left">Registered Users</h2>
            <div class="actions panel_actions pull-right">
                <a class="box_toggle fa fa-chevron-down"></a>
                <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                <a class="box_close fa fa-times"></a>
            </div>
        </header>
        <div class="content-body">
            <!-- TradingView Widget BEGIN -->
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
                "isTransparent": false,
                "displayMode": "adaptive",
                "locale": "en"
            }
                </script>
            </div>
            <!-- TradingView Widget END -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="chart-container">
                        <div class="col-xl-5 col-lg-6 col-md-12 col-xxl-6">
                            <!-- TradingView Widget BEGIN -->

                            <!-- TradingView Widget BEGIN -->
                            {{-- <div class="tradingview-widget-container">
                                <div id="technical-analysis"></div>
                                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/AAPL/" rel="noopener" target="_blank"><span class="blue-text">AAPL Chart</span></a> by TradingView</div>
                                <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                                <script type="text/javascript">
                                new TradingView.widget(
                                {
                                "container_id": "technical-analysis",
                                "width": 998,
                                "height": 610,
                                "symbol": "AAPL",
                                "interval": "D",
                                "timezone": "exchange",
                                "theme": "light",
                                "style": "1",
                                "toolbar_bg": "#f1f3f6",
                                "withdateranges": true,
                                "hide_side_toolbar": false,
                                "allow_symbol_change": true,
                                "save_image": false,
                                "studies": [
                                "ROC@tv-basicstudies",
                                "StochasticRSI@tv-basicstudies",
                                "MASimple@tv-basicstudies"
                                ],
                                "show_popup_button": true,
                                "popup_width": "1000",
                                "popup_height": "650",
                                "locale": "en"
                            }
                                );
                                </script>
                            </div> --}}
                            <!-- TradingView Widget END -->

                            <div class="tradingview-widget-container card">
                                <div id="tradingview_e8053">
                                    <div id="tradingview_7ecf6-wrapper"
                                        style="position: relative;box-sizing: content-box;width: 100%;height: 460px;margin: 0 auto !important;padding: 0 !important;font-family:Arial,sans-serif;">
                                        <div
                                            style="width: 100%;height: 460px;background: transparent;padding: 0 !important;">
                                            <iframe id="tradingview_7ecf6"
                                                src="https://s.tradingview.com/widgetembed/?frameElementId=tradingview_7ecf6&amp;symbol=BITSTAMP%3ABTCUSD&amp;interval=D&amp;hidesidetoolbar=0&amp;symboledit=1&amp;saveimage=1&amp;toolbarbg=f1f3f6&amp;studies=%5B%5D&amp;theme=Light&amp;style=1&amp;timezone=Etc%2FUTC&amp;withdateranges=1&amp;showpopupbutton=1&amp;studies_overrides=%7B%7D&amp;overrides=%7B%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;showpopupbutton=1&amp;locale=en&amp;utm_source=&amp;utm_medium=widget&amp;utm_campaign=chart&amp;utm_term=BITSTAMP%3ABTCUSD"
                                                style="width: 100%; height: 100%; margin: 0 !important; padding: 0 !important;"
                                                frameborder="0" allowtransparency="true" scrolling="no"
                                                allowfullscreen=""></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- TradingView Widget END -->
                        </div>

                        {{-- <iframe width="100%" height="400" src="https://www.strategie-bourse.com/widget/tableau-cours.php?langue=uk&type_actif=crypto&couleur_entete=808080&background=FFF" frameborder="0"></iframe><div></div> --}}



                        {{-- <div class="" style="height: 200px; -webkit-tap-highlight-color: transparent; user-select: none; cursor: default; background-color: rgba(0, 0, 0, 0);" id="user_type_bar" _echarts_instance_="1592771541197"><div style="position: relative; overflow: hidden; width: 243px; height: 200px;"><div data-zr-dom-id="bg" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 243px; height: 200px; user-select: none;"></div><canvas width="243" height="200" data-zr-dom-id="0" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 243px; height: 200px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas><canvas width="243" height="200" data-zr-dom-id="1" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 243px; height: 200px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas><canvas width="243" height="200" data-zr-dom-id="_zrender_hover_" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 243px; height: 200px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas></div></div> --}}
                    </div>
                    {{-- <div class="col-xs-6">
                        <!-- Live Rates widget by Forextime.com --> <script type="text/javascript" src="//www.forextime.com/widget.js?type=live-rates&theme=light&p=&pt=no&l=&h=345&pairs=eurusdusdjpyeurgbpgbpusdeurchf&"></script> <!-- Live Rates widget by Forextime.com -->
                    </div> --}}
                </div>
            </div>



            <!-- End .row -->
        </div>
    </section>
</div>

<div class="clearfix"></div>

<div class="content-body">
    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener"
                target="_blank"><span class="blue-text">Market Data</span></a> by TradingView</div>
        <script type="text/javascript"
            src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
            {
    "colorTheme": "light",
    "dateRange": "12m",
    "showChart": true,
    "locale": "en",
    "width": "100%",
    "height": "600",
    "largeChartUrl": "",
    "isTransparent": false,
    "plotLineColorGrowing": "rgba(33, 150, 243, 1)",
    "plotLineColorFalling": "rgba(33, 150, 243, 1)",
    "gridLineColor": "rgba(240, 243, 250, 1)",
    "scaleFontColor": "rgba(120, 123, 134, 1)",
    "belowLineFillColorGrowing": "rgba(33, 150, 243, 0.12)",
    "belowLineFillColorFalling": "rgba(33, 150, 243, 0.12)",
    "symbolActiveColor": "rgba(33, 150, 243, 0.12)",
    "tabs": [
      {
        "title": "Indices",
        "symbols": [
          {
            "s": "FOREXCOM:SPXUSD",
            "d": "S&P 500"
          },
          {
            "s": "FOREXCOM:NSXUSD",
            "d": "Nasdaq 100"
          },
          {
            "s": "FOREXCOM:DJI",
            "d": "Dow 30"
          },
          {
            "s": "INDEX:NKY",
            "d": "Nikkei 225"
          },
          {
            "s": "INDEX:DEU30",
            "d": "DAX Index"
          },
          {
            "s": "FOREXCOM:UKXGBP",
            "d": "FTSE 100"
          }
        ],
        "originalTitle": "Indices"
      },
      {
        "title": "Commodities",
        "symbols": [
          {
            "s": "CME_MINI:ES1!",
            "d": "E-Mini S&P"
          },
          {
            "s": "CME:6E1!",
            "d": "Euro"
          },
          {
            "s": "COMEX:GC1!",
            "d": "Gold"
          },
          {
            "s": "NYMEX:CL1!",
            "d": "Crude Oil"
          },
          {
            "s": "NYMEX:NG1!",
            "d": "Natural Gas"
          },
          {
            "s": "CBOT:ZC1!",
            "d": "Corn"
          }
        ],
        "originalTitle": "Commodities"
      },
      {
        "title": "Bonds",
        "symbols": [
          {
            "s": "CME:GE1!",
            "d": "Eurodollar"
          },
          {
            "s": "CBOT:ZB1!",
            "d": "T-Bond"
          },
          {
            "s": "CBOT:UB1!",
            "d": "Ultra T-Bond"
          },
          {
            "s": "EUREX:FGBL1!",
            "d": "Euro Bund"
          },
          {
            "s": "EUREX:FBTP1!",
            "d": "Euro BTP"
          },
          {
            "s": "EUREX:FGBM1!",
            "d": "Euro BOBL"
          }
        ],
        "originalTitle": "Bonds"
      },
      {
        "title": "Forex",
        "symbols": [
          {
            "s": "FX:EURUSD"
          },
          {
            "s": "FX:GBPUSD"
          },
          {
            "s": "FX:USDJPY"
          },
          {
            "s": "FX:USDCHF"
          },
          {
            "s": "FX:AUDUSD"
          },
          {
            "s": "FX:USDCAD"
          }
        ],
        "originalTitle": "Forex"
      }
    ]
  }
        </script>
    </div>
    <!-- TradingView Widget END -->
</div>

<div class="content-body">
    <!-- TradingView Widget BEGIN -->
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
                "colorTheme": "light",
                "locale": "en"
            }
        </script>
    </div>
    <!-- TradingView Widget END -->
</div>


<div class="content-body">
    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
        <div id="tradingview_362d3"></div>
        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/NASDAQ-AAPL/"
                rel="noopener" target="_blank"><span class="blue-text">AAPL Chart</span></a> by TradingView</div>
        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
        <script type="text/javascript">
            new TradingView.widget(
    {
    "width": "100%",
    "height": "600",
    "symbol": "NASDAQ:AAPL",
    "interval": "D",
    "timezone": "Etc/UTC",
    "theme": "light",
    "style": "1",
    "locale": "en",
    "toolbar_bg": "#f1f3f6",
    "enable_publishing": false,
    "allow_symbol_change": true,
    "container_id": "tradingview_362d3"
  }
    );
        </script>
    </div>
    <!-- TradingView Widget END -->
</div>

<div class="content-body">
    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <div class="tradingview-widget-copyright"><a
                href="https://www.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener"
                target="_blank"><span class="blue-text">Cryptocurrency Markets</span></a> by TradingView</div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js"
            async>
            {
    "width": "100%",
    "height": "600",
    "defaultColumn": "overview",
    "screener_type": "crypto_mkt",
    "displayCurrency": "USD",
    "colorTheme": "light",
    "locale": "en"
  }
        </script>
    </div>
    <!-- TradingView Widget END -->
</div>




@endsection
