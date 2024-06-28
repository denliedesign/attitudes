@extends('layouts.app')
@section('title', $title)
@section('description', $description)
@section('content')

    <div class="banner-wrap d-block" style="position: relative;">
        <div class="banner"></div>
        <div class="custom-shape-divider-bottom-1663856745">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="bg-white">
        <div class="container pb-5 pt-3">
            <div class="my-4 row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
                <div class="col d-flex align-items-center">
                    <div class="text-end">
                        <h3 class="font-staat" style="font-size: 100px; line-height: 0.9em;">{{ $head1 }}</h3>
                        <p class="font-syne" style="font-size: 22px;">
                            {{$content1}}
                        </p>
                        <a href="/schedule" class="text-decoration-none"><div class="btn btn-family rounded btn-green shadow mx-2">GET STARTED</div></a>
                    </div>
                </div>
                <div class="col d-flex align-items-center">
                    <img src="/images/{{ $image1 }}" alt="dancers" class="img-fluid my-3">
                </div>
            </div>
            <div class="my-4 row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
                <div class="col d-flex align-items-center">
                    <img src="/images/{{ $image2 }}" alt="dancers" class="img-fluid my-3">
                </div>
                <div class="col d-flex align-items-center">
                    <div>
                        <h3 class="font-staat" style="font-size: 100px; line-height: 0.9em;">{{ $head2 }}</h3>
                        <p class="font-syne" style="font-size: 22px;">
                            {{ $content2 }}
                        </p>
                        <a href="/teachers" class="text-decoration-none"><div class="btn btn-family rounded btn-blue shadow mx-2">MEET OUR TEACHERS</div></a>
                    </div>
                </div>
            </div>
            <div class="my-4 row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
                <div class="col d-flex align-items-center">
                    <div class="text-end">
                        <h3 class="font-staat" style="font-size: 100px; line-height: 0.9em;">{{ $head3 }}</h3>
                        <p class="font-syne" style="font-size: 22px;">
                            {{ $content3 }}
                        </p>
                        <a href="/schedule" class="text-decoration-none"><div class="btn btn-family rounded btn-pink shadow mx-2">FIND YOUR CLASS</div></a>
                    </div>
                </div>
                <div class="col d-flex align-items-center">
                    <img src="/images/{{ $image3 }}" alt="dancers" class="img-fluid my-3">
                </div>
            </div>
        </div>
    </div>

@endsection
