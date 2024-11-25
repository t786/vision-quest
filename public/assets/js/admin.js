$(".ajax-form").on("submit", function(event){
    event.preventDefault();
    let url = this.action;
    var formData = new FormData(this);
    $.ajax({
        method: "POST",
        data: formData,
        url: url,
        processData: false,
        contentType: false,
        cache: false,
        beforeSend: function(){
            $(".admin-loader").show();
        },
        success: function (response) {
            console.log(response)
            if (response.status == 1) {
                let url = response.redirect_url;
                $('#offcanvasAddUser').hide();
                notifyBlackToastWithRedirect(response.message,url)
            }else if(response.status == 2){
                notifyBlackToast(response.message)
                $(".admin-loader").hide();
            }else if(response.status == 3){
                let url = response.redirect_url;
                window.location.href = url;
            }else if(response.status == 0){
                notifyBlackToast(response.message)
                $(".admin-loader").hide();
            }else{
                $(".admin-loader").hide();
            }
        },
        error : function (errors) {
            $(".admin-loader").hide();
            if($('.correct-tag').length){
                $(".correct-tag").removeClass('d-none');
                setTimeout(function (){
                    $(".correct-tag").addClass('d-none');
                },5000)
            }
            $('html, body').animate({scrollTop:$('.ajax-form').position().top}, 'slow');
            errorsGetNew(errors.responseJSON.errors)

        }
    });
});

var select2 = $('.select2');
if (select2.length) {
    select2.each(function () {
      var $this = $(this);
      $this.wrap('<div class="position-relative"></div>').select2({
        dropdownParent: $this.parent(),
        placeholder: $this.data('placeholder'),
        dropdownCss: {
          minWidth: '150px'
        }
      });
    });
    $('.select2-selection__rendered').addClass('w-px-150');
}

function errorsGetNew(errors) {
    $('span.invalid-feedback').remove();
    for (const x in errors) {
        console.log(x);
        var formGroup = $('.errors[data-id="' + x + '"],input[name="' + x + '"],select[name="' + x + '"],textarea[name="' + x + '"]').parent();
        for (const item in errors[x]) {
            formGroup.append(' <span class="invalid-feedback d-block" role="alert">' + errors[x][item] + '</span>');
        }
    }
}

// GET CITY FOR SELECTED ZONE
$('#country_id').on('change', function () {
    var country_id = $('#country_id').find(":selected").val();
    var option = '';
    $('#city_id').prop('disabled', false);

    $.ajax({
        method: "POST",
        url: routes.getCities,
        data: {
            _token: $('meta[name="csrf-token"]').attr('content'),
            'country_id': country_id
        },
        success: function (response) {

            $('#city_id').empty();
            $('#city_id').append(' <option value="" selected disabled>Select City</option>');

            response.cities.forEach(function (item, index) {
                option = "<option value='" + item.id + "'>" + item.name + "</option>"
                $('#city_id').append(option);
            });

        }
    });
});

$('#edit_country_id').on('change', function () {
    var country_id = $('#edit_country_id').find(":selected").val();
    var option = '';
    $('#edit_city_id').prop('disabled', false);

    $.ajax({
        method: "POST",
        url: routes.getCities,
        data: {
            _token: $('meta[name="csrf-token"]').attr('content'),
            'country_id': country_id
        },
        success: function (response) {

            $('#edit_city_id').empty();
            $('#edit_city_id').append(' <option value="" selected disabled>Select City</option>');

            response.cities.forEach(function (item, index) {
                option = "<option value='" + item.id + "'>" + item.name + "</option>"
                $('#edit_city_id').append(option);
            });

        }
    });
});

$(document).on('click', '.edit-user', function() {
    // Get the user data attribute value
    var user = $(this).data('user');

    // Now you have access to the user object containing the user data
    // You can use this data to populate the form fields

    // Populate the form fields with user data
    $('#offcanvasEditUser [name="full_name"]').val(user.full_name);
    $('#offcanvasEditUser [name="email"]').val(user.email);
    $('#offcanvasEditUser [name="gender"]').val(user.gender);
    $('#offcanvasEditUser [name="dob"]').val(user.dob);
    $('#offcanvasEditUser [name="bio"]').val(user.bio);
    $('#offcanvasEditUser [name="phone"]').val(user.phone);
    $('#offcanvasEditUser [name="height"]').val(user.height);
    $('#offcanvasEditUser [name="weight"]').val(user.weight);
    $('#offcanvasEditUser [name="marital_status_id"]').val(user.marital_status_id);
    $('#offcanvasEditUser [name="skin_tone_id"]').val(user.skin_tone_id);
    $('#offcanvasEditUser [name="nationality_id"]').val(user.nationality_id);
    $('#offcanvasEditUser [name="religion_id"]').val(user.religion_id);
    $('#offcanvasEditUser [name="sect_id"]').val(user.sect_id);
    $('#offcanvasEditUser [name="cast_id"]').val(user.cast_id);
    $('#offcanvasEditUser [name="health_condition_id"]').val(user.health_condition_id);
    $('#offcanvasEditUser [name="country_id"]').val(user.country_id);
    $('#offcanvasEditUser [name="city_id"]').val(user.city_id);
    $('#offcanvasEditUser [name="users_role_id"]').val(user.users_role_id);
    $('#offcanvasEditUser [name="status"]').val(user.status);
    $('#offcanvasEditUser [name="smoking"]').val(user.smoking);
    $('#offcanvasEditUser [name="interest_id[]"]').val(user.user_interest);
    $('#offcanvasEditUser [name="number_of_children"]').val(user.number_of_children);
    $('#offcanvasEditUser [name="role_users_id"]').val(user.role_users_id);
    $('#offcanvasEditUser [name="field_of_study_id"]').val(user.field_of_study_id);
    $('#offcanvasEditUser [name="degree_id"]').val(user.degree_id);
    $('#offcanvasEditUser [name="profession_id"]').val(user.profession_id);
    $('#offcanvasEditUser [name="business_detail"]').val(user.business_detail);
    $('#offcanvasEditUser [name="income"]').val(user.income);
    $('#offcanvasEditUser [name="family_info[0][relation]"]').val(user.family[0].relation);
    $('#offcanvasEditUser [name="family_info[0][family_profession_id]"]').val(user.family[0].profession_id);
    $('#offcanvasEditUser [name="family_info[0][deceased]"]').val(user.family[0].deceased);
    // $('#offcanvasEditUser [name="family_info[1][relation]"]').val(user.family[1].relation);
    // $('#offcanvasEditUser [name="family_info[1][family_profession_id]"]').val(user.family[1].profession_id);
    // $('#offcanvasEditUser [name="family_info[1][deceased]"]').val(user.family[1].deceased);
    $('#offcanvasEditUser [name="country_id"]').val(user.residence_information.country_id);
    $('#offcanvasEditUser [name="city_id"]').val(user.residence_information.city_id);
    $('#offcanvasEditUser [name="address"]').val(user.residence_information.address);
    $('#offcanvasEditUser [name="house_ownership"]').val(user.residence_information.house_ownership);
    $('#offcanvasEditUser [name="guardian_name"]').val(user.guardian.name);
    $('#offcanvasEditUser [name="guardian_relationship"]').val(user.guardian.relationship);
    $('#offcanvasEditUser [name="guardian_phone"]').val(user.guardian.phone);
    $('#offcanvasEditUser [name="guardian_email"]').val(user.guardian.email);
    var updateURL = "/admin/users/update/" + user.id;
    $('.edit-user-form').attr('action', updateURL);

});

$(document).on('click', '.edit-subscription', function() {
    // Get the user data attribute value
    var subscription = $(this).data('user');

    // Now you have access to the user object containing the user data
    // You can use this data to populate the form fields

    // Populate the form fields with user data
    $('#offcanvasEditSubscription [name="name"]').val(subscription.name);
    $('#offcanvasEditSubscription [name="billing_cycle"]').val(subscription.billing_cycle);
    $('#offcanvasEditSubscription [name="price"]').val(subscription.price);
    $('#offcanvasEditSubscription [name="features"]').val(subscription.features);
    $('#offcanvasEditSubscription [name="status"]').val(subscription.status);
    var updateURL = "/admin/subscriptions/update/" + subscription.id;
    $('.edit-subscription-form').attr('action', updateURL);

});

$(document).on('click', '.edit-promo-codes', function() {
    // Get the user data attribute value
    var promoCodes = $(this).data('user');

    // Now you have access to the user object containing the user data
    // You can use this data to populate the form fields

    // Populate the form fields with user data
    $('#offcanvasEditPromoCodes [name="name"]').val(promoCodes.name);
    $('#offcanvasEditPromoCodes [name="discount_type"]').val(promoCodes.discount_type);
    $('#offcanvasEditPromoCodes [name="discount_price"]').val(promoCodes.discount_price);
    $('#offcanvasEditPromoCodes [name="expiry"]').val(promoCodes.expiry);
    $('#offcanvasEditPromoCodes [name="limit"]').val(promoCodes.limit);
    $('#offcanvasEditPromoCodes [name="status"]').val(promoCodes.status);
    var updateURL = "/admin/promo-codes/update/" + promoCodes.id;
    $('.edit-promo-codes-form').attr('action', updateURL);

});

document.addEventListener('DOMContentLoaded', function() {
    flatpickr('#flatpickr-range', {
        mode: 'range',
        dateFormat: 'Y-m-d',
        placeholder: 'YYYY-MM-DD to YYYY-MM-DD'
    });
});

$('#user_type').on('change', function () {
    var user_type = $(this).val();
    $('#multicol-country').prop('disabled', false);

    $.ajax({
        method: "POST",
        url: routes.getUsers,
        data: {
            _token: $('meta[name="csrf-token"]').attr('content'),
            'user_type': user_type
        },
        success: function (response) {
            $('#multicol-country').empty();

            // Array to store IDs of users to be pre-selected
            var selectedUserIds = [];

            // Loop through the response and populate options
            response.users.forEach(function (item) {
                var option = '<option value="' + item.id + '">' + item.full_name + '</option>';

                // Assuming you have some condition to determine if this user should be pre-selected
                if (item) {
                    selectedUserIds.push(item.id); // Add this user's ID to selectedUserIds
                    option = '<option value="' + item.id + '" selected>' + item.full_name + '</option>';
                }

                $('#multicol-country').append(option);
            });

            // If you want to trigger Select2 to update the UI, you might need to do this (if using Select2 library)
            $('#multicol-country').trigger('change');
        },
        error: function (xhr, status, error) {
            console.error('Error:', error);
            // Handle errors if necessary
        }
    });
});

$(document).on('click', '.edit-countries', function() {
    // Get the user data attribute value
    var country = $(this).data('user');

    // Now you have access to the user object containing the user data
    // You can use this data to populate the form fields

    // Populate the form fields with user data
    $('#offcanvasEditCountry [name="name"]').val(country.name);
    $('#offcanvasEditCountry [name="status"]').val(country.status);
    var updateURL = "/admin/countries/update/" + country.id;
    $('.edit-countries-form').attr('action', updateURL);

});

$(document).on('click', '.edit-religions', function() {
    // Get the user data attribute value
    var religion = $(this).data('user');

    // Now you have access to the user object containing the user data
    // You can use this data to populate the form fields

    // Populate the form fields with user data
    $('#offcanvasEditReligion [name="name"]').val(religion.name);
    $('#offcanvasEditReligion [name="status"]').val(religion.status);
    var updateURL = "/admin/religions/update/" + religion.id;
    $('.edit-religions-form').attr('action', updateURL);

});

$(document).on('click', '.edit-degree', function() {
    // Get the user data attribute value
    var degree = $(this).data('user');

    // Now you have access to the user object containing the user data
    // You can use this data to populate the form fields

    // Populate the form fields with user data
    $('#offcanvasEditDegree [name="name"]').val(degree.name);
    $('#offcanvasEditDegree [name="status"]').val(degree.status);
    var updateURL = "/admin/degree/update/" + degree.id;
    $('.edit-degree-form').attr('action', updateURL);

});

$(document).on('click', '.edit-profession', function() {
    // Get the user data attribute value
    var profession = $(this).data('user');

    // Now you have access to the user object containing the user data
    // You can use this data to populate the form fields

    // Populate the form fields with user data
    $('#offcanvasEditProfession [name="name"]').val(profession.name);
    $('#offcanvasEditProfession [name="status"]').val(profession.status);
    var updateURL = "/admin/professions/update/" + profession.id;
    $('.edit-professions-form').attr('action', updateURL);

});

$(document).on('click', '.edit-sect', function() {
    // Get the user data attribute value
    var sect = $(this).data('user');

    // Now you have access to the user object containing the user data
    // You can use this data to populate the form fields

    // Populate the form fields with user data
    $('#offcanvasEditSect [name="name"]').val(sect.name);
    $('#offcanvasEditSect [name="status"]').val(sect.status);
    var updateURL = "/admin/sects/update/" + sect.id;
    $('.edit-sects-form').attr('action', updateURL);

});

$(document).on('click', '.edit-cast', function() {
    // Get the user data attribute value
    var cast = $(this).data('user');

    // Now you have access to the user object containing the user data
    // You can use this data to populate the form fields

    // Populate the form fields with user data
    $('#offcanvasEditCast [name="name"]').val(cast.name);
    $('#offcanvasEditCast [name="status"]').val(cast.status);
    var updateURL = "/admin/casts/update/" + cast.id;
    $('.edit-casts-form').attr('action', updateURL);

});

$(document).on('click', '.edit-education', function() {
    // Get the user data attribute value
    var education = $(this).data('user');

    // Now you have access to the user object containing the user data
    // You can use this data to populate the form fields

    // Populate the form fields with user data
    $('#offcanvasEditEducation [name="name"]').val(education.name);
    $('#offcanvasEditEducation [name="status"]').val(education.status);
    var updateURL = "/admin/educations/update/" + education.id;
    $('.edit-educations-form').attr('action', updateURL);

});

$(document).on('click', '.edit-skinTone', function() {
    // Get the user data attribute value
    var education = $(this).data('user');

    // Now you have access to the user object containing the user data
    // You can use this data to populate the form fields

    // Populate the form fields with user data
    $('#offcanvasEditSkinTones [name="name"]').val(education.name);
    $('#offcanvasEditSkinTones [name="status"]').val(education.status);
    var updateURL = "/admin/skinTones/update/" + education.id;
    $('.edit-skinTones-form').attr('action', updateURL);

});

$(document).on('click', '.edit-HealthCondition', function() {
    // Get the user data attribute value
    var HealthCondition = $(this).data('user');

    // Now you have access to the user object containing the user data
    // You can use this data to populate the form fields

    // Populate the form fields with user data
    $('#offcanvasEditHealthConditions [name="name"]').val(HealthCondition.name);
    $('#offcanvasEditHealthConditions [name="status"]').val(HealthCondition.status);
    var updateURL = "/admin/healthConditions/update/" + HealthCondition.id;
    $('.edit-healthConditions-form').attr('action', updateURL);

});

$(document).on('click', '.edit-MaritalStatus', function() {
    // Get the user data attribute value
    var MaritalStatus = $(this).data('user');

    // Now you have access to the user object containing the user data
    // You can use this data to populate the form fields

    // Populate the form fields with user data
    $('#offcanvasEditMaritalStatus [name="name"]').val(MaritalStatus.name);
    $('#offcanvasEditMaritalStatus [name="status"]').val(MaritalStatus.status);
    var updateURL = "/admin/maritalStatus/update/" + MaritalStatus.id;
    $('.edit-maritalStatus-form').attr('action', updateURL);

});

$(document).on('click', '.edit-Interest', function() {
    // Get the user data attribute value
    var interest = $(this).data('user');

    // Now you have access to the user object containing the user data
    // You can use this data to populate the form fields

    // Populate the form fields with user data
    $('#offcanvasEditInterest [name="name"]').val(interest.name);
    $('#offcanvasEditInterest [name="status"]').val(interest.status);
    var updateURL = "/admin/interest/update/" + interest.id;
    $('.edit-interest-form').attr('action', updateURL);

});

$(document).on('click', '.edit-nationality', function() {
    // Get the user data attribute value
    var nationality = $(this).data('user');

    // Now you have access to the user object containing the user data
    // You can use this data to populate the form fields

    // Populate the form fields with user data
    $('#offcanvasEditNationality [name="name"]').val(nationality.name);
    $('#offcanvasEditNationality [name="status"]').val(nationality.status);
    var updateURL = "/admin/nationalities/update/" + nationality.id;
    $('.edit-nationalities-form').attr('action', updateURL);

});

$(document).on('click', '.edit-city', function() {
    // Get the user data attribute value
    var city = $(this).data('user');

    // Now you have access to the user object containing the user data
    // You can use this data to populate the form fields

    // Populate the form fields with user data
    $('#offcanvasEditCity [name="name"]').val(city.name);
    $('#offcanvasEditCity [name="country_id"]').val(city.country.id);
    $('#offcanvasEditCity [name="status"]').val(city.status);
    var updateURL = "/admin/cities/update/" + city.id;
    $('.edit-cities-form').attr('action', updateURL);

});




