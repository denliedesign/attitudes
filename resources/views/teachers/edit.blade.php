@extends('layouts.app')
@section('banner-image', 'instructors.jpg')

@section('content')

    <div class="container py-5">
        <form action="{{ route('teachers.update', ['teacher' => $teacher]) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @include('teachers.edit-form')
        </form>
    </div>

@endsection
