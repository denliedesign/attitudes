<div class="modal fade" data-bs-backdrop="static" id="contentModal" tabindex="-1" aria-labelledby="contentModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content p-3">
            <!-- FORM -->
            <form action="/contents" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="tag">Page Tag</label>
                    <input id="tag" type="text" class="form-control" name="tag"
                           value="">
                    <div>{{ $errors->first('tag') }}</div>
                </div>

                <div class="form-group">
                    <label for="text">Text</label>
                    <textarea name="text" cols="30" rows="10" class="form-control"
                              id="content-textarea"></textarea>
                    <div>{{ $errors->first('text') }}</div>
                </div>

                @csrf
                <div class="d-flex justify-content-around mt-2">
                    <button type="submit" class="btn btn-primary">Add Content</button>
                    <button type="button" class="btn btn-secondary" onClick="window.location.reload();">Close</button>
                </div>
            </form>
            <!-- END FORM -->
        </div>
    </div>
</div>
