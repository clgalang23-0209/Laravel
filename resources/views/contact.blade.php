<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contact | Christian Louie Galang</title>

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

        /* RESPONSIVE NAV FIX */
        @media (max-width: 900px) {
            .navbar {
                padding: 15px 25px;
            }

            .nav-links {
                gap: 15px;
            }

            .nav-links a {
                font-size: 0.9rem;
            }
        }

        /* CONTACT WRAPPER */
        .contact-wrapper {
            margin-top: 100px;
            display: flex;
            height: calc(100vh - 100px);
            width: 100%;
        }

        .contact-img {
            width: 50%;
            height: 100%;
        }

        .contact-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .contact-content {
            width: 50%;
            padding: 80px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .contact-title {
            font-size: 3rem;
            font-weight: bold;
        }

        .title-line {
            width: 90px;
            height: 3px;
            background: #fff;
            margin: 10px 0 30px 0;
        }

        .contact-text {
            color: #ccc;
            font-size: 0.95rem;
            line-height: 1.6;
            max-width: 520px;
        }

        /* CONTACT INFO */
        .contact-info {
            margin-top: 40px;
            display: flex;
            flex-direction: column;
            gap: 20px;
            font-size: 1rem;
        }

        .contact-info div {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        /* CLICKABLE LINKS */
        .contact-info a {
            color: #fff;
            text-decoration: none;
            opacity: 0.85;
            transition: 0.2s;
        }

        .contact-info a:hover {
            opacity: 1;
            text-decoration: underline;
        }

        .contact-info i {
            font-size: 1.2rem;
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

    <!-- ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

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

<!-- CONTACT SECTION -->
<div class="contact-wrapper">

    <!-- LEFT IMAGE -->
    <div class="contact-img">
        <img src="{{ asset('image/build.jpg') }}" alt="Contact Image">
    </div>

    <!-- RIGHT CONTENT -->
    <div class="contact-content">
        <h1 class="contact-title">My Contact</h1>
        <div class="title-line"></div>

        <p class="contact-text">
            Feel free to reach out to me for collaborations, inquiries, or any project ideas.
            I am always open to connecting with new people and exploring new opportunities.
        </p>

        <div class="contact-info">

            <div>
                <i class="fa-solid fa-phone"></i>
                <a href="https://www.facebook.com/photo/?fbid=122115821804307176&set=a.122103428798307176">+123-456-7890</a>
            </div>

            <div>
                <i class="fa-brands fa-facebook"></i>
                <a href="https://www.facebook.com/christian.louie.galang.2025" target="_blank">
                    Christian Louie Galang
                </a>
            </div>

            <div>
                <i class="fa-solid fa-envelope"></i>
                <a href="https://mail.google.com/mail/u/0/?pli=1#inbox?compose=new">
                  christiangalang61@gmail.com
                </a>
            </div>

            <div>
                <i class="fa-solid fa-location-dot"></i>
                <a href="google.com/maps/place/City+College+of+Angeles/@15.1366628,120.5854669,15z/data=!4m6!3m5!1s0x3396f260ef22a3af:0x8e45fe3230466db2!8m2!3d15.1498489!4d120.5779123!16s%2Fg%2F1ptxybrnl?entry=ttu&g_ep=EgoyMDI1MTIwMi4wIKXMDSoASAFQAw%3D%3D"
                   target="_blank">
                    City College of Angeles, Philippines
                </a>
            </div>

        </div>
    </div>

</div>

<!-- LOGOUT BUTTON -->
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button class="logout-btn">Logout</button>
</form>

</body>
</html>
