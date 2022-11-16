@extends('layouts.template')
@section('content')
<div class="container-md">
    <div class="row mt-5 "><br>
        <div class="col-md-4 title-home3">
            <div class="mt-3" style="width: 100%; height: auto;">
                <img src="{{ asset('images/bag.jpg') }}" alt="" class="img-fluid rounded" >
            </div>
            <div class="mt-4">
                <div class="container">
                    <a href="/user/wishlist" class="text-decoration-none">
                        <p style="color:#414B3B;;">
                            Wishlist
                        </p>
                    </a>
                    <a href="#" class="text-decoration-none" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <p style="color:#414B3B;;">
                            Sign Out
                        </p>
                    </a>
                </div>

            </div>
        </div>
        <div class="col-md-8 col-6 title-home2">
            <div class="container mb-4">
                <div class="mt-4">
                    <h2 style="color: #DDA15E;">Profile</h2>
                </div>
                <div class="mt-4 row">
                    <label for="nama" class="form-label ml-2 " style="color: #414B3B;">Username</label>
                    <button disabled="disabled" style="background: #CCD5AE; " class="col rounded-pill border-0">
                        <p class="fs-4" style="">{{ Auth::user()->name}}</p>
                    </button>
                </div>
                <div class="mt-2">
                    <label for="email" class="form-label ml-2" style="color: #414B3B;">Email address</label>
                    <button disabled="disabled" style="background: #CCD5AE; " class="col rounded-pill border-0">
                        <p class="fs-4" style="">{{ Auth::user()->email}}</p>
                    </button>
                </div>
                <div class="mt-2">
                    <label for="alamat" class="form-label ml-2" style="color: #414B3B;">Alamat</label>
                    <button disabled="disabled" style="background: #CCD5AE; " class="col rounded-pill border-0">
                        <p class="fs-4" style="">{{ Auth::user()->alamat}}</p>
                    </button>
                </div>
                <div class="mt-2">
                    <label for="phone" class="form-label ml-2" style="color: #3d413a;">Phone</label>
                    <button disabled="disabled" style="background: #CCD5AE; " class="col rounded-pill border-0">
                        <p class="fs-4" style="">{{ Auth::user()->phone}}</p>
                    </button>
                </div>
                {{-- <div class="mt-2 mb-3">
                    <button class="title-home3 rounded-pill border-0" >meh
                        <a href="{{ url::to('/profile/edit/') }}" class="m-3" style="color: #414B3B;">Ubah</a>
                    </button>
                </div> --}}
            </div>
        </div>
    </div>
</div>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<script src="js/scripts.js"></script>
@endsection


