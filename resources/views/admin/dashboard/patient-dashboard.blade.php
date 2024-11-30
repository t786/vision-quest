@extends('layouts.master')

@section('content')
    <div class="container mt-5 main-contain">
        <h5>Ophthalmologists</h5>
        @foreach ($doctors as $doctor)
            <div class="doctor-card">
                <img src="{{ $doctor->image_url ? asset('storage/' . $doctor->image_url) : asset('assets/img/avatars/14.png') }}"
                    alt="Dr. Ali Anjum" class="doctor-image">
                <div class="doctor-info">
                    <h5>{{ $doctor->first_name .' '. $doctor->last_name }} <span class="text-primary">&#x2713;</span></h5>
                    <p>Ophthalmologist - 6 Years of Experience</p>
                    <p><span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9734;</span> (4.8/5 reviews)</p>
                    <p>{{ $doctor->address }}</p>
                </div>
                <div class="doctor-actions">
                    <p>Available Today</p>
                    <p>80% likes</p>
                    <a class="book-btn" href="{{ route('admin.appointment.index') }}">Book Appointment</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
@section('script')
@endsection
