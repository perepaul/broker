@extends('layouts.admin')

@section('content')


<div class="content-header row">
</div>

<div class="content-body">
    <div class="col-12">
        <div class="card col-9 m-auto mb-2">
            <div class="card-header">
                <h4 class="card-title">Trade</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
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
                                                @foreach ($currencies as $currency)
                                                    @if ($currency->id != auth()->user()->currency_id)
                                                        <option value="{{$currency->id}}">{{strtoupper($currency->iso.auth()->user()->currency->iso)}}</option>
                                                    @endif
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
                                                    @foreach ($currencies as $currency)
                                                        @if ($currency->id != auth()->user()->currency_id)
                                                            <option value="{{$currency->id}}">{{strtoupper($currency->iso.auth()->user()->currency->iso)}}</option>
                                                        @endif
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
                    <div class="text-center text-lg"><a href="/" class="">view market data</a></div>
                </div>
            </div>
        </div>
        <div class="card mt-2">
            <div class="card-header d-flex justify-content-between">
                <h4 class="card-title">Trade History </span></h4>
                <button class="btn btn-danger btn-glow round" onclick="cancelTrade({all:true})"><i
                    class="la la-close font-medium-1"></i> Cancel all</button>
            </div>
            <div class="card-content">
                <div class="table-responsive p-2">
                    <table class="table dt table-de">
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
                            @forelse (auth()->user()->trades as $trade)
                                <tr>
                                    <td>{{$trade->currency->name}}</td>
                                    @if($trade->type == 1)<td class="success">Buy</td>@else <td class="info">Sell</td> @endif
                                    <td>{{auth()->user()->currency->symbol.$trade->amount}}</td>
                                    <td>{{$trade->profit}}</td>
                                    <td>@if($trade->is_demo == 1)<span class="danger">Yes</span>@else<span class="success">No</span>@endif</td>
                                    {{-- <td>0.2</td> --}}
                                    <td>
                                        <button class="btn btn-sm round btn-outline-danger" @if($trade->status) onclick="cancelTrade({id:{{$trade->id}}}) @endif"> @if($trade->status)Cancel @else Cancelled @endif</button>
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




@endsection
