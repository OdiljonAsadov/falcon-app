<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;1,400&display=swap"
        rel="stylesheet">
    {{-- <link rel="shortcut icon" href="your_image_path_and_name.ico" /> --}}
    <!-- anime -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <title>O нас</title>
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
                                <button class="btn dropdown-toggle" style="font-size: 17px; font-weight: 700; line-height: 30px; color: #999;" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{__('category')}}
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul>
                                                <li><a class="dropdown-item" href="/information/show/1?language={{ Request::get('language') }}"> {{__('category1')}} </a></li>
                                                <li><a class="dropdown-item" href="/information/show/3"> {{__('category2')}} </a></li>
                                                <li><a class="dropdown-item" href="/information/show/3"> {{__('category3')}} </a></li>
                                                <li><a class="dropdown-item" href="/information/show/6"> {{__('category4')}} </a></li>
                                                <li><a class="dropdown-item" href="/information/show/3"> {{__('category5')}}</a></li>
                                                <li><a class="dropdown-item" href="/information/show/5"> {{__('category6')}} </a></li>
                                                <li><a class="dropdown-item" href="/information/show/3"> {{__('category7')}} </a></li>
                                                <li><a class="dropdown-item" href="/information/show/1"> {{__('category8')}} </a></li>
                                                <li><a class="dropdown-item" href="/information/show/2"> {{__('category9')}} </a></li>
                                                <li><a class="dropdown-item" href="/information/show/3"> {{__('category10')}} </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </li>
                        {{-- <li class="nav-item"><a class="nav-link active" href="/about">O нас</a></li> --}}
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="/catigory">Категории</a>
                        </li> --}}
                        <li class="nav-item"><a class="nav-link active" href="/about?language={{ Request::get('language') }}">{{__('about')}}</a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="/servise?language={{ Request::get('language') }}">{{__('serves')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/gallery?language={{ Request::get('language') }}">{{__('images')}}</a>
                        </li>
                         <li class="nav-item">
                            <a href="/contact?language={{ Request::get('language') }}" class="nav-link">{{__('contact')}}</a>
                        </li>
                        {{-- <li class="nav-item d-flex align-items-center" >
                            <a href="#" class="nav-link lang-uz" style="cursor: pointer;">Uz</a><p style="margin: 0;">|</p>
                            <a href="#" class="nav-link lang-ru" style="cursor: pointer;">Ру</a>
                        </li> --}}
                    </ul>
                </div>
        </nav>
    </div>
    <!-- navbar -->

    <!-- trinity -->
    <div class="trinity">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 p-3">
                    <div class="Who-We-Are">
                        <h1>{{__('ktomi')}}</h1>
                        <img src="../images/who we are.jpg" alt="Who-We-Are" class="img-fluid">
                        <h4 class="special-text">{{__('ktomi2longtext')}}</h4>
                        <h4>{{__('ktomi3longtext')}}</h4>
                        <br><br>
                        {{-- <a href="#" class="specialBtn">Подробнее</a> --}}
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 p-3">
                    <h1>{{__('ktomi1')}}</h1>
                    <ol>
                        <li>{{__('ktomi1text')}}</li>
                        <h4>{{__('ktomi1longtext')}}</h4>
                        <li>{{__('ktomi2text')}}</li>
                        <h4>{{__('ktomi4longtext')}}</h4>
                        <li>{{__('ktomi3text')}}</li>
                        <h4>{{__('ktomi5longtext')}}</h4>
                    </ol>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 p-3">
                    <h1>{{__('ktomi2')}}</h1>
                    <h4>{{__('ktomi6longtext')}}</h4>
                    <div class="primary-text">
                        <h3>{{__('ktomih1text')}}</h3>
                        <h3>{{__('ktomih2text')}}</h3>
                        <h3>{{__('ktomih3text')}}</h3>
                        <h3>{{__('ktomih4text')}}</h3>
                        <h3>{{__('ktomih5text')}}</h3>
                        <h4>{{__('ktomi7longtext')}}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- trinity -->

    <!-- Our Staff -->
    <div class="our-stuff">
        <div class="container-fluid">
            <h1>{{__('ourPersonality')}}</h1>
            <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 p-3" data-aos="fade-up" data-aos-easing="linear"
                    data-aos-duration="1500">
                    <img src="../images/Walter martins.jpg" alt="walter martins" style="width: 100%; height:264px;
                        class="img-fluid">
                    <h4>{{__('ourPersonality1')}}</h4>
                    <h5>{{__('ourPersonality1work')}}</h5>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 p-3" data-aos="fade-down" data-aos-easing="linear"
                    data-aos-duration="1500">
                    <img src="../images/Bradley Grosh.jpg" alt="walter martins" style="width: 100%; height:264px;"
                        class="img-fluid">
                    <h4>{{__('ourPersonality2')}}</h4>
                    <h5>{{__('ourPersonality2work')}} </h5>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 p-3" data-aos="fade-up" data-aos-easing="linear"
                    data-aos-duration="1500">
                    <img src="../images/Andy Matters.jpg" alt="walter martins" style="width: 100%; height:264px;"
                        class="img-fluid">
                    <h4>{{__('ourPersonality3')}}</h4>
                    <h5>{{__('ourPersonality3work')}}</h5>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 p-3" data-aos="fade-down" data-aos-easing="linear"
                    data-aos-duration="1500">
                    <img src="../images/man bek.jpg" alt="walter martins" style="width: 100%; height:264px;"
                        class="img-fluid">
                    <h4>{{__('ourPersonality4')}}</h4>
                    <h5>{{__('ourPersonality4work')}}</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Staff -->

    <!-- Features -->
    <div class="features" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 px-2">
                    <h1>{{__('bottomName')}}</h1>
                    <div class="details row">
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-2 col-2">
                            <i class="fas fa-users fa-5x"></i>
                        </div>
                        <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-10 col-10">
                            <h4>{{__('bottom3')}}</h4>
                            <h5>{{__('bottom4')}}</h5>
                        </div>
                    </div>
                    <div class="details row">
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-2 col-2">
                            <i class="fas fa-trophy fa-5x"></i>
                        </div>
                        <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-10 col-10">
                            <h4>{{__('bottom5')}}</h4>
                            <h5>{{__('bottom6')}}</h5>
                        </div>
                    </div>
                    <div class="details row">
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-2 col-2">
                            <i class="fas fa-thumbs-up fa-5x"></i>
                        </div>
                        <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-10 col-10">
                            <h4>{{__('bottom7')}}</h4>
                            <h5>{{__('bottom8')}}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-md-3 px-2">
                    <h1>{{__('bottom1')}}</h1>
                    <div class="details">
                        <h5>{{__('bottom9')}}</h5><br>
                        <h5>{{__('bottom10')}}</h5>
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 px-2">
                    <h1>{{__('bottom2')}}</h1>
                    <div class="details center-img">
                        <div class="row">
                            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-12 px-2">
                                <img src="../images/David Peters.jpg" alt="david" class="img-fluid pt-2">
                            </div>
                            <div class="col-xxl-7 col-xl-7col-lg-7 col-md-12 col-12 px-2">
                                <h5>«{{__('bottom11')}} »</h5>
                                {{-- <h4>David Peters</h4> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features -->

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
                <a href="#" class="fab fa-twitter fa-2x"></a>
                <a href="#" class="fab fa-google-plus-g fa-2x"></a>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <!-- anime -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
