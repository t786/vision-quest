<!-- Offcanvas to add new Country -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddCast"
    aria-labelledby="offcanvasAddCastLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasAddCastLabel" class="offcanvas-title">Add Appointment</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body mx-0 flex-grow-0 pt-0 h-100">
        <form class="add-new-user pt-0 ajax-form" action="{{ route('admin.appointment.store') }}" method="POST">
            {{ csrf_field() }}
            @if(auth()->user()->user_type == "1") 
                <div class="mb-3">
                    <label class="form-label" for="add-user-fullname">Doctor</label>
                    <select name="doctor_id" class="form-control" id="">
                        <option selected disabled> Select doctor</option>
                        @foreach($doctors as $doctor)
                            <option value="{{ $doctor->id }}"> {{ $doctor->first_name}}</option>
                        @endforeach
                    </select>
                    
                </div>
            @endif
            <div class="mb-3">
                <label class="form-label" for="add-user-fullname">date</label>
                <input type="date" name="date"  class="form-control" required>
                
            </div>

            <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
        </form>
    </div>
</div>