@component('mail::layout')
@slot('header')
@component('mail::header', ['url' => config('app.url')])
<img src="{{asset('assets/img/logo/logo.png')}}" class="" alt="App Logo" style="width:120px;height:auto">
@endcomponent
@endslot


@yield('message')

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}


Thanks,<br>
{{ config('app.name') }}
@slot('footer')
@component('mail::footer')
© {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
@endcomponent
@endslot
@endcomponent
