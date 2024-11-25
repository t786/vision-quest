<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEditCast"
    aria-labelledby="offcanvasEditCastLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasEditCastLabel" class="offcanvas-title">Edit Cast</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body mx-0 flex-grow-0 pt-0 h-100">
        <form class="edit-casts-form pt-0 ajax-form" method="POST">
            {{ csrf_field() }}
            <div class="mb-3">
                <label class="form-label" for="add-user-fullname">Name</label>
                <input type="text" class="form-control" placeholder="Enter name" name="name"
                    aria-label="John Doe" />
            </div>
            <div class="mb-3">
                <label class="form-label" for="user-role">Status</label>
                <select class="form-select" name="status">
                    <option value="1">Active</option>
                    <option value="0">In-active</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Update</button>
            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
        </form>
    </div>
</div>
