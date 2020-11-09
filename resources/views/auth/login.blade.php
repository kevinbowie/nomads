<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NOMADS - Login</title>
    <link rel="stylesheet" type="text/css" href="frontend/libraries/bootstrap/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Assistant:200,300,400,600,700,800|Playfair+Display:400,400i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="frontend/styles/main.css">
</head>

<body>
    <main class="login-container">
        <div class="container">
            <div class="row page-login d-flex align-items-center">
                <div class="section-left col-12 col-md-6">
                    <h1 class="mb-4">We explore the new life much better</h1>
                    <img src="{{ url('frontend/images/login-gallery.png') }}" alt="" class="w-75 d-none d-sm-flex">
                </div>
                <div class="section-right col-12 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ url('frontend/images/logo.png') }}" alt="" class="w-50 mb-4">
                            </div>
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="emailHelp" value="{{ old('email') }}">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="check-remember-me" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="check-remember-me" class="form-check-label">Remember Me</label>
                                </div>
                                <button type="submit" class="btn btn-login btn-block">Sign In</button>

                                @if (Route::has('password.request'))
                                <p class="text-center mt-4">
                                    <a href="{{ route('password.request') }}">Saya lupa password</a>
                                </p>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="frontend/libraries/jquery/jquery-3.4.1.min.js"></script>
    <script src="frontend/libraries/bootstrap/js/bootstrap.js"></script>
</body>

</html>