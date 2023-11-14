@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-center align-items-center m-5">
        <div class="">
            {{ $slot }}
        </div>
    </div>
@endsection
