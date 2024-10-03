@extends('layouts.admin')

@section('auth')

    @include('layouts.navbars.auth.nav')          
    @include('layouts.navbars.auth.sidebar')
        @yield('content')
    @include('layouts.footers.auth.footer')

@endsection