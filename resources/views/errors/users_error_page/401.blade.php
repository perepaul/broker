@extends('layouts.users_master')

@section('content')
<div class="content-body">
    <h1 class="text-center text-primary bold page_error_code">401</h1>
    <h1 class="page_error_info">Error-401 Unauthorized Access</h1>
    <div class="row">
        <div class="col-md-offset-3 col-sm-offset-3 col-xs-offset-2 col-xs-8 col-sm-6">
            <form action="javascript:;" method="post" class="page_error_search">
                <div class="text-center page_error_btn">
                    <a class="btn btn-primary btn-lg" href='#'><i class='fa fa-location-arrow'></i> &nbsp; Back to Home</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection