{{-- @extends('layouts.template') --}}

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/style.css">
    <title>register</title>

{{-- @section('content') --}}
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-mt-4">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>
                <div class="card-body"> --}}
                    {{-- @if(count($errors) > 0)
                    @foreach($errors->all() as $error)
                        <div class="alert alert-warning">{{ $error }}</div>
                    @endforeach
                    @endif
                    @if ($message = Session::get('error'))
                        <div class="alert alert-warning">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif --}}
                    {{-- <form method="POST" action="{{ route('register') }}">

                        <div class="row">
                            <div class="col">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" id="alamat" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="phone">No tlp</label>
                                    <input type="text" name="phone" id="phone" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password_confirmation">Confirm Password</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary mb-4">Register</button>
                                    <p>Sudah punya akun? Login <a href="{{ route('login') }}" class="text-decoration-none">disini</a></p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="">
    <div class=" title-home1">
        {{-- <div class="col-md-4 ">
            <div class="m-5">
                <div class="mt-4 text-center">
                    <h1 style="color: #DDA15E;">Welcome Back!</h1>
                </div>
                <div class="mt-2 mb-5 text-center">
                    <p style="color: #DDA15E;">To keep connected with us please login with your personal info</p>
                </div>
                <div class="mt-4 text-center mb-5">
                    <button class="rounded-pill  border-0 title-home2">
                        <a href="{{ route('login') }}" class="m-2" style="color: #DDA15E;">Sign In</a>
                    </button>
                </div>
            </div>
        </div> --}}
        {{-- <div class="col-md-8 col-6 title-home2">
            <div class="mt-4 text-center">
                <h1 class="mt-5" style="color: #DDA15E;">CREATE ACCOUNT</h1>
            </div>
            <div class="">
                <form method="POST" action="{{ route('register') }}">

                    <div class="row">
                        <div class="col">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary mb-4">Register</button>
                                <p>Sudah punya akun? Login <a href="{{ route('login') }}" class="text-decoration-none">disini</a></p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div> --}}
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card title-home2">
                        <div class="card-header" style="color: #DDA15E;">{{ __('Register') }}</div>
                        <div class="card-body">
                            @if(count($errors) > 0)
                            @foreach($errors->all() as $error)
                                <div class="alert alert-warning">{{ $error }}</div>
                            @endforeach
                            @endif
                            @if ($message = Session::get('error'))
                                <div class="alert alert-warning">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                            <form method="POST" action="{{ route('register') }}">

                                <div class="    ">
                                    <div class="">
                                        @csrf
                                        <div class="form-group">
                                            <label for="name">Nama</label>
                                            <input type="text" name="name" id="name" class="">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" name="email" id="email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" id="password" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="password_confirmation">Confirm Password</label>
                                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary mb-4">Register</button>
                                            <p>Sudah punya akun? Login <a href="{{ route('login') }}" class="text-decoration-none">disini</a></p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- @endsection --}}
