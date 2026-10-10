<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>User Dashboard</h2>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <p>Welcome, {{ Auth::user()->name }}!</p>
    <p>Email: {{ Auth::user()->email }}</p>
    <p>Role: {{ Auth::user()->role }}</p>
    <a href="/logout" class="btn btn-danger">Logout</a>
</div>
</body>
</html>