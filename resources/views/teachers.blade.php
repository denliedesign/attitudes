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

        <div class="container">
            @foreach($teachers as $teacher)
            <div class="row my-5">
                @include('/teachers/admin')
                <div class="col-sm-3 d-flex align-items-center justify-content-center">
                    @if($teacher->teacherImage)
                        <img src="{{ asset('/storage/' . $teacher->teacherImage) }}" alt="staff member" class="img-fluid shadow rounded" style="filter: grayscale(100%);">
                    @else
                        <img src="/images/staff-blank.jpg" alt="blank image" class="img-fluid shadow rounded" style="filter: grayscale(100%);">
                    @endif
                </div>
                <div class="col-sm-9 d-flex align-items-center">
                    <div class="rounded border">
                        <div class="bg-red text-white ps-3">
                            <span class="font-staat" style="font-size: 2em;">{{ $teacher->name }}</span> &nbsp; <span>{{ $teacher->title }}</span>
                        </div>
                        <div>
                            <p class="px-3 py-2">
                                {!! $teacher->bio !!}                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

@endsection
