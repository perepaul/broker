@extends('layouts.admin')

@section('content')

<section class="users-list-wrapper">
    <div class="users-list-filter px-1">
        <form>
            <div class="row border border-light rounded py-2 mb-2">
                <div class="col-12 col-sm-6 col-lg-3">
                    <label for="users-list-verified">Verified</label>
                    <fieldset class="form-group">
                        <select class="form-control" id="users-list-verified">
                            <option value="">Any</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </fieldset>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <label for="users-list-role">Role</label>
                    <fieldset class="form-group">
                        <select class="form-control" id="users-list-role">
                            <option value="">Any</option>
                            <option value="User">User</option>
                            <option value="Staff">Staff</option>
                        </select>
                    </fieldset>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <label for="users-list-status">Status</label>
                    <fieldset class="form-group">
                        <select class="form-control" id="users-list-status">
                            <option value="">Any</option>
                            <option value="Active">Active</option>
                            <option value="Close">Close</option>
                            <option value="Banned">Banned</option>
                        </select>
                    </fieldset>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 d-flex align-items-center">
                    <button class="btn btn-block btn-primary glow">Show</button>
                </div>
            </div>
        </form>
    </div>
    <div class="users-list-table">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <!-- datatable start -->
                    <div class="table-responsive">
                            <table id="" class="table dt" >
                            <thead class="border-0">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Balance</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                @if(!$user->is_admin)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td><a href="">{{$user->firstname.' '.$user->lastname}}</a></td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->balance}}</td>
                                    <td><span class="badge {{!$user->status ? 'badge-danger': 'badge-success'}}">{{!$user->status ? 'In-active' : 'Active'}}</span></td>
                                    <td>
                                        <span class="dropdown">
                                            <button type="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="true"
                                                class="btn btn-primary dropdown-toggle dropdown-menu-right"><i
                                                    class="ft-settings"></i></button>
                                            <span class="dropdown-menu mt-1 dropdown-menu-right">
                                                <a href="javascript:void(0)"  class="dropdown-item"><i class="la la-edit"></i>Edit</a>
                                                <a href="" class="dropdown-item"><i class="la la-trash"></i>Delete</a>
                                                <a href="{{route('admin.trades.user.trades',1)}}" class="dropdown-item"><i class="la la-eye"></i>Trades</a>
                                                <a href="{{route('admin.user.toggle.status',$user->id)}}" class="dropdown-item"><i class="la {{$user->status ? 'la-times' : 'la-check'}}"></i>{{$user->status? 'Deactivate':'Activate'}}</a>
                                            </span>
                                        </span>
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    </div>
                    <!-- datatable ends -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
