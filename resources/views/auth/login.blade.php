<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/style.css">
    <title>Login</title>
</head>

<body class="">


    {{-- <div class="container">
        <div class="row row-cols-2 ">
            <div class="col text-center title-home1" style="margin:auto 0; height:100px"> ipsum dolor sit, amet consectetur adipisicing elit. Hic obcaecati ad dolore quidem aut optio qui? Nihil nesciunt ipsam soluta quod pariatur reiciendis eos saepe odio. Fuga error voluptas provident.m</div>

            <div class="col-6 bg-auth">
                <div class="d-flex flex-column align-items-center">
                    <h1>Log In</h1>
                    <div class="text-center" >Hallo kawan Malang`Cu!
                        Silahkan login di bawah ini!</div>
                    <form method="POST" action="{{ route('login') }}" class="form-auth">
                        @csrf
                        <div class="mt-5">
                            <input id="email" type="email" class="form-input form-control @error('email') is-invalid @enderror" placeholder="Masukkan email" name="email" value="{{ old('email') }}" required autocomplete="current-email" autofocus placeholder="Email Address">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mt-4">
                            <input id="password" type="password" class="form-input form-control @error('password') is-invalid @enderror" placeholder="Masukkan password" name="password" required autocomplete="current-password" autofocus placeholder="Password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-check mt-4">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{
                                        old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                        <br>
                        <div>
                            <button type="submit" class="btn btn-auth">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                        </div>
                    </form>
                </div>
    </div> --}}


    <div class="">
        <div class="row title-home1 vh-100">
            <div class="col-md-8 col-6 d-flex flex-column align-items-center justify-content-center">
                <div class="mt-4 text-center">
                    <h1 class="mt-5" style="color: #DDA15E;"><strong> Sign in to Batik`Cu </strong></h1>
                </div>
                <div class="">
                    <form method="POST" action="{{ route('login') }}" class="form-auth">
                        @csrf
                        <div class="mt-5">
                            <input id="email" type="email" class="login form-input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="current-email" autofocus placeholder="Email Address">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mt-4">
                            <input id="password" type="password" class="login form-input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" autofocus placeholder="Password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-check mt-4">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{
                                        old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label rem" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                        <br>
                        <div>
                            <button type="submit" class="btn btn-auth log-gin ">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                            <a class="btn btn-link forgot" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4 title-home2 d-flex flex-column align-items-center justify-content-center">
                <div class="m-5">
                    <div class="mt-4 text-center">
                        <h1 style="color: #DDA15E;"><strong> Hello, Friend! </strong></h1>
                    </div>
                    <div class="mt-2 mb-5 text-center">
                        <p style="color: #DDA15E;">Enter your personal details and start your journey with us</p>
                    </div>
                    <div class="mt-4 text-center mb-5">
                        <button class="rounded-pill logg">
                            <a href="{{ route('register') }}" class="m-2" style="color: #DDA15E;">Sign In</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>
