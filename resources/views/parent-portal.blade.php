@extends('layouts.app')
@section('title', 'Parent Portal | Attitudes in Motion')
@section('content')

    <div class="banner-wrap d-block" style="position: relative;">
        <div class="banner-parent"></div>
        <div class="custom-shape-divider-bottom-1663856745">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="bg-white">
        <div class="container pb-5 pt-3">
            <h3 class="font-staat text-center" style="font-size: 100px; line-height: 0.9em;">Parent Portal</h3>
            <x-content tag="parents"/>
        </div>
    </div>

@endsection
