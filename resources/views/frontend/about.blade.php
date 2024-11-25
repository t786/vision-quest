@extends('layouts.frontend')

@section('content')

    <section class="eye-care-section">
      <div class="container">
        <div class="meet-your-compassion">
          <h1>Meet Your Compassion<br> In Eye Care With Us</h1>
          <button class="cta-button">Visit Our Services</button>
        </div>
      </div>
      <img src="{{ asset('frontend/images/our-services.png') }}" alt="Eye Care Image" />
    </section>

    <section class="about-us">
      <div class="container">
        <div class="about-row">
          <div class="about-image">
            <img src="{{ asset('frontend/images/visionquest-building.png') }}" alt="VisionQuest Building" />
          </div>
          <div class="about-content">
            <h2>Your Vision, Our Mission</h2>
            <p>
              At VisionQuest Eyecare, we’re more than just an eye clinic. We’re
              a dedicated team passionate about delivering the best in eye care.
              Our state-of-the-art equipment and experienced team ensure a
              comfortable, safe, and personalized experience for every patient.
            </p>
            <ul>
              <li>
                <strong>State-of-the-Art Equipment:</strong> We invest in the
                latest technology to ensure accurate diagnosis and treatment.
              </li>
              <li>
                <strong>Experienced Team:</strong> Our team of skilled
                professionals is dedicated to providing the highest quality
                care.
              </li>
            </ul>
            <button>Tests</button>
          </div>
        </div>
      </div>
    </section>

    <section class="about-services">
      <div class="container">
        <div class="about-services-row">
          <div class="about-service-card">
            <img src="{{ asset('frontend/images/personalized-icon.png') }}" alt="Personalized Care Icon" />
            <h4>Personalized Care</h4>
            <p>We tailor each patient’s care to meet their unique needs.</p>
          </div>
          <div class="about-service-card">
            <img
              src="{{ asset('frontend/images/compassionate-icon.png') }}"
              alt="Compassionate Service Icon"
            />
            <h4>Compassionate Service</h4>
            <p>We prioritize kindness and empathy in every interaction.</p>
          </div>
          <div class="about-service-card">
            <img
              src="{{ asset('frontend/images/cutting-edge.png') }}"
              alt="Cutting-Edge Technology Icon"
            />
            <h4>Cutting-Edge Technology</h4>
            <p>We rely on the latest tools for precise care.</p>
          </div>
          <div class="about-service-card">
            <img src="{{ asset('frontend/images/community.png') }}" alt="Community Engagement Icon" />
            <h4>Community Engagement</h4>
            <p>We’re dedicated to improving lives in our community.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="philosophy">
      <div class="container">
        <div class="philosophy-row">
          <div class="philosophy-content">
            <h2>Our Philosophy</h2>
            <p>
              We believe that everyone deserves access to quality eye care.
              That’s why we’re committed to providing affordable and
              comprehensive services in a compassionate environment.
            </p>
            <ul>
              <li>Patient-centered approach</li>
              <li>Comprehensive and caring</li>
            </ul>
          </div>
          <div class="philosophy-image">
            <img src="{{ asset('frontend/images/doctor-with-patient.png') }}" alt="Doctor with Patient" />
            <div class="highlight-box">
              <img src="{{ asset('frontend/images/doctor-with-icon.png') }}" alt="Doctor with Patient" />
            </div>
          </div>
        </div>
      </div>
    </section>

    @include('frondend.include.appointment')
@endsection

