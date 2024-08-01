@extends('layouts.app')
@section('title', 'Regional & National Competition Teams | Old Bethpage, NY')
@section('content')

    @include('_fly-out')

    <div class="banner-wrap d-block" style="position: relative;">
        <div class="banner-competition"></div>
        <div class="custom-shape-divider-bottom-1663856745">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="bg-white">
        <div class="container pb-5 pt-3">
            <h3 class="font-staat text-center d-none d-md-block" style="font-size: 100px; line-height: 0.9em;">Competition Teams</h3>
            <h3 class="font-staat text-center d-block d-md-none" style="font-size: 80px; line-height: 0.9em;">Competition Teams</h3>
            <x-content tag="competition"/>
{{--            <h2 class="text-center">Regional Competition Teams</h2>--}}
{{--            <p class="text-center">--}}
{{--                Perfect for dancers looking for entry opportunities into an intensive program.--}}
{{--                <br>We have four teams: Munchkins (Ages 8-9), Minis (Ages 10-12), Juniors (Ages 12-14), and Seniors (Ages 14+).--}}
{{--            </p>--}}

{{--            <h4>Team Genres</h4>--}}
{{--            <ul>--}}
{{--                <li>Tap</li>--}}
{{--                <li>Jazz</li>--}}
{{--                <li>Hip-Hop</li>--}}
{{--                <li>Lyrical/Contemporary</li>--}}
{{--                <li>Acro</li>--}}
{{--                <li>Musical Theater</li>--}}
{{--            </ul>--}}

{{--            <h4>Weekly Schedule</h4>--}}
{{--            <p>Each dancer joins us in-studio for a minimum of 3 hours per week, for one routine, inclusive of choreography, technique, and production. Schedule commitment increases for dancers invited into multiple pieces.</p>--}}

{{--            <h4>Competition Season</h4>--}}
{{--            <p>All teams compete in 3 competitions throughout the season from March-May and have additional local performance opportunities. We are so proud of our dancers and the tight bonds of their friendships. At Attitudes In Motion, it’s about so much more than dancing, we’re a family.</p>--}}

{{--            <h4>Summer Training</h4>--}}
{{--            <p>In an effort to prepare for successful future seasons, dancers are required to complete 8-12 hours of summer training focused on building technique & learning new choreography. We pride ourselves on encouraging our dancers to truly enjoy the off-season and give students the flexibility to complete their hours before and after the camp season.</p>--}}

{{--            <h4>Special Programs</h4>--}}
{{--            <p>We are pleased to offer these teams additional local performance opportunities, in-studio workshops, and specialty conventions.</p>--}}

{{--            <h2 class="text-center mt-5">National Competition Teams</h2>--}}
{{--            <p class="text-center">--}}
{{--                Our National Competition Teams are specialized towards dancers looking for true intensive and pre-professional programs.--}}
{{--                <br>We have two teams: Juniors (Ages 11-14) and Seniors (Ages 14+).--}}
{{--            </p>--}}

{{--            <h4>Team Genres</h4>--}}
{{--            <p>--}}
{{--                Dancers invited onto our National Teams compete in 6 pieces of choreography in the styles below plus an all-teams production number.--}}
{{--            </p>--}}
{{--            <ul>--}}
{{--                <li>Tap</li>--}}
{{--                <li>Jazz</li>--}}
{{--                <li>Hip-Hop</li>--}}
{{--                <li>Lyrical</li>--}}
{{--                <li>Contemporary</li>--}}
{{--                <li>Musical Theater</li>--}}
{{--            </ul>--}}

{{--            <h4>Weekly Schedule</h4>--}}
{{--            <p>These teams dance at the studio 10-12 hours per week, inclusive of choreography, technique, and production.</p>--}}

{{--            <h4>Competition Season</h4>--}}
{{--            <p>All teams compete in 3 competitions throughout the season from March to May and have additional local performance opportunities. We are so proud of our dancers and the tight bonds of their friendships. At Attitudes In Motion, it’s about so much more than dancing; we're a family.</p>--}}

{{--            <h4>Summer Training</h4>--}}
{{--            <p>In an effort to prepare for successful future seasons, dancers are required to complete 8-12 hours of summer training focused on building technique and learning new choreography. We pride ourselves on encouraging our dancers to truly enjoy the off-season and give students the flexibility to complete their hours before and after the camp season.</p>--}}

{{--            <h4>Special Programs</h4>--}}
{{--            <ul>--}}
{{--                <li>Additional local performance opportunities</li>--}}
{{--                <li>In-studio workshops</li>--}}
{{--                <li>Specialty conventions</li>--}}
{{--                <li>Spotlight guest classes featuring nationally recognized choreographers</li>--}}
{{--                <li>Examples: Theresa Stone (SYTYCD), Meg Alfonso (SYTYCD), and Carlo Neto (Broadway Dance Center)</li>--}}
{{--            </ul>--}}


        </div>
    </div>

@endsection
