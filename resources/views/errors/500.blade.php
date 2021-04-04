
@extends('layouts.master')

@section('content-background')

<div class="uk-section uk-padding-remove-vertical in-liquid-breadcrumb">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1">
                <ul class="uk-breadcrumb"></ul>
            </div>
        </div>
    </div>
</div>

@endsection


@section('content-trading')

<div class="uk-section uk-section-muted uk-padding-large in-liquid-8">
    <div class="uk-container">

        <div class="uk-grid uk-flex uk-flex-center in-offset-bottom-20">
            <div class="uk-width-5-6@m uk-text-center">
                <h2 class="uk-margin-remove">Error 500</h2>
                <p class="uk-text-lead uk-text-muted uk-margin-small-top">Internal server error.</p>

            </div>
        </div>
    </div>
</div>


@endsection
