<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style2.css">
<body class="">

{{-- <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
  <div class="container">
    <a class="navbar-brand" href="/">MALANG`CU</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="mr-auto navbar-nav"></ul>
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ URL::to('produk') }}">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ URL::to('kategori') }}">Kategori</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ URL::to('kontak') }}">Kontak</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ URL::to('about') }}">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ URL::to('login') }}">Login</a>
        </li>
        <input type="text" class="border border-radius text-center"style="500px" placeholder="Search">
      </ul>
    </div>
  </div>
</nav> --> --}}
{{-- <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
      <div class="modal-content ">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Modal 1</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          @include('auth.login')
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open second modal</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Modal 2</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          @include('auth.register')
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
        </div>
      </div>
    </div>
  </div> --}}


{{-- <nav class="">
  <ul class="navbar-nav">

    <li class="nav-item dropdown">
      <a class="dropdown dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa-solid fa-bars"></i>
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{  URL::to('profile') }}">Profile</a>
        <a class="dropdown-item" href="{{ URL::to('kategori') }}">Kategori</a>
        <a class="dropdown-item" href="{{ URL::to('about') }}">About</a>
        <div class="dropdown-divider"></div>
        @if(Auth::guest())
          <a class="dropdown-item" href="/login">Login</a>
          @else
          {{ Auth::user()->name }}
          <a href="#" class="dropdown-item" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">Sign Out</a>
       @endif
    </div>
    </li>
  </ul>

</nav> --}}


<!-- Button trigger modal -->


  <!-- Modal -->



{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script> --}}
<script src="js/scripts.js"></script>

<div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="" style="">
        <h2 class="text-center" style="color: #DDA15E;">
            @if (Auth::guest())
                <h2 class="text-center" style="color: #DDA15E;">Guest</h2>
                @else
                {{ Auth::user()->name }}
            @endif
          </h2>
        @if (Auth::check())
            @if (Auth::user()->role == 'admin')
            <a href="/admin">Services</a>
            @elseif (Auth::user()->role == 'member')
            <a href="/user/profile">Profile</a>
            <a href="/user/wishlist">Wishlist</a>
            <a href="/transaksiu">Transaksi</a>
            <a href="/cart">Cart</a>
            @else
            <h2>naan</h2>
            @endif
        @endif

        <a href="/item">Product</a>
        <a href="/#contact">Contact</a>
        @if(Auth::guest())
              <a class="" href="/login">Login</a>
              @else
              <a href="#" class="" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">Sign Out</a>
           @endif
    </div>

  </div>

  <div id="main">
  <div class="container-fluid">
    <div class="nav">
        <button class="openbtn" onclick="openNav()">&#9776;</button>
        <a href="/" class="ml-2 " >
            <img src="/images/logoPutih.png" height="50px" class=""/>
        </a>
        @if (Auth::Check())
        <form action="/item/produk" method="GET" class="form-search d-flex flex-row-reverse">
            <a href="/cart" class="ml-3 mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
            </a>
            <button type="submit" class="fa fa-search"></button>
            <input type="search" class="search-data" placeholder="Search" name="q">
          </form>
        @endif
    </div>
  </div>
  </div>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
  </form>

</body>
