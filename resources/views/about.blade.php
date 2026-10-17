<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - ITE311 MARFIL</title>
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
            <a href="/login">Login</a>
            <a href="/register">Register</a>
        </div>
    </div>

    <div class="content">
        <h1>About Us</h1>
        <p>This is the about page of our Laravel application.</p>
    </div>

</body>
</html>