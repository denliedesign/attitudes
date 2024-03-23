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

    <!-- ADMIN CONTROL -->
    @can('update', \App\Teacher::class)
        <div id="teachers" style="border:2px solid red;" class="my-3 py-1 rounded shadow">
            <span class="fw-bold mx-3">teacher section</span>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#teacherModal">
                Add New
            </button>
            @include('/teachers/form')
        </div>
    @endcan
    <!-- END ADMIN CONTROLS -->

    <div class="bg-red-solid py-5" style="position: relative; height: 100%;">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4">
                @foreach($teachers as $teacher)
                    <div class="col-sm mt-3 text-white" style="height: 100%;">
                        @include('/teachers/admin')
                        <div style="position: relative;" class="mt-3">
                            @if($teacher->teacherImage)
                                <img src="{{ asset('/storage/' . $teacher->teacherImage) }}" alt="staff member" class="img-fluid" style="max-height: 382.50px;">
                            @else
                                <img src="/images/staff-blank.jpg" alt="blank image" class="img-fluid" style="max-height: 382.50px;">
                            @endif
                            <div id="triangle-bottomleft-staff"></div>
                            <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">{{ $teacher->name }}</div>
                        </div>
                        <p class="font-syne my-0 py-0">
                            <span class="txt-yellow" style="font-size: 1.4em;">{{ $teacher->title }}</span><br>
                            {!! $teacher->bio !!}
                        </p>
                    </div>
                @endforeach
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
