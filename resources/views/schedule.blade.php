@extends('layouts.app')
@section('content')
    @include('_trial-modal')

    <div>
        <div id="side-trial" class="offcanvas offcanvas-end show shadow" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Try a No Risk Trial Class</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <form action="javascript:void(0);" method="POST" class="text-dark" onsubmit="return false;">
                    <div class="row g-0 align-items-center">
                        <div class="col-auto mx-0">
                            <input type="email" id="inputEmail" class="form-control mx-0" placeholder="Email">
                        </div>
                        <div class="col-auto mx-0">
                            <button type="button" id="buttonSubmit" class="btn btn-flip-danger fw-bold shadow mx-0" onclick="showModal()">SUBMIT</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

{{--    <div>--}}
{{--        <div id="side-trial" class="offcanvas offcanvas-end show shadow" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">--}}
{{--            <div class="offcanvas-header">--}}
{{--                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Try a No Risk Trial Class</h5>--}}
{{--                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>--}}
{{--            </div>--}}
{{--            <div class="offcanvas-body">--}}
{{--                <form action="">--}}
{{--                    <div class="row g-0 align-items-center">--}}
{{--                        <div class="col-auto mx-0">--}}
{{--                            <input type="email" id="inputEmail" class="form-control mx-0" placeholder="Email">--}}
{{--                        </div>--}}
{{--                        <div class="col-auto mx-0">--}}
{{--                            <button type="button" id="buttonSubmit" class="btn btn-flip-danger fw-bold shadow mx-0" data-bs-toggle="modal" data-bs-target="#exampleModal">SUBMIT</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="banner-wrap d-none d-md-block" style="position: relative;">
        <div class="banner"></div>
        <div class="custom-shape-divider-bottom-1663856745">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="bg-white">
        <div class="container pb-5 pt-3">
            <h3 class="font-staat text-center" style="font-size: 100px; line-height: 0.9em;">Schedule</h3>

            <!-- START KAPA -->
                        <div class="d-flex justify-content-center font-syne">
                            <ul class="nav pt-2 pb-5">
                                <li class="nav-item">
                                    <a class="nav-link m-1 rounded shadow btn-green btn-family" href="#class-1-6">Ages 6 & Under</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link m-1 rounded shadow btn-blue btn-family" href="#class-7-12">7-12 Years</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link m-1 rounded shadow btn-pink btn-family" href="#class-teens">Teens</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link m-1 rounded shadow btn-red btn-family" href="#class-boys">All Boys</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link m-1 rounded shadow btn-green btn-family" href="#class-adults">Adults</a>
                                </li>
                            </ul>
                        </div>

                        <div id="class-1-6" class="text-center font-syne">
                            <h2 class="mb-0" style="font-size: 2em;">Programs for Ages 6 & Under</h2>
                            <div class="my-3">
                                <a href="" target="_blank" class="text-decoration-none"><div class="btn btn-family rounded btn-green shadow mx-2">VIEW SCHEDULE</div></a>
                                <a href="" target="_blank" class="text-decoration-none"><div class="btn btn-family-outline rounded btn-green-outline shadow mx-2">GET STARTED</div></a>
                            </div>
                            <div class="row">
                                <div class="col-sm my-1">
                                    <h3 class="text-uppercase mb-0 font-staat">Move with Me</h3>
                                    <p class="mb-0">
                                        Designed for our littlest dancers! This is a fun and upbeat class for dancers ages 1-3 and their caregiver. This class works on musicality, gross motor skills and following directions in a warm a friendly environment. Adults will be actively participating in class with their dancer. (*Toddler must be walking)
                                    </p>
                                </div>
                                <div class="col-sm my-1">
                                    <h3 class="text-uppercase mb-0 font-staat">Rap & Roll (Hip Hop & Acro)</h3>
                                    <p class="mb-0">
                                        A fun fast pasted mix of Hip Hop and tumbling for children ages 2-4 who are ready to separate from their caregiver.
                                    </p>
                                </div>
                                <div class="col-sm my-1">
                                    <h3 class="text-uppercase mb-0 font-staat">Tots in Motion</h3>
                                    <p class="mb-0">
                                        A warm and welcoming creative movement class for dancers ages 2-3 who are ready to separate from their caregiver. This class is filled with lots of fun music, props and imagery.
                                    </p>
                                </div>
                                <div class="col-sm my-1">
                                    <h3 class="text-uppercase mb-0 font-staat">Tutus & Tuxedos (Tap & Ballet)</h3>
                                    <p class="mb-0">
                                        A combination class for both ballet and tap. Children will be introduced to the foundations of basic ballet and tap steps. Children will begin to build their foundation in basic dance etiquette. This class is a wonderful, fun way to introduce children to dance and help build independence. Children will learn choreography and dances.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript" src="https://app.jackrabbitclass.com/jr3.0/Openings/OpeningsJS?OrgID=383292&Session=2023-2024&hidecols=Gender,Ages,Session,Openings&sort=Class"></script>
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
    </style>

@endsection
