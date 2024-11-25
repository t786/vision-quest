<!-- Appointment Section -->
<section class="appointment-section">
    <div class="stats-section-main">
        <div class="stats-section">
            <div class="stats-section-box">
                <div>
                    <img src="{{ asset('frontend/images/stats-section-icon-1.png') }}" class="stats-section-icon" />
                </div>
                <div class="stat-item">
                    <div class="stat-text">1000+</div>
                    <p style="font-size: 14px; text-wrap: nowrap">Happy Patients</p>
                </div>
            </div>
            <div class="stats-section-box">
                <div>
                    <img src="{{ asset('frontend/images/stats-section-icon-2.png') }}" class="stats-section-icon" />
                </div>
                <div class="stat-item">
                    <div class="stat-text">670</div>
                    <p style="font-size: 14px; text-wrap: nowrap">Surgeries Done</p>
                </div>
            </div>
            <div class="stats-section-box">
                <div>
                    <img src="{{ asset('frontend/images/stats-section-icon-3.png') }}" class="stats-section-icon" />
                </div>
                <div class="stat-item">
                    <div class="stat-text">200+</div>
                    <p style="font-size: 14px; text-wrap: nowrap">Expert Doctors</p>
                </div>
            </div>
            <div class="stats-section-box">
                <div>
                    <img src="{{ asset('frontend/images/stats-section-icon-4.png') }}" class="stats-section-icon" />
                </div>
                <div class="stat-item">
                    <div class="stat-text">180+</div>
                    <p style="font-size: 14px; text-wrap: nowrap">Serenity Work</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container container-class">
        <div class="row">
            <!-- Left Side: Contact Info -->
            <div class="col-md-6 contact-info">
                <h4>📅 Book An Appointment</h4>
                <h1>Book Your Free Eye <br />Screening Today</h1>

                <div class="contact-details">
                    <div class="contact">
                        <div class="appointment-icon">
                            <img src="{{ asset('frontend/images/appointment-icon-1.png') }}" alt="" />
                        </div>
                        <p>
                            Requesting A Call <br />
                            <a href="tel:+16295550129"> (629) 555-0129 </a>
                        </p>
                    </div>
                    <div class="contact">
                        <div class="appointment-icon">
                            <img src="{{ asset('frontend/images/appointment-icon-2.png') }}" alt="" />
                        </div>
                        <p>
                            Sunday - Friday <br />
                            <strong>9 AM - 8 PM</strong>
                        </p>
                    </div>
                    <div class="contact">
                        <div class="appointment-icon">
                            <img src="{{ asset('frontend/images/appointment-icon-3.png') }}" alt="" />
                        </div>
                        <p>
                            Location <br />
                            VisionQuest EyeCare Center, Sialkot, Pakistan
                        </p>
                    </div>
                </div>
            </div>

            <!-- Right Side: Appointment Form -->
            <div class="col-md-6 form-parent_class">
                <div class="text-class">
                    <p>
                        Take the first step towards better eye health by scheduling a
                        free <br />
                        eye exam at VisionQuest EyeCare. Fill out the form below, and
                        we’ll <br />
                        contact you to confirm your appointment.
                    </p>
                </div>
                <form class="appointment-form">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="ap-label">Your Name</label>
                                <input type="text" name="" class="form-control input-radius"
                                    placeholder="Your name..." />
                                <img class="form-element-icon" src="{{ asset('frontend/images/form-name.png') }}" alt="" />
                            </div>
                            <div class="col-md-6">
                                <label class="ap-label">Your Phone</label>
                                <input type="text" name="" class="form-control input-radius"
                                    placeholder="Your phone..." />
                                <img class="form-element-icon" src="{{ asset('frontend/images/form-phone.png') }}" alt="" />
                            </div>
                            <div class="col-md-6">
                                <label class="ap-label">Health Type</label>
                                <select name="" class="form-control input-radius" id="">
                                    <option selected disabled>Select Health Type</option>
                                    <option value="1">Health 1</option>
                                    <option value="2">Health 2</option>
                                    <option value="3">Health 3</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="ap-label">Your Email</label>
                                <input type="text" name="" class="form-control input-radius"
                                    placeholder="Your email..." />
                                <img class="form-element-icon" src="{{ asset('frontend/images/form-email.png') }}" alt="" />
                            </div>
                            <div class="col-md-6">
                                <label class="ap-label">Select Doctor</label>
                                <select name="" class="form-control input-radius" id="">
                                    <option selected disabled>Select Doctor</option>
                                    <option value="1">Doctor 1</option>
                                    <option value="2">Doctor 2</option>
                                    <option value="3">Doctor 3</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="ap-label">Select Date</label>
                                <input type="date" name="" class="form-control input-radius" />
                            </div>
                        </div>
                        <button class="appointment-form-submit" type="button">
                            <span> Appointment Now + </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
