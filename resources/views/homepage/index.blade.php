@extends('layouts.template')
@section('content')


<div class="title-home1">
    <div class="row">
        <div class="col text-center mt-5 mb-4">
            <img src="/images/logo.svg" height="200px" class=""/>
            <div class="mt-4">
                <h5 class="text-white">BATIK CULTURE - Sharing the Batik of your life</h5>
            </div>
            <div class="mt-4 ">
                <button type="button" class="btn text-white rounded-pill">CREATE YOUR FREE ACCOUNT</button>
            </div>
        </div>
    </div>
</div>
<div class="title-home2">
    <div class="row">
        <div class="container">
            <div class="col text-center mt-5 mb-4">
                <h3 class="text-home2">Let’s make a miracle in every batik stroke.</h3>
                <div class="mt-4">
                    <h5 class="text-home2 m-6">Batik merupakan salah satu seni budaya yang telah diakui dunia sebagai warisan kemanusiaan untuk budaya lisan dan non-bendawi oleh UNESCO sejak Oktober tahun 2009. Di Indonesia batik sudah ada sejak zaman Majapahit dan sangat populer pada abad setelahnya.Oleh karena itu, batik merupakan salah satu warisan seni budaya yang patut dilestarikan dan dikembangkan.</h5>
                </div>
                <div class="mt-4">
                   <img src="{{ url("images/bag.jpg") }}" alt="" class="img-fluid mx-auto rounded">
                </div>
                <button type="button" class="text-home2-button rounded-pill border border-0 mt-4">
                    <a href="#" class="m-4" style="color:#FAEDCD;">SHOP NOW</a>
                </button>
            </div>
        </div>
    </div>
</div>
<div class="title-home3">
    <div class="container">
        <br>
        <h2 class="text-center" style="color:#414B3B">Apa yang kami tawarkan?</h2>
        <div class="row">
            <div class="col">
                <div class="mt-4">
                    <img src="{{ url("images/bag.jpg") }}" alt="" class="img-fluid mx-auto rounded">
                    <center>
                        <button type="button" class="text-home2-button rounded-pill border border-0 mt-4">
                            <a href="#" class="m-4" style="color:#FAEDCD;">SHOP NOW</a>
                        </button>
                    </center>
                </div>
            </div>
            <div class="col mt-5 mb-4">
                <div class="row">
                    <button type="button" class="rounded-pill border border-0 mt-4" style="background-color: #414B3B;" disabled>
                        <h4 class="m-2" style="color:#FAEDCD;">Batik Clothes</h4>
                    </button>
                    <div class="mt-4">
                        <h5 class="" style="color:black">Pakaian dengan bahan berkualitas yang adem abizz dengan motif batik elegan siap menemani hari-hari indahmu. Dapatkan diskon up to 50%</h5>
                    </div>
                </div>
                <div class="mt-5 mb-4">
                    <div class="row">
                        <button type="button" class="rounded-pill border border-0 mt-4" style="background-color: #414B3B;" disabled>
                            <h4 class="m-2" style="color:#FAEDCD;">Batik Food</h4>
                        </button>
                        <div class="mt-4">
                            <h5 class="" style="color:black">Makanan yang terjamin rasa serta kualitasnya dengan tema batik unik spesial untukmu. Buy one get one free!</h5>
                        </div>
                    </div>
                </div>
                <div class="mt-5 mb-4">
                    <div class="row">
                        <button type="button" class="rounded-pill border border-0 mt-4" style="background-color: #414B3B;" disabled>
                            <h4 class="m-2" style="color:#FAEDCD;">Batik Fabric</h4>
                        </button>
                        <div class="mt-4">
                            <h5 class="" style="color:black">Kain Batik tulis atau cap asli kualitas premium yang dikemas secara eksklusive. Tersedia batik seri limited edition!</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="title-home1">
    <div class="row">
        <div class="container">
            <div class="col text-center mt-5 mb-4">
                <h3 class="" style="color: #FAEDCD">“Dimanapun kaki ini berpijak, Batiklah yang selalu menyadarkanku akan asal usulku. “</h3>
            </div>
            <div class="col text-center mt-5 mb-4">
                <h3 class="" style="color: #FAEDCD">- BATIK`CU -</h3>
            </div>
        </div>
    </div>
</div>
@endsection
