<!-- IMAGE CONTROL -->
@can('update', \App\Photo::class)
    <div id="{{ $tag }}-photo" style="border:2px solid red;" class="my-3 py-1 rounded shadow">
        <span class="fw-bold mx-3">{{ $tag }} photo</span>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#photoModal"
                onClick="AddPhotoTag('{{ $tag }}');">
            Add New
        </button>
        @include('/photos/form')
    </div>
@endcan
<div>
    @foreach($photos as $photo)
        @if($photo->photoTag == "$tag")
            <img src="{{ asset('/storage/' . $photo->image) }}" alt="" class="{{ $class }}" style="{{ $style }}">
            @include('/photos/admin')
        @endif
    @endforeach
</div>
<!-- END IMAGE CONTROL -->
