<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Migration Portal</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f8fafc; }
        .card { background: white; padding: 20px; border-radius: 8px; max-width: 500px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        ul { list-style-type: none; padding: 0; }
        li { margin: 12px 0; }
        a { color: #2563eb; text-decoration: none; font-weight: bold; font-size: 18px; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Web Development 3 - Laravel Exercises</h2>
        <p>Select an activity below to view the migrated Laravel module:</p>
        <ul>
            <li><a href="{{ url('/dashboard') }}">1. Student Dashboard View</a></li>
            <li><a href="{{ url('/form') }}">2. Student Profile Card Generator (POST Form)</a></li>
        </ul>
    </div>
</body>
</html>