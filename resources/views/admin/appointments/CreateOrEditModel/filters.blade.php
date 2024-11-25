<!-- Offcanvas to add new user -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasUserFilters"
    aria-labelledby="offcanvasUserFiltersLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasUserFiltersLabel" class="offcanvas-title">Subscription filters</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
    </div>
    <div class="offcanvas-body mx-0 flex-grow-0 pt-0 h-100">
        <div class="mb-3">
            <label class="form-label" for="add-user-email">Billing Cycle</label>
            <select class="form-select" name="billing_cycle" id="billing_cycle">
                <option selected disabled>Select billing cycle</option>
                <option value="monthly">Monthly</option>
                <option value="yearly">Yearly</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Status</label>
            <select class="form-select" name="status" id="status">
                <option selected disabled>Select status</option>
                <option value="1">Active</option>
                <option value="2">In-active</option>
            </select>
        </div>
        
        <button type="submit"  id="selectDataBtn" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
        <button type="reset" class="btn btn-label-secondary"
            data-bs-dismiss="offcanvas">Cancel</button>
    </div>
</div>