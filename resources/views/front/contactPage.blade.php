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
                <a class="navbar-brand" href="/">Navbar</a>
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
                        <li class="nav-item">
                            <a class="nav-link" href="/catigory">Категории</a>
                        </li>
                        <li class="nav-item dropdown">
                            <span class="nav-link dropdown-toggle" id="navbarDropdown" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                O нас
                            </span>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/about">O нас</a></li>
                                <li class="dropdown-item click">
                                    <span>Наведите на меня</span>
                                    <div class="click-content">
                                        <a href="#">Lorem, ipsum.</a>
                                        <br>
                                        <a href="#">Lorem, ipsum.</a>
                                    </div>
                                </li>
                                <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Что-то еще здесь</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/servise">Услуги</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/gallery">Галерея</a>
                    </li>
                    <li class="nav-item">
                        <a href="/contact" class="nav-link active">Контакт</a>
                    </li>
                    <li class="nav-item">
                        <p href="#" class="nav-link lang-uz" style="display: block; cursor: pointer;"
                            onclick="showRu()">Uz</p>
                        <p href="#" class="nav-link lang-ru" style="display: none; cursor: pointer;" onclick="showUz()">
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
        <div class="container-fluid px-5">
            <h1 class="text-center">Связаться с нами</h1>
        </div>
    </div>
    <!-- about servises -->
    {{-- form --}}
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
                                        <p><span>Адрес:</span> Г.Ташкент Ул.Таффакур 43</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-phone"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Телефон:</span> <a href="callto:+998909307218">+998 (90) 930 72 18 </a></p>
                                        <p><span>Телефон:</span> <a href="callto:+998909588172">+998 (90) 958 81 72 </a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-paper-plane"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Эл. адрес:</span> <a
                                                href="mailto:#">Falcon.uz</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-globe"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Веб-сайт</span> <a href="Falcon.uz">Falcon.uz</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-xxl-7 col-xl-7 col-md-7">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4">Связаться с нами</h3>
                                    <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                        <div class="row">
                                            <div class="col-xxl-6 col-xl-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="name">Полное имя</label>
                                                    <input type="text" class="form-control" name="name" id="name"
                                                        placeholder="Name" required>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="email">Адрес электронной
                                                        почты</label>
                                                    <input type="email" class="form-control" name="email" id="email"
                                                        placeholder="Email" required>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="subject">Тема</label>
                                                    <input type="text" class="form-control" name="subject"
                                                        id="subject" placeholder="Subject" required>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="Phone">Номер телефона</label>
                                                    <input type="number" class="form-control" name="Phone" id="Phone"
                                                        placeholder="Phone Number" required>
                                                </div>
                                            </div>
                                            <div class="col-xxl-12 col-xl-12 col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="#">Сообщение</label>
                                                    <textarea name="message" class="form-control" id="message"
                                                        cols="30" rows="4" placeholder="Message" required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-xxl-12 col-xl-12 col-md-12">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">Отправлять
                                                        сообщения</button>
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2997.760152030951!2d69.25589561483577!3d41.292324209846996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8aef4d314cb1%3A0xe2b0854cb9883527!2zNDMgVGFmYWtrdXIga28nY2hhc2ksINCi0L7RiNC60LXQvdGCLCBPYHpiZWtpc3Rvbg!5e0!3m2!1suz!2s!4v1632900073014!5m2!1suz!2s" width="100%" height="450" style="border:0;" padding:0; allowfullscreen="" loading="eager"></iframe>
    <!--map  -->

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
    <!-- require -->
    <!-- <script src="./jsContact/main.js"></script> -->
</body>

</html>
