@extends('layouts.template')
@section('content')
<div class="container">
    <div class="row mt-5 mb-5">
        <div class="col-md-4 title-home1">
            <div class="mt-4 " style="width: 100%; height: auto;">
                <img src="{{ asset('images/bag.jpg') }}" alt="" class="img-fluid rounded-circle" >
            </div>
            <div class="text-center mt-4">
                <button disabled="disabled" class="title-home2 rounded-pill border border-0">
                    <h3 class="mx-2" style="color: #414B3B;">Lorem Ipsum</h3>
                </button>
            </div>
            <div class="mt-4">
                <div class="container">
                    <a href="#" class="mt-4">
                        <p style="color: #FAEDCD;">
                           Profile
                        </p>
                    </a>
                    <a href="#" class="">
                        <p style="color: #FAEDCD;">
                           Settings
                        </p>
                    </a>
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
                <div class="ml-4 mt-4">
                    <label for="exampleFormControlInput1" class="form-label ml-2 " style="color: #414B3B;">Username</label>
                    <input type="text" class="form-control rounded-pill" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="ml-4 mt-2">
                    <label for="exampleFormControlInput1" class="form-label ml-2" style="color: #414B3B;">Email address</label>
                    <input type="email" class="form-control rounded-pill" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="ml-4 mt-2">
                    <label for="exampleFormControlInput1" class="form-label ml-2" style="color: #414B3B;">Password</label>
                    <input type="number" class="form-control rounded-pill" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="ml-4 mt-2">
                    <label for="exampleFormControlInput1" class="form-label ml-2" style="color: #414B3B;">Alamat</label>
                    <input type="text" class="form-control rounded-pill" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="ml-4 mt-2 mb-3">
                    <button class="title-home3 rounded-pill border-0" >
                        <a href="#" class="m-3" style="color: #414B3B;">Ubah</a>
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
