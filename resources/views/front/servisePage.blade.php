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
    <link rel="stylesheet" href="{{ asset('css/servise.css') }}">
    <!-- anime -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Услуги</title>
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
                            <a class="nav-link" aria-current="page" href="/">Главный</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="/catigory">Категории</a>
                        </li> --}}
                        <li class="nav-item"><a class="nav-link" href="/about">O нас</a></li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/servise">Услуги</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/gallery">Галерея</a>
                        </li>
                        <li class="nav-item">
                            <a href="/contact" class="nav-link">Контакт</a>
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

    <!-- about servises -->
    <div class="ourHistory">
        <div class="container-fluid">
            <h1 class="text-center">О наших услугах</h1>
            <div class="row pt-3">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 p-2">
                    <p>Молва составляет значительную часть нашего бизнеса, мы сделаем все возможное, чтобы вы остались
                        довольны своей установкой, а также были рядом, чтобы помочь вам в будущем.</p>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 p">
                    <p>Расценки на установку всегда бесплатны, без обязательств и выполняются обученными и опытными
                        людьми.
                        в компании. И мы одни из немногих в отрасли, у которых нет минимального квадрата
                        кадры "... нет работы слишком маленькой.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- about servises -->

    <!-- content us -->
    <div class="content-us">
        <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12">
                <img src="../images/design.jpg" alt="design" style="height: 100%;" class="img-fluid">
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 bg-color2-valriant-1">
                <h2>Дизайн</h2>
                <p>Наша миссия - предоставлять нашим клиентам продукцию высшего качества для обработки поверхностей.
                    Наши высококлассные сотрудники по обслуживанию клиентов ответят вовремя и обеспечат неизменно
                    высокое качество и надежность!</p>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">
                <img src="../images/sunPicture2.jpg" alt="sunPicture" style="height: 100%;" class="img-fluid">
            </div>
        </div>
    </div>

    <!-- second -->
    <div class="row">
        <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 bg-primary-variant-2 text-end">
            <h2>Программы обслуживания</h2>
            <p>Уход за поверхностью важен для долговечности продукта. Используя нашу программу технического
                обслуживания, вы можете помочь сохранить и оживить вашу поверхность по мере необходимости, защищая свои
                вложения и ваше оборудование! Мы тратим все свое время, усилия, ресурсы и предоставляем вам лучшие
                покрытия в отрасли с широчайшим спектром типов поверхностей, выбора цвета и вариантов отделки.</p>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">
            <img src="../images/oval.jpg" alt="ova;" style="height: 100%;" class="img-fluid">
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 bg-color1">
            <h2>Безопасность</h2>
            <p>Независимо от того, являетесь ли вы архитектором, строителем игровых площадок или служащим школы / парка,
                когда речь идет о детских площадках, главное - безопасность.</p>
        </div>
    </div>
    <!-- third -->
    <div class="rubber">
        <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12">
                <div class="text-content" data-aos="fade-right">
                    <h1>Обзор продукта</h1>
                </div>
                <div class="links row" data-aos="fade-right">
                    <div class="col-xxl-6 col-xl-6 col-md-12">
                        <ul>
                            <li>Playgrounds</li>
                            <li>Driveways</li>
                            <li>Garage floors</li>
                            <li>Walkways</li>
                            <li>Pool surrounds or Pool Deck</li>
                            <li>Golf paths</li>
                            <li>Hot tub areas</li>
                            <li>Gym floors</li>
                        </ul>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-md-12">
                        <ul>
                            <li>Basements</li>
                            <li>Daycare's</li>
                            <li>Wheelchair Ramps</li>
                            <li>Arenas</li>
                            <li>Patios</li>
                            <li>Mini-Putt courses</li>
                            <li>Stair treads</li>
                            <li>Balconies</li>
                            <li>And More</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12">
                <img src="../images/waterwithoval.jpg" alt="waterwithoval" class="img-fluid">
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-md-6">
                        <img src="../images/dolphinlitt.jpg" alt="bascket" class="img-fluid">
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-md-6">
                        <img src="../images/childs2.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- second rubber -->
    <div class="rubber">
        <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12">
                <img src="../images/childs.jpg" alt="childs" class="img-fluid">
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12">
                <div class="text-content" data-aos="flip-right">
                    <h1>Резиновая игровая площадка</h1>
                </div>
                <div class="info" data-aos="flip-right">
                    <p>Поверхность вашей игровой площадки будет выглядеть красиво при минимальном уходе. Он
                        вандалостойкий, химически стойкий и простой в уходе. Мы предлагаем универсальную поверхность,
                        которую можно установить на любую глубину, чтобы удовлетворить все ваши потребности. Мы
                        используем подходящую поверхность для детских садов, детских садов, начальных школ или вашей
                        частной игровой зоны.</p>
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
