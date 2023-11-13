<div class="modal fade" data-bs-backdrop="static" id="teacherModal" tabindex="-1" aria-labelledby="teacherModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content p-3">
            <!-- FORM -->
            <form action="/teachers" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="teacherImage">Image</label>
                    <input type="file" class="form-control-file" name="teacherImage">
                    <div>{{ $errors->first('teacherImage') }}</div>
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input id="name" type="text" class="form-control" name="name"
                           value="">
                    <div>{{ $errors->first('name') }}</div>
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input id="title" type="text" class="form-control" name="title"
                           value="">
                    <div>{{ $errors->first('title') }}</div>
                </div>
                <div class="form-group">
                    <label for="bio">Bio</label>
                    <textarea name="bio" cols="30" rows="10" class="form-control"
                              id="text-textarea"></textarea>
                    <div>{{ $errors->first('bio') }}</div>
                </div>
                @csrf
                <div class="d-flex justify-content-around mt-2">
                    <button type="submit" class="btn btn-primary">Add</button>
                    <button type="button" class="btn btn-secondary" onClick="window.location.reload();">Close</button>
                </div>
            </form>
            <!-- END FORM -->
        </div>
    </div>
</div>
