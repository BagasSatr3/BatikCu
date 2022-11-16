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
        <form action="/item/produk" method="GET" class="form-search d-flex flex-row-reverse">
            <input type="search" class="search-data" placeholder="Search" name="q">
            <button type="submit" class="fa fa-search"></button>
          </form>
    </div>
  </div>
  </div>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
  </form>

</body>
