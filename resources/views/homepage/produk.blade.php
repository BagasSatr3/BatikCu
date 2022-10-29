@extends('layouts.template')
@section('content')

<div class="title-home1">
    <div class="row">
        <div class="col text-center mt-5 mb-4">
            <div class="mt-4 ">
                <center>
                    <div class="container" >
                      <div class="row mt-5" >
                        <div class="col" >
                          <div id="carousel" class="carousel slide" data-ride="carousel"  >
                            <div class="carousel-inner" style=>
                              <div class="carousel-item active">
                                  <img src="{{ asset('images/photo1.png') }}" class="carosel" alt="..." style="max-width: 100%; height: auto;" >
                              </div>
                              <div class="carousel-item">
                                <img src="{{ asset('images/photo2.png') }}" class="d-block w-150 h-250" alt="..." style="max-width: 100%; height: auto;"  >
                              </div>

                              <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>

                            </div>


                          </div>
                        </div>
                      </div>
                    </div>
                    </center>
            </div>
            <img src="/images/logo.svg" height="150px" class=""/>
            <div class="mt-4">
                <h3 class="text-white text-bold">BATIK CULTURE - Sharing the Batik of your life</h3>
            </div>
        </div>
    </div>
</div>


<div class="container">
  <div class="row mt-4">
    <div class="col col-lg-9 col-md-9 mb-2">
      {{-- @if(isset($itemkategori))
      <h3>{{ $itemkategori->nama_kategori }}</h3>
      @else
      <h3>Semua Kategori</h3>
      @endif --}}
      <div class="row mt-4">
        @foreach($listkategori as $kategori)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <a href="{{ URL::to('item/kategori/'.$kategori->slug_kategori) }}">
              @if($kategori->foto != null)
              <img src="{{ \Storage::url($kategori->foto) }}" alt="{{ $kategori->nama_kategori }}" class="card-img-top">
              @else
              <img src="{{ asset('images/bag.jpg') }}" alt="{{ $kategori->nama_kategori }}" class="card-img-top">
              @endif
            </a>
            <div class="card-body">
              <a href="{{ URL::to('item/kategori/'.$kategori->slug_kategori ) }}" class="text-decoration-none">
                <p class="card-text">
                  {{ $kategori->nama_kategori }}
                </p>
              </a>
              <div class="row mt-4">
                <div class="col">
                  <button class="btn btn-light">
                    <i class="far fa-heart"></i>
                  </button>
                </div>
                <div class="col-auto">
                  <p>
                    Rp. {{ number_format($kategori->harga, 2) }}
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <div class="row">
        <div class="col">

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
