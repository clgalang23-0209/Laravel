<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects | Christian Louie Galang</title>

    <style>
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
            padding: 20px 40px;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 10;
            background: rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(6px);
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            text-decoration: none;
            color: #fff;
            font-size: 1rem;
            opacity: 0.8;
            transition: .2s;
        }

        .nav-links a:hover {
            opacity: 1;
        }

        /* PAGE TITLE (FIXED SPACING) */
        .page-title {
            text-align: center;
            margin-top: 120px; /* FIXED */
            font-size: 3rem;
            font-weight: 700;
        }

        .line {
            width: 80px;
            height: 3px;
            background: #fff;
            margin: 15px auto 25px; /* FIXED */
        }

        /* PROJECT GRID (FIXED SPACING) */
        .project-container {
            width: 85%;
            margin: 20px auto; /* FIXED spacing */
            display: flex;
            justify-content: space-between;
            gap: 40px;
        }

        .project-box {
            width: 48%;
            text-align: center;
        }

        .project-box img {
            width: 100%;
            height: 350px;
            object-fit: cover;
            border-radius: 6px;
        }

        .project-title a {
            font-size: 1.5rem;
            font-weight: bold;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
            color: #fff;
            transition: .2s;
        }

        .project-title a:hover {
            color: #bbb;
        }

        .project-desc {
            margin-top: 12px;
            font-size: 0.9rem;
            line-height: 1.5;
            color: #ccc;
        }

        /* LOGOUT BUTTON */
        .logout-btn {
            position: fixed;
            bottom: 25px;
            right: 25px;
            background: #ff4444;
            padding: 12px 22px;
            border: none;
            border-radius: 10px;
            color: white;
            cursor: pointer;
            transition: 0.3s;
            font-size: 1rem;
        }

        .logout-btn:hover {
            background: #ff2222;
        }
    </style>

</head>
<body>

<!-- NAVIGATION -->
<div class="navbar">
    <div class="nav-links">
        <a href="{{ route('dashboard') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('projects') }}">Project</a>
        <a href="{{ route('contact') }}">Contact</a>
    </div>
</div>

<!-- PAGE TITLE -->
<h1 class="page-title">My Favorite Portfolio</h1>
<div class="line"></div>

<!-- PROJECTS -->
<div class="project-container">

    <!-- PROJECT 1 -->
    <div class="project-box">
        <img src="{{ asset('image/project1.jpg') }}" alt="Gym Project">
        <div class="project-title">
            <a href="https://www.figma.com/proto/1K2tfYPGTsrnCS4kaEBgyY/gym-website?node-id=106-1350" target="_blank">
                Web-Based Gym System
            </a>
        </div>
        <p class="project-desc">
            A complete gym management system featuring member registration,
            workout tracking, payment monitoring, supplement inventory, and staff management.
        </p>
    </div>

    <!-- PROJECT 2 -->
    <div class="project-box">
        <img src="{{ asset('image/project2.jpg') }}" alt="Work Magnet">
        <div class="project-title">
            <a href="https://www.figma.com/proto/EOB4KXOj4Yp3KOKNLdDrJD/final-project-hci?node-id=1-3" target="_blank">
                Work Magnet – Job Hiring Platform
            </a>
        </div>
        <p class="project-desc">
            A modern job hiring platform where users can find work or hire workers easily.
            Includes resume upload, job posts, category search, and user authentication.
        </p>
    </div>

</div>

<!-- LOGOUT BUTTON -->
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button class="logout-btn">Logout</button>
</form>

</body>
</html>
