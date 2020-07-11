@extends('layouts.admin')

@section('content')

<div class="content-body">
    <div class="d-flex justify-content-center row">
        <div id="user-profile" class="col-12">
            <div class="row">
                <div class="card w-100">
                    <div class="card-header">
                        <div class="card-title">
                            <h4>Deposits</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table dt">
                                <thead>
                                    <tr>
                                        <th class="no-sort">Ref No#</th>
                                        <th class="no-sort">Method</th>
                                        <th class="no-sort">Amount</th>
                                        <th>Status</th>
                                        <th>Approved</th>
                                        <th class="no-sort">Date</th>
                                        <th class="no-sort">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($deposits as $deposit)
                                     <tr>
                                         <td>
                                             @if($deposit->status)
                                             <span class="text-success btn" onclick="getModal({type:'deposit-preview',deposit_id:{{$deposit->id}} })">
                                                 {{$deposit->reference}}
                                             </span>
                                             @else
                                             <span class="text-sm btn">
                                                 {{$deposit->reference}}
                                             </span>
                                             @endif
                                        </td>
                                         <td>BTC</td>
                                         <td>{{$deposit->user->currency->symbol.$deposit->amount}}</td>
                                         <td>
                                             @if (!$deposit->status)
                                             <span class="badge badge-info" {{--onclick="getModal({type:'deposit-confirmation',deposit_id:{{$deposit->id}}})"--}}>Unpaid</span>
                                             @else
                                             <span class="badge badge-success">Paid</span>
                                             @endif
                                         </td>
                                         <td>
                                             @if (!$deposit->approved)
                                                 <span class="badge badge-danger">No</span>
                                             @else
                                             <span class="badge badge-success">Yes</span>
                                             @endif
                                         </td>
                                         <td>{{$deposit->created_at->format('d-m-Y')}}</td>
                                         <td>
                                            <span class="dropdown">
                                            <button type="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="true"
                                                class="btn btn-primary btn-sm dropdown-toggle dropdown-menu-right"><i
                                                    class="ft-settings"></i></button>
                                            <span class="dropdown-menu mt-1 dropdown-menu-right">
                                                @if($deposit->status)
                                                    <a href="javascript:void(0)" onclick="getModal({type:'deposit-preview',deposit_id:{{$deposit->id}} })"  class="dropdown-item"><i class="la la-eye"></i>Preview</a>
                                                    @if(!$deposit->approved)
                                                        <a href="{{route('admin.deposit.approve',$deposit->id)}}" class="dropdown-item"><i class="la la-check success"></i> Approve</a>
                                                    @endif
                                                @else
                                                    <a href="javascript:void(0)" class="dropdown-item text-muted"><i class="la la-ban">Unpaid</i></a>
                                                @endif
                                                {{-- <a href="javascript:void(0)" onclick="getModal({type:'edit-user',user_id:{{$user->id}}})"  class="dropdown-item"><i class="la la-edit"></i>Edit</a>
                                                <span onclick="deleteUser({{$user->id}})" class="dropdown-item d-block"><i class="la la-trash"></i>Delete</span>
                                                <a href="{{route('admin.trades.user.trades',$user->id)}}" class="dropdown-item"><i class="la la-eye"></i>Trades</a>
                                                <a href="{{route('admin.user.toggle.status',$user->id)}}" class="dropdown-item"><i class="la {{$user->status ? 'la-times' : 'la-check'}}"></i>{{$user->status? 'Deactivate':'Activate'}}</a> --}}
                                            </span>
                                         </td>
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
</div>

@endsection
v
