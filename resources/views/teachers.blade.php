@extends('layouts.app')
@section('content')

    <div class="banner-wrap d-none d-md-block" style="position: relative;">
        <div class="banner"></div>
        <div class="custom-shape-divider-bottom-1663856745">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <h3 class="font-staat text-center my-4" style="font-size: 100px; line-height: 0.9em;">Teachers</h3>

    <div class="bg-red-solid py-5" style="position: relative; height: 100%;">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4">
                <div class="col-sm mt-3 text-white" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-misty.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Miss<br>Misty Lown</div>
                    </div>
                    <p class="font-syne">
                        <span class="txt-yellow" style="font-size: 1.4em;">CEO Owner Founder</span><br>
                        Miss Misty has been sharing her passion for dance and mentorship with students for 30 years. She is the founder of More Than Just Great Dancing™ affiliated dance studios and “A Chance to Dance Foundation”, a 501(c)3 charitable organization. Misty is passionate about community service and has given over $500,000 in combined cash and studio scholarships over the past 23 years.
                    </p>
                </div>
                <div class="col-sm mt-3 text-white" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-kylie.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Miss<br>Kylie Williams</div>
                    </div>
                    <p class="font-syne">
                        <span class="txt-yellow" style="font-size: 1.4em;">Studio Director</span><br>
                        Miss Kylie returned to MDU in 2015 after graduating from Belhaven University with a Bachelor of Fine Arts in dance and a minor in accounting. She is the Director of our Award Winning Performance Company! She has worked with choreographers associated with Complexions, Ad Deum, Inaside Chicago, and Limon Dance Company. Her favorite dance role was in Pitch Perfect 2.
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4">
                <div class="col-sm font-staat text-white d-none d-lg-block" style="font-size: 100px; transform: rotate(-90deg) translate(-50%, -50%); height: 100%;">teachers</div>
                <div class="col-sm mt-3 d-flex align-items-center font-staat text-white d-block d-lg-none" style="font-size: 100px;">teachers</div>
                <div class="col-sm mt-3 text-white" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images-lava/staff-dennis.jpg" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Mr<br>Dennis Williams</div>
                    </div>
                    <p class="font-syne">
                        <span class="txt-yellow" style="font-size: 1.4em;">Dance Instructor</span><br>
                        Mr. Dennis grew up studying ballet at Maple Conservatory of Dance in California. He graduated from Belhaven University with a BFA in dance and has danced professionally with Ballet Mississippi and Filter Dance Company. Additionally, he has four years of experience in Martial Arts. Mr. Dennis has taught at MDU since 2015.
                    </p>
                </div>
            </div>
        </div>
        <div style="height: 300px;"></div>
        <div class="custom-shape-divider-bottom-1648524823" style="transform: translateY(1px);">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M892.25 114.72L0 0 0 120 1200 120 1200 0 892.25 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

@endsection
