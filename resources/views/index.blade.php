@extends('layouts.base_user')


@section('css')
@endsection

@section('content')
    <style>
        .box {
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            position: absolute;
            margin-left: auto;
            margin-right: auto;
            left: 0;
            right: 0;
            text-align: center;


        }

        #nav {
            width: 75%;
            margin-top: 50px;
            position: absolute;
            height: 80px;
            transition: 1s forwards;
            background: white;

        }

        .sticky {
            z-index:999999;
            position: fixed !important;
            margin:0 !important;
            top: 0;
            bottom: 0;
            padding:10px;
            top: 0 !important;
            width: 100% !important;
        }

        .btn-outline-primary {
            color: #FF6F03;
            border-color: #FF6F03;
        }


        .btn-primary {
            background-color: #FF6F03;
            border-color: #FF6F03;
        }


        .card-img-top {
            width: 238px;
            height: 238px;
            object-fit: contain;
        }

        .nav-link {
            color: black;
        }


        .logo-footer {
            width: 20%;
        }

        .info-footer {
            width: 60%;
        }

        @media screen and (max-width: 800px) {
            #hero {
                transition: 1s;
                display: none;
            }

            #footer {
                flex-direction: column;
            }

            .logo-footer {
                width: 100%;
                margin-bottom: 20px;
            }

            .info-footer {
                display: flex;
                justify-content: center;
                width: 100%;

            }

            .info-footer div {
                margin: 10px;
            }

            .subs-footer {
                width: 100% !important;
            }

            #header {
                background-position: bottom !important;
            }
        }

        @media (prefers-reduced-motion: no-preference) {
            html {
                scroll-behavior: smooth;
            }
        }
    </style>
    <section id="header" style="height:100vh;width:100%; background: url(./assets_user/banner.png);background-size:cover;">
        <div class="container">
            <nav id="nav" class="navbar navbar-expand-lg box navbar-light" style="">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img style="width: 64px;height:64px;" src="{{ url('assets_user/logo.png') }}" alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <ul class="navbar-nav ms-auto" style="background:white;">
                            <li class="nav-item">
                                <b> <a href="" class="nav-link"> Home</a></b>
                            </li>
                            <li class="nav-item">
                                <b> <a href="" class="nav-link"> My Cart</a></b>
                            </li>

                            @if (Auth::check())
                                <li class="nav-item">
                                    <b> <a href="{{ route('login') }}" class="nav-link"> Login</a></b>
                                </li>
                                <li class="nav-item">
                                    <b> <a href="{{ route('register') }}" class="nav-link"> Register</a></b>
                                </li>
                            @else
                                <li class="nav-item">
                                    <b> <a href="" class="nav-link"> Account</a></b>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>

            <center>

                {{-- <nav class="box" style="width: 75%; margin-top:50px; position:absolute; height:80px;background:white;">
                    <div class="container h-100" style="position: relative">
                        <div style="position: relative" class="d-flex justify-content-between h-100">


                            <div class="logo  d-flex align-items-center">

                                <img style="width: 64px;height:64px;" src="{{ url('assets_user/logo.png') }}"
                                    alt="">
                            </div>

                            <div>
                                <ul class="d-flex align-items-center h-100 justify-content-center navbar nav gap-4">
                                    <li class="nav-item">
                                        <b> <a href="" class="nav-link"> Home</a></b>
                                    </li>
                                    <li class="nav-item">
                                        <b> <a href="" class="nav-link"> My Cart</a></b>
                                    </li>

                                    @if (Auth::check())
                                        <li class="nav-item">
                                            <b> <a href="{{ route('login') }}" class="nav-link"> Login</a></b>
                                        </li>
                                        <li class="nav-item">
                                            <b> <a href="{{ route('register') }}" class="nav-link"> Register</a></b>
                                        </li>
                                    @else
                                        <li class="nav-item">
                                            <b> <a href="" class="nav-link"> Account</a></b>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>


                    </div>
                </nav> --}}


            </center>
            <div class="d-flex justify-content-between  align-items-center" style="height: 100vh">
                <div style="width: 340px;margin:55px;">
                    <h2><b>Razer Collection in This Marketplace</b></h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book.</p>

                </div>

                <div style="margin:55px;" id="hero">

                    <img src="{{ url('assets_user/hero.png') }}" style="width:400px;" alt="">
                </div>
            </div>

        </div>


    </section>

    <br>
    <br>
    <br>

    <section id="feature" style="position: relative">
        <div class="container-fluid">
            <div class="d-flex justify-content-around gap-2 flex-wrap" style="width:80%;margin:auto;">
                <div class="card p-3  justify-content-center align-items-center" style="width:15rem;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor"
                        class="bi bi-shield-check" viewBox="0 0 16 16">
                        <path
                            d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z" />
                        <path
                            d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                    </svg>
                    <b> Aman</b>

                </div>


                <div class="card p-3 d-flex justify-content-center align-items-center" style="width:15rem;">

                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor"
                        class="bi bi-cart-check" viewBox="0 0 16 16">
                        <path
                            d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                        <path
                            d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                    </svg>
                    <b>Mudah</b>

                </div>

                <div class="card p-3  justify-content-center align-items-center" style="width:15rem;">

                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor"
                        class="bi bi-bag-check" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                        <path
                            d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                    </svg>
                    <b> Cepat</b>

                </div>

                <div class="card p-3  justify-content-center align-items-center" style="width:15rem;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor"
                        class="bi bi-clipboard2-check" viewBox="0 0 16 16">
                        <path
                            d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5h3Z" />
                        <path
                            d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-12Z" />
                        <path
                            d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3Z" />
                    </svg>
                    <b>Terpercaya</b>

                </div>
            </div>
        </div>

    </section>

    <br>
    <br>
    <br>

    <section class="main">
        <div class="container-fluid">
            <center>
                <h3><b>Our Product</b></h3>
                <br>
                <div style="width: 50%">
                    <input type="text" class="form-control" placeholder="Search Product in this section">
                </div>
                <br>
            </center>

            <br>




            <div class="d-flex justify-content-center flex-wrap" style="width:80%;margin:auto;">
                <div class="card" style="width: 15rem;margin:10px;">
                    <img src="{{ url('assets_user/product1.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <center>
                            <h6 class="card-title" style="font-weight: bold">ACER A256200 RTX 100</h6>
                            <p>$20</p>

                            <button class="btn btn-outline-primary">Cart</button>
                            <button class="btn btn-primary">Buy</button>
                        </center>

                    </div>
                </div>

                <div class="card" style="width: 15rem;margin:10px;">
                    <img src="{{ url('assets_user/product2.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <center>
                            <h6 class="card-title" style="font-weight: bold">ASUS XPRATE 2</h6>
                            <p>$20</p>

                            <button class="btn btn-outline-primary">Cart</button>
                            <button class="btn btn-primary">Buy</button>
                        </center>

                    </div>
                </div>


                <div class="card" style="width: 15rem;margin:10px;">
                    <img src="{{ url('assets_user/product3.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <center>
                            <h6 class="card-title" style="font-weight: bold">MAC BOOKIS 2300</h6>
                            <p>$20</p>

                            <button class="btn btn-outline-primary">Cart</button>
                            <button class="btn btn-primary">Buy</button>
                        </center>

                    </div>
                </div>


                <div class="card" style="width: 15rem;margin:10px;">
                    <img src="{{ url('assets_user/product4.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <center>
                            <h6 class="card-title" style="font-weight: bold">LENOVO A 6345</h6>
                            <p>$20</p>

                            <button class="btn btn-outline-primary">Cart</button>
                            <button class="btn btn-primary">Buy</button>
                        </center>

                    </div>
                </div>



                <div class="card" style="width: 15rem;margin:10px;">
                    <img src="{{ url('assets_user/product1.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <center>
                            <h6 class="card-title" style="font-weight: bold">ACER A256200 RTX 100</h6>
                            <p>$20</p>

                            <button class="btn btn-outline-primary">Cart</button>
                            <button class="btn btn-primary">Buy</button>
                        </center>

                    </div>
                </div>

                <div class="card" style="width: 15rem;margin:10px;">
                    <img src="{{ url('assets_user/product2.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <center>
                            <h6 class="card-title" style="font-weight: bold">ASUS XPRATE 2</h6>
                            <p>$20</p>

                            <button class="btn btn-outline-primary">Cart</button>
                            <button class="btn btn-primary">Buy</button>
                        </center>

                    </div>
                </div>


                <div class="card" style="width: 15rem;margin:10px;">
                    <img src="{{ url('assets_user/product3.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <center>
                            <h6 class="card-title" style="font-weight: bold">MAC BOOKIS 2300</h6>
                            <p>$20</p>

                            <button class="btn btn-outline-primary">Cart</button>
                            <button class="btn btn-primary">Buy</button>
                        </center>

                    </div>
                </div>


                <div class="card" style="width: 15rem;margin:10px;">
                    <img src="{{ url('assets_user/product4.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <center>
                            <h6 class="card-title" style="font-weight: bold">LENOVO A 6345</h6>
                            <p>$20</p>

                            <button class="btn btn-outline-primary">Cart</button>
                            <button class="btn btn-primary">Buy</button>
                        </center>

                    </div>
                </div>




            </div>
        </div>

    </section>


    <br>
    <br>
    <br>
    <br>

    <section id="banner">
        <div class="container">


            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://static.vecteezy.com/system/resources/previews/002/478/302/original/sale-electronics-banner-background-free-vector.jpg"
                            class="d-block w-100"
                            alt="https://static.vecteezy.com/system/resources/previews/002/478/302/original/sale-electronics-banner-background-free-vector.jpg">
                    </div>
                    <div class="carousel-item">
                        <img src="https://static.vecteezy.com/system/resources/previews/002/478/302/original/sale-electronics-banner-background-free-vector.jpg"
                            class="d-block w-100"
                            alt="https://static.vecteezy.com/system/resources/previews/002/478/302/original/sale-electronics-banner-background-free-vector.jpg">
                    </div>
                    <div class="carousel-item">
                        <img src="https://static.vecteezy.com/system/resources/previews/002/478/302/original/sale-electronics-banner-background-free-vector.jpg"
                            class="d-block w-100"
                            alt="https://static.vecteezy.com/system/resources/previews/002/478/302/original/sale-electronics-banner-background-free-vector.jpg">
                    </div>
                </div>
            </div>
        </div>

    </section>



    <br>
    <br>
    <br>
    <br>


    <section>

        <footer>
            <div style="min-height: 250px;background-color:#15161D;" id="footer"
                class="d-flex justify-content-center p-5">
                <div class="logo-footer">

                    <img style="width: 64px;height:64px;margin-bottom:10px;" src="{{ url('assets_user/logo.png') }}"
                        alt="">
                    <p class="text-white"><b>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. </b></p>
                </div>

                <div class="text-white info-footer">
                    <div class="d-flex justify-content-around">
                        <div>
                            <h6><b>My Account</b></h6>
                            <ul>
                                <li>
                                    Lorem
                                </li>
                                <li>
                                    Lorem
                                </li>

                                <li>
                                    Lorem
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h6><b>My Account</b></h6>
                            <ul>
                                <li>
                                    Lorem
                                </li>
                                <li>
                                    Lorem
                                </li>

                                <li>
                                    Lorem
                                </li>
                            </ul>
                        </div>

                        <div>
                            <h6><b>My Account</b></h6>
                            <ul>
                                <li>
                                    Lorem
                                </li>
                                <li>
                                    Lorem
                                </li>

                                <li>
                                    Lorem
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>


                <div style="width:20%;" class="subs-footer">
                    <h6 class="text-white">
                        <b>Subscribe Us</b>
                    </h6>

                    <div>
                        <input type="text" name="" id="" class="form-control">
                        <div class="w-100 mt-2 d-flex justify-content-between">

                            <div style="background: #343444;width:40px;height:40px;border-radius:10px;">

                            </div>
                            <div style="background: #343444;width:40px;height:40px;border-radius:10px;">

                            </div>

                            <div style="background: #343444;width:40px;height:40px;border-radius:10px;">

                            </div>

                            <div style="background: #343444;width:40px;height:40px;border-radius:10px;">

                            </div>


                            <div style="background: #343444;width:40px;height:40px;border-radius:10px;">

                            </div>
                        </div>
                    </div>

                </div>


            </div>
            <div style="min-height: 150px;background-color:#1E1F29;"
                class="d-flex align-items-center justify-content-center">
                <center>
                    <h5 class="text-white"><b>Copyright @ KigaStore</b></h5>
                </center>
            </div>
        </footer>
    </section>
@endsection


@section('js')
    <script src="https://kit.fontawesome.com/f87eaab4e6.js" crossorigin="anonymous"></script>


    <script>
        // When the user scrolls the page, execute myFunction
        window.onscroll = function() {
            myFunction()
        };

        // Get the navbar
        var navbar = document.getElementById("nav");

        // Get the offset position of the navbar
        var sticky = navbar.offsetTop;

        // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }
    </script>
@endsection
