<!-- Header Section -->
<header class="header">
    <div class="container d-flex justify-content-between align-items-center">
        <!-- Logo -->
        <div class="logo">
            <img src="{{ asset('frontend/images/logo.png') }}" alt="VisionQuest Logo" />
        </div>

        <!-- Mobile Menu Toggle Button -->
        <button class="mobile-menu-toggle d-md-none">
            <i class="bi bi-list"></i>
        </button>

        <!-- Navigation Menu -->
        <nav class="d-flex align-items-center">
            <a href="{{ route('frontend.home') }}" class="nav-link">Home</a>
            <a href="{{ route('frontend.about') }}" class="nav-link">About</a>
            <a href="{{ route('frontend.services') }}" class="nav-link">Services</a>
            <a href="{{ route('frontend.tests') }}" class="nav-link">Tests</a>
            <div class="divider d-none d-md-block"></div>
            <a href="#book" class="btn btn-book">Book an Appointment</a>
        </nav>
    </div>
</header>
