<!-- Offcanvas to add new user -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasUserFilters"
    aria-labelledby="offcanvasUserFiltersLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasUserFiltersLabel" class="offcanvas-title">City filters</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
    </div>
    <div class="offcanvas-body mx-0 flex-grow-0 pt-0 h-100">
        <div class="mb-3">
            <label class="form-label" for="add-user-fullname">Name</label>
            <input type="text" class="form-control" placeholder="Enter name" name="name" id="filter_name"
                aria-label="John Doe" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="add-user-email">Country</label>
            <select class="form-select" name="country_id" id="filter_country_id">
                <option selected disabled>Select country</option>
                @foreach ($countries as $country)
                    <option value="{{ $country->id }}"
                        {{ old('country_id') == $country->id ? 'selected' : '' }}>{{ $country->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label" for="user-role">Status</label>
            <select class="form-select" name="status" id="filter_status">
                <option selected disabled>Select status</option>
                <option value="1">Active</option>
                <option value="0">In-active</option>
            </select>
        </div>
        
        <button type="submit"  id="selectDataBtn" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
        <button type="reset" class="btn btn-label-secondary"
            data-bs-dismiss="offcanvas">Cancel</button>
    </div>
</div>