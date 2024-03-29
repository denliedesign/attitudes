@extends('layouts.app')
@section('content')

    <div class="banner-wrap d-block" style="position: relative;">
        <div class="banner-about"></div>
        <div class="custom-shape-divider-bottom-1663856745">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="bg-white">
        <div class="container pb-5 pt-3">
            <h3 class="font-staat text-center" style="font-size: 100px; line-height: 0.9em;">About Us</h3>
            <div class="row">
                <div class="col-sm d-flex justify-content-center">
                    <div>
                        <x-photo tag="about" class="img-fluid shadow rounded my-4" style=""/>
{{--                        <img src="/images/about-us.jpg" alt="" class="img-fluid shadow rounded my-4">--}}
{{--                        <img src="/images/about-us-2.jpg" alt="" class="img-fluid shadow rounded my-4">--}}
                    </div>
                </div>
                <div class="col-sm">
                    <x-content tag="about"/>
{{--                    <h2 class="font-syne pt-4">Our Mission</h2>--}}
{{--                    <p class="font-syne" style="font-size: 22px;">--}}
{{--                        Here at Attitudes In Motion, we use dance to make the world a better place, one child at a time.--}}
{{--                        <br><br>--}}
{{--                        Since 1995 our number one goal has always been to help our students build confidence and poise while learning that with a little hard work, they can accomplish anything they set their minds to. We pride ourselves on creating a warm, inviting, and fun environment that is a safe space where students of all ages can express their authentic personalities.  As a community, we’re here to support our dancers and their families at each milestone, a foundation that will help our students succeed in all areas of life.--}}
{{--                    </p>--}}
{{--                    <h2 class="font-syne pt-4">Dance Classes for All Ages & Skills</h2>--}}
{{--                    <p class="font-syne" style="font-size: 22px;">--}}
{{--                        Our studio provides a personalized experience for all of our students to connect with movement and music at every age and skill level. We offer a variety of classes for dancers including Move With Me for walking toddlers with their caregivers, to an action-packed boy’s hip-hop class, and a wide variety of youth and teen classes.--}}
{{--                        <br><br>--}}
{{--                        For students looking to take their training to the next level, we also have tight knit and hardworking  award-winning competition program made of up two teams at both the regional and national level. Entry into these programs are by audition or invitation only.  To learn more  click here.--}}
{{--                    </p>--}}
                </div>
            </div>
            <div class="row">
                <div class="col-sm d-flex align-items-center justify-content-center">

                </div>
                <div class="col-sm">

                </div>

            </div>
        </div>
    </div>

@endsection
