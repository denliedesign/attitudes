@extends('layouts.app')
@section('title', 'Sitemap | Attitudes in Motion')
@section('content')

{{--    <div class="banner-wrap d-block" style="position: relative;">--}}
{{--        <div class="banner-about"></div>--}}
{{--        <div class="custom-shape-divider-bottom-1663856745">--}}
{{--            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">--}}
{{--                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>--}}
{{--            </svg>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="bg-white">
        <div class="container pb-5 pt-3">
            <h3 class="font-staat text-center" style="font-size: 100px; line-height: 0.9em;">Sitemap</h3>
            <ul class="navbar-nav" style="font-size: 1.5em; list-style-type: initial;">
                <li class="nav-item mx-1"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item mx-1"><a class="nav-link" href="/teachers">Teachers</a></li>
                <li class="nav-item mx-1"><a class="nav-link" href="/schedule">Schedule</a></li>
                <li class="nav-item mx-1"><a class="nav-link" href="/competition-team">Competition</a></li>
                <li class="nav-item mx-1"><a class="nav-link" href="/classes">Classes</a></li>
                <li class="nav-item mx-1"><a class="nav-link" href="/events">Events</a></li>
                <li class="nav-item mx-1"><a class="nav-link" href="/parent-portal">Parents</a></li>
                <li class="nav-item mx-1"><a class="nav-link" href="/contact-us">Contact</a></li>
                <li class="nav-item mx-1"><a class="nav-link" href="/aboutus">About</a></li>
                <li class="nav-item mx-1"><a class="nav-link" href="/policies">Policies</a></li>
                <li class="nav-item mx-1"><a class="nav-link" href="/login">Admin</a></li>
            </ul>
        </div>
    </div>

@endsection
