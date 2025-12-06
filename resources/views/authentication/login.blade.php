<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Login</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif;
            background: linear-gradient(135deg, #1e1e2f, #3a3a7c);
            color: #fff;
            min-height: 100vh; /* keeps footer at bottom */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            text-align: center;
        }

        .container {
            margin-top: 60px;
            max-width: 600px;
            padding: 40px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(12px);
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
        }

        h1 {
            font-size: 3rem;
            margin-bottom: 10px;
            font-weight: bold;
        }

        p {
            font-size: 1.1rem;
            margin-bottom: 20px;
        }

        /* ===== Styled Inputs (matching register page) ===== */
        .form-input {
            width: 70%;
            padding: 12px;
            margin: 10px auto;
            display: block;
            border-radius: 8px;
            border: none;
            background: #333;
            color: #fff;
            font-size: 1rem;
            outline: none;
            text-align: center;
        }

        .form-input:focus {
            background: #3d3d3d;
            border: 1px solid #ffffff;
        }

        /* Submit button */
        button {
            margin-top: 10px;
            padding: 10px 25px;
            border: none;
            background: #7e0000ff;
            color: white;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1rem;
            transition: 0.3s;
        }

        button:hover {
            background: #a60000ff;
        }

        footer {
            width: 100%;
            padding: 15px 0;
            background: rgba(0, 255, 255, 0.6);
            color: #000;
            text-align: center;
            font-size: 0.9rem;
            margin-top: 30px;
            border-top: 1px solid rgba(255,255,255,0.2);
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Welcome to My Portfolio</h1>
        <p>Explore my work, skills, and projects. Let's build something amazing together!</p>

        <form action="{{ route('login') }}" method="POST">
            @csrf

            <label>Email</label>
            <input type="email" name="email" class="form-input" required>

            <label>Password</label>
            <input type="password" name="password" class="form-input" required>

            <button type="submit">Login</button>
        </form>
    </div>

    <footer>
        © 2025 Galang Christian — All Rights Reserved
    </footer>

</body>
</html>
