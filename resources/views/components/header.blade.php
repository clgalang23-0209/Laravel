<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    @php
        use Collective\Html\FormFacade as Form;
    @endphp

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif;
            background: linear-gradient(135deg, #1e1e2f, #3a3a7c);
            color: #ffffff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            text-align: center;
        }

        .container {
            margin-top: 40px; /* FIXED — no more giant top space */
            max-width: 600px;
            padding: 40px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(12px);
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
        }

        h1 {
            font-size: 3rem;
            margin-bottom: 10px;
            letter-spacing: 1px;
        }

        p {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        footer {
            width: 100%;
            padding: 15px 0;
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(10px);
            text-align: center;
            font-size: 0.9rem;
            margin-top: 40px;
            border-top: 1px solid rgba(255,255,255,0.2);
            box-shadow: 0 -4px 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Welcome to My Portfolio</h1>
        <p>Explore my work, skills, and projects. Let's build something amazing together!</p>
    </div>

</body>
</html>
