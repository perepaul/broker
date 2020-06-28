@if(auth()->check())
    @if(auth()->user()->is_adimn)
        @include('partials.admin-sidebar')
    @else
        @include('partials.user-sidebar')
    @endif
@endif
{{-- @include('partials.admin-sidebar') --}}
{{-- @include('partials.user-sidebar') --}}
