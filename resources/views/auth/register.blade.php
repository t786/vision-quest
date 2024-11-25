<!doctype html>

<!doctype html>

<html
  lang="en"
  class="light-style layout-navbar-fixed layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ asset('assets') }}/"
  data-template="vertical-menu-template">

  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Register | Vision Quest</title>

    <meta name="description" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
      rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/tabler-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/flag-icons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/core.css" class="template-customizer-core-css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/node-waves/node-waves.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css') }}" />
    <!-- Vendor -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/@form-validation/form-validation.css') }}" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-auth.css') }}" />

    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ asset('assets/vendor/js/template-customizer.js') }}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/js/config.js') }}"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4" style="max-width: 500px !important">
          <!-- Login -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center mb-4 mt-2">
                <a href="javascript::void(0);" class="app-brand-link gap-2">
                  <span class="app-brand-logo">
                    <img src="{{ asset('assets/img/img.png') }}" alt="" style="width: 200px;">
                  </span>
                  <span class="app-brand-text demo text-body fw-bold ms-1">
                    
                  </span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-1 pt-2">Welcome to Vision Quest! 👋</h4>
              <p class="mb-4">Please register your account</p>

              <form class="row g-3" action="{{route('user-register')}}" method="POST">
                {{ csrf_field() }}
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">First name</label>
                            <input
                              type="text"
                              class="form-control"
                              id="first_name"
                              name="first_name"
                              placeholder="Enter your first name"
                              autofocus />
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Last name</label>
                            <input
                              type="text"
                              class="form-control"
                              id="last_name"
                              name="last_name"
                              placeholder="Enter your last name"
                              autofocus />
                          </div>
                          <div class="col-md-12 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input
                              type="email"
                              class="form-control"
                              id="email"
                              name="email"
                              placeholder="Enter your email"
                              autofocus />
                          </div>
                          
                          <div class="col-md-12 mb-3">
                            <label for="email" class="form-label">Phone</label>
                            <input
                              type="text"
                              class="form-control"
                              id="phone_number"
                              name="phone_number"
                              placeholder="Enter your phone number"
                              autofocus />
                          </div>

                          <div class="col-md-12 mb-3">
                            <label for="email" class="form-label">User Type</label>
                            <select class="form-control" name="user_type" id="user_type">
                              <option selected disabled> Select user type</option>
                              <option value="1">Patient</option>
                              <option value="2">Doctor</option>
                            </select>
                          </div>
                          
                          <div class="mb-3 form-password-toggle">
                            <div class="d-flex justify-content-between">
                              <label class="form-label" for="password">Password</label>
                             
                            </div>
                            <div class="input-group input-group-merge">
                              <input
                                type="password"
                                id="password"
                                class="form-control"
                                name="password"
                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                aria-describedby="password" />
                              <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                            </div>
                          </div>
                          <div class="mb-3">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="remember-me" />
                              <label class="form-check-label" for="remember-me"> Remember Me </label>
                            </div>
                          </div>

                    </div>

                </div>
                
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">Register</button>
                </div>
              </form>
              <p class="text-center">
                <span>New on our platform?</span>
                <a href="{{ route('login') }}">
                  <span>Login here</span>
                </a>
              </p>
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="{{  asset('assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{  asset('assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{  asset('assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{  asset('assets/vendor/libs/node-waves/node-waves.js')}}"></script>
    <script src="{{  asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{  asset('assets/vendor/libs/hammer/hammer.js')}}"></script>
    <script src="{{  asset('assets/vendor/libs/i18n/i18n.js')}}"></script>
    <script src="{{  asset('assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>
    <script src="{{  asset('assets/vendor/js/menu.js')}}"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{  asset('assets/vendor/libs/@form-validation/popular.js')}}"></script>
    <script src="{{  asset('assets/vendor/libs/@form-validation/bootstrap5.js')}}"></script>
    <script src="{{  asset('assets/vendor/libs/@form-validation/auto-focus.js')}}"></script>

    <!-- Main JS -->
    <script src="{{  asset('assets/js/main.js')}}"></script>
    <script src="{{ asset("assets/js/admin.js") }}"></script>
    <script src="{{ asset("assets/js/notification.js") }}"></script>
    
  </body>
</html>
