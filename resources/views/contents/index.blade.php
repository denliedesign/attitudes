@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="py-5">

            @can('update', \App\Content::class)

                <a href="/contents/create">New Content</a>
                <br><br>

                @foreach($contents as $content)

                    <h3>{{ $content->tag }}</h3>
                    <p>
                        {{ $content->text }}
                    </p>
                    <form action="/contents/{{ $content->id }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger ml-4" type="submit">Delete</button>
                    </form>

                @endforeach

            @endcan

        </div>
    </div>

@endsection
