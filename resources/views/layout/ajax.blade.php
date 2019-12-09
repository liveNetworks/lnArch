@php
    header('X-LN-Title: '. View::getSection('title') . ' ' . env('APP_NAME'));
@endphp

@yield('content')
@yield('javascript')