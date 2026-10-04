@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <div class="card hero">
        <p class="eyebrow">Welcome back</p>
        <h1>Student Portal</h1>
        <p class="muted">This is the main landing page, converted from native PHP to Laravel Blade inheritance. The navigation bar and footer you see are shared from one master layout.</p>
        <a class="button" href="{{ url('/dashboard') }}">Open My Dashboard</a>
    </div>
@endsection
