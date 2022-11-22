@extends('layouts.template')
@section('content')


<div class="title-home1">
    <div class="row">
        <div class="col text-center mt-5 mb-4">
            <img src="/images/logoPutih.png" height="500px" class=""/>
            <div class="">
                <h5 class="text-white"><strong> BATIK CULTURE - Sharing the Batik of your life </strong></h5>
            </div>
            @if (Auth::guest())
            <div class="mt-4 ">
                <button type="button" class="btn rounded-pill btn-homepage">
                    <a href="/register" class="text-decoration-none" style="color: black"><strong> CREATE YOUR FREE ACCOUNT </strong></a>
                </button>
            </div>
            @endif
        </div>
    </div>
</div>
<div class="title-home2">
    <div class="row">
        <div class="container">
            <div class="col text-center mt-5 mb-4">
                <h3 class="text-home2"><strong> Let’s make a miracle in every batik stroke. </strong></h3>
                <div class="mt-4">
                    <h5 class="text-home2 m-6">Batik merupakan salah satu seni budaya yang telah diakui dunia sebagai warisan kemanusiaan untuk budaya lisan dan non-bendawi oleh UNESCO sejak Oktober tahun 2009. Di Indonesia batik sudah ada sejak zaman Majapahit dan sangat populer pada abad setelahnya.Oleh karena itu, batik merupakan salah satu warisan seni budaya yang patut dilestarikan dan dikembangkan.</h5>
                </div>
                <div class="mt-4">
                   <img src="{{ url("images/bag.jpg") }}" alt="" class="img-fluid mx-auto rounded">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="title-home3">
    <div class="container">
        <br>
        <h2 class="text-center" style="color:#414B3B"><strong> Apa yang kami tawarkan? </strong></h2>
        <div class="row">
            <div class="col">
                <div class="mt-4">
                    <img src="{{ url("images/bag.jpg") }}" alt="" class="img-fluid mx-auto rounded">
                    <center>
                        <button type="button" class="btn-shop rounded-pill border border-0 mt-4">
                            <a href="/item" class="text-shop text-decoration-none">
                                <h3 class=""><strong> SHOP NOW </strong></h3>
                            </a>
                        </button>
                    </center>
                </div>
            </div>
            <div class="col mt-5 mb-4">
                <div class="">
                    <button type="button" class="rounded-pill border border-0 mt-4" style="background-color: #414B3B;" disabled>
                        <h4 class="m-2 py-0 px-2" style="color:#FAEDCD; ">Batik Clothes</h4>
                    </button>
                    <div class="mt-4">
                        <h5 class="" style="color:black">Pakaian dengan bahan berkualitas yang adem abizz dengan motif batik elegan siap menemani hari-hari indahmu. Dapatkan diskon up to 50%</h5>
                    </div>
                </div>
                <div class="mt-5 mb-4">
                    <div class="">
                        <button type="button" class="rounded-pill border border-0 mt-4" style="background-color: #414B3B;" disabled>
                            <h4 class="m-2 py-0 px-2" style="color:#FAEDCD;">Batik Food</h4>
                        </button>
                        <div class="mt-4">
                            <h5 class="" style="color:black">Makanan yang terjamin rasa serta kualitasnya dengan tema batik unik spesial untukmu. Buy one get one free!</h5>
                        </div>
                    </div>
                </div>
                <div class="mt-5 mb-4">
                    <div class="">
                        <button type="button" class="rounded-pill border border-0 mt-4" style="background-color: #414B3B;" disabled>
                            <h4 class="mt-2 py-0 px-3" style="color:#FAEDCD;">Batik Fabric</h4>
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
<div class="title-home2">
    <div class="row">
        <div class="container">
            <div class="col text-center mt-5 mb-4">
                <img src="/images/logohitam.svg" height="img-fluid" class=""/>
                <h3 class="mt-4" style="color: #414B3B;"><strong> About Us </strong></h3>
                <div class="mt-4">
                    <h5 class="text-home2 m-6">Kisah kami bermula ditahun 2022. Kami adalah perusahaan produsen pertama kain batik di Indonesia. Kami menawarkan berbagai kreasi ekslusive batik nusantara mulai dari pakaian, kain, hingga makanan bertema batik. Misi kami yaitu “ hanya yang terbaik untuk pelanggan.”</h5>
                </div>
                <h3 class="mt-4" style="color: #414B3B;"><strong> Our Team </strong></h3>
                <div class="row row-cols-3 mt-3">
                    <div class="col">
                        <img src="{{ url("images/bag.jpg") }}" alt="" class="img-fluid mx-auto rounded">
                        <div class="mt-2">
                            <h2 style="color: #414B3B;">Bagas Satria Jiwandana</h2>
                        </div>
                        <div class="mt-2">
                            <h4 style="color: #DDA15E;">Frontend Developer</h4>
                        </div>
                        <div class="mt-2">
                            <h4 style="color: #DDA15E;">Backend Developer</h4>
                        </div>
                    </div>
                    <div class="col">
                        <img src="{{ url("images/bag.jpg") }}" alt="" class="img-fluid mx-auto rounded">
                        <div class="mt-2">
                            <h2 style="color: #414B3B;">Shinta Aishnabila</h2>
                        </div>
                        <div class="mt-2">
                            <h4 style="color: #DDA15E;"> UI Design</h4>
                        </div>
                        <div class="mt-2">
                            <h4 style="color: #DDA15E;">Digital Marketer</h4>
                        </div>
                    </div><div class="col">
                        <img src="{{ url("images/bag.jpg") }}" alt="" class="img-fluid mx-auto rounded">
                        <div class="mt-2">
                            <h2 style="color: #414B3B;">Ezar Rajis Aumali</h2>
                        </div>
                        <div class="mt-2">
                            <h4 style="color: #DDA15E;">Content Writer</h4>
                        </div>
                        <div class="mt-2">
                            <h4 style="color: #DDA15E;">Branding</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="title-home1 mb-3">
    <div class="row">
        <div class="container">
            <div class="col text-center mt-5 mb-4">
                <h3 class="" id="contact" style="color: #FAEDCD">Contact Us</h3>
            </div>
            <div class="row">
                <div class="col text-right ">
                    <h3 class="mt-4" style="color: #FAEDCD">Email :</h3>

                </div>
                <div class="col text-left ">
                    <button class="title-home2 mt-4 border-0 rounded-pill">
                        <a href="mailto:sehatkuy.web@gmail.com" class="text-decoration-none" target="_blank" rel="noopener noreferrer">
                            <h3 class="" style="color: #DDA15E">batikcu@gmail.com</h3>
                        </a>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col text-right ">
                    <h3 class="mt-4" style="color: #FAEDCD">Help Center :</h3>
                </div>
                <div class="col text-left ">
                    <button class="title-home2 mt-4 border-0 rounded-pill">
                        <a href="https://wa.me/+6289697132466" class="text-decoration-none" target="_blank" rel="noopener noreferrer">
                            <h3 class="" style="color: #DDA15E">0896-9713-2466</h3>
                        </a>
                    </button>
                </div>

                <div class="row" >
                <div class="col text-right ">
                    <h3 class="mt-4" style="color: #FAEDCD">Our Office :</h3>
                </div>
                <div class="col text-left ">
                    <button class="title-home2 mt-4 border-0 rounded-pill">
                        <a href="https://maps.app.goo.gl/Q4dnb1Rz4QQm4be68" class="text-decoration-none" target="_blank" rel="noopener noreferrer">
                           <h3 class="" style="color: #DDA15E">Jl. Teluk Pacitan, Malang. Jawa Timur.</h3>
                        </a>
                    </button>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
