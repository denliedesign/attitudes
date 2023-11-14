@can('update', \App\Content::class)
    <div id="{{ $tag }}-content" style="border:2px solid orange;" class="my-3 py-1 rounded shadow">
        <span class="fw-bold mx-3">{{ $tag }} content</span>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#contentModal"
                id="createContentButton">
            Create New
        </button>
        @include('/contents/form')
    </div>
@endcan
@foreach($contents as $content)
    @if($content->tag == "$tag")
        <div style="font-size: 1.33em;">
            {!! $content->text !!}
            @include('/contents/admin')
        </div>
    @endif
@endforeach
