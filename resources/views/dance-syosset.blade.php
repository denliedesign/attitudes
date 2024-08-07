@extends('layouts.app')
@section('title', 'Dance Syosset | Attitudes in Motion')
@section('description', 'Discover top-notch children\'s dance classes in Syosset at Attitudes in Motion. Our dance studio offers fun and educational dance lessons for toddlers and young dancers. Enroll in Syosset dance classes today!')
@section('content')

    @include('_fly-out')

    <div class="banner-wrap d-block" style="position: relative;">
        <div class="banner-night"></div>
        <div class="custom-shape-divider-bottom-1663856745">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="bg-white">
        <div class="container pb-5 pt-3">
            <h3 class="font-staat text-center" style="font-size: 100px; line-height: 0.9em;">Dance Syosset</h3>
            <p class="text-center font-syne" style="font-size: 22px;">
                Welcome to Attitudes in Motion, the leading children's dance studio in Syosset! We provide a diverse range of dance classes to nurture and inspire young dancers. Our skilled instructors deliver engaging dance lessons for toddlers and children of all skill levels. Whether you're seeking beginner toddler dance classes or more advanced training, our Syosset dance studio is the perfect environment for your child to thrive and enjoy the art of dance. Join our community and experience the joy of dance at Attitudes in Motion in Syosset!
            </p>
            <div class="d-flex justify-content-center font-syne">
                {{--                <small><a class="text-muted text-decoration-none" href="/tumbling-classes-plainview">Tumbling Classes Plainview</a></small>--}}
                &nbsp;
            </div>
        </div>
    </div>

@endsection
