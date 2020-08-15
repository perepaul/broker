@extends('layouts.admin')

@section('content')

<div class="content-body">
    <div class="d-flex justify-content-center row">
        <div id="user-profile" class="col-11">
            <div class="row">
                <div class="card w-100">
                    <div class="card-header">
                        <div class="card-title">
                            <h4>Tickets</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
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
                                <tr class="bg-success bg-lighten-5">
                                    <td>idfiodfidi</td>
                                    <td>Perekpo</td>
                                    <td>500</td>
                                    <td>12-34-2222</td>
                                    <td><span class="dropdown">
                                            <button id="btnSearchDrop2" type="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="true"
                                                class="btn btn-primary dropdown-toggle dropdown-menu-right"><i
                                                    class="ft-settings"></i></button>
                                            <span aria-labelledby="btnSearchDrop2"
                                                class="dropdown-menu mt-1 dropdown-menu-right">
                                                <a href="#" class="dropdown-item"><i class="la la-edit"></i>
                                                    Edit</a>
                                                <a href="#" class="dropdown-item"><i class="la la-trash"></i>
                                                    Delete</a>
                                                <a href="#" class="dropdown-item"><i class="la la-times"></i>
                                                    Disable</a>
                                            </span>
                                        </span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

@endsection
