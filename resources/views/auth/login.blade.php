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
        height: auto;
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
        <h2 id="form-title">Login</h2>
        <form id="auth-form" method="POST" action="{{ route('login') }}">
            @csrf
            <div id="name-field" class="mb-3" style="display: none;">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="row mb-3">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary w-100" id="submfit-btn">Login</button>
            <div class="row mb-0">
                <div class="col-md-8 offset-md-4">
                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </div>
            </div>
        </form>
        <a class="btn btn-link" href="{{__('register') }}">
            {{ __('Don`t have an account? Register') }}
        </a>
        <!-- <div class="toggle-btn" id="toggle-btn">Don't have an account? Register</div> -->
    </div>
</div> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

</body>
</html>
