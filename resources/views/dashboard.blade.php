<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Christian Louie Galang | Portfolio</title>

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

        header {
            background: #2b2b2b;
            padding: 20px 40px;
            color: #fff;
            font-size: 1.2rem;

            /* move logout to right side */
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Logout button in header */
        .logout-btn {
            background-color: #7e0000ff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1rem;
            transition: 0.3s;
        }

        .logout-btn:hover {
            background-color: #a60000ff;
        }

        /* Layout */
        .hero {
            display: flex;
            height: 100vh;
        }

        /* Image Section */
        .hero .photo {
            width: 50%;
        }

        .hero .photo img {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }

        /* Content Section */
        .hero .content {
            width: 50%;
            padding: 120px 60px;
        }

        .content h1 {
            font-size: 4rem;
            line-height: 4rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .content h2 {
            margin-top: 30px;
            color: #7e0000ff;
        }

        ul {
            margin-top: 10px;
            line-height: 1.8;
        }

        ul li a {
            color: #ffcccc;
            text-decoration: underline;
        }

        ul li a:hover {
            color: #ffffff;
        }

        .contact-box {
            margin-top: 20px;
            background: #7e0000ff;
            padding: 20px;
            border-radius: 8px;
        }

        /* Make ONLY the word “Contact” black */
        .contact-box h2 {
            color: #000;
        }

        a {
            color: #fff;
            text-decoration: underline;
        }

    </style>
</head>
<body>

<header>
    <div>Christian Louie Galang</div>

    <!-- Logout moved to header on right side -->
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button class="logout-btn" type="submit">Logout</button>
    </form>
</header>

<section class="hero">

    <!-- LEFT SIDE IMAGE -->
    <div class="photo">
        <img src="{{ asset('image/image.jpg') }}" alt="My Picture" />
    </div>

    <!-- RIGHT SIDE CONTENT -->
    <div class="content">

        <h1>My Portfolio</h1>

        <p>
            Hello! I'm Christian Louie Galang, a passionate Computer Science student 
            who enjoys building websites, solving logical problems,
            and learning new technologies.
        </p>

        <h2>Skills</h2>
        <ul>
            <li>HTML, CSS, JavaScript</li>
            <li>PHP, Laravel</li>
            <li>Java</li>
            <li>MySQL / Database Design</li>
            <li>Problem Solving & Algorithms</li>
        </ul>

        <h2>Projects</h2>
        <ul>
             <li><a href="https://www.figma.com/proto/1K2tfYPGTsrnCS4kaEBgyY/gym-website?node-id=0-1">Gym Webbase</a> – A gym modern system.</li>
            <li><a href="http://127.0.0.1:8000/dashboard">Portfolio Website</a> – A modern responsive portfolio.</li>
            <li><a href="http://127.0.0.1:8000/login">Laravel Login System</a> – Secure authentication with hashing.</li>
        </ul>

        <h2>Education</h2>
        <p><strong>School:</strong> City College Of Angeles</p>

        <div class="contact-box">
            <h2>Contact</h2>
            <p>Email: <a href="mailto:christiangalang61@gmail.com">christiangalang61@gmail.com</a></p>
            <p>Phone: 0968-306-1743</p>
        </div>

    </div>

</section>

</body>
</html>
