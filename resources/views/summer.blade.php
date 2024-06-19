@extends('layouts.app')
@section('title', 'Summer Dance Classes Schedule | Old Bethpage, NY')
@section('content')
    @include('_trial-modal')

{{--    <div>--}}
{{--        <div id="side-trial" class="offcanvas offcanvas-end show shadow" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">--}}
{{--            <div class="offcanvas-header">--}}
{{--                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Try a No Risk Trial Class</h5>--}}
{{--                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>--}}
{{--            </div>--}}
{{--            <div class="offcanvas-body">--}}
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
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

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
            <h3 class="font-staat text-center" style="font-size: 100px; line-height: 0.9em;">Summer</h3>
            <p class="text-center font-syne fw-bold" style="font-size: 20px;">Watch their confidence soar with dance this summer!</p>
            <p class="text-center font-syne text-muted">Classes Begin 7/6 | 6 Weeks<br>PAY AS YOU GO!</p>
            <!-- START KAPA -->
            <div class="d-flex justify-content-center font-syne">
                <ul class="nav pt-2 pb-5 d-flex justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link m-1 rounded shadow btn-green btn-family" href="#class-4-and-under">Ages 4 & Under</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link m-1 rounded shadow btn-blue btn-family" href="#class-5-6">5-6 Years</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link m-1 rounded shadow btn-pink btn-family" href="#class-7-12">7-12 Years</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link m-1 rounded shadow btn-red btn-family" href="#class-teens">Teens</a>
                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link m-1 rounded shadow btn-green btn-family" href="#class-price">Dates & Pricing</a>
                                                    </li>
                </ul>
            </div>

            <div id="class-4-and-under" class="font-syne mt-5">
                <h2 class="mb-0 text-center font-staat" style="font-size: 3em;">Programs for Ages 4 & Under</h2>
                <div class="d-flex justify-content-center">
                    {{--                                <a href="" target="_blank" class="text-decoration-none"><div class="btn btn-family rounded btn-green shadow mx-2">VIEW SCHEDULE</div></a>--}}

                    <a href="/parent-portal" class="text-decoration-none"><div class="btn btn-family rounded btn-green shadow mx-2">GET STARTED</div></a>
                </div>
                <p class="text-center mb-4 mt-1"><small style="font-size: 0.8em;" class="text-muted fw-bold">In Parent Portal Sort By: Ascending<br>& Filter Session: Summer 2024</small></p>
                <x-display graphic="summer-1.png" jr="" />
            </div>
            <div id="class-5-6" class="font-syne mt-5">
                <h2 class="mb-0 text-center font-staat" style="font-size: 3em;">Programs for 5-6 Years</h2>
                <div class="d-flex justify-content-center">
                    {{--                    <a href="" class="text-decoration-none"><div class="btn btn-family rounded btn-blue shadow mx-2">VIEW SCHEDULE</div></a>--}}
                                        <a href="/parent-portal" class="text-decoration-none"><div class="btn btn-family rounded btn-blue shadow mx-2">GET STARTED</div></a>
                </div>
                <p class="text-center mb-4 mt-1"><small style="font-size: 0.8em;" class="text-muted fw-bold">In Parent Portal Sort By: Ascending<br>& Filter Session: Summer 2024</small></p>
                <x-display graphic="summer-2.png" jr="" />
                {{--                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-1">--}}
                {{--                    <x-content tag="schedule-5-6"/>--}}
                {{--                </div>--}}
            </div>
            <div id="class-7-12" class="font-syne mt-5">
                <h2 class="mb-0 text-center font-staat" style="font-size: 3em;">Programs for 7-12 Years</h2>
                <div class="d-flex justify-content-center">
                    {{--                    <a href="/parent-portal" class="text-decoration-none"><div class="btn btn-family rounded btn-pink shadow mx-2">VIEW SCHEDULE</div></a>--}}
                                        <a href="/parent-portal" class="text-decoration-none"><div class="btn btn-family rounded btn-pink shadow mx-2">GET STARTED</div></a>
                </div>
                <p class="text-center mb-4 mt-1"><small style="font-size: 0.8em;" class="text-muted fw-bold">In Parent Portal Sort By: Ascending<br>& Filter Session: Summer 2024</small></p>
                <x-display graphic="summer-7-9-new.png" jr="" />

                {{--                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-1">--}}
                {{--                    <x-content tag="schedule-7-12"/>--}}
                {{--                </div>--}}
            </div>
            <div id="class-teens" class="font-syne mt-5">
                <h2 class="mb-0 text-center font-staat" style="font-size: 3em;">Programs for Teens</h2>
                <div class="d-flex justify-content-center">
                    {{--                    <a href="/parent-portal" class="text-decoration-none"><div class="btn btn-family rounded btn-red shadow mx-2">VIEW SCHEDULE</div></a>--}}
                                        <a href="/parent-portal" class="text-decoration-none"><div class="btn btn-family rounded btn-red shadow mx-2">GET STARTED</div></a>
                </div>
                <p class="text-center mb-4 mt-1"><small style="font-size: 0.8em;" class="text-muted fw-bold">In Parent Portal Sort By: Ascending<br>& Filter Session: Summer 2024</small></p>
                <x-display graphic="summer-4.png" jr="" />
                {{--                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-1">--}}
                {{--                    <x-content tag="schedule-teens"/>--}}
                {{--                </div>--}}
            </div>
            <div id="class-price" class="font-syne mt-5">
                <h2 class="mb-0 text-center font-staat" style="font-size: 3em;">Dates & Pricing</h2>
                <div class="d-flex justify-content-center">
                    {{--                    <a href="/parent-portal" class="text-decoration-none"><div class="btn btn-family rounded btn-red shadow mx-2">VIEW SCHEDULE</div></a>--}}
{{--                    <a href="/parent-portal" class="text-decoration-none"><div class="btn btn-family rounded btn-red shadow mx-2">GET STARTED</div></a>--}}
                </div>
{{--                <p class="text-center mb-4 mt-1"><small style="font-size: 0.8em;" class="text-muted fw-bold">In Parent Portal Sort By: Ascending<br>& Filter Session: Summer 2024</small></p>--}}
                <x-display graphic="summer-5.png" jr="" />
                {{--                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-1">--}}
                {{--                    <x-content tag="schedule-teens"/>--}}
                {{--                </div>--}}
            </div>
        </div>
    </div>
    <!-- END KAPA -->

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
