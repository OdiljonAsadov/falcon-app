<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;1,400&display=swap"
        rel="stylesheet">

    <link href="{{ asset('css/gallery.css') }}" rel="stylesheet" type="text/css" />
    <title>Галерея </title>
</head>

<body>
    <!-- navbar -->
    <div class="nawbar container-fluid">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="/"><img src="../images/Logo.svg" alt="logo" class="img-fluid"
                        style="height: 50px;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="far fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse right-nav" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100 justify-content-between">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/?language={{ Request::get('language') }}">{{__('home')}}</a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" style="font-size: 17px; font-weight: 700; line-height: 30px; color: #999;" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{__('category')}}
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul>
                                                <li><a class="dropdown-item" href="/information/show/1?language={{ Request::get('language') }}"> {{__('category1')}} </a></li>
                                                {{-- <li><a class="dropdown-item" href="/information/show/3"> {{__('category2')}} </a></li> --}}
                                                <li><a class="dropdown-item" href="/information/show/3"> {{__('category3')}} </a></li>
                                                <li><a class="dropdown-item" href="/information/show/6"> {{__('category4')}} </a></li>
                                                <li><a class="dropdown-item" href="/information/show/7"> {{__('category5')}}</a></li>
                                                <li><a class="dropdown-item" href="/information/show/5"> {{__('category6')}} </a></li>
                                                {{-- <li><a class="dropdown-item" href="/information/show/3"> {{__('category7')}} </a></li> --}}
                                                <li><a class="dropdown-item" href="/information/show/8"> {{__('category8')}} </a></li>
                                                <li><a class="dropdown-item" href="/information/show/2"> {{__('category9')}} </a></li>
                                                <li><a class="dropdown-item" href="/information/show/9"> {{__('category10')}} </a></li>
                                                {{-- <li><a class="dropdown-item" href="#"> Пандусы для инвалидных колясок </a></li>
                                                <li><a class="dropdown-item" href="#"> Арены </a></li>
                                                <li><a class="dropdown-item" href="#"> Патио </a></li>
                                                <li><a class="dropdown-item" href="#"> Курсы Mini-Putt </a></li>
                                                <li><a class="dropdown-item" href="#"> Ступени лестницы </a></li>
                                                <li><a class="dropdown-item" href="#"> Балконы </a></li>
                                                <li><a class="dropdown-item" href="#"> И более </a></li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </li>
                        {{-- <li class="nav-item"><a class="nav-link" href="/about">O нас</a></li> --}}
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="/catigory">Категории</a>
                        </li> --}}
                        <li class="nav-item"><a class="nav-link" href="/about?language={{ Request::get('language') }}">{{__('about')}}</a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="/servise?language={{ Request::get('language') }}">{{__('serves')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/gallery?language={{ Request::get('language') }}">{{__('images')}}</a>
                        </li>
                        <li class="nav-item">
                            <a href="/contact?language={{ Request::get('language') }}" class="nav-link">{{__('contact')}}</a>
                        </li>
                        {{-- <li class="nav-item d-flex align-items-center">
                            <a href="#" class="nav-link lang-uz" style="cursor: pointer;">Uz</a>
                            <p style="margin: 0;">|</p>
                            <a href="#" class="nav-link lang-ru" style="cursor: pointer;">Ру</a>
                        </li> --}}
                    </ul>
                </div>
        </nav>
    </div>
    <!-- navbar -->

    <div class="ourHistory">
        <div class="container-fluid px-5">
            <h1 class="text-center">{{__('xizmatlar11')}}</h1>
        </div>
    </div>

    <!--start-->
    <div style="display:none;">
        <div id="ninja-slider">
            <div class="slider-inner">
                <ul>
                    <li>
                        <a class="ns-img" href="../images/21gazon.png"></a>
                    </li>
                    <li>
                        <a class="ns-img" href="../images/22gazon2.png"></a>
                    </li>
                    <li>
                        <span class="ns-img" style="background-image:url(../images/5step.png);"></span>
                    </li>
                    <li>
                        <a class="ns-img" href="../images/3.png"></a>
                    </li>
                    <li>
                        <a class="ns-img" href="../images/4car.png"></a>
                    </li>
                    <li>
                        <a class="ns-img" href="../images/7.png"></a>
                    </li>
                    <li>
                        <a class="ns-img" href="../images/8.png"></a>
                    </li>
                    <li>
                        <a class="ns-img" href="../images/9.png"></a>
                    </li>
                    <li>
                        <a class="ns-img" href="../images/areaplay.jpg"></a>
                    </li>
                    <li>
                        <a class="ns-img" href="../images/bascket.jpg"></a>
                    </li>
                    <li>
                        <a class="ns-img" href="../images/1111.jpg"></a>
                    </li>
                    <li>
                        <a class="ns-img" href="../images/design.jpg"></a>
                    </li>
                </ul>
                <div id="fsBtn" class="fs-icon" title="Expand/Close"></div>
            </div>
        </div>
    </div>
    <div>
        <div class="gallery">
            <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12">
                    <img src="../images/21gazon.png" onclick="lightbox(0)" class="img-fluid">
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12">
                    <img src="../images/22gazon2.png" onclick="lightbox(1)" class="img-fluid">
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12">
                    <img src="../images/5step.png" onclick="lightbox(2)" class="img-fluid">
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12">
                    <img src="../images/3.png" onclick="lightbox(3)" class="img-fluid">
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12">
                    <img src="../images/4car.png" onclick="lightbox(4)" class="img-fluid">
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12">
                    <img src="../images/7.png" onclick="lightbox(5)" class="img-fluid">
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12">
                    <img src="../images/8.png" onclick="lightbox(6)" class="img-fluid">
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12">
                    <img src="../images/9.png" onclick="lightbox(7)" class="img-fluid">
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12">
                    <img src="../images/areaplay.jpg" onclick="lightbox(8)" class="img-fluid">
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12">
                    <img src="../images/bascket.jpg" onclick="lightbox(9)" class="img-fluid">
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12">
                    <img src="../images/1111.jpg" onclick="lightbox(10)" class="img-fluid">
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12">
                    <img src="../images/design.jpg" onclick="lightbox(11)" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- modal -->

    <!-- footer -->
    <footer>
        <div class="text-center">
            <h4>{{__('manzil')}} </h4>
            <h1>
                <span>{{__('phone')}}:</span> <a href="callto:+998909307218">+998 (90) 930 72 18</a><br>
                <span>{{__('phone')}}:</span> <a href="callto:+998909588172">+998 (90) 958 81 72</a>
            </h1>
            <p>{{__('workTime')}}</p>
            <div class="icons">
                <a href="#" class="fab fa-facebook-f fa-2x"></a>
                <a href="#" class="fab fa-telegram fa-2x"></a>
                {{-- <a href="#" class="fab fa-google-plus-g fa-2x"></a> --}}
                <a href="#" class="fab fa-instagram fa-2x"></a>
            </div>
            <h6>
                <span> © 2021. </span><a href="#">{{__('siyosat')}}</a>
            </h6>
        </div>
    </footer>
    <!-- footer -->

    {{-- connect with me --}}
    <div class="body">
        <div class='phone'>
            <a href="tel:+998909307218" class="fas fa-phone fa-1x"></a>
        </div>
        <div class="circle1"></div>
        <div class="circle2"></div>
    </div>
    {{-- connect with me --}}

    <script>
        function lightbox(idx) {
            //show the slider's wrapper: this is required when the transitionType has been set to "slide" in the ninja-slider.js
            var ninjaSldr = document.getElementById("ninja-slider");
            ninjaSldr.parentNode.style.display = "block";

            nslider.init(idx);

            var fsBtn = document.getElementById("fsBtn");
            fsBtn.click();
        }

        function fsIconClick(isFullscreen, ninjaSldr) { //fsIconClick is the default event handler of the fullscreen button
            if (isFullscreen) {
                ninjaSldr.parentNode.style.display = "none";
            }
        }
    </script>
    <!-- modal -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

    <script src="{{ asset('js/ninja-slider.js') }}" type="text/javascript"></script>
</body>

</html>
