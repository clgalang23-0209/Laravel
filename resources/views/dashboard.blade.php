<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Portfolio</title>

    <style>
        /* LOGOUT BUTTON (stick to bottom right) */
        .logout-btn {
            position: fixed;
            bottom: 5px;
            right: 25px;
            background: #ff4444;
            color: #fff;
            padding: 12px 22px;
            border: none;
            border-radius: 10px;
            font-size: 1rem;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(0,0,0,0.4);
            transition: 0.3s;
            z-index: 5;
        }

        .logout-btn:hover {
            background: #ff2222;
            transform: translateY(-2px);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #1f1f1f;
            color: #fff;
        }

        /* NAVIGATION BAR */
        .navbar {
            width: 100%;
            padding: 25px 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 10;
        }

        .logo {
            font-size: 1.4rem;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .nav-links {
            display: flex;
            gap: 20px;
        }

        /* NAV BUTTONS */
        .nav-links a {
            text-decoration: none;
            color: #fff;
            font-size: 1rem;
            padding: 10px 20px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            backdrop-filter: blur(4px);
            transition: 0.3s ease;
        }

        .nav-links a:hover {
            background: rgba(255, 255, 255, 0.25);
            transform: translateY(-2px);
        }

        /* MAIN HERO SECTION */
        .hero {
            display: flex;
            height: 100vh;
            width: 100%;
        }

        /* LEFT SIDE IMAGE */
        .left {
            width: 50%;
        }

        .left img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* RIGHT SIDE CONTENT */
        .right {
            width: 50%;
            background: #1f1f1f;
            padding: 140px 80px;
            display: flex;
            flex-direction: column;
            position: relative; /* needed for absolute positioning of education link */
        }

        .right h1 {
            font-size: 4.5rem;
            font-weight: bold;
            line-height: 4.3rem;
        }

        .right .line {
            width: 100%;
            height: 2px;
            background: #fff;
            margin: 20px 0 10px 0;
            opacity: 0.3;
        }

        .right p {
            margin-top: 20px;
            line-height: 1.6;
            color: #bbbbbb;
            max-width: 500px;
        }

        /* EDUCATION TEXT WITH LOGO AT BOTTOM */
        .education-link {
            position: absolute;
            bottom: 20px;
            left: 0;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.95rem;
            color: #fff;
            text-decoration: none;
            opacity: 0.8;
            transition: 0.3s;
        }

        .education-link:hover {
            opacity: 1;
            text-decoration: underline;
        }

        .education-link img {
            height: 24px;
            width: auto;
        }
    </style>
</head>

<body>

<!-- NAVIGATION -->
<div class="navbar">
    <div class="logo"></div>

    <div class="nav-links">
        <a href="{{ route('dashboard') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('projects') }}">Project</a>
        <a href="{{ route('contact') }}">Contact</a>
    </div>
</div>

<section class="hero">

    <!-- LEFT IMAGE -->
    <div class="left">
        <img src="{{ asset('image/image.jpg') }}" alt="My Picture">
    </div>

    <!-- RIGHT SIDE CONTENT -->
    <div class="right">

        <h1>My<br>Portfolio</h1>

        <div class="line"></div>  

        <p>
            "Hello, I’m Christian. Welcome to my portfolio.
            Please take your time to explore and enjoy the work I’ve created."
        </p>

        <!-- EDUCATION TEXT AT BOTTOM WITH LOGO -->
   <a class="education-link" href="https://cca.edu.ph/" target="_blank">
    <i class="fa-solid fa-graduation-cap" style="font-size: 24px;"></i>
    Enrolled in City College of Angeles
</a>


    </div>

</section>

<!-- LOGOUT BUTTON -->
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button class="logout-btn">Logout</button>
</form>

</body>
</html>
