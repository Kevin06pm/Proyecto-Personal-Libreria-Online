<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #f8f9fa;
    }

    .auth-container {
        display: flex;
        justify-content: center;
        align-items: center;
        background-size: cover;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        max-width: 900px;
        width: 100%;
        height: 100%;
    }

    .form-container {
        background: rgba(255, 255, 255, 0.9);
        padding: 30px;
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        background: url('https://source.unsplash.com/1600x900/?nature,water') no-repeat center center;
    }

    .form-container h2 {
        margin-bottom: 20px;
        text-align: center;
    }

    .form-label {
        font-weight: bold;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .toggle-btn {
        margin-top: 10px;
        cursor: pointer;
        text-align: center;
        color: #007bff;
    }

    .toggle-btn:hover {
        text-decoration: underline;
    }
</style>
<body>
<div class="auth-container">
    <div class="form-container">
        <h2 id="form-title">Register</h2>
        <form id="auth-form" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password-confirm" class="form-label">Confirm Password</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
            <button type="submit" class="btn btn-primary w-100" id="submit-btn">Register</button>
        </form>
        <a class="btn btn-link" href="{{ route('login') }}">
            {{ __('Already have an account? Login') }}
        </a>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

</body>
</html>
