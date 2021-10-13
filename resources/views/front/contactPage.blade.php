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
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <!-- anime -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Контакт</title>
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
                            <a class="nav-link" href="/gallery?language={{ Request::get('language') }}">{{__('images')}}</a>
                        </li>
                        <li class="nav-item">
                            <a href="/contact?language={{ Request::get('language') }}" class="nav-link active">{{__('contact')}}</a>
                        </li>
                        {{-- <li class="nav-item d-flex align-items-center" >
                            <a href="#" class="nav-link lang-uz" style="cursor: pointer;">Uz</a>
                            <p style="margin: 0;">|</p>
                            <a href="#" class="nav-link lang-ru" style="cursor: pointer;">Ру</a>
                        </li> --}}
                    </ul>
                </div>
        </nav>
    </div>
    <!-- navbar -->

    <!-- about servises -->
    <div class="ourHistory">
        <div class="container-fluid px-5">
            <h1 class="text-center">{{__('xizmatlar12')}}</h1>
        </div>
    </div>
    <!-- about servises -->
    {{-- form --}}

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-12 col-xl-12 col-md-12">
                    <div class="wrapper">
                        <div class="row mb-5">
                            <div class="col-xxl-3 col-xl-3 col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-map-marker"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>{{__('xizmatlar13')}}:</span> {{__('manzil')}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-phone"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>{{__('xizmatlar14')}}:</span> <a href="callto:+998909307218">+998 (90) 930 72 18 </a>
                                        </p>
                                        <p><span>{{__('xizmatlar14')}}:</span> <a href="callto:+998909588172">+998 (90) 958 81 72 </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-paper-plane"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>{{__('xizmatlar15')}}:</span> <a href="mailto:#">Falconsystem</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-globe"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>{{__('xizmatlar16')}}</span> <a href="Falcon.uz">Falconsystem.uz</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-xxl-7 col-xl-7 col-md-7">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4">{{__('xizmatlar12')}}</h3>
                                    <form action="{{ url('/send-message') }}" method="post">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-xxl-6 col-xl-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="name">{{__('xizmatlar17')}}</label>
                                                    <input type="text" class="form-control" name="name" id="name"
                                                        placeholder="{{__('xizmatlar17')}}" required>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="email">{{__('xizmatlar18')}}</label>
                                                    <input type="email" class="form-control" name="email" id="email"
                                                        placeholder="Email" required>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="subject">{{__('xizmatlar19')}}</label>
                                                    <input type="text" class="form-control" name="subject"
                                                        id="subject" placeholder="{{__('xizmatlar19')}}" required>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="Phone">{{__('xizmatlar20')}}"</label>
                                                    <input type="number" class="form-control" name="Phone" id="Phone"
                                                        placeholder="+998 XX XXX XX XX" required>
                                                </div>
                                            </div>
                                            <div class="col-xxl-12 col-xl-12 col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="#">{{__('xizmatlar21')}}"</label>
                                                    <textarea name="message" class="form-control" id="message"
                                                        cols="30" rows="4" placeholder="{{__('xizmatlar21')}}" required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-xxl-12 col-xl-12 col-md-12">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">{{__('xizmatlar22')}}</button>
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-xxl-5 col-xl-5 col-md-5 d-flex align-items-stretch">
                                <div class="info-wrap w-100 p-5 img"
                                    style="background-image: url(../images/design.jpg);">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- form --}}

    <!--map  -->
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2997.760152030951!2d69.25589561483577!3d41.292324209846996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8aef4d314cb1%3A0xe2b0854cb9883527!2zNDMgVGFmYWtrdXIga28nY2hhc2ksINCi0L7RiNC60LXQvdGCLCBPYHpiZWtpc3Rvbg!5e0!3m2!1suz!2s!4v1632900073014!5m2!1suz!2s"
        width="100%" height="450" style="border:0;" padding:0; allowfullscreen="" loading="eager"></iframe>
    <!--map  -->

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <!-- anime -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- require -->
    <!-- <script src="./jsContact/main.js"></script> -->
</body>

</html>
