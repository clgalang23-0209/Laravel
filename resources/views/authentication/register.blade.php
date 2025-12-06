@include('components.header')

<style>
    /* Reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html, body {
        height: 100%;
        font-family: Arial, Helvetica, sans-serif;
        background-color: #1f1f1f;
        color: #fff;
    }

    /* Centering container */
    .page-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        padding: 20px;
    }

    /* Form container styled like portfolio */
    .register-container {
        background-color: #2b2b2b;
        padding: 40px 50px;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.7);
        width: 100%;
        max-width: 400px;
    }

    /* Title */
    .register-container h1 {
        text-align: center;
        color: #7e0000ff; /* Portfolio accent red */
        font-size: 2.5rem;
        margin-bottom: 30px;
        font-weight: bold;
    }

    /* Label styling */
    .register-container p {
        margin-bottom: 8px;
        font-weight: 600;
        color: #ccc;
        font-size: 1rem;
    }

    /* Inputs styling */
    .register-container input[type="text"],
    .register-container input[type="email"],
    .register-container input[type="password"] {
        width: 100%;
        padding: 12px 15px;
        margin-bottom: 20px;
        border: none;
        border-radius: 6px;
        background-color: #444;
        color: #fff;
        font-size: 1rem;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    .register-container input[type="text"]::placeholder,
    .register-container input[type="email"]::placeholder,
    .register-container input[type="password"]::placeholder {
        color: #aaa;
    }

    /* Input focus effect */
    .register-container input[type="text"]:focus,
    .register-container input[type="email"]:focus,
    .register-container input[type="password"]:focus {
        outline: none;
        background-color: #5c0000;
        box-shadow: 0 0 8px #7e0000ff;
        color: #fff;
    }

    /* Submit button */
    .register-container input[type="submit"] {
        width: 100%;
        padding: 14px;
        background-color: #7e0000ff;
        color: white;
        border: none;
        border-radius: 6px;
        font-size: 1.2rem;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .register-container input[type="submit"]:hover {
        background-color: #a30000;
    }

    /* Error messages */
    .errors {
        margin-bottom: 20px;
        color: #ff6b6b;
        font-size: 0.9rem;
        font-weight: 600;
        background-color: #4b0000;
        padding: 10px 15px;
        border-radius: 6px;
    }
</style>

<div class="page-wrapper">
    <div class="register-container">
        <h1>Register</h1>

        @if ($errors->any())
            <div class="errors">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('register') }}" method="POST" autocomplete="off">
            @csrf

            <p>Name</p>
            <input type="text" name="name" placeholder="Enter your full name" required>

            <p>Email</p>
            <input type="email" name="email" placeholder="Enter your email address" required>

            <p>Password</p>
            <input type="password" name="password" placeholder="Enter a strong password" required>

            <p>Confirm Password</p>
            <input type="password" name="password_confirmation" placeholder="Confirm your password" required>

            <input type="submit" value="Register">
        </form>
    </div>
</div>

@include('components.footer')
