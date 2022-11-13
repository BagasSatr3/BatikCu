@extends('layouts.template')
@section('content')

<div class="title-home1">
    <div class="row">
        <div class="col text-center mt-5 mb-4">
            <div class="mt-4 ">
                <center>
                    <div class="container">
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


<div class="container title-home3 rounded mb-3">
  <div class="row mt-4">
      <div class="col col-lg-9 col-md-9 mb-2">
        @if(isset($itemkategori))
        <h3 class="ml-5 mt-3" style="color: #414B3B; font-weight: bold;">{{ $itemkategori->nama_kategori }}</h3>
        @else
        <h3 class="ml-5 mt-3" style="color: #414B3B; font-weight: bold;">Semua Kategori</h3>
        @endif
        <div class="row mt-4 m-4">
          @foreach($itemproduk as $produk)
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm ">
              <a href="{{ URL::to('item/produk/'.$produk->slug_produk) }}">
                @if($produk->foto != null)
                <img src="{{ \Storage::url($produk->foto) }}" alt="{{ $produk->nama_produk }}" class="img-fluid img-thumbnail">
                @else
                <img src="{{ asset('images/bag.jpg') }}" alt="{{ $produk->nama_produk }}" class="img-fluid img-thumbnail">
                @endif
              </a>
              <div class="card-body mt-2" >
                <a href="{{ URL::to('item/produk/'.$produk->slug_produk ) }}" class="text-decoration-none" style="color: #414B3B; font-weight: bold;">
                  <p class="card-text fs-5 ml-2">
                    {{ $produk->nama_produk }}
                  </p>
                </a><br>
                <div class="row mt-2">
                  <div class="col">
                    <form action="{{ route('wishlist.store') }}" method="post">
                        @csrf
                        <input type="hidden" name="produk_id" value={{ $produk->id }}>
                        <button type="submit" class="btn " style="font-family: Poppins;">
                        @if(isset($itemwishlist) && $itemwishlist)
                        <i class="fas fa-heart"></i>
                        @else
                        <i class="far fa-heart"></i>
                        @endif
                        </button>
                      </form>
                  </div>
                  <div class="col-auto">
                    <p>
                      Rp. {{ number_format($produk->harga, 2) }}
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
            {{ $itemproduk->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
