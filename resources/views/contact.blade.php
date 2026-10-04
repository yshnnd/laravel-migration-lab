@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <div class="card hero">
        <h1>Contact Student Support</h1>
        <p class="muted">Have a question about your account, enrollment, or laboratory schedule? Reach out and we will get back to you.</p>
    </div>

    <div class="grid grid-2">
        <div class="card">
            <p class="stat-label">Email</p>
            <p class="stat-text">support@studentportal.edu</p>
        </div>
        <div class="card">
            <p class="stat-label">Location</p>
            <p class="stat-text">Computer Studies Laboratory Room 3</p>
        </div>
        <div class="card">
            <p class="stat-label">Office Hours</p>
            <p class="stat-text">Monday to Friday, 8:00 AM to 5:00 PM</p>
        </div>
        <div class="card">
            <p class="stat-label">Response Time</p>
            <p class="stat-text">Within 1 to 2 business days</p>
        </div>
    </div>

    <div class="card">
        <h3>Before You Write</h3>
        <ul>
            <li>Include your full name, student ID, and section.</li>
            <li>Describe your concern in one or two clear sentences.</li>
            <li>Attach a screenshot if it is a portal or lab issue.</li>
        </ul>
        <a class="button" href="mailto:support@studentportal.edu">Send an Email</a>
    </div>
@endsection
