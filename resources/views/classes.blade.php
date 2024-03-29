@extends('layouts.app')
@section('title', 'Dance Classes | Old Bethpage, NY')
@section('content')

    <div class="banner-wrap d-block" style="position: relative;">
        <div class="banner-classes"></div>
        <div class="custom-shape-divider-bottom-1663856745">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="bg-white">
        <div class="container pb-5 pt-3">
            <h3 class="font-staat text-center" style="font-size: 100px; line-height: 0.9em;">Classes</h3>
            <x-content tag="classes"/>
{{--            <p class="font-syne text-center" style="font-size: 22px;">--}}
{{--                At Attitudes In Motion we pride ourselves on being a dynamic dance studio with a diverse schedule of classes for children and teens  of all ages and skill level, beginner - advanced.  From our studio favorites like jazz, hip-hop, lyrical, tap, and acro there’s  is a style for everyone.  We can’t wait to see you in class!--}}
{{--            </p>--}}
{{--            <div>--}}
{{--                <h2 class="font-syne pt-4">Jazz</h2>--}}
{{--                <p class="font-syne" style="font-size: 22px;">--}}
{{--                    A true American art form, jazz dance brings energy and life to all dancers.  Classes explore full body isolations to encourage individual expression and the development of personal style.  Our jazz classes teach classic technique to emphasize rhythms and style performed to contemporary music.--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                <h2 class="font-syne pt-4">Lyrical</h2>--}}
{{--                <p class="font-syne" style="font-size: 22px;">--}}
{{--                    Lyrical dance is a dance style that embodies influences of ballet, jazz, acro, and modern dance. In our classes, dancers learn to connect with music  through individual expression of elegant movements to connect with an emotion or story told by the lyrics of a song. Lyrical classes help dancers improve overall flexibility and technique.--}}
{{--                </p>--}}
{{--            </div>--}}
        </div>
    </div>

@endsection
