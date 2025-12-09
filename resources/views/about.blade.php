<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>About Me | Christian Louie Galang</title>

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

        /* NAVBAR */
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
            transition: 0.2s;
        }

        .nav-links a:hover {
            opacity: 1;
        }

        /* TOP IMAGES */
        .top-images {
            width: 100%;
            display: flex;
            margin-top: 120px;
        }

        .top-images img {
            width: 33.33%;
            height: 350px;
            object-fit: cover;
        }

        /* ABOUT SECTION */
        .about-section {
            padding: 80px 80px;
            display: flex;
        }

        .title-block {
            width: 30%;
        }

        .title-block h1 {
            font-size: 3.5rem;
            font-weight: bold;
        }

        .title-line {
            width: 90px;
            height: 3px;
            background: #fff;
            margin-top: 10px;
        }

        .content-blocks {
            width: 70%;
            display: flex;
            justify-content: space-between;
            padding-left: 40px;
        }

        .content-box {
            width: 32%; /* now 3 equal columns */
            line-height: 1.6;
            color: #ccc;
        }

        .content-box h3 {
            margin-bottom: 10px;
            color: #fff;
        }

        /* SKILLS SECTION */
        .skills-section {
            padding: 40px 80px;
            margin-top: -40px;
        }

        .skills-section h2 {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        .skill {
            margin-bottom: 20px;
        }

        .skill-name {
            margin-bottom: 5px;
            font-size: 1rem;
        }

        .skill-bar {
            width: 100%;
            height: 12px;
            background: #333;
            border-radius: 5px;
            overflow: hidden;
        }

        .skill-level {
            height: 12px;
            background: #4CAF50;
            width: 0;
            border-radius: 5px;
            transition: width 1.6s ease;
        }

        /* LOGOUT BUTTON */
        .logout-btn {
            position: fixed;
            bottom: 25px;
            right: 25px;
            background: #ff4444;
            color: #fff;
            padding: 12px 22px;
            border: none;
            border-radius: 10px;
            font-size: 1rem;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(0,0,0,0.4);
            transition: .3s;
            z-index: 999;
        }

        .logout-btn:hover {
            background: #ff2222;
            transform: translateY(-2px);
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

<!-- TOP IMAGES -->
<div class="top-images">
    <img src="{{ asset('image/image1.jpg') }}" alt="1">
    <img src="{{ asset('image/image2.jpg') }}" alt="2">
    <img src="{{ asset('image/image3.jpg') }}" alt="3">
</div>

<!-- ABOUT SECTION -->
<section class="about-section" id="about">

    <div class="title-block">
        <h1>About Me</h1>
        <div class="title-line"></div>
    </div>

    <div class="content-blocks">

        <!-- Vision -->
        <div class="content-box">
            <h3>My Vision</h3>
            <p>
                I aim to become a highly skilled full-stack developer capable of building 
                modern and efficient systems that make daily tasks easier for people.
            </p>
        </div>

        <!-- Mission -->
        <div class="content-box">
            <h3>My Mission</h3>
            <p>
                To continuously improve my skills through real projects, hands-on experience,
                and learning modern technologies that help me grow as a developer.
            </p>
        </div>

        <!-- Hobbies (NEW COLUMN) -->
        <div class="content-box">
            <h3>My Hobbies</h3>
            <p>
                I enjoy working out to stay healthy, spending time with friends, 
                and riding bikes while racing with my dog — something we both enjoy a lot. 
                It keeps me active and strengthens our bond.
            </p>
        </div>

    </div>

</section>

<!-- ⭐ SKILLS SECTION -->
<section class="skills-section">
    <h2>My Skills</h2>

    <div class="skill">
        <div class="skill-name">HTML</div>
        <div class="skill-bar"><div class="skill-level" data-level="95%"></div></div>
    </div>

    <div class="skill">
        <div class="skill-name">CSS</div>
        <div class="skill-bar"><div class="skill-level" data-level="85%"></div></div>
    </div>

    <div class="skill">
        <div class="skill-name">JavaScript</div>
        <div class="skill-bar"><div class="skill-level" data-level="70%"></div></div>
    </div>

    <div class="skill">
        <div class="skill-name">Laravel</div>
        <div class="skill-bar"><div class="skill-level" data-level="60%"></div></div>
    </div>

    <div class="skill">
        <div class="skill-name">Communication</div>
        <div class="skill-bar"><div class="skill-level" data-level="90%"></div></div>
    </div>
</section>

<!-- Animation for skill bars -->
<script>
    window.onload = function() {
        document.querySelectorAll('.skill-level').forEach(function(bar) {
            bar.style.width = bar.getAttribute('data-level');
        });
    };
</script>

<!-- LOGOUT BUTTON -->
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button class="logout-btn">Logout</button>
</form>

</body>
</html>
