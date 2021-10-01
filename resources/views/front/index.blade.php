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
    <!-- anime -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="{{ asset('css/ninja-slider.css') }}" rel="stylesheet" type="text/css" />
    <title>Главный</title>
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
                            <a class="nav-link active" aria-current="page" href="/">{{__('home')}}</a>
                        </li>
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
                            <a href="/contact?language={{ Request::get('language') }}" class="nav-link">{{__('contact')}}</a>
                        </li>
                        {{-- @foreach (config('app.available_locales') as $locale)
                            <li class="nav-item">
                               <a href="{{ request()->url() }}?language={{ $locale }}"
                                  class="@if (app()->getLocale() == $locale) border-indigo-400 @endif inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium leading-5 focus:outline-none transition duration-150 ease-in-out">
                                   [{{ strtoupper($locale) }}]
                               </a>
                            </li>
                        @endforeach --}}
                        @foreach ($locales as $locale)
                            <a href="{{ request()->url() }}?language={{ $locale }}" class="nav-link" style="font-size: 20px;">{{ strtoupper($locale) }}</a>
                        @endforeach
                        <li class="nav-item">
                            <p href="#" class="nav-link lang-uz" style="display: block; cursor: pointer;"
                                onclick="showRu()">Uz</p>
                            <p href="#" class="nav-link lang-ru" style="display: none; cursor: pointer;"
                                onclick="showUz()">
                                Ру</p>
                        </li>
                    </ul>
                </div>
        </nav>
    </div>
    <script>
        function showRu() {
            var ru = document.querySelector(".lang-ru");
            var uz = document.querySelector(".lang-uz");
            ru.style.display = "block";
            uz.style.display = "none";
        }

        function showUz() {
            var uz = document.querySelector(".lang-uz");
            var ru = document.querySelector(".lang-ru");
            uz.style.display = "block";
            ru.style.display = "none";
        }
    </script>
    <!-- navbar -->
    <!-- slider -->
    <div id="ninja-slider">
        <div class="slider-inner">
            <ul>
                <li>
                    <a class="ns-img img-fluid" href="./images/forslide1.gif"></a>
                    <div class="caption">{{__('safely')}}</div>
                </li>
                <li>
                    <a class="ns-img img-fluid" href="./images/forslide2.jpg"></a>
                    <div class="caption">{{__('nice')}}</div>
                </li>
                <li>
                    <a class="ns-img img-fluid" href="./images/forslide3.jpg"></a>
                    <div class="caption">{{__('cute')}}</div>
                </li>
                <li>
                    <a class="ns-img img-fluid" href="./images/forslide4.jfif"></a>
                    <div class="caption">{{__('quality')}}</div>
                </li>
                <li>
                    <a class="ns-img img-fluid" href="./images/forslide5.jpg"></a>
                    <div class="caption">{{__('strong')}}</div>
                </li>
            </ul>
            <div class="navsWrapper">
                <div id="ninja-slider-prev"></div>
                <div id="ninja-slider-next"></div>
            </div>
        </div>
    </div>
    <!-- slider -->

    <!-- content us -->
    <div class="row">
        <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 bg-primary-variant-2 text-end">
            <h2>{{__('aboutUs')}} </h2>
            <p>{{__('aboutUsText')}}  ....</p>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">
            <img src="./images/dophin.jpg" alt="dolphin" style="height: 100%;" class="img-fluid">
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 bg-color1">
            <h2>{{__('who')}}</h2>
            <p>{{__('whoText')}}</p>
        </div>
    </div>
    <!-- second -->
    <div class="row">
        <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12">
            <img src="./images/gameplayarea.jpg" style="height: 100%;" alt="" class="img-fluid">
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 bg-color2-valriant-1">
            <h2>{{__('personal')}}</h2>
            <p>{{__('personalText')}}</p>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">
            <img src="./images/rainbow.jpg" style="height: 100%;" alt="rainbow" class="img-fluid">
        </div>
    </div>
    <!-- content us -->
    <div class="ourHistory">
        <div class="container-fluid">
            <h1 class="text-center">{{__('history')}}</h1>
            <div class="row pt-3">
                <div class="col-xxl-6 col-xl-6 col-md-6" style="padding-right: 4px;" data-aos="zoom-in-right">
                    <p>{{__('historyText1')}}</p>
                </div>
                <div class="col-xxl-6 col-xl-6 col-md-6" data-aos="zoom-in-right">
                    <p>{{__('historyText2')}}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- second -->
    <div class="img-history">
        <div class="row">
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 bg1">
                <div class="product">
                    <h4>Покрытие детской площадки</h4>
                    <p>Эта система, состоящая из основы из 100% переработанного SBR (бутадиенстирольного каучука) и
                        полиуретана.</p>
                    <a href="#">Подробнее</a>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 bg2">
                <div class="product">
                    <h4>Переработанная резиновая плитка</h4>
                    <p>Предлагаем полный выбор плиток для удовлетворения конкретных потребностей вашего объекта, в том
                        числе Interlocking
                        Плитка и стандартная плитка. </p>
                    <a href="#">Подробнее</a>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 bg3">
                <div class="product">
                    <h4>Поверхность водной игры</h4>
                    <p>Нескользящее покрытие для открытых и закрытых аквапарков, брызг, бассейнов и зон спа</p>
                    <a href="#">Подробнее</a>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 bg4">
                <div class="product">
                    <h4>Эластофлор Ролл-Заливка</h4>
                    <p>Исключительная опора, точная реакция на мяч и идеальная амортизация.</p>
                    <a href="#">Подробнее</a>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 bg5">
                <div class="product">
                    <h4>Покрытие детской площадки</h4>
                    <p>Эта система состоит из основы из 100% переработанного SBR (бутадиен-стирольного каучука).
                        и полиуретан</p>
                    <a href="#">Подробнее</a>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 bg6">
                <div class="product">
                    <h4>Переработанная резиновая плитка</h4>
                    <p>Предлагаем полный выбор плиток для удовлетворения конкретных потребностей вашего объекта, в том
                        числе Interlocking
                        Плитка и стандартная плитка. </p>
                    <a href="#">Подробнее</a>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 bg7">
                <div class="product">
                    <h4>Поверхность водной игры</h4>
                    <p>Нескользящее покрытие для открытых и закрытых аквапарков, брызг, бассейнов и зон спа
                    </p>
                    <a href="#">Подробнее</a>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 bg8">
                <div class="product">
                    <h4>Эластофлор Ролл-Заливка</h4>
                    <p>Исключительная опора, точная реакция на мяч и идеальная амортизация.</p>
                    <a href="#">Подробнее</a>
                </div>
            </div>
        </div>
    </div>

    <!-- third -->
    <div class="rubber">
        <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12">
                <div class="text-content" data-aos="fade-right">
                    <h1>{{__('categoryText')}}?</h1>
                </div>
                <div class="links row" data-aos="fade-right">
                    <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12">
                        <ul>
                            <li><a href="/information/show/1"> {{__('category1')}} </a></li>

                            <li><a href="/catigory"> {{__('category2')}} </a></li>
                            <li><a href="/information/show/1"> {{__('category3')}} </a></li>
                            <li><a href="#"> {{__('category4')}} </a></li>
                            <li><a href="#"> {{__('category5')}} </a></li>
                            {{-- <li><a href="#"> {{__('category1')}} </a></li>
                            <li><a href="#">Зоны с джакузи </a></li>
                            <li><a href="#">Полы в спортзале </a></li> --}}
                        </ul>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-md-12">
                        <ul>
                            <li><a href="#">  {{__('category6')}}  </a></li>
                            <li><a href="#">  {{__('category7')}} </a></li>
                            <li><a href="#">  {{__('category8')}}  </a></li>
                            <li><a href="#">  {{__('category9')}}  </a></li>
                            <li><a href="#">  {{__('category10')}}  </a></li>
                            {{-- <li><a href="#"> Курсы Mini-Putt </a></li>
                            <li><a href="#"> Ступени лестницы </a></li>
                            <li><a href="#"> Балконы </a></li>
                            <li><a href="#"> И более </a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12">
                <img src="./images/childs.jpg" alt="childs" class="img-fluid">
            </div>
        </div>
    </div>
    <!-- second rubber -->
    <div class="rubber">
        <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 byOrder1">
                <img src="./images/sunPicture.jpg" alt="sun" class="img-fluid">
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                        <img src="./images/bascket.jpg" alt="bascket" class="img-fluid">
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                        <img src="./images/areaplay.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 byOrder2">
                <div class="text-content" data-aos="zoom-in-up">
                    <h1>{{__('categoryText2')}}</h1>
                </div>
                <div class="links row" data-aos="zoom-in-up">
                    <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12">
                        <ul>
                            <li><a href="#">{{__('category1')}}</a></li>
                            <li><a href="#">{{__('category2')}} </a></li>
                            <li><a href="#">{{__('category3')}} </a></li>
                            <li><a href="#">{{__('category4')}}</a></li>
                            <li><a href="#">{{__('category5')}}</a></li>
                            {{-- <li><a href="#">Дорожки для гольфа </a></li>
                            <li><a href="#">Зоны с джакузи </a></li>
                            <li><a href="#">Полы в спортзале </a></li> --}}
                        </ul>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-md-12">
                        <ul>
                            <li><a href="#"> {{__('category6')}} </a></li>
                            <li><a href="#"> {{__('category7')}}</a></li>
                            <li><a href="#"> {{__('category8')}} </a></li>
                            <li><a href="#"> {{__('category9')}} </a></li>
                            <li><a href="#"> {{__('category10')}} </a></li>
                            {{-- <li><a href="#"> Курсы Mini-Putt </a></li>
                            <li><a href="#"> Ступени лестницы </a></li>
                            <li><a href="#"> Балконы </a></li>
                            <li><a href="#"> И более </a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our history -->

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
                <span>RedFox © 2021. </span><a href="#">{{__('siyosat')}}</a>
            </h6>
        </div>
    </footer>
    <!-- footer -->

    {{-- connect with me --}}
    <div class="body">
        <div class='phone'>
            <a href="tel:+998337730580" class="fas fa-phone fa-1x"></a>
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
    <!-- scrollbar -->
    <script src="{{ asset('js/ninja-slider1.js') }}" type="text/javascript"></script>
</body>

</html>
