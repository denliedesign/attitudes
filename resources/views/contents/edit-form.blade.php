<!-- FORM -->
<form action="/contents" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="tag">Page Tag</label>
        <input id="tag" type="text" class="form-control" name="tag"
               value="{{ old('tag', $content->tag) }}">
        <div>{{ $errors->first('tag') }}</div>
    </div>

    <div class="form-group">
        <label for="text">Text</label>
        <textarea name="text" cols="30" rows="10" class="form-control"
                  id="content-textarea">{{ old('text', $content->text) }}</textarea>
        <div>{{ $errors->first('text') }}</div>
    </div>

    @csrf
    <div class="d-flex justify-content-around mt-2">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
<!-- END FORM -->
