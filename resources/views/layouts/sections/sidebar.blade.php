<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
                
                <img src="{{ asset('assets/img/img.png') }}" alt="" style="width: 180px;">

            </span>
            <span class="app-brand-text demo menu-text fw-bold">
            </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item {{(Route::currentRouteName() == 'admin.dashboard.index'  ) ? 'active' : ''}}">
            <a href="{{ route('admin.dashboard.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>

        <li class="menu-item {{(Route::currentRouteName() == 'admin.appointment.index'  ) ? 'active' : ''}}">
            <a href="{{ route('admin.appointment.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-calendar"></i>
                <div data-i18n="Appointment">Appointment</div>
            </a>
        </li>

        <li class="menu-item {{(Route::currentRouteName() == 'admin.medical-record.index'  ) ? 'active' : ''}}">
            <a href="{{ route('admin.medical-record.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-report-medical"></i>
                <div data-i18n="Medical Record">Medical Record</div>
            </a>
        </li>
    </ul>
</aside>