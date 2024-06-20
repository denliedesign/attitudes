@extends('layouts.app')
@section('title', 'Dance Schedule | Old Bethpage, NY')
@section('content')
    @include('_trial-modal')

    <div>
        <div id="side-trial" class="offcanvas offcanvas-end show shadow" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-header">
{{--                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Try a No Risk Trial Class</h5>--}}
                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Sign up for Summer today</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="col d-flex justify-content-start"><a href="/summer"><div class="shadow btn btn-lg btn-family btn-green">Summer Schedule</div></a></div>

                {{--                <form action="javascript:void(0);" method="POST" class="text-dark" onsubmit="return false;">--}}
{{--                    <div class="row g-0 align-items-center">--}}
{{--                        <div class="col-auto mx-0">--}}
{{--                            <input type="email" id="inputEmail" class="form-control mx-0" placeholder="Email">--}}
{{--                        </div>--}}
{{--                        <div class="col-auto mx-0">--}}
{{--                            <button type="button" id="buttonSubmit" class="btn btn-flip-danger fw-bold shadow mx-0" onclick="showModal()">SUBMIT</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
            </div>
        </div>
    </div>

    <div class="banner-wrap d-block" style="position: relative;">
        <div class="banner-schedule"></div>
        <div class="custom-shape-divider-bottom-1663856745">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="bg-white">
        <div class="container pb-5 pt-3">
            <h3 class="font-staat text-center" style="font-size: 100px; line-height: 0.9em;">COMING SOON</h3>
{{--            <p class="text-center font-syne fw-bold" style="font-size: 20px;">Coming Soon!</p>--}}
        </div>
    </div>

    <style>
        .jr-reg-col a {
            background: #EE1B4D;
            color: white;
            padding: 4px 8px;
            border-radius: 5px;
            text-decoration: none;
        }
        tr:nth-of-type(even) {
            background: white !important;
            border-top: 1px solid gray !important;
            border-bottom: 1px solid gray !important;
        }
    </style>

@endsection
