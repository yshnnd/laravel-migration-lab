@extends('layouts.app')

@section('title', 'Student Registration Form')

@section('content')
    <h2>Student Registration Form</h2>

    <form action="{{ url('/display') }}" method="POST">
        @csrf

        <label for="fullname">Full Name:</label><br>
        <input type="text" id="fullname" name="fullname" required><br><br>

        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age" min="1" required><br><br>

        <label for="course">Course / Program:</label><br>
        <input type="text" id="course" name="course" required><br><br>

        <label for="email">Email Address:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="motto">Favorite Motto / Bio:</label><br>
        <textarea id="motto" name="motto" rows="4" cols="40"></textarea><br><br>

        <button type="submit">Generate Profile</button>
    </form>
@endsection