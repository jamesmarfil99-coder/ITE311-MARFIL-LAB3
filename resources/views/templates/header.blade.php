<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand font-weight-bold" href="/dashboard">ITE311 - MARFIL</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard">Dashboard</a>
                </li>
                @if (Auth::user()->role == 'admin')
                    <li class="nav-item">
                        <a class="nav-link" href="#">Manage Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Reports</a>
                    </li>
                @endif
                @if (Auth::user()->role == 'teacher')
                    <li class="nav-item">
                        <a class="nav-link" href="#">Lessons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Grades</a>
                    </li>
                @endif
                @if (Auth::user()->role == 'student')
                    <li class="nav-item">
                        <a class="nav-link" href="#">My Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">My Submissions</a>
                    </li>
                @endif
            </ul>
            <a href="/logout" class="btn btn-danger btn-sm">Logout</a>
        </div>
    </div>
</nav>