 <!-- Offcanvas to add new Subscription -->
 <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddCity"
    aria-labelledby="offcanvasAddCityLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasAddCityLabel" class="offcanvas-title">Add City</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body mx-0 flex-grow-0 pt-0 h-100">
        <form class="add-new-user pt-0 ajax-form" action="{{ route('admin.cities.store') }}" method="POST">
            {{ csrf_field() }}
            <div class="mb-3">
                <label class="form-label" for="add-user-fullname">Name</label>
                <input type="text" class="form-control" placeholder="Enter name" name="name"
                    aria-label="John Doe" />
            </div>
            <div class="mb-3">
                <label class="form-label" for="add-user-email">Country</label>
                <select class="form-select" name="country_id" id="country_id">
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
                <select class="form-select" name="status">
                    <option selected disabled>Select status</option>
                    <option value="1">Active</option>
                    <option value="0">In-active</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
        </form>
    </div>
</div>
