@extends('layouts.admin')

@section('content')

<div class="content-body">
    <div class="d-flex justify-content-center row">
        <div id="user-profile" class="col-12">
            <div class="row">
                <div class="card w-100">
                    <div class="card-header">
                        <div class="card-title">
                            <h4>Trades</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover dt" data-order='[[ 4, "asc" ]]' data-page-length='25'>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>User</th>
                                    <th>Amount</th>
                                    <th>Profit</th>
                                    <th data-class-name="priority">Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($trades as $trade)
                                <tr class="bg-success bg-lighten-5">
                                    <td>{{$trade->id}}</td>
                                    <td>{{$trade->user->firstname}}</td>
                                    <td>{{$trade->amount}}</td>
                                    <td>{{$trade->profit}}</td>
                                    <td>{!!$trade->status == 1?'<span class="success">Active</span>':'<span class="danger">Cancelled</span>'!!}</td>
                                    <td>{{$trade->created_at->format('d-m-Y')}}</td>
                                    <td><span class="dropdown">
                                            <button id="btnSearchDrop2" type="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="true"
                                                class="btn btn-primary btn-sm dropdown-toggle dropdown-menu-right"><i
                                                    class="ft-settings"></i></button>
                                            <span aria-labelledby="btnSearchDrop2"
                                                class="dropdown-menu mt-1 dropdown-menu-right">
                                        <a href="javascript:void(0)" onclick="getModal({type:'edit-trade',trade_id:{{$trade->id}}})"  class="dropdown-item"><i class="la la-edit"></i>
                                                    Edit</a>
                                                <a href="{{$trade->status == 1?route('users.trades.cancel',$trade->id):'#'}}" class="dropdown-item"><i class="la la-times"></i>@if($trade->status == 1) Cancel @else Cancelled @endif</a>
                                            </span>
                                        </span></td>
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
</div>

@endsection
v
