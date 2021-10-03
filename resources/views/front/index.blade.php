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
                            <a class="nav-link active" aria-current="page" href="/">Главный</a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Катигории
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul>
                                                <li><a class="dropdown-item" href="#">Детские площадки </a></li>
                                                <li><a class="dropdown-item" href="#">Подъездные пути </a></li>
                                                <li><a class="dropdown-item" href="#">Полы в гараже </a></li>
                                                <li><a class="dropdown-item" href="#">Пешеходные дорожки </a></li>
                                                <li><a class="dropdown-item" href="#">Окружение бассейна или терраса у бассейна </a></li>
                                                <li><a class="dropdown-item" href="#">Дорожки для гольфа </a></li>
                                                <li><a class="dropdown-item" href="#">Зоны с джакузи </a></li>
                                                <li><a class="dropdown-item" href="#">Полы в спортзале </a></li>
                                                <li><a class="dropdown-item" href="#"> Подвалы </a></li>
                                                <li><a class="dropdown-item" href="#"> Детский сад </a></li>
                                                <li><a class="dropdown-item" href="#"> Пандусы для инвалидных колясок </a></li>
                                                <li><a class="dropdown-item" href="#"> Арены </a></li>
                                                <li><a class="dropdown-item" href="#"> Патио </a></li>
                                                <li><a class="dropdown-item" href="#"> Курсы Mini-Putt </a></li>
                                                <li><a class="dropdown-item" href="#"> Ступени лестницы </a></li>
                                                <li><a class="dropdown-item" href="#"> Балконы </a></li>
                                                <li><a class="dropdown-item" href="#"> И более </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="/about">O нас</a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="/servise">Услуги</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/gallery">Галерея</a>
                        </li>
                        <li class="nav-item">
                            <a href="/contact" class="nav-link">Контакт</a>
                        </li>
                        <li class="nav-item d-flex align-items-center">
                            <a href="#" class="nav-link lang-uz" style="cursor: pointer;">Uz</a>
                            <p style="margin: 0; color: #999;">|</p>
                            <a href="#" class="nav-link lang-ru" style="cursor: pointer;">Ру</a>
                        </li>
                    </ul>
                </div>
        </nav>
    </div>
    <!-- navbar -->
    <!-- slider -->
    <div id="ninja-slider">
        <div class="slider-inner">
            <ul>
                <li>
                    <a class="ns-img img-fluid" href="./images/forslide1.gif"></a>
                    <div class="caption">Безопаснее</div>
                </li>
                <li>
                    <a class="ns-img img-fluid" href="./images/forslide2.jpg"></a>
                    <div class="caption">Комфортный</div>
                </li>
                <li>
                    <a class="ns-img img-fluid" href="./images/forslide3.jpg"></a>
                    <div class="caption">Милый</div>
                </li>
                <li>
                    <a class="ns-img img-fluid" href="./images/forslide4.jfif"></a>
                    <div class="caption">Качественный</div>
                </li>
                <li>
                    <a class="ns-img img-fluid" href="./images/forslide5.jpg"></a>
                    <div class="caption">Сильный</div>
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
            <h2>О нас</h2>
            <p>Мы занимаемся установкой резиновых покрытий в коммерческих и жилых помещениях. Мы делаем террасы для
                бассейнов, брызговики, игровые площадки, веранды, дорожки, лестницы, бордюры, полы в гаражах, детские
                площадки, патио, бары / рестораны, подвальные этажи, сады с резиновой мульчей и игровые площадки. Чистки
                и ремонт, повреждение или новостройка. Мы покрываем все это внутри или вне помещений ....</p>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">
            <img src="./images/dophin.jpg" alt="dolphin" style="height: 100%;" class="img-fluid">
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 bg-color1">
            <h2>Кто мы?</h2>
            <p>Мы небольшая компания, занимающаяся нанесением покрытий, и одна из самых опытных в сфере производства
                резиновых покрытий. Мы занимаемся коммерческими и жилыми проектами всех видов.</p>
        </div>
    </div>
    <!-- second -->
    <div class="row">
        <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12">
            <img src="./images/gameplayarea.jpg" style="height: 100%;" alt="" class="img-fluid">
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 bg-color2-valriant-1">
            <h2>Наш персонал</h2>
            <p>Мы очень тщательно прорабатываем каждую деталь выполняемой работы и используем в наших проектах только
                опытных установщиков. Наша компания основана на убеждении, что если вы сделаете хорошую работу, клиент
                может кому-то рассказать.</p>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">
            <img src="./images/rainbow.jpg" style="height: 100%;" alt="rainbow" class="img-fluid">
        </div>
    </div>
    <!-- content us -->
    <div class="ourHistory">
        <div class="container-fluid">
            <h1 class="text-center">Наша история</h1>
            <div class="row pt-3">
                <div class="col-xxl-6 col-xl-6 col-md-6" data-aos="zoom-in-right">
                    <p>Молва составляет значительную часть нашего бизнеса, мы сделаем все возможное, чтобы вы остались
                        довольны своей установкой, а также были рядом, чтобы помочь вам в будущем.</p>
                </div>
                <div class="col-xxl-6 col-xl-6 col-md-6" data-aos="zoom-in-right">
                    <p>Расценки на установку всегда бесплатны, без каких-либо обязательств и выполняются обученными и
                        опытными людьми в компании. И мы одни из немногих в отрасли, у которых «нет минимальной площади
                        в квадратных футах» ... нет работы слишком маленькой.</p>
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
                    <h1>Где я могу использовать каучуковое покрытие?</h1>
                </div>
                <div class="links row" data-aos="fade-right">
                    <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12">
                        <ul>
                            <li><a href="#">Детские площадки </a></li>
                            <li><a href="#">Подъездные пути </a></li>
                            <li><a href="#">Полы в гараже </a></li>
                            <li><a href="#">Пешеходные дорожки </a></li>
                            <li><a href="#">Окружение бассейна или терраса у бассейна </a></li>
                            <li><a href="#">Дорожки для гольфа </a></li>
                            <li><a href="#">Зоны с джакузи </a></li>
                            <li><a href="#">Полы в спортзале </a></li>
                        </ul>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-md-12">
                        <ul>
                            <li><a href="#"> Подвалы </a></li>
                            <li><a href="#"> Детский сад </a></li>
                            <li><a href="#"> Пандусы для инвалидных колясок </a></li>
                            <li><a href="#"> Арены </a></li>
                            <li><a href="#"> Патио </a></li>
                            <li><a href="#"> Курсы Mini-Putt </a></li>
                            <li><a href="#"> Ступени лестницы </a></li>
                            <li><a href="#"> Балконы </a></li>
                            <li><a href="#"> И более </a></li>
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
                    <h1>Каковы преимущества?</h1>
                </div>
                <div class="links row" data-aos="zoom-in-up">
                    <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12">
                        <ul>
                            <li><a href="#">Детские площадки </a></li>
                            <li><a href="#">Подъездные пути </a></li>
                            <li><a href="#">Полы в гараже </a></li>
                            <li><a href="#">Пешеходные дорожки </a></li>
                            <li><a href="#">Окружение бассейна или терраса у бассейна </a></li>
                            <li><a href="#">Дорожки для гольфа </a></li>
                            <li><a href="#">Зоны с джакузи </a></li>
                            <li><a href="#">Полы в спортзале </a></li>
                        </ul>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-md-12">
                        <ul>
                            <li><a href="#"> Подвалы </a></li>
                            <li><a href="#"> Детский сад </a></li>
                            <li><a href="#"> Пандусы для инвалидных колясок </a></li>
                            <li><a href="#"> Арены </a></li>
                            <li><a href="#"> Патио </a></li>
                            <li><a href="#"> Курсы Mini-Putt </a></li>
                            <li><a href="#"> Ступени лестницы </a></li>
                            <li><a href="#"> Балконы </a></li>
                            <li><a href="#"> И более </a></li>
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
            <h4>43 Tafakkur ko'chasi, Тошкент</h4>
            <h1>
                <span>Tел:</span> <a href="callto:+998909307218">+998 (90) 930 72 18</a><br>
                <span>Tел:</span> <a href="callto:+998909588172">+998 (90) 958 81 72</a>
            </h1>
            <p>7 дней в неделю с 9:00 до 19:00</p>
            <div class="icons">
                <a href="#" class="fab fa-facebook-f fa-2x"></a>
                <a href="#" class="fab fa-twitter fa-2x"></a>
                <a href="#" class="fab fa-google-plus-g fa-2x"></a>
                <a href="#" class="fab fa-instagram fa-2x"></a>
            </div>
            <h6>
                <span>RedFox © 2021. </span><a href="#">Политика конфиденциальности</a>
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
