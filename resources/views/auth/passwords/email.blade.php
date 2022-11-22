
@php
    $title = "Reset Password";
@endphp

@extends('layouts.template')
@section('content')
<div class="bg-auth">  
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card text-white" style="border-radius: 1rem; background:#DDA15E;">
                        <div class="card-body p-5 text-center">
                            <div class="mb-md-5 mt-md-4 pb-5">

                                <div class="d-flex flex-column align-items-center">
                                    <h1>Reset Password</h1>
                                    <div class="text-center" >Yahaha lupa password!!!</div>
                    
                                </div>
                                <form method="POST" action="{{ route('password.email') }}" class="form-reset">
                                    @csrf
                                    <div class="mt-5">
                                        <input id="email" type="email" class="form-input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div><br>
                                    <button type="submit" class="btn btn-outline mt-2">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                                </form>
                                <br>
                                <div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection