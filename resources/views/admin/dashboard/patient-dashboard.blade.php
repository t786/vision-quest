@extends('layouts.master')
<style>
    .user-btn {
        display: flex;
        justify-content: flex-end;
    }
    .user-btn .add-new {
        margin-right: 10px;
    }
</style>

@section('content')
    <div class="container mt-5">
        <h2>Ophthalmologists</h2>
        <div class="doctor-card">
            <img src="doctor1.jpg" alt="Dr. Ali Anjum" class="doctor-image">
            <div class="doctor-info">
                <h5>Dr. Ali Anjum <span class="text-primary">&#x2713;</span></h5>
                <p>Ophthalmologist - 6 Years of Experience</p>
                <p><span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9734;</span> (4.8/5 reviews)</p>
                <p>Location: Sialkot, Pakistan</p>
            </div>
            <div class="doctor-actions">
                <p>Available Today</p>
                <p>80% likes</p>
                {{-- <button class="book-btn" href="{{ route('admin.appointment.index') }}">Book Appointment</button> --}}
                <a class="book-btn" href="{{ route('admin.appointment.index') }}">Book Appointment</a>
            </div>
        </div>
        <div class="doctor-card">
            <img src="doctor2.jpg" alt="Dr. Hafsa Hashmi" class="doctor-image">
            <div class="doctor-info">
                <h5>Dr. Hafsa Hashmi <span class="text-primary">&#x2713;</span></h5>
                <p>Ophthalmologist - 3 Years of Experience</p>
                <p><span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9734;</span> (4.6/5 reviews)</p>
                <p>Location: Sialkot, Pakistan</p>
            </div>
            <div class="doctor-actions">
                <p>Available Today</p>
                <p>90% likes</p>
                <button class="book-btn">Book Appointment</button>
            </div>
        </div>
        <div class="doctor-card">
            <img src="doctor3.jpg" alt="Prof. Muhammad Khalil" class="doctor-image">
            <div class="doctor-info">
                <h5>Prof. Muhammad Khalil <span class="text-primary">&#x2713;</span></h5>
                <p>Ophthalmologist - 30 Years of Experience</p>
                <p><span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9734;</span> (4.9/5 reviews)</p>
                <p>Location: Sialkot, Pakistan</p>
            </div>
            <div class="doctor-actions">
                <p>Available Today</p>
                <p>90% likes</p>
                <button class="book-btn">Book Appointment</button>
            </div>
        </div>
        <div class="doctor-card">
            <img src="doctor4.jpg" alt="Dr. Ismail" class="doctor-image">
            <div class="doctor-info">
                <h5>Dr. Ismail <span class="text-primary">&#x2713;</span></h5>
                <p>Ophthalmologist - 5 Years of Experience</p>
                <p><span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9734;</span> (4.7/5 reviews)</p>
                <p>Location: Sialkot, Pakistan</p>
            </div>
            <div class="doctor-actions">
                <p>Available Today</p>
                <p>90% likes</p>
                <button class="book-btn">Book Appointment</button>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
