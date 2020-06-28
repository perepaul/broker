@if(auth()->check())
    @if(auth()->user()->is_admin == 1)
        @include('partials.admin-sidebar')
    @else
        @include('partials.user-sidebar')
    @endif
@endif
{{-- @include('partials.admin-sidebar') --}}
{{-- @include('partials.user-sidebar') --}}
