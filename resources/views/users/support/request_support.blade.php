@extends('layouts.users_master')

@section('content')

<div class="clearfix"></div>
<div class="col-lg-12">
    <section class="box has-border-left-3">
        <header class="panel_header gradient-blue">
            <h2 class="title pull-left w-text">Frequently Asked Questions</h2>
        </header>
        <div class="content-body">
            <div class="row">
                <div class="col-xs-12">
                    <h3 class="mb-20">General Questions</h3>

                    <!-- Bootstrap FAQ - START -->
                    <div class="panel-group no-mb faq-panels" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false">Why Pay More ?</a>
                        </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body">
                                    <p>Lottrades patend pricing technology allows you to benefit from the same rates of return as traders in the initerbank market.</p>
                                    <p><span><i class="fa fa-check btn-danger" aria-hidden="true"></i></span> Real Time prices, benchmarked against interbank options market</p>
                                    <p><span><i class="fa fa-check btn-danger" aria-hidden="true"></i></span> Returns above 100% on simple rise/fall contracts.</p>
                                    <p><span><i class="fa fa-check btn-danger" aria-hidden="true"></i></span> Returns above 1000% on higher/lower and touch/no-touch trades.</p>
                                    <p><span><i class="fa fa-check btn-danger" aria-hidden="true"></i></span> No hidden fees or commissions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false">Controlled Risk ?</a>
                            </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body">
                                    <p>With Lottrades, you'll know the risk and potential reward before you purchase a contract.</p>
                                    <p><span><i class="fa fa-check btn-danger" aria-hidden="true"></i></span> Choose a payout and our system will calculate the stake required to purchase the contract.</p>
                                    <p><span><i class="fa fa-check btn-danger" aria-hidden="true"></i></span> You risk only your initial stake, and your stake never increases.</p>
                                    <p><span><i class="fa fa-check btn-danger" aria-hidden="true"></i></span> You can sell your contract before expiry to keep any profit you may have made or to minimise your loss.</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false">Security ?</a>
                        </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body">
                                    <p>With Lottrades, you can count on us to serve you with integrity and reliability.</p>
                                    <p><span><i class="fa fa-check btn-danger" aria-hidden="true"></i></span> We have a proven track record since we launched our platform in 2000.</p>
                                    <p><span><i class="fa fa-check btn-danger" aria-hidden="true"></i></span> We are licensed and regulated in the British Isles and in Malta since 2015.</p>
                                    <p><span><i class="fa fa-check btn-danger" aria-hidden="true"></i></span> We segregate your funds and keep them in secure and licensed financial institutions.</p>

                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false">Need A Loan ?</a>
                        </h4>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse" aria-expanded="false">
                                <div class="panel-body">
                                    <p>with Lottrades, you can request a loan to make an investment and pay back later by the agreed date.</p>
                                    <p><span><i class="fa fa-exclamation btn-danger" aria-hidden="true"></i></span> To recieve a loan make you to provide the necessary information requested, fill all necessary Bank information and a loan will only be given after proper Screening</p>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false">how may I take part in and purchase this Token?</a>
                            </h4>
                            </div>
                            <div id="collapseEight" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium id voluptates, accusamus aliquam, doloribus aperiam ullam tempora nesciunt, architecto vitae molestias. Impedit soluta nulla accusamus! Beatae accusamus eos, inventore aspernatur Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false">How do I doctors Affiliate system work ?</a>
                            </h4>
                            </div>
                            <div id="collapseNine" class="panel-collapse collapse" aria-expanded="false">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium id voluptates, accusamus aliquam, doloribus aperiam ullam tempora nesciunt, architecto vitae molestias. Impedit soluta nulla accusamus! Beatae accusamus eos, inventore aspernatur Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis.</p>
                                </div>
                            </div>
                        </div> --}}
                        <!-- bs faq end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
    
@endsection