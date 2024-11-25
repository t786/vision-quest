@extends('layouts.frontend')

@section('content')

    <section class="eye-care-section">
      <div class="container">
        <div class="meet-your-compassion">
          <h1>
            Your Vision, <br />
            Our Priority
          </h1>
          <button class="cta-button">Visit Our Services</button>
        </div>
      </div>
      <img src="{{ asset('frontend/images/services.png') }}" alt="Eye Care Image" />
    </section>

    <section class="services-section">
      <div class="container">
        <h2 class="section-title">Here Are The Services We Are Offering</h2>
        <div class="services-grid">
          <!-- Service Cards -->
          <div class="service-card">
            <div class="icon">📋</div>
            <h3 class="service-title">Eye Exams</h3>
            <p class="service-description">
              Our comprehensive eye exams are designed to assess your overall
              eye health and detect any potential problems early on.
            </p>
          </div>
          <div class="service-card">
            <div class="icon">🔍</div>
            <h3 class="service-title">Glaucoma Screening</h3>
            <p class="service-description">
              Our glaucoma screenings are vital for detecting this condition in
              its early stages.
            </p>
          </div>
          <div class="service-card">
            <div class="icon">🔬</div>
            <h3 class="service-title">Cataract Surgery</h3>
            <p class="service-description">
              We offer advanced cataract surgery techniques to help you improve
              your quality of life.
            </p>
          </div>
          <div class="service-card">
            <div class="icon">⚙️</div>
            <h3 class="service-title">LASIK Eye Surgery</h3>
            <p class="service-description">
              LASIK is a laser treatment for surgery that can correct vision
              problems, including nearsightedness, farsightedness, and
              astigmatism.
            </p>
          </div>
          <div class="service-card">
            <div class="icon">🧒</div>
            <h3 class="service-title">Pediatric Eye Care</h3>
            <p class="service-description">
              Our pediatric eye care services focus on treating conditions that
              may interfere with your child's vision.
            </p>
          </div>
          <div class="service-card">
            <div class="icon">💧</div>
            <h3 class="service-title">Dry Eye Treatment</h3>
            <p class="service-description">
              Our treatment options are tailored to alleviate dry eye symptoms.
            </p>
          </div>
          <div class="service-card">
            <div class="icon">👓</div>
            <h3 class="service-title">Refractive Surgery</h3>
            <p class="service-description">
              Refractive surgery can help you reduce or eliminate the need for
              glasses or contact lenses.
            </p>
          </div>
          <div class="service-card">
            <div class="icon">🩺</div>
            <h3 class="service-title">Strabismus Surgery</h3>
            <p class="service-description">
              Strabismus, also known as crossed eyes, can be corrected with
              surgery to improve eye alignment and reduce strain.
            </p>
          </div>
          <div class="service-card">
            <div class="icon">🩹</div>
            <h3 class="service-title">Conjunctivitis Surgery</h3>
            <p class="service-description">
              Conjunctivitis, also known as pink eye, is a common condition that
              can cause redness and discomfort.
            </p>
          </div>
        </div>
      </div>
    </section>

    <div class="services-footer">
      <div class="footer-card expert-eye-care">
        <div class="icon">
          <!-- Replace with actual SVG or image -->
          <span>👁️</span>
        </div>
        <h4>Expert Eye Care</h4>
        <p>Providing comprehensive eye care solutions for optimal results.</p>
      </div>
      <div class="footer-card health-provider">
        <div class="icon">
          <!-- Replace with actual SVG or image -->
          <span>👨‍⚕️</span>
        </div>
        <h4>Eye Health Provider</h4>
        <p>Our trusted partner in comprehensive eye health services.</p>
      </div>
    </div>

    @include('frondend.include.appointment')

@endsection
