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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/catigory.css') }}">
    <title>Катигории</title>
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
                            <a class="nav-link active" aria-current="page" href="/catigory">Катигории</a>
                        </li> --}}
                        <li class="nav-item"><a class="nav-link" href="/about">O нас</a></li>
                        <li class="nav-item">
                            <a class="nav-link " href="/servise">Услуги</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/gallery">Галерея</a>
                        </li>
                        <li class="nav-item">
                            <a href="/contact" class="nav-link ">Контакт</a>
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

    <!-- main content -->
    <div class="main-content">
        <div class="container">
            <h2 class="title">Product</h2>
            <div class="img-container">
                <div class="row justify-content-between">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12"><img src="./images/9.png" alt="9"
                            class="img-fluid"></div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12"><img src="./images/8.png" alt="9"
                            class="img-fluid"></div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12"><img src="./images/7.png" alt="9"
                            class="img-fluid"></div>
                </div>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium repudiandae perspiciatis similique
                omnis
                sit nemo, ipsam ducimus sequi explicabo distinctio voluptates officia, laboriosam ut aperiam, aspernatur
                sapiente. Distinctio, recusandae excepturi quisquam porro ipsam quo minus culpa, officia ut sapiente
                laudantium
                atque. Sit excepturi, expedita libero commodi impedit inventore tempora vitae?</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum cum nulla amet ipsam. Commodi aut eius
                maiores
                perferendis totam voluptate!</p>

            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint, fugiat quisquam assumenda, earum soluta
                voluptate vero in tempore facere maiores sequi hic impedit dolorum autem consequuntur deserunt doloribus
                nesciunt pariatur.</p>
        </div>
    </div>
    <!-- main content -->

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
</body>

</html>
