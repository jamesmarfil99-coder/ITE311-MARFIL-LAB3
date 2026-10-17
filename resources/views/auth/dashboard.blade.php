<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - ITE311 MARFIL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: system-ui, -apple-system, sans-serif;
            background-color: #f8f9fa;
        }
        .content {
            padding: 30px 20px;
        }
    </style>
</head>
<body>

    {{-- Dynamic Header/Navbar na may role-based menu options --}}
    @include('templates.header')

    <div class="content container">
        <h2 style="font-size: 32px; font-weight: bold; margin-bottom: 20px;">Dashboard</h2>

        @if (session('success'))
            <div class="alert alert-success mb-4">
                {{ session('success') }}
            </div>
        @endif

        {{-- User Profile Card --}}
        <div class="card p-4 shadow-sm mb-4" style="max-width: 600px;">
            <h5 class="card-title">User Profile</h5>
            <hr>
            <p><strong>Name:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Role:</strong> {{ ucfirst($role) }}</p>
        </div>

        {{-- Role-Based Content Cards (Lab 5 Requirements) --}}
        @if ($role == 'admin')
            <div class="card shadow-sm" style="max-width: 600px;">
                <div class="card-header bg-danger text-white font-weight-bold">
                    Admin Dashboard
                </div>
                <div class="card-body">
                    <p>Manage users, courses, system settings, and reports.</p>
                    <a href="#" class="btn btn-danger">Manage Users</a>
                    <a href="#" class="btn btn-secondary">System Reports</a>
                </div>
            </div>
        @elseif ($role == 'teacher')
            <div class="card shadow-sm" style="max-width: 600px;">
                <div class="card-header bg-primary text-white font-weight-bold">
                    Teacher Dashboard
                </div>
                <div class="card-body">
                    <p>Create lessons, manage student submissions, and update grades.</p>
                    <a href="#" class="btn btn-primary">Manage Lessons</a>
                    <a href="#" class="btn btn-secondary">View Grades</a>
                </div>
            </div>
        @elseif ($role == 'student')
            <div class="card shadow-sm" style="max-width: 600px;">
                <div class="card-header bg-success text-white font-weight-bold">
                    Student Dashboard
                </div>
                <div class="card-body">
                    <p>View enrolled courses, submit activities, and check grades.</p>
                    <a href="#" class="btn btn-success">My Courses</a>
                    <a href="#" class="btn btn-secondary">My Grades</a>
                </div>
            </div>
        @else
            <div class="alert alert-warning mt-3" style="max-width: 600px;">
                No valid role assigned to this account.
            </div>
        @endif
    </div>

</body>
</html>