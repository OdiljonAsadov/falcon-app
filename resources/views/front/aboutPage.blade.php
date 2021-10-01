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

    <!-- trinity -->
    <div class="trinity">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 p-3">
                    <div class="Who-We-Are">
                        <h1>Кто мы есть</h1>
                        <img src="../images/who we are.jpg" alt="Who-We-Are" class="img-fluid">
                        <h4 class="special-text">Мы обеспечиваем вам душевное спокойствие и профессиональный опыт,
                            которого
                            вы заслуживаете при работе с компанией, занимающейся отделкой поверхностей.</h4>
                        <h4>Мы тратим все свое время, усилия и ресурсы на одно - предоставить вам лучшие покрытия в
                            отрасли с широчайшим спектром типов поверхностей, выбора цвета и вариантов отделки.</h4>
                        <br><br>
                        <a href="#" class="specialBtn">Подробнее</a>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 p-3">
                    <h1>Наши преимущества</h1>
                    <ol>
                        <li>Maintenance programs</li>
                        <h4>Наша компания очень тщательно прорабатывает каждую деталь выполняемой работы и привлекает к
                            своим проектам только опытных монтажников.</h4>
                        <li>Broad product offering</li>
                        <h4>Мы предлагаем вам удобную, безопасную и нескользящую поверхность, подходящую для внутренних
                            и наружных работ, с быстрым временем оборота.</h4>
                        <li>Environmentally friendly</li>
                        <h4>Резиновое покрытие в большинстве случаев укладывается поверх старых поверхностей, что
                            устраняет необходимость вырывать и утилизировать материалы, использованные в исходной
                            поверхности.</h4>
                    </ol>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 p-3">
                    <h1>Почему нас?</h1>
                    <h4>Мы компания, занимающаяся наплавкой, и одна из самых опытных в сфере производства резиновых
                        покрытий. Устанавливаем только резиновые покрытия, это то, что мы делаем. Мы занимаемся
                        коммерческими и жилыми проектами всех видов, от больших до маленьких.</h4>
                    <div class="primary-text">
                        <h3>Обученные монтажные бригады</h3>
                        <h3>Национальные распределительные центры</h3>
                        <h3>Более 20 лет опыта</h3>
                        <h3>Опыт проектирования</h3>
                        <h3>Доверие и удовлетворение</h3>
                        <h4>Мы обеспечиваем вам душевное спокойствие и профессиональные знания, подкрепленные нашей
                            опытной командой продаж, "highly qualified" специалистами по установке, программами
                            технического обслуживания и отличным обслуживанием клиентов.</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- trinity -->

    <!-- Our Staff -->
    <div class="our-stuff">
        <div class="container-fluid">
            <h1>Наш персонал</h1>
            <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 p-3" data-aos="fade-up" data-aos-easing="linear"
                    data-aos-duration="1500">
                    <img src="../images/Walter martins.jpg" alt="walter martins" style="width: 100%; height:264px;
                        class="   img-fluid">
                    <h4>Сайфиев Равшан Эргашевич</h4>
                    <h5>Генеральный директор</h5>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 p-3" data-aos="fade-down" data-aos-easing="linear"
                    data-aos-duration="1500">
                    <img src="../images/Bradley Grosh.jpg" alt="walter martins" style="width: 100%; height:264px;"
                        class="img-fluid">
                    <h4>Расссыпной Андрей Сергеевич</h4>
                    <h5>Андрей - Фин.Директор </h5>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 p-3" data-aos="fade-up" data-aos-easing="linear"
                    data-aos-duration="1500">
                    <img src="../images/Andy Matters.jpg" alt="walter martins" style="width: 100%; height:264px;"
                        class="img-fluid">
                    <h4>Раасыпной Виталий Сергеевич</h4>
                    <h5>Виталий - менеджер по продажам</h5>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 p-3" data-aos="fade-down" data-aos-easing="linear"
                    data-aos-duration="1500">
                    <img src="../images/man bek.jpg" alt="walter martins" style="width: 100%; height:264px;"
                        class="img-fluid">
                    <h4>Бекмурадов Чоршанба </h4>
                    <h5>Бекмурадов - менеджер по продажам</h5>
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
                    <h1>Наши особенности</h1>
                    <div class="details row">
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-2 col-2">
                            <i class="fas fa-users fa-5x"></i>
                        </div>
                        <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-10 col-10">
                            <h4>Обслуживание клиентов</h4>
                            <h5>Наша главная работа - это удовлетворение запросов клиентов, позвольте нам доказать это
                                вам!</h5>
                        </div>
                    </div>
                    <div class="details row">
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-2 col-2">
                            <i class="fas fa-trophy fa-5x"></i>
                        </div>
                        <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-10 col-10">
                            <h4>Безопасность</h4>
                            <h5>Мы всегда стремимся сделать наш бизнес таким, к которому вы будете возвращаться снова и
                                снова.</h5>
                        </div>
                    </div>
                    <div class="details row">
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-2 col-2">
                            <i class="fas fa-thumbs-up fa-5x"></i>
                        </div>
                        <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-10 col-10">
                            <h4>Доверие и удовлетворение</h4>
                            <h5>Наши высококвалифицированные сотрудники, хорошие результаты и лояльность к клиенту - вот
                                что выделяет нас.</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-md-3 px-2">
                    <h1>Навыки и умения</h1>
                    <div class="details">
                        <h5>Мы используем резину и связующее высочайшего качества, чтобы создать красивый и долговечный
                            конечный продукт.</h5><br>
                        <h5>Наши резиновые покрытия также могут применяться в помещениях, на детских игровых площадках,
                            полах в спортзалах и во многих других сферах.</h5>
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 px-2">
                    <h1>Отзывы</h1>
                    <div class="details center-img">
                        <div class="row">
                            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-12 px-2">
                                <img src="../images/David Peters.jpg" alt="david" class="img-fluid pt-2">
                            </div>
                            <div class="col-xxl-7 col-xl-7col-lg-7 col-md-12 col-12 px-2">
                                <h5>«Большое спасибо за быстрый ответ. Я был очень впечатлен, ваше решение отличное !!
                                    Ваша компетентность оправдана! »</h5>
                                <h4>David Peters</h4>
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
</body>

</html>
