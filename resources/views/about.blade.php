@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <div class="card hero">
        <h1>About Our Department</h1>
        <p class="muted">The Computer Studies Department trains students in modern web and mobile development. We specialize in frameworks including PHP, Laravel, and Blade templating.</p>
    </div>

    <div class="grid grid-2">
        <div class="card">
            <h3>What We Teach</h3>
            <ul>
                <li>Web Development 3</li>
                <li>Advanced Database Systems</li>
                <li>Human-Computer Interaction</li>
            </ul>
        </div>
        <div class="card">
            <h3>About This Portal</h3>
            <p class="muted">The Student Portal gives students one place to view their records and complete lab activities. Every page uses a single Blade layout, so the navigation bar and footer stay the same while the content changes.</p>
        </div>
    </div>

    <p class="muted">Built by Ayesha Ann Y. Dela Cruz (ITMWD5M2) for WEBDEV 3.</p>
@endsection
