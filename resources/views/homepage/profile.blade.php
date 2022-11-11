@extends('layouts.template')
@section('content')
<div class="container">
    <div class="row mt-5  mb-5 "><br>
        <div class="col-md-4 title-home1">
            <div class="" style="width: 100%; height: auto;">
                <img src="{{ asset('images/bag.jpg') }}" alt="" class="img-fluid rounded" >
            </div>
            <div class="mt-4">
                <div class="container">
                    <a href="#" class="" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <p style="color: #FAEDCD;">
                            Sign Out
                        </p>
                    </a>
                </div>

            </div>
        </div>
        <div class="col-md-8 col-6 title-home2">
            <div class="container">
                <div class="mt-4">
                    <h2 style="color: #DDA15E;">Profile</h2>
                </div>
                <div class="mt-4">
                    <label for="exampleFormControlInput1" class="form-label ml-2 " style="color: #414B3B;">Username</label>
                    <p class="ml-4">{{ Auth::user()->name}}</p>
                </div>
                <div class="mt-2">
                    <label for="exampleFormControlInput1" class="form-label ml-2" style="color: #414B3B;">Email address</label>
                    <p class="ml-4">{{ Auth::user()->email}}</p>
                </div>
                <div class="mt-2">
                    <label for="exampleFormControlInput1" class="form-label ml-2" style="color: #414B3B;">Alamat</label>
                    <p class="ml-4">{{ Auth::user()->alamat}}</p>
                </div>
                <div class="mt-2">
                    <label for="exampleFormControlInput1" class="form-label ml-2" style="color: #3d413a;">Phone</label>
                    <p class="ml-4">{{ Auth::user()->phone}}</p>
                </div>
                <div class="mt-2 mb-3">
                    <button class="title-home3 rounded-pill border-0" >meh
                        {{-- <a href="{{ url::to('/profile/edit/') }}" class="m-3" style="color: #414B3B;">Ubah</a> --}}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
  </form>
