@extends('layouts.admin')

@section('content')

<div class="content-body">
    <div class="d-flex justify-content-center row">
        <div class="card col-11" style="">
            <div class="card-header">
                <h4 class="card-title">App Settings</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" id="homeIcon-tab" data-toggle="tab" href="#link1"
                                aria-controls="homeIcon" aria-expanded="true"><i class="la la-cog"></i>
                                General Settings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profileIcon-tab" data-toggle="tab" href="#link2"
                                aria-controls="profileIcon" aria-expanded="false"><i class="la la-bitcoin"></i>
                                Currencies</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="aboutIcon-tab" data-toggle="tab" href="#link3" aria-controls="about"
                                aria-expanded="false"><i class="la la-book"></i> Plans</a>
                        </li>
                    </ul>
                    <div class="tab-content px-1 pt-1">
                        <div role="tabpanel" class="tab-pane active" id="link1" aria-labelledby="homeIcon-tab"
                            aria-expanded="true">
                            <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy
                                canes
                                marzipan carrot cake. Sesame snaps lemon drops candy marzipan donut brownie tootsie
                                roll. Icing
                                croissant bonbon biscuit gummi bears.</p>
                        </div>
                        <div class="tab-pane" id="link2" role="tabpanel" aria-labelledby="profileIcon-tab"
                            aria-expanded="false">
                            <div class="p-2">
                                <div class="mb-2">
                                    <h4>Currencies <span onclick="getModal({type:'add-currency'})"
                                            class="pull-right btn btn-primary btn-sm"><i class="la la-plus"></i></span>
                                    </h4>
                                </div>
                                <ul class="list-group">
                                    @foreach ($currencies as $currency)
                                    <li class="list-group-item  p-1">
                                        <span class="float-right">
                                            <span class="btn btn-primary btn-sm"
                                                onclick="getModal({type:'update-currency',currency_id:{{$currency->id}}})">
                                                <i class="la la-edit white"></i>
                                            </span>
                                            <a class="btn btn-danger btn-sm"
                                                href="{{route('admin.settings.remove.currency',$currency->id)}}">
                                                <i class="la la-times white"></i>
                                            </a>
                                        </span>
                                        {{$currency->name}}
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane" id="link3" role="tabpanel" aria-labelledby="aboutIcon-tab"
                            aria-expanded="false">
                            <div class="p-2">
                                <div class="mb-2">
                                    <h4>Plans <span onclick="getModal({type:'add-plan'})"
                                            class="pull-right btn btn-primary btn-sm"><i class="la la-plus"></i></span>
                                    </h4>
                                </div>
                                <ul class="list-group">
                                    @foreach ($plans as $plan)
                                    <li class="list-group-item  p-1">
                                        <span class="float-right">
                                            <span class="btn btn-primary btn-sm"
                                                onclick="getModal({type:'update-plan',plan_id:{{$plan->id}}})">
                                                <i class="la la-edit white"></i>
                                            </span>
                                            <a class="btn btn-danger btn-sm"
                                                href="{{route('admin.settings.remove.currency',$plan->id)}}">
                                                <i class="la la-times white"></i>
                                            </a>
                                        </span>
                                        <span>{{$plan->name}}</span><span class="ml-2">({{$plan->price}})</span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
