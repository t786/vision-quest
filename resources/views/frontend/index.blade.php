@extends('layouts.frontend')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section container">
      <div class="hero-content">
        <span class="welcome-badge">Welcome to VisionQuest EyeCare</span>
        <h1>
          Bridging the Gap <br />to Better Vision for <br />
          Those in Need
        </h1>
        <p>
          Committed to restoring sight and providing care to the underserved,<br />
          VisionQuest EyeCare offers a range of eye health services. With <br />
          cutting-edge technology and compassionate professionals, we’re
          <br />here to safeguard your vision and brighten your future.
        </p>
        <a href="#contact" class="btn btn-contact">Contact</a>
      </div>
      <div class="hero-image">
        <img src="{{ asset('frontend/images/home.png') }}" alt="Eye care examination" />
      </div>
    </section>

    <section class="services-section">
      <h2>Our Service</h2>
      <p>Experience the difference with our personalized eye care solutions</p>
      <div class="services-container">
        <div class="service-box">
          <div class="icon">
            <img src="{{ asset('frontend/images/eye-icon.png') }}" alt="Eye Examinations" />
          </div>
          <h3>Eye Examinations</h3>
          <p>
            Thorough screenings to detect vision issues and eye diseases,
            ensuring early treatment.
          </p>
        </div>
        <div class="service-box">
          <div class="icon">
            <img src="{{ asset('frontend/images/contaract-icon.png') }}" alt="Cataract Surgery" />
          </div>
          <h3>Cataract Surgery</h3>
          <p>
            Free cataract removal surgeries for eligible patients, restoring
            clear vision and improving quality of life.
          </p>
        </div>
        <div class="service-box">
          <div class="icon">
            <img src="{{ asset('frontend/images/vision-therapy-icon.png') }}" alt="Vision Therapy" />
          </div>
          <h3>Vision Therapy</h3>
          <p>
            Customized treatments to correct visual impairments and enhance
            visual skills.
          </p>
        </div>
        <div class="service-box">
          <div class="icon">
            <img
              src="{{ asset('frontend/images/glaucoma-treatment-icon.png') }}"
              alt="Glaucoma Treatment"
            />
          </div>
          <h3>Glaucoma Treatment</h3>
          <p>
            Effective management of glaucoma to prevent vision loss and maintain
            eye health.
          </p>
        </div>
      </div>
    </section>

    <!-- Vision Section -->
    <section class="vision-section">
      <div class="vision-content">
        <h2>Revolutionizing Eye Care Through Innovation and Compassion</h2>
        <p>
          At VisionQuest EyeCare, we combine innovation with compassion to offer
          top-tier treatments. Our modern equipment and highly trained
          specialists ensure that every patient receives the best possible care,
          all free of charge for eligible individuals.
        </p>
        <p>
          Our facility is equipped with the latest innovations in ophthalmic
          technology, including digital imaging systems, state-of-the-art
          cataract surgery tools, and precision laser treatments.
        </p>
        <a href="#" class="appointment-btn">Book an Appointment</a>
      </div>
      <div class="vision-images">
        <img src="{{ asset('frontend/images/image1.png') }}" alt="Eye examination" class="vision-img" />
      </div>
    </section>

    <section class="reasons-section">
      <div class="container">
        <div class="row">
          <!-- Text Section -->
          <div class="col-md-6">
            <h2 class="vision-title">Reasons to choose</h2>
            <h1 class="vision-subtitle">VisionQuest</h1>

            <!-- Reason 1 -->
            <div class="reason-item">
              <div class="visit-quest-icon">
                <img
                  class="visit-quest-img"
                  src="{{ asset('frontend/images/free-services-icon.png') }}"
                  alt="icon"
                />
              </div>
              <div class="reason-text">
                <h5>Free Services for the Needy</h5>
                <p>
                  Offering completely free services to those who are eligible
                  patients, we ensure that financial conditions never come in
                  the way of proper eye care.
                </p>
                <div class="curved-image">
                  <img style="height: 62px" src="{{ asset('frontend/images/2.png') }}" alt="" />
                </div>
              </div>
            </div>

            <!-- Reason 2 -->
            <div style="display: flex; justify-content: flex-end">
              <div class="reason-item">
                <div class="visit-quest-icon">
                  <img
                    class="visit-quest-img"
                    src="{{ asset('frontend/images/icon-1.png') }}"
                    alt="icon"
                  />
                </div>
                <div class="reason-text">
                  <h5>Expertise You Can Trust</h5>
                  <p>
                    Our team consists of seasoned specialists with years of
                    experience in treating a wide variety of eye conditions.
                  </p>
                  <div class="curved-image">
                    <img style="height: 62px" src="{{ asset('frontend/images/2.png') }}" alt="" />
                  </div>
                </div>
              </div>
            </div>

            <!-- Reason 3 -->
            <div class="reason-item">
              <div class="visit-quest-icon">
                <img
                  class="visit-quest-img"
                  src="{{ asset('frontend/images/icon-2.png') }}"
                  alt="icon"
                />
              </div>
              <div class="reason-text">
                <h5>Advanced Technology</h5>
                <p>
                  Equipped with the latest diagnostic and surgical technology,
                  we provide cutting-edge treatment for your eye health.
                </p>
                <div class="curved-image">
                  <img style="height: 62px" src="{{ asset('frontend/images/2.png') }}" alt="" />
                </div>
              </div>
            </div>
          </div>

          <!-- Image Section -->
          <div class="col-md-6 image-container">
            <img src="{{ asset('frontend/images/reason-to-choose.png') }}" alt="Eye Checkup Image" />
          </div>
        </div>
      </div>
    </section>

    <section class="professionals-section container">
      <span class="specialist-text">Specialist Ophthalmologists</span>
      <h2>
        Highly Qualified And Caring <br />
        Professionals
      </h2>

      <div
        id="professionalsCarousel"
        class="carousel slide"
        data-bs-ride="carousel"
      >
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row justify-content-center" style="margin-top: 30px">
              <div class="col-md-3">
                <div class="card professional-card">
                  <h5>Leslie Alexander</h5>
                  <p>Web Designer</p>
                  <img src="{{ asset('frontend/images/professional1.png') }}" alt="Professional 1" />
                </div>
              </div>
              <div class="col-md-3">
                <div class="card professional-card">
                  <h5>Leslie Alexander</h5>
                  <p>Web Designer</p>
                  <img src="{{ asset('frontend/images/professional2.png') }}" alt="Professional 2" />
                </div>
              </div>
              <div class="col-md-3">
                <div class="card professional-card">
                  <h5>Leslie Alexander</h5>
                  <p>Web Designer</p>
                  <img src="{{ asset('frontend/images/professional3.png') }}" alt="Professional 3" />
                </div>
              </div>
              <div class="col-md-3">
                <div class="card professional-card">
                  <h5>Leslie Alexander</h5>
                  <p>Web Designer</p>
                  <img src="{{ asset('frontend/images/professional4.png') }}" alt="Professional 4" />
                </div>
              </div>
            </div>
          </div>
          <!-- Add more carousel items here for additional slides -->
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#professionalsCarousel"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#professionalsCarousel"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    <section class="testimonial-section">
      <div class="testimonial-card">
        <div class="quote-icon">
          <i class="bi bi-quote"></i>
        </div>
        <p class="testimonial-text">
          I was having trouble seeing clearly, even with glasses. After visiting
          VisionQuest EyeCare, I received a thorough eye exam and was diagnosed
          with a condition I didn’t know I had. The doctor explained everything
          clearly and recommended a treatment plan that has made a huge
          difference in my vision. I'm so grateful for their care!
        </p>
        <div class="testimonial-author">
          <h4>Malik Usman</h4>
          <span>CEO Techrek</span>
        </div>
        <div class="testimonial-nav">
          <button class="nav-btn prev"><i class="bi bi-arrow-left"></i></button>
          <button class="nav-btn next">
            <i class="bi bi-arrow-right"></i>
          </button>
        </div>
      </div>
    </section>

    @include('frondend.include.appointment')
@endsection
