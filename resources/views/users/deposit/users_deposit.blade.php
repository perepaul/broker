@extends('layouts.users_master')

@section('content')

<style>
    /* The snackbar - position it at the bottom and in the middle of the screen */
    #snackbar {
    visibility: hidden; /* Hidden by default. Visible on click */
    min-width: 250px; /* Set a default minimum width */
    margin-left: -125px; /* Divide value of min-width by 2 */
    background-color: #333; /* Black background color */
    color: #fff; /* White text color */
    text-align: center; /* Centered text */
    border-radius: 2px; /* Rounded borders */
    padding: 16px; /* Padding */
    position: fixed; /* Sit on top of the screen */
    z-index: 1; /* Add a z-index if needed */
    left: 50%; /* Center the snackbar */
    bottom: 30px; /* 30px from the bottom */
    }

    /* Show the snackbar when clicking on a button (class added with JavaScript) */
    #snackbar.show {
    visibility: visible; /* Show the snackbar */
    /* Add animation: Take 0.5 seconds to fade in and out the snackbar.
    However, delay the fade out process for 2.5 seconds */
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
    }

    /* Animations to fade the snackbar in and out */
    @-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
    }

    @keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
    }

    @-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
    }

    @keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
    }
</style>

<div class="clearfix"></div>
<div class="col-lg-12">
    <section class="box ">
        <div class="referal-head gradient-blue">
            <h2 class="w-text mt-0 boldy">Deposit To This Btc Address</h2>
            <p class="w-text mb-0">Account will be credited after 25 network confirmation</p>
            {{-- <div class="credit-amount orange-bg pull-right">
                <h3 class="w-text mt-0 bold">$25</h3>
                <h4 class="w-text mb-0">Credit</h4>
            </div> --}}
        </div>
        <div class="content-body">

            <div class="row">

                <div class="col-xs-12">
                    <!-- start -->
                    <div class="row">
                       <div class="col-xs-12">
                           <div class="text-center mt-30">
                               {{-- <h3 class="boldy">Share My Affiliate Links</h3> --}}
                               <img height="300px" src="https://quixlab.com/demo/tradio/light/images/qr.svg" alt="">
                           </div>
                       </div>
                       <div class="col-md-8 col-md-offset-2 col-sm-12">
                           <div class="affiliate-link mt-30">
                               <div class="input-group">
                                    <input type="text" class="form-control" id="btc-address" value="1EHtsMcP6EWvcH7aL9TZnJcCHT9f89H5Sg" aria-describedby="basic-addon2">
                                    <a role="button" onclick="myClick()" id="myBtn" class="input-group-addon orange-bg w-text" id="basic-addon2"><i class="fa fa-copy mr-10"></i>Copy Link</a>
                                    <div id="snackbar">Successfully Copied...</div>
                                </div>
                           </div>
                       </div>
                       <div class="col-xs-12 affiliate-social">
                           <div class="row">

                           </div>
                       </div>

                    </div>

                    {{-- <div class="row">
                        <div class="col-xs-12">
                            <h3>Affiliate summary</h3>
                            <br>
                            <div class="table-responsive">
                                <table class="table table-hover invoice-table">
                                    <thead>
                                        <tr>
                                            <td>
                                                <h4>Refered Members</h4></td>
                                            <td class="text-center">
                                                <h4>Total Spend</h4></td>
                                            <td class="text-center">
                                                <h4>Referal Bounes</h4></td>
                                            <td class="text-center">
                                                <h4>Tokens Purchased</h4></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- foreach ($order->lineItems as $line) or some such thing here -->
                                        <tr>
                                            <td>Memder ID 23u487</td>
                                            <td class="text-center">$210.99</td>
                                            <td class="text-center">$45.00</td>
                                            <td class="text-center">500 Token</td>
                                        </tr>
                                        <tr>
                                            <td>Memder ID BS9400</td>
                                            <td class="text-center">$200.00</td>
                                            <td class="text-center">$15.00</td>
                                            <td class="text-center">489 Token</td>
                                        </tr>
                                        <tr>
                                            <td>Memder ID 723h3g</td>
                                            <td class="text-center">$600.00</td>
                                            <td class="text-center">$30.00</td>
                                            <td class="text-center">734 Token</td>
                                        </tr>
                                        <tr>
                                            <td>Memder ID 892fsd</td>
                                            <td class="text-center">$1000.00</td>
                                            <td class="text-center">$120.00</td>
                                            <td class="text-center">1478 Token</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> --}}

                    <div class="clearfix"></div>
                    <br>

                    {{-- <div class="row">
                        <div class="col-xs-12 text-right">
                            <a href="#" target="_blank" class="btn btn-default btn-md"><i class="fa fa-print"></i> &nbsp; Print </a>
                            <a href="#" target="_blank" class="btn btn-accent gradient-blue btn-md"><i class="fa fa-send"></i> &nbsp; Purchase Tokens </a>
                        </div>
                    </div> --}}

                    <!-- end -->

                </div>
            </div>
        </div>
    </section>
</div>


<script type="text/javascript">

function myClick(){
    var copyText = document.getElementById("btc-address");

    copyText.select();
    copyText.setSelectionRange(0,99999);
    document.execCommand("copy");
    // alert("Copied Btc Address: " + copyText.value);

    // Get the snackbar DIV
    var x = document.getElementById("snackbar");

    // // Add the "show" class to DIV
    x.className = "show";

    // // After 3 seconds, remove the show class from DIV
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
    }

</script>

@endsection
