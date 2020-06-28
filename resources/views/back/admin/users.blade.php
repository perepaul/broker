@extends('layouts.admin')

@section('content')

<div class="content-header row">
    <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title mb-0">Contacts</h3>
        <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Users</a>
                    </li>
                    <li class="breadcrumb-item active">Contacts
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="content-header-right text-md-right col-md-6 col-12">
        <div class="btn-group">
            <button class="btn btn-round btn-info" type="button"><i class="icon-cog3"></i> Settings</button>
        </div>
    </div>
</div>
<div class="content-detached content-right">
    <div class="content-body">
        <section class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-head">
                        <div class="card-header">
                            <h4 class="card-title">Users</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                            <div class="heading-elements">
                                <button class="btn btn-primary btn-sm"><i class="ft-plus white"></i> Add
                                    User</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <!-- Task List table -->
                            <div class="table-responsive">
                                <table id="users-contacts" class="table  display no-wrap icheck     ">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <input type="checkbox" class="input-chk">
                                            </td>
                                            <td>
                                                <div class="media">
                                                    <div class="media-left pr-1">
                                                        <span class="avatar avatar-sm avatar-online rounded-circle">
                                                            <img src="{{asset('assets/images/profile/default.png')}}"
                                                                alt="avatar"><i></i></span>
                                                    </div>
                                                    <div class="media-body media-middle">
                                                        <a href="#" class="media-heading">Alice Collins</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <a href="mailto:email@example.com">alice@example.com</a>
                                            </td>
                                            <td>+658-254-256</td>
                                            <td>
                                                <span class="dropdown">
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
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<div class="sidebar-detached sidebar-left" ,=",">
    <div class="sidebar">
        <div class="bug-list-sidebar-content">
            <!-- Predefined Views -->
            <div class="card">
                <div class="card-head">
                    <div class="media p-1">
                        <div class="media-left pr-1">
                            <span class="avatar avatar-sm avatar-online rounded-circle">
                                <img src="/assets/images/profile/default.png"
                                    alt="avatar"><i></i></span>
                        </div>
                        <div class="media-body media-middle">
                            <h5 class="media-heading">Margaret Govan</h5>
                        </div>
                    </div>
                </div>
                <!-- contacts search -->
                <div class="card-body border-top-blue-grey border-top-lighten-5">
                    <div class="bug-list-search">
                        <div class="bug-list-search-content">
                            <form action="#">
                                <div class="position-relative">
                                    <input type="search" id="search-contacts" class="form-control"
                                        placeholder="Search contacts...">
                                    <div class="form-control-position">
                                        <i class="la la-search text-size-base text-muted"></i>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /contacts search -->
                <!-- contacts view -->
                <div class="card-body">
                    <div class="list-group">
                        <a href="#" class="list-group-item active">All Contacts</a>
                        <a href="#" class="list-group-item list-group-item-action">Recently contacted</a>
                        <a href="#" class="list-group-item list-group-item-action">Favorite contacts</a>
                    </div>
                </div>
                <!-- Groups-->
                <div class="card-body">
                    <p class="lead">Groups</p>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <span class="badge badge-primary badge-pill float-right">14</span> <a href="#"> Project</a>
                        </li>
                        <li class="list-group-item">
                            <span class="badge badge-info badge-pill float-right">22</span> <a href="#"> Team</a>
                        </li>
                        <li class="list-group-item">
                            <span class="badge badge-warning badge-pill float-right">10</span> <a href="#"> Clients</a>
                        </li>
                        <li class="list-group-item">
                            <span class="badge badge-success badge-pill float-right">5</span> <a href="#"> Friends</a>
                        </li>
                    </ul>
                </div>
                <!--/ Groups-->
                <!--More-->
                <div class="card-body ">
                    <p class="lead">More</p>
                    <ul class="list-group">
                        <li><a href="#" class="list-group-item">Import</a></li>
                        <li><a href="#" class="list-group-item">Export</a></li>
                        <li><a href="#" class="list-group-item">Print</a></li>
                        <li><a href="#" class="list-group-item">Restore contacts</a></li>
                        <li><a href="#" class="list-group-item">Find duplicate</a></li>
                    </ul>
                </div>
                <!--/More-->
            </div>
            <!--/ Predefined Views -->
        </div>
    </div>
</div>

@endsection
