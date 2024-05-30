@extends('layouts.app')
@section('content')
    @include('_trial-modal')

    <div>
        <div id="side-trial" class="offcanvas offcanvas-end shadow" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Try a No Risk Trial Class</h5>
                <button type="button" class="btn-close" onclick="toggleOffcanvas()" aria-label="Close"></button>
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

    <div style="position: relative;" class="d-none d-lg-block">
        <div style="position:absolute; bottom: 40%; left: 50%; transform: translate(-50%, -50%); width: 100%;">
            <h2 id="great-txt">
                You <span class="text-red">belong</span> here
                <ion-icon name="heart"></ion-icon>
                <br>
                <span style="font-size: 0.5em; font-weight: normal; text-shadow: 1px 2px 4px black;" class="txt-crimson">Your child will fall in love with dance with our classes for all ages and levels!</span>
                <br>
                <div class="row">
{{--                    <div class="col"><a data-bs-toggle="modal" data-bs-target="#exampleModal"><div class="shadow btn btn-family btn-green">Schedule A Trial</div></a></div>--}}
                    <div class="col"><a href="/schedule"><div class="shadow btn btn-family btn-blue">Try it Week</div></a></div>
                    <div class="col"><a href="https://forms.gle/V5h81RVSbLrYLFfN7" target="_blank"><div class="shadow btn btn-family btn-green">Summer Schedule</div></a></div>
                    <div class="col"><a href="/contact-us"><div class="shadow btn btn-family btn-red">Contact Us</div></a></div>
                </div>
            </h2>
        </div>
        <img src="/images/header-aim.jpg" alt="" class="img-fluid" style="z-index: 0; width: 100%;">
    </div>

    <div class="d-block d-lg-none">
        <img src="/images/header-aim.jpg" alt="" class="img-fluid" style="z-index: 0;">
        <div class="container">
            <p class="text-center" style="font-size: 1.5em;">
                <span class="font-staat" style="font-size: 50px; line-height: 0.9;"><strong>You <span class="text-red">belong</span> here <ion-icon name="heart"></ion-icon></strong></span>
                <br>
                <small class="txt-crimson font-syne">Your child will fall in love with dance with our classes for all ages and levels!</small>
                <br>
            <div style="width: 100%;">
                <div>
{{--                    <a class="d-flex justify-content-center text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModal"><div class="shadow m-3 btn btn-lg btn-family btn-green">Schedule A Trial</div></a>--}}
{{--                    <a class="d-flex justify-content-center text-decoration-none" href="/schedule"><div class="shadow m-3 btn btn-lg btn-family btn-blue">Find Your Class</div></a>--}}
{{--                    <a class="d-flex justify-content-center text-decoration-none" href="https://forms.gle/V5h81RVSbLrYLFfN7" target="_blank"><div class="shadow m-3 btn btn-lg btn-family btn-pink">Summer Schedule</div></a>--}}
{{--                    <a class="d-flex justify-content-center text-decoration-none" href="/contact-us"><div class="shadow m-3 btn btn-lg btn-family btn-red">Contact Us</div></a>--}}
                    <div class="d-flex justify-content-center text-decoration-none m-3"><a href="/schedule"><div class="shadow btn btn-family btn-blue">Try it Week</div></a></div>
                    <div class="d-flex justify-content-center text-decoration-none m-3"><a href="https://forms.gle/V5h81RVSbLrYLFfN7" target="_blank"><div class="shadow btn btn-family btn-green">Summer Schedule</div></a></div>
                    <div class="d-flex justify-content-center text-decoration-none m-3"><a href="/contact-us"><div class="shadow btn btn-family btn-red">Contact Us</div></a></div>
                </div>
            </div>
            </p>
        </div>
    </div>

    <div class="bg-red py-5" id="skip" style="position: relative;">
        <div class="container" style="height: 100%;">
            <h3 class="font-staat text-white d-none d-lg-block" style="font-size: 75px; line-height: 0.25em;">Dance makes GREAT kids!
                <br>
                <br>
            <span class="text-white font-syne" style="font-size: 22px;">
                From your child’s first class to their graduation performance, your child will thrive at AIM! At AIM, dance classes are More Than Just Great Dancing!®. Our dancers go beyond technique to develop important life skills, learning to be respectful, confident, and conscientious young people who share their gifts and talents with the community.
            </span>
            </h3>
            <h3 class="text-white d-block d-lg-none font-syne" style="font-size: 22px;">
                <span class="font-staat" style="font-size: 34px;">Dance makes GREAT kids!</span>
                <br>From your child’s first class to their graduation performance, your child will thrive at AIM! At AIM, dance classes are More Than Just Great Dancing!®. Our dancers go beyond technique to develop important life skills, learning to be respectful, confident, and conscientious young people who share their gifts and talents with the community.
            </h3>
        </div>
        <div class="" style="height: 119px;"></div>
{{--        <div class="d-block d-md-none" style="height: 119px;"></div>--}}
        <div class="custom-shape-divider-bottom-1663856745">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
        {{--    <div style="height: 123px;"></div>--}}
        {{--    <div class="custom-shape-divider-bottom-1648525246" style="transform: translateY(1px);">--}}
        {{--        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">--}}
        {{--            <path d="M892.25 114.72L0 0 0 120 1200 120 1200 0 892.25 114.72z" class="shape-fill"></path>--}}
        {{--        </svg>--}}
        {{--    </div>--}}
    </div>

    <div style="position: relative;">
        <div class="container py-5" style="height: 100%;">
            <div class="row my-0 py-0 d-flex align-items-center" style="height: 100%;">
                <div class="col-sm-8">
                    <div class="mb-4">
                        <h2 style="font-size: 2.75em;" class="fw-bold text-center">Parents
                            <ion-icon name="heart-outline"></ion-icon>
                            Attitudes in Motion</h2>
                        <p class="text-center d-flex justify-content-center px-5 mx-5">
                            <em>
                                "Our priority is to create a safe and compassionate environment for you child to thrive and have fun.
                                We strive to build self-confidence through dance"
                            </em>
                        </p>
                    </div>
                    <h3 class="fw-bold text-center" style="font-size: 2em;">Fun & Engaging Classrooms</h3>
                    <div class="d-flex justify-content-start">
                        <p class="txt-crimson" style="font-size: 1.4em;">
                            <span class="text-red"><ion-icon name="heart"></ion-icon></span> Full time admin team - we're always here to answer your questions
                            <br><span class="text-red"><ion-icon name="heart"></ion-icon></span> Sprung floors for injury prevention
                            <br><span class="text-red"><ion-icon name="heart"></ion-icon></span> Experienced teachers with continuous professional development
                            <br><span class="text-red"><ion-icon name="heart"></ion-icon></span> Inviting lobby with closed circuit TV's to view classes
                            <br><span class="text-red"><ion-icon name="heart"></ion-icon></span> Ample parking
                        </p>
                    </div>
                    <h3 class="fw-bold text-center mt-4" style="font-size: 2em;">How We Support Our Students Beyond Dance </h3>
                    <div class="d-flex justify-content-start">
                        <div class="txt-crimson">
                            <div style="font-size: 1.4em;"><span class="text-red"><ion-icon name="heart"></ion-icon></span> Professional Development: Opportunities to join our student teacher program
                                <br><span class="text-red"><ion-icon name="heart"></ion-icon></span> Community Support: Through participation in fundraising and live events</div>
                            <p class="text-muted ms-2"><small>** Participation in these programs can be added to honors society and college applications</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>
        <div>
            <img src="/images-lava/parents-love-mistys-bg.png" alt="" class="img-fluid d-none d-lg-block" id="parents-image">
        </div>
    </div>


    <div class="bg-red mt-5 py-5" style="position: relative;">
        <div class="container">
            <div class="font-staat text-white text-center" style="font-size: 100px;">classes</div>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-5">
                <div class="col-sm my-2">
                    <div class="rounded" style="height: 325px; overflow: hidden;">
                        <img src="/images/class-4-and-under.jpg" alt="dancer posing" class="img-fluid" style="transform: scale(2.0);">
                    </div>
                    <div class="d-flex justify-content-center">
                        <a class="text-decoration-none text-white text-center" href="/schedule#class-4-and-under">
                            <div class="font-staat m-2 btn btn-lg shadow brand-green text-white" style="font-size: 1.5em;">Ages 4 & under</div>
                        </a>
                    </div>
                </div>
               <div class="col-sm my-2">
                   <div class="rounded" style="height: 325px; overflow: hidden;">
                       <img src="/images/class-5-6.jpg" alt="dancer posing" class="img-fluid" style="transform: scale(2.0);">
                   </div>
                   <div class="d-flex justify-content-center">
                       <a class="text-decoration-none text-white text-center" href="/schedule#class-5-6">
                           <div class="font-staat m-2 btn btn-lg shadow brand-blue text-white" style="font-size: 1.5em;">Ages 5-6</div>
                       </a>
                   </div>
               </div>
               <div class="col-sm my-2">
                   <div class="rounded" style="height: 325px; overflow: hidden;">
                       <img src="/images/class-7-12.jpg" alt="dancer posing" class="img-fluid" style="transform: scale(2.0);">
                   </div>
                   <div class="d-flex justify-content-center">
                       <a class="text-decoration-none text-white text-center" href="/schedule#class-7-12">
                           <div class="font-staat m-2 btn btn-lg shadow brand-pink text-white" style="font-size: 1.5em;">Ages 7-12</div>
                       </a>
                   </div>
               </div>
               <div class="col-sm my-2">
                   <div class="rounded" style="height: 325px; overflow: hidden;">
                       <img src="/images/class-teen.jpg" alt="dancer posing" class="img-fluid" style="transform: scale(2.0);">
                   </div>
                   <div class="d-flex justify-content-center">
                       <a class="text-decoration-none text-white text-center" href="/schedule#class-teens">
                           <div class="font-staat m-2 btn btn-lg shadow brand-red text-white" style="font-size: 1.5em;">Teens</div>
                       </a>
                   </div>
               </div>
               <div class="col-sm my-2">
                   <div class="rounded" style="height: 325px; overflow: hidden;">
                       <img src="/images/class-boys.jpg" alt="dancer posing" class="img-fluid" style="transform: scale(1.25);">
                   </div>
                   <div class="d-flex justify-content-center">
                       <a class="text-decoration-none text-white text-center" href="/schedule#class-boys">
                           <div class="font-staat m-2 btn btn-lg shadow brand-green text-white" style="font-size: 1.5em;">All Boys</div>
                       </a>
                   </div>
               </div>
    </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <h2 class="fw-bold text-center mb-2" style="font-size: 2.75em;">Your Child's Home Away From Home</h2>
            <div class="d-flex justify-content-center">
                <iframe style="max-width: 854px; width: 100%; height: 480px;" src="https://www.youtube.com/embed/XLTrehdiyAo?si=67oZAirxvQjL78pG" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div class="bg-red text-white py-5" style="position: relative;">
        <div class="container">
            <h2 class="fw-bold text-center" style="font-size: 2.75em;">28 years serving Plainview-Old Bethpage <br>and the surrounding communities</h2>
{{--            <p class="text-center">We provide dance classes for La Crosse, Onalaska, & Holmen families</p>--}}
            <div class="row" style="font-size: 1.5em;">
                <div class="col-sm text-center d-flex align-items-top justify-content-center" style="border-right: 1px solid white;"><p class="py-5"><span class="fw-bold" style="font-size: 1.75em;"><ion-icon name="home"></ion-icon><br>4</span><br> Active classrooms for convenient family scheduling</p></div>
                <div class="d-md-none"><hr></div>
                <div class="col-sm text-center d-flex align-items-top justify-content-center"><p class="py-5"><span class="fw-bold" style="font-size: 1.75em;"><ion-icon name="school"></ion-icon><br>12</span><br> Fabulous top notch teachers</p></div>
                <div class="d-md-none"><hr></div>
                <div class="col-sm text-center d-flex align-items-top justify-content-center" style="border-left: 1px solid white;"><p class="py-5"><span class="fw-bold" style="font-size: 1.75em;"><ion-icon name="calendar"></ion-icon><br>50+</span><br> Classes to choose from</p></div>
            </div>
        </div>
        <div style="height: 102px;"></div>
        <div class="custom-shape-divider-bottom-1663852805">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="container" style="position: relative;">
        <div class="row">
            <div class="d-flex align-items-center justify-content-start">
                <h2 class="py-5 my-4 font-staat text-lowercase text-right text-red" style="font-size: 75px;">
                    keeping your dancer<br>
                    <a data-bs-toggle="offcanvas" href="#offcanvasHappy" role="button" style="color: inherit;"><u>happy</u></a>,
                    <a data-bs-toggle="offcanvas" href="#offcanvasHealthy" role="button" style="color: inherit;"><u>healthy</u></a>, &
                    <a data-bs-toggle="offcanvas" href="#offcanvasSafe" role="button" style="color: inherit;"><u>safe</u></a>
                </h2>
            </div>
            <div class="d-flex align-items-center justify-content-center"></div>
            <img src="/images-lava/happy-healthy-safe.png" alt="female contemporary dancer" class="img-fluid d-none d-md-block" style="height: 465px; width: auto; position: absolute; right: 0; bottom: -2px; z-index: 3;">
        </div>
    </div>

    <!-- middrif fluid frames dancer -->
    {{--<div style="position: relative; height: 920px;">--}}
    {{--    <div class="container" style="height: 100%;">--}}
    {{--        <div id="apple-effect-wrap" style="height: 100%;">--}}
    {{--            <h3 class="apple-effect font-staat text-lowercase text-center" style="font-size: 100px; position: absolute; top: 36%; left: 50%; transform: translate(-50%, -50%); width: 100%; color: #D90036; z-index: 5 !important; line-height: 0.9;"><span style="color: transparent;">kee</span>ping your dancer<br>--}}
    {{--                <a data-bs-toggle="offcanvas" href="#offcanvasHappy" role="button" style="color: inherit;"><span style="color: transparent;">happy</span></a>,--}}
    {{--                <a data-bs-toggle="offcanvas" href="#offcanvasHealthy" role="button" style="color: inherit;">healthy</a>, and--}}
    {{--                <a data-bs-toggle="offcanvas" href="#offcanvasSafe" role="button" style="color: inherit;">safe</a>--}}
    {{--            </h3>--}}
    {{--            <div>--}}
    {{--                <img src="/images-lava/summit-main-dancer.png" alt="female contemporary dancer" class="img-fluid d-none d-lg-block" id="badge-image">--}}
    {{--            </div>--}}
    {{--            <h3 class="apple-effect font-staat text-lowercase text-center" style="font-size: 100px; position: absolute; top: 36%; left: 50%; transform: translate(-50%, -50%); width: 100%; color: #D90036; z-index: 1 !important; line-height: 0.9;">keeping your dancer<br>--}}
    {{--                <a data-bs-toggle="offcanvas" href="#offcanvasHappy" role="button" style="color: inherit;">happy</a>,--}}
    {{--                <a data-bs-toggle="offcanvas" href="#offcanvasHealthy" role="button" style="color: inherit;">healthy</a>, and--}}
    {{--                <a data-bs-toggle="offcanvas" href="#offcanvasSafe" role="button" style="color: inherit;">safe</a>--}}
    {{--            </h3>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</div>--}}
    <!-- end of middrif fluid frames dancer -->

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasHappy">
        <div class="offcanvas-header d-flex justify-content-end">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body" style="font-size: 22px;">
            <div class="d-flex justify-content-center">
                <img src="/images-lava/logo-mtjgd.png" alt="mtjgd logo" style="height: 180px; width: auto;">
            </div>
            <p class="text-center font-syne mx-4">
                <strong>What does that mean?</strong>
                <br>MTJGD is an affiliation of dance studios that subscribe to a high standard of dance instruction and management practices. We are united in the belief that dance has the power to change lives.
            </p>
        </div>
    </div>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasHealthy">
        <div class="offcanvas-header d-flex justify-content-end">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body" style="font-size: 22px;">
            <div class="d-flex justify-content-center">
                <img src="/images-lava/logo-ypad.png" alt="ypad logo" style="height: 180px; width: auto;">
            </div>
            <p class="text-center font-syne mx-4">
                <strong>What does that mean?</strong>
                <br>Hiring Best Practices
                <br>Onboarding & Training
                <br>Studio Safety
                <br>Abuse Protection
                <br>Healthy Bodies
                <br>Healthy Minds
                <br>Social Media & Communications
                <br>Artistic Integrity
                {{--                <br>To earn the designation, studios must complete training in CPR, First Aid, dance education and safety injury prevention, emergency preparedness, abuse awareness and prevention, dancer wellness and development, social media safety, nutrition and disordered eating, bullying and conflict resolution.--}}
            </p>
        </div>
    </div>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasSafe">
        <div class="offcanvas-header d-flex justify-content-end">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body" style="font-size: 22px;">
            <div class="d-flex justify-content-center">
                <img src="/images-lava/logo-safer-studio.png" alt="safer studio logo" style="filter: invert(100); height: 180px; width: auto;">
            </div>
            <p class="text-center font-syne mx-4">
                <strong>What does that mean?</strong>
                <br>Health & Symptom Awareness
                <br>Enhanced Cleaning Procedures
                <br>Classroom Management Practices
                <br>Touchless Payment Options
                <br>Continuous Communication
                {{--                <br>Wellness Checks For Staff--}}
                {{--                <br>Enhanced Cleaning Procedures--}}
                {{--                <br>Social Distancing Practices--}}
                {{--                <br>Touch-less Payment Options--}}
                {{--                <br>Gradual Re-Opening--}}
                {{--                <br>Continuous Communication--}}
            </p>
        </div>
    </div>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasLoved">
        <div class="offcanvas-header d-flex justify-content-end">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body" style="font-size: 22px;">
            <div class="d-flex justify-content-center">
                <img src="/images/logo-luv.png" alt="luv michael logo" style="height: 180px; width: auto;">
            </div>
            <p class="text-center font-syne mx-4">
                <strong>What does that mean?</strong>
                <br>
                Luv Michael is a Non Profit 501c3 dedicated to training, educating, and employing autistic adults and improving the lives of the autistic community beyond the lives of their parents.
            </p>
        </div>
    </div>

    <div class="bg-red text-white py-5" style="position: relative;">
        <div class="container">
            <div class="text-center txt-crimson" style="font-size: 1.5em;">
                AIM is the warmest, friendliest, and down to earth dance studio! My daughter LOVES going and has learned so much. The teachers meet her where she is at, support her, and most of all- celebrate her and all the other dancers. Can't recommend enough!
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <img class="review-img shadow mt-4" src="/images/review-jamie.png" alt="">
                <div class="fw-bold mx-4" style="font-size: 1.25em;">Jamie Pfeffer</div>
            </div>
        </div>
        <div style="height: 67px;"></div>
        <div class="custom-shape-divider-bottom-1663854216">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M892.25 114.72L0 0 0 120 1200 120 1200 0 892.25 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div style="position: relative; height: 325px;">
        {{--<div style="position: relative; height: 300px;">--}}
        <div class="container" style="height: 100%;">
            <div class="row" style="width: 100%; height: 100%; z-index: 1; position: relative;">
                <div class="col-sm d-flex justify-content-center align-items-center">
                    <div class="text-center">
                        <div class="fw-bold" style="font-size: 4em;">
                            <span style="font-family: 'Pacifico', cursive;">
                            Find joy in moving
                            </span>
                        </div>
                        <div class="mt-2" style="font-size: 1.5em;">Try a <u>NO RISK</u> trial class today.</div>
                        <div class="d-flex justify-content-center mt-2">
                            <form action="javascript:void(0);" method="POST" onsubmit="return false;">
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
                <div class="col-sm d-flex justify-content-center align-items-center">

                </div>
            </div>
        </div>
        <div>
            <img src="/images-lava/find-joy-in-moving.png" alt="" class="img-fluid d-none d-lg-block" id="joy-image">
{{--            <img src="/images-lava/find-joy-in-moving.png" alt="" class="img-fluid d-block d-lg-none" id="joy-mobile">--}}
        </div>
    </div>

    {{--<div id="safer-youth" class="bg-seashell pt-5">--}}
    {{--    <div class="container">--}}
    {{--        <div class="row">--}}
    {{--            <div class="col-sm d-flex align-items-center">--}}
    {{--                <img src="/images-lava/safer-studio-dancer.png" alt="" class="img-fluid">--}}
    {{--            </div>--}}
    {{--            <div class="col-sm d-flex align-items-center">--}}
    {{--                <div>--}}
    {{--                    <div class="d-flex justify-content-center">--}}
    {{--                        <img src="/images-lava/ypad-badge.png" alt="ypad logo" class="img-fluid" style="width: auto; height: 250px;">--}}
    {{--                    </div>--}}
    {{--                    <h2 class="text-center">MDU is Youth Protection Advocates in Dance  Certified!</h2>--}}
    {{--                    <p class="txt-crimson" style="font-size: 1.25em;">--}}
    {{--                        <span class="text-red"><ion-icon name="heart"></ion-icon></span> Background checked and CPR certified teachers--}}
    {{--                        <br><span class="text-red"><ion-icon name="heart"></ion-icon></span> Safer Studio Policy--}}
    {{--                        <br><span class="text-red"><ion-icon name="heart"></ion-icon></span> Teacher training & proven curriculum--}}
    {{--                        <br><span class="text-red"><ion-icon name="heart"></ion-icon></span> A focus on safety & wellness for every student--}}
    {{--                        <br><span class="text-red"><ion-icon name="heart"></ion-icon></span> Secured facilities--}}
    {{--                        <br><span class="text-red"><ion-icon name="heart"></ion-icon></span> Viewing windows--}}
    {{--                        <br><span class="text-red"><ion-icon name="heart"></ion-icon></span> Social media safety practices--}}
    {{--                    </p>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--    <div class="container">--}}
    {{--        <div class="row mb-0 pb-0 mt-4">--}}
    {{--            <div class="col-sm">--}}
    {{--                <div class="d-flex justify-content-center">--}}
    {{--                    <img src="/images-lava/safer-studio-logo.png" alt="safer studio logo" class="img-fluid" style="width: auto; height: 250px; filter: invert(1);">--}}
    {{--                </div>--}}
    {{--                <h2 class="text-center">MDU is a Safer Studio</h2>--}}
    {{--                <p class="txt-crimson" style="font-size: 1.25em;">--}}
    {{--                    MDU focuses on a hierarchy of measures to create a Safer Studio environment beginning with requiring students and staff who are ill to stay home, followed by frequent hand cleaning and good hygiene practices, amplified cleaning, and making curricular and facility adaptations to minimizing contact and mingling.--}}
    {{--                </p>--}}
    {{--            </div>--}}
    {{--            <div class="col-sm">--}}
    {{--                <img src="/images-lava/dancer-huddle.png" alt="" class="img-fluid">--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</div>--}}

    <div id="did-you-know" class="bg-red text-white" style="position: relative;">
        <div class="container py-5">
            <h2 class="fw-bold text-center text-white" style="font-size: 2.75em;">Did you know...</h2>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm d-flex justify-content-center">
                    <div class="txt-crimson text-center" style="font-size: 1.75em;">
                        Dance boosts <span class="txt-green fw-bold">confidence</span>, <span class="txt-green fw-bold">coordination</span>, and <span class="txt-green fw-bold">compassion</span> for others. Dancers learn <span class="txt-green fw-bold">hard work</span>, <span class="txt-green fw-bold">perseverance</span>, and <span class="txt-green fw-bold">team work</span>. Or as we like to say around here...Dance makes great kids!
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <div class="mt-3">
                <div class="row text-center">
                    <div class="col-sm-3"></div>
                    <div class="col-sm">
                        <div class="rounded" style="font-size: 1.3em; border: 4px solid #AFD237;">
                            <div class="px-1">
                                Students who attend dance regularly:
                                <ul style="list-style-type: none;" class="pb-0 mb-0 px-0 mx-0">
                                    <li><ion-icon name="heart"></ion-icon> Earn higher GPAs</li>
                                    <li><ion-icon name="heart"></ion-icon> Perform better in science, math, & writing</li>
                                    <li><ion-icon name="heart"></ion-icon> Earn higher test scores on SATs</li>
                                    <li><ion-icon name="heart"></ion-icon> Enroll in 4-year colleges & earn mostly As</li>
                                </ul>
                                <small style="font-size: 0.6em;"><em>Source: National Endowment for the Arts</em></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
            </div>
            <div>
                <p class="text-center txt-crimson mt-2" style="font-size: 1.75em;">
                    We don't teach kids to make great dancers.<br>We teach dance to make great kids!
                    <br>
                    <small style="font-size: 0.6em;"><em>- Misty Lown</em></small>
                </p>
            </div>
        </div>
        <div style="height: 165px;"></div>
        <div class="custom-shape-divider-bottom-1663856371">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
        {{--    <div class="custom-shape-divider-bottom-1663852805">--}}
        {{--        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">--}}
        {{--            <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>--}}
        {{--        </svg>--}}
        {{--    </div>--}}
    </div>

{{--    @include('trial-modal')--}}
    <div style="position: relative; height: 500px;" class="d-none d-lg-block">
        <div class="container pt-5" style="height: 100%;">
            {{--    <div style="position:absolute; bottom: 40%; left: 50%; transform: translate(-50%, -50%); width: 100%;">--}}
            <div class="font-staat text-lowercase" style="font-size: 85px; position: absolute; top: 10%; left: 5%; width: 100%; color: black; line-height: 0.9; z-index: -3 !important;">
                <div class="apple-effect-right">See what dance can</div>
                <div class="apple-effect-left"><span style="color: transparent;">se</span>do for your child!</div>
            </div>

            <div style="z-index: 2; position: relative;" class="mt-5 pt-5" id="section-cta">
                <div style="height: 75px;"></div>
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3 pt-4">
                    <div class="col-sm">
                        <div class="next-step mx-1 shadow py-5">
                            <p class="txt-green">Ready To Leap In?</p>
                            <a href="https://app.jackrabbitclass.com/regv2.asp?id=509319" target="_blank"
                               class="">
                                <div class="shadow btn btn-lg btn-green btn-family">&#10097; Enroll today!</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm">
{{--                                                <div class="next-step mx-1 shadow py-5">--}}
{{--                                                    <p class="txt-blue">Want To Give It A Try?</p>--}}
{{--                                                    <div>--}}
{{--                                                        <button type="button" class="shadow btn btn-lg btn-blue btn-family"--}}
{{--                                                                data-bs-toggle="modal" data-bs-target="#exampleModal">&#10097; Schedule A Trial!--}}
{{--                                                        </button>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
                    </div>
                    <div class="col-sm">
                        <div class="next-step mx-1 shadow py-5">
                            <p class="txt-pink">Still Have Questions?</p>
                            <a href="/contact-us" class="">
                                <div class="shadow btn btn-lg btn-pink btn-family">&#10097; Contact Us!</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <img src="/images-lava/cta-crop.png" alt="" class="img-fluid d-none d-lg-block" id="cta-image">
        </div>
    </div>

    <div id="mobile-cta-section" style="position: relative; height: 100%;" class="d-block d-lg-none my-5">
        <div class="container" style="height: 100%;">
            <div class="font-staat text-lowercase text-center" style="font-size: 85px; width: 100%; color: black; line-height: 0.9;">
                <div>See what dance can do for your child!</div>
            </div>

            <div>
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3">
                    <div class="col-sm my-3">
                        <div class="next-step mx-1 shadow py-5">
                            <p class="txt-green">Ready To Leap In?</p>
                            <a href="/" target="_blank"
                               class="">
                                <div class="shadow btn btn-lg btn-green btn-family">&#10097; Enroll today!</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm my-3">
                        {{--                        <div class="next-step mx-1 shadow py-5">--}}
                        {{--                            <p class="txt-blue">Want To Give It A Try?</p>--}}
                        {{--                            <div>--}}
                        {{--                                <button type="button" class="shadow btn btn-lg btn-blue btn-family"--}}
                        {{--                                        data-bs-toggle="modal" data-bs-target="#exampleModal">&#10097; Schedule A Trial!--}}
                        {{--                                </button>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                    </div>
                    <div class="col-sm my-3">
                        <div class="next-step mx-1 shadow py-5">
                            <p class="txt-pink">Still Have Questions?</p>
                            <a href="/contact-us" class="">
                                <div class="shadow btn btn-lg btn-pink btn-family">&#10097; Contact Us!</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    <div class="bg-red text-white py-5" style="position: relative;">--}}
{{--        <div class="container my-5">--}}
{{--            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-6">--}}
{{--                <div class="col d-flex align-items-center justify-content-center text-center px-2" id="main-review-stars">--}}
{{--                    <div>--}}
{{--                        <p style="font-size: 1.5em;" class="fw-bold mb-0">OUTSTANDING 4.9/5</p>--}}
{{--                        <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon>--}}
{{--                        <p style="color: seashell;"><small>based on <strong>54</strong> reviews</small></p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col px-2" id="review-stars">--}}
{{--                    <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon>--}}
{{--                    <p class="mb-0"><small><strong>They teach dance, but stress the importance of being a kind, hard working individual.</strong></small></p>--}}
{{--                    <p class="mb-0"><small>They care about each student as a person, not just a dancer.</small></p>--}}
{{--                    <div style="width: 30px; height: 1px; background: seashell;" class="my-1"></div>--}}
{{--                    <p style="color:seashell;"><small>Heather Storbeck</small></p>--}}
{{--                </div>--}}
{{--                <div class="col px-2" id="review-stars">--}}
{{--                    <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon>--}}
{{--                    <p class="mb-0"><small><strong>We love that this studio values character and modesty, along with excellence in dance.</strong></small></p>--}}
{{--                    <p class="mb-0"><small>The teachers have encouraged and nurtured our girls in their love of dance.</small></p>--}}
{{--                    <div style="width: 30px; height: 1px; background: seashell;" class="my-1"></div>--}}
{{--                    <p style="color:seashell;"><small>Shari Peterson</small></p>--}}
{{--                </div>--}}
{{--                <div class="col px-2" id="review-stars">--}}
{{--                    <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon>--}}
{{--                    <p class="mb-0"><small><strong>My daughter loves the relationships she has built with other kids her age.</strong></small></p>--}}
{{--                    <p class="mb-0"><small>She looks forward to dance each night and had become a stronger more confident dancer</small></p>--}}
{{--                    <div style="width: 30px; height: 1px; background: seashell;" class="my-1"></div>--}}
{{--                    <p style="color:seashell;"><small>Natasha Remis</small></p>--}}
{{--                </div>--}}
{{--                <div class="col px-2" id="review-stars">--}}
{{--                    <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon>--}}
{{--                    <p class="mb-0"><small><strong>Very clean and nice dance studio.</strong></small></p>--}}
{{--                    <p class="mb-0"><small>Our granddaughter is 22 months old and we got to watch her dance so it was awesome!</small></p>--}}
{{--                    <div style="width: 30px; height: 1px; background: seashell;" class="my-1"></div>--}}
{{--                    <p style="color:seashell;"><small>Randy Schroeder</small></p>--}}
{{--                </div>--}}
{{--                <div class="col px-2" id="review-stars">--}}
{{--                    <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon>--}}
{{--                    <p class="mb-0"><small><strong>Our young woman is nurtured and challenged as a dancer, a student, a leader and a friend</strong></small></p>--}}
{{--                    <p class="mb-0"><small>A place in addition to their home and school that children are safe, cared for, and are able to grow</small></p>--}}
{{--                    <div style="width: 30px; height: 1px; background: seashell;" class="my-1"></div>--}}
{{--                    <p style="color:seashell;"><small>Janet Holter</small></p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div style="height: 67px;"></div>--}}
{{--        <div class="custom-shape-divider-bottom-1663853988">--}}
{{--            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">--}}
{{--                <path d="M892.25 114.72L0 0 0 120 1200 120 1200 0 892.25 114.72z" class="shape-fill"></path>--}}
{{--            </svg>--}}
{{--        </div>--}}
{{--    </div>--}}

    <section id="guarantee" style="position: relative; z-index: 4;">
        <div class="bg-red text-white py-5">
            <div class="container">
                <div class="d-flex justify-content-center">
                    <img src="/images-lava/gauranteed-logo-crop.png" alt="" class="img-fluid">
                </div>
                <h2 class="fw-bold text-center text-white" style="font-size: 2.75em;">Our Guarantee</h2>
                <p class="text-center txt-crimson" style="font-size: 1.75em;">You'll love your experience or we'll work with you to make it right!</p>
                <div class="d-flex justify-content-center">
                    <a href="/schedule"><div class="btn btn-lg btn-danger shadow mx-4 text-white">Find Your Class</div></a>
                    <a href="mailto:@gmail.com?subject=Schedule A Call"><div class="btn btn-lg btn-danger shadow mx-4 text-white">Schedule A Call</div></a>
                </div>
            </div>
            <div style="height: 67px;"></div>
            <div class="custom-shape-divider-bottom-1663854216">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M892.25 114.72L0 0 0 120 1200 120 1200 0 892.25 114.72z" class="shape-fill"></path>
                </svg>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            setTimeout(function () {
                // After 6 seconds, add the 'show' class to display the module
                document.getElementById('side-trial').classList.toggle('show');
            }, 6000); // 6000 milliseconds = 6 seconds
        });

        function toggleOffcanvas() {
            var offcanvasElement = document.getElementById('side-trial');
            offcanvasElement.classList.toggle('show');

            // If you're using Bootstrap 5 or newer, you might also need to manually adjust the visibility
            // and the aria-hidden attribute for complete accessibility support.
            if(offcanvasElement.classList.contains('show')) {
                offcanvasElement.style.visibility = 'visible';
                offcanvasElement.setAttribute('aria-hidden', 'false');
            } else {
                offcanvasElement.style.visibility = 'hidden';
                offcanvasElement.setAttribute('aria-hidden', 'true');
            }
        }
    </script>

@endsection
