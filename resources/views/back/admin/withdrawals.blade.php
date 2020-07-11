@extends('layouts.admin')

@section('content')

<div class="content-body">
    <div class="d-flex justify-content-center row">
        <div id="user-profile" class="col-12">
            <div class="row">
                <div class="card w-100">
                    <div class="card-header">
                        <div class="card-title">
                            <h4>Withdrawals</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table dt">
                            <thead>
                                <tr>
                                    <th>ref_no</th>
                                    <th>User</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($withdrawals as $withdrawal)
                                    <tr class="@if($withdrawal->status == 1) bg-success @elseif($withdrawal->status == 0) bg-yellow @else bg-danger @endif bg-lighten-5">
                                        <td>{{$withdrawal->reference}}</td>
                                        <td>{{$withdrawal->user->fullname}}</td>
                                        <td>{{$withdrawal->user->currency_symbol.$withdrawal->amount}}</td>
                                        <td>{{$withdrawal->created_at->format('d-m-Y')}}</td>
                                        <td><span class="dropdown">
                                                <button id="btnSearchDrop2" type="button" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="true"
                                                    class="btn btn-primary btn-sm dropdown-toggle dropdown-menu-right"><i
                                                        class="ft-settings"></i></button>
                                                <span aria-labelledby="btnSearchDrop2"
                                                    class="dropdown-menu mt-1 dropdown-menu-right">
                                            <a href="javascript:void(0)" onclick="getModal({type:'withdrawal-preview',withdrawal_id:{{$withdrawal->id}}})" class="dropdown-item"><i class="la la-eye"></i>
                                                        View</a>
                                                        @if($withdrawal->status == 0)
                                                    <a href="{{route('admin.withdrawal.approve',$withdrawal->id)}}" class="dropdown-item"><i class="la la-check success"></i>
                                                        Approve</a>
                                                    <a href="javascript:void(0)" onclick="getModal({type:'decline-withdrawal', withdrawal_id:{{$withdrawal->id}}})" class="dropdown-item"><i class="la la-times"></i>
                                                        Decline</a>
                                                        @endif
                                                </span>
                                            </span></td>
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
