@extends('interface') <!-- Assuming you have a layout file -->

@section('content')
    <!-- dashboard.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome to the Dashboard</h1>
    
    <!-- Your dashboard content goes here -->
    
    <!-- Logout button -->
    <form action="{{ route('logout') }}" method="post">
        @csrf <!-- CSRF protection -->
        <button type="submit">Logout</button>
    </form>
</body>
</html>

@endsection