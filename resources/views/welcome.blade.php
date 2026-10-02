@extends('layouts.app')

@section('title', 'Laravel Migration Portal')

@section('content')
    <h2>Web Development 3 - Laravel Exercises</h2>
    <p>Select an activity below to view the migrated Laravel module:</p>
    <ul>
        <li><a href="{{ url('/dashboard') }}">1. Student Dashboard View</a></li>
        <li><a href="{{ url('/form') }}">2. Student Profile Card Generator (POST Form)</a></li>
    </ul>
@endsection