<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - ITE311 MARFIL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: system-ui, -apple-system, sans-serif;
        }
        .header-bar {
            background-color: #1e2124;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .brand {
            font-weight: bold;
            font-size: 15px;
        }
        .nav-links a {
            color: white;
            text-decoration: none;
            margin-left: 15px;
            font-size: 14px;
        }
        .nav-links a:hover {
            opacity: 0.8;
        }
        .content {
            padding: 30px 20px;
        }
        h1 {
            font-size: 32px;
            margin-top: 0;
            margin-bottom: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="header-bar">
        <div class="brand">ITE311 - MARFIL</div>
        <div class="nav-links">
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
        </div>
    </div>

    <div class="content">
        <h1>User Registration</h1>

        @if ($errors->any())
            <div class="alert alert-danger" style="max-width: 600px;">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/register" method="POST" class="mt-3" style="max-width: 600px;" autocomplete="off">
            @csrf
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" required autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}" required autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required autocomplete="new-password">
            </div>
            <div class="mb-3">
                <label class="form-label">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" required autocomplete="new-password">
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
            <a href="/login" class="btn btn-link">Already have an account?</a>
        </form>
    </div>

</body>
</html>