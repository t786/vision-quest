<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvaDetailSubscription"
    aria-labelledby="offcanvasDetailSubscriptionLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasDetailSubscriptionLabel" class="offcanvas-title">Detail Subscription</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body mx-0 flex-grow-0 pt-0 h-100">
        <div class="mb-3">
            <label class="form-label" for="add-user-fullname">Name</label>
            <input type="text" class="form-control" placeholder="Enter name" name="name"
                aria-label="John Doe" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="add-user-email">Billing Cycle</label>
            <select class="form-select" name="billing_cycle">
                <option selected disabled>Select billing cycle</option>
                <option value="monthly">Monthly</option>
                <option value="yearly">Yearly</option>
            </select>

        </div>
        <div class="mb-3">
            <label class="form-label" for="country">Price</label>
            <input type="number" class="form-control" name="price">
        </div>
        <div class="mb-3">
            <label class="form-label" for="features">Features</label>
            <textarea name="features" id="features" class="form-control" cols="30" rows="5"></textarea>
            </div>
        <div class="mb-3">
            <label class="form-label" for="user-role">Status</label>
            <select class="form-select" name="status">
                <option selected disabled>Select status</option>
                <option value="1">Active</option>
                <option value="0">In-active</option>
            </select>
        </div>

        <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
    </div>
</div>
