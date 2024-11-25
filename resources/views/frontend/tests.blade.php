@extends('layouts.frontend')

@section('content')

    <section class="eye-care-section">
      <div class="container">
        <div class="meet-your-compassion">
          <h1>Comprehensive Eye <br> Examinations</h1>
          <button class="cta-button">Contact Us Now</button>
        </div>
      </div>
      <img src="{{ asset('frontend/images/test-banner.png') }}" alt="Eye Care Image" />
    </section>

    <section class="eye-tests-section">
        <h2 class="section-title">We Offer A Range Of <br> Complimentary Eye Tests</h2>
        <div class="test-cards">
            <!-- Card 1 -->
            <div class="test-card" onclick="toggleCard(this)">
                <div class="icon-container">
                    <img src="{{ asset('frontend/images/icon-visual-acuity.png') }}" alt="Visual Acuity Test Icon">
                </div>
                <div class="content">
                    <div class="head-icon">
                        <h3>Visual Acuity Test</h3>
                        <span class="read-more">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </span>
                    </div>
                    <p>This is the most common eye test, used to measure your ability to see clearly at different distances. It typically involves reading letters on a chart from a specific distance. The results are expressed as a fraction, such as 20/20, which means you can see clearly from 20 feet what a person with normal vision can see from 20 feet.</p>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="test-card" onclick="toggleCard(this)">
                <div class="icon-container">
                    <img src="{{ asset('frontend/images/icon-refraction.png') }}" alt="Refraction Test Icon">
                </div>
                <div class="content">
                    <div class="head-icon">
                        <h3>Refraction Test</h3>
                        <span class="read-more">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </span>
                    </div>
                    <p>A refraction test determines your prescription for glasses or contact lenses by measuring how light bends...</p>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="test-card" onclick="toggleCard(this)">
                <div class="icon-container">
                    <img src="{{ asset('frontend/images/icon-color-vision.png') }}" alt="Color Vision Test Icon">
                </div>
                <div class="content">
                    <div class="head-icon">
                        <h3>Color Vision Test</h3>
                        <span class="read-more">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </span>
                    </div>
                    <p>Color vision tests detect color blindness, evaluating your ability to differentiate between colors...</p>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="test-card" onclick="toggleCard(this)">
                <div class="icon-container">
                    <img src="{{ asset('frontend/images/icon-glaucoma.png') }}" alt="Glaucoma Screening Icon">
                </div>
                <div class="content">
                    <div class="head-icon">
                        <h3>Glaucoma Screening</h3>
                        <span class="read-more">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </span>
                    </div>
                    <p>Glaucoma screening evaluates the pressure in your eyes to detect signs of glaucoma early...</p>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="test-card" onclick="toggleCard(this)">
                <div class="icon-container">
                    <img src="{{ asset('frontend/images/icon-dilated-eye.png') }}" alt="Dilated Eye Exam Icon">
                </div>
                <div class="content">
                    <div class="head-icon">
                        <h3>Dilated Eye Exam</h3>
                        <span class="read-more">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </span>
                    </div>
                    <p>A dilated eye exam allows your doctor to examine the back of your eyes for signs of disease...</p>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="test-card" onclick="toggleCard(this)">
                <div class="icon-container">
                    <img src="{{ asset('frontend/images/icon-visual-field.png') }}" alt="Visual Field Test Icon">
                </div>
                <div class="content">
                    <div class="head-icon">
                        <h3>Visual Field Test</h3>
                        <span class="read-more">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </span>
                    </div>
                    <p>Visual field testing checks for blind spots and measures your peripheral (side) vision...</p>
                </div>
            </div>
            <!-- Card 7 -->
            <div class="test-card" onclick="toggleCard(this)">
                <div class="icon-container">
                    <img src="{{ asset('frontend/images/icon-oct.png') }}" alt="OCT Icon">
                </div>
                <div class="content">
                    <div class="head-icon">
                        <h3>OCT (Optical Coherence Tomography)</h3>
                        <span class="read-more">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </span>
                    </div>
                    <p>OCT uses light waves to take cross-section images of your retina, helping detect macular conditions...</p>
                </div>
            </div>
        </div>
    </section>

    @include('frondend.include.appointment')
@endsection







