@extends('layouts.template')
@section('content')

<div class="title-home1">
    <div class="row">
        <div class="col text-center mt-5 mb-4">
            <div class="row">
                <div class="col">
                  <div id="carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      @foreach($itemslide as $index => $slide )
                      @if($index == 0)
                      <div class="carousel-item active">
                          <img src="{{ \Storage::url($slide->foto) }}" class="d-block w-100" alt="...">
                          <div class="carousel-caption d-none d-md-block">
                            <h5>{{ $slide->caption_title }}</h5>
                            <p>{{ $slide->caption_content }}</p>
                          </div>

                      </div>

                      @endif

                    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            {{-- <div class="mt-4 ">
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
            </div> --}}

        </div>
    </div>
</div>

<div class="title-home3">
    <br>
    <div class="mb-4">
        <h2 class="text-center" style="color: #414B3B"><strong> Kategori Produk </strong></h2>
      </div>
      <div class="container">
        <div class="row mt-4 ">
            @foreach($itemkategori as $kategori)
            <div class="mx-1 col">
              <div class=" card mb-4 border border-0">
                <a href="{{ URL::to('item/kategori/'.$kategori->slug_kategori) }}">
                  
                </a>
                <div class="card-body title-home3 row">
                        <button type="button" class="text-home2-button rounded-pill border border-0 mt-4">
                            <a href="{{ URL::to('item/kategori/'.$kategori->slug_kategori) }}" class="text-center text-decoration-none">
                                <h6 class="card-text m-2" style="color: #FAEDCD;">{{ $kategori->nama_kategori }}</h6>
                              </a>
                        </button>
                </div>
              </div>
            </div>


            @endforeach
        </div>
      </div>
</div>
<div class="title-home2">
    <div class="row">
        <div class="container">
            <div class="col text-center mt-5 mb-5">
                <h3 class="text-home2"><strong> Let’s make a miracle in every batik stroke. </strong></h3>
            </div>
        </div>
    </div>
</div>
<div class="title-home1 ">
    <div class="row">
        <img src="{{ asset('images/EVENT.png') }}" alt="" class="col-12 mb-4">
    </div>
    <div class="mt-4">
        <h3 class="text-white text-center"><strong> Promo </strong></h3>
    </div>
    <div class="container ">
        <div class="col mt-2 mb-2">
            <div class="row rounded">
                @foreach($itempromo as $promo)
              <div class="col-md-4">
                <div class="card mb-4 mt-4 rounded border border-0 title-home3">
                    <a href="{{ URL::to('item/produk/'.$promo->produk->slug_produk) }}">
                        @if($promo->produk->foto != null)
                        <img src="{{\Storage::url($promo->produk->foto) }}" alt="{{ $promo->produk->nama_produk }}" class="card-img title-home3">
                        @else
                        <img src="{{asset('images/bag.jpg') }}" alt="{{ $promo->produk->nama_produk }}" class="card-img title-home3">
                        @endif
                      </a>
                  <div class="card-body rounded">
                    <a href="{{ URL::to('item/produk/'.$promo->produk->slug_produk) }}" class="text-decoration-none" style="color: #414B3B">
                        <h5 class="card-text">
                          {{ $promo->produk->nama_produk }}
                        </h5>
                      </a>
                    <div class="row mt-2">
                      <div class="col">
                        <button class="btn">
                          <i class="far fa-heart"></i>
                        </button>
                      </div>
                      <div class="col-auto">
                        <p style="color: #414B3B">
                          <del>Rp. {{ number_format($promo->harga_awal, 2) }}</del>
                          <br />
                          Rp. {{ number_format($promo->harga_akhir, 2) }}
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
    </div>
    </div>
<br>
</div>

{{-- <div class="kategori md-12 col-sm-12 mb-4">
    <h3 class="text-center pt-2">Promo</h3>
      <div class="row mt-4">
        @foreach($itempromo as $promo)
        <!-- produk pertama -->
        <div class="col-md-4">
          <div class="card-promo mb-4 shadow-sm">
            <a href="{{ URL::to('produk/'.$promo->produk->slug_produk) }}">
              @if($promo->produk->foto != null)
              <img src="{{\Storage::url($promo->produk->foto) }}" alt="{{ $promo->produk->nama_produk }}" class="card-img-top">
              @else
              <img src="{{asset('images/bag.jpg') }}" alt="{{ $promo->produk->nama_produk }}" class="card-img-top">
              @endif
            </a>
            <div class="card-body">
              <a href="{{ URL::to('produk/'.$promo->produk->slug_produk) }}" class="text-decoration-none">
                <p class="card-text">
                  {{ $promo->produk->nama_produk }}
                </p>
              </a>
              <div class="row mt-4">
                <div class="col">
                  <button class="btn btn-light">
                    Buy
                  </button>
                </div>
                <div class="col-auto">
                  <p>
                    <del>Rp. {{ number_format($promo->harga_awal, 2) }}</del>
                    <br />
                    Rp. {{ number_format($promo->harga_akhir, 2) }}
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
        @endforeach --}}
@endsection
