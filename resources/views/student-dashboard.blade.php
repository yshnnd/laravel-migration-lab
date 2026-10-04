@extends('layouts.app')

@section('title', 'Student Dashboard')

@section('content')
    <div class="card hero">
        <h1>Welcome back, {{ $studentName }}!</h1>
    </div>

    <div class="grid grid-2">
        <div class="card">
            <p class="stat-label">Student ID</p>
            <p class="stat-value">{{ $studentId }}</p>
        </div>
        <div class="card">
            <p class="stat-label">Current GPA</p>
            <p class="stat-value">{{ $gpa }}</p>
        </div>
    </div>

    <div class="container">
        <h3>Enrolled Subjects:</h3>
        <ul>
            @foreach($subjects as $sub)
                <li>{{ $sub }}</li>
            @endforeach
        </ul>
    </div>
@endsection
