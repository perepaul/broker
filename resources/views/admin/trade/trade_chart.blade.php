@extends('layouts.admin')
<!--The trading virw widget are not responsive i think !-->

@section('content')
<div class="content-header row">
    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
    <div class="tradingview-widget-container__widget"></div>
    <div class="tradingview-widget-copyright"></div>
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
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
</div>
<div class="content-body">
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
    <div class="tradingview-widget-container__widget"></div>
    <div class="tradingview-widget-copyright"></div>
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
    {
    "width": 1400,
    "height": 700,
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
  <div class="content-header">
    <div class="row">
    <div class="col-6">
        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <div class="tradingview-widget-copyright"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-hotlists.js" async>
            {
            "colorTheme": "light",
            "dateRange": "12m",
            "exchange": "US",
            "showChart": true,
            "locale": "en",
            "largeChartUrl": "",
            "isTransparent": false,
            "width": "700",
            "height": "600",
            "plotLineColorGrowing": "rgba(33, 150, 243, 1)",
            "plotLineColorFalling": "rgba(33, 150, 243, 1)",
            "gridLineColor": "rgba(240, 243, 250, 1)",
            "scaleFontColor": "rgba(120, 123, 134, 1)",
            "belowLineFillColorGrowing": "rgba(33, 150, 243, 0.12)",
            "belowLineFillColorFalling": "rgba(33, 150, 243, 0.12)",
            "symbolActiveColor": "rgba(33, 150, 243, 0.12)"
          }
            </script>
          </div>
    <!-- TradingView Widget BEGIN -->
    <!-- TradingView Widget END -->

    </div>

    <div class="col-6">

        <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <div class="tradingview-widget-copyright"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                {
                "colorTheme": "light",
                "dateRange": "12m",
                "showChart": true,
                "locale": "en",
                "largeChartUrl": "",
                "isTransparent": false,
                "width": "700",
                "height": "660",
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
    
    </div>

  </div>

  <div class="content-header">

    <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
    <div id="tradingview_f982b"></div>
    {{-- <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/NASDAQ-AAPL/" rel="noopener" target="_blank"><span class="blue-text">AAPL Chart</span></a> by TradingView</div> --}}
    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
    <script type="text/javascript">
    new TradingView.widget(
    {
    "width": 1400,
    "height": 610,
    // "autosize":true,
    "symbol": "NASDAQ:AAPL",
    "interval": "D",
    "timezone": "Etc/UTC",
    "theme": "light",
    "style": "1",
    "locale": "en",
    "toolbar_bg": "#f1f3f6",
    "enable_publishing": false,
    "hide_side_toolbar": false,
    "allow_symbol_change": true,
    "details": false,
    "hotlist": false,
    "calendar": false,
    "container_id": "tradingview_f982b"
  }
    );
    </script>
  </div>
  <!-- TradingView Widget END -->

  </div>

  <!--Fxpricing widget !-->
  <div class="content-header">
      This one is from Fxpricing
  </div>

  <div class="content-body">
    <iframe src="https://fxpricing.com/fx-widget/forex-cross-rates.php?symbol=EUR/USD,USD/JPY,EUR/CHF,EUR/GBP,EUR/NZD,EUR/CAD,EUR/RUB,EUR/SGD,EUR/TRY,AUD/USD,EUR/AUD,USD/PLN&theme=light" width="100%" height="323" style="border: 1px solid #eee;"></iframe><div id="fx-pricing-widget-copyright"><span>Powered by </span><a href="#">Lottrades</a></div><style type="text/css">#fx-pricing-widget-copyright{text-align: center; font-size: 13px; font-family: sans-serif; margin-top: 10px; margin-bottom: 10px; color: #9db2bd;} #fx-pricing-widget-copyright a{text-decoration: unset; color: #bb3534; font-weight: 600;}</style>
  </div>

</div>
</
    
@endsection