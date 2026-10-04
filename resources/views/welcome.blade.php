@extends('layouts.app')

@section('title', 'Student Portal')

@section('content')
    <div class="card hero">
        <p class="eyebrow">Welcome back,</p>
        <h1>Mr./Ms</h1>
        <p class="muted">Your one place for class activities, student records, and department updates. Pick a card below to get started.</p>
    </div>

    <h3 class="section-title">Quick Access</h3>
    <div class="grid grid-2">
        <a class="card card-link" href="{{ url('/dashboard') }}">
            <h3>Student Dashboard</h3>
            <p class="muted">View your student ID, GPA, and enrolled subjects.</p>
        </a>
        <a class="card card-link" href="{{ url('/form') }}">
            <h3>Profile Card Generator</h3>
            <p class="muted">Fill in your details and generate a student ID card.</p>
        </a>
        <a class="card card-link" href="{{ url('/about') }}">
            <h3>About the Department</h3>
            <p class="muted">Learn what we teach and how the portal works.</p>
        </a>
        <a class="card card-link" href="{{ url('/contact') }}">
            <h3>Contact Student Support</h3>
            <p class="muted">Reach us for account, enrollment, or lab concerns.</p>
        </a>
    </div>

    <h3 class="section-title">Announcements</h3>
    <div class="grid grid-3">
        <div class="card">
            <h3>Midterm laboratory exams</h3>
            <p class="muted">Schedules are posted outside the Computer Studies Laboratory.</p>
        </div>
        <div class="card">
            <h3>Activity submissions</h3>
            <p class="muted">Push your finished Laravel activity to GitHub and submit the repository link.</p>
        </div>
        <div class="card">
            <h3>Lab access</h3>
            <p class="muted">Bring your student ID when using the computer laboratory.</p>
        </div>
    </div>
@endsection
