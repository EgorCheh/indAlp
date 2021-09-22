<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link rel="stylesheet" href="simple-adaptive-slider.min.css">
    <script defer src="simple-adaptive-slider.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            var slider = new SimpleAdaptiveSlider('.slider', {
                autoplay: true,
                interval: 7000,

            });
        });
    </script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="site-header sticky-top py-1">
        <nav class="container d-flex flex-column flex-md-row justify-content-between">
            <a class="py-2 d-none d-md-inline-block" href="#">О КОМПАНИИ</a>
            <a class="py-2 d-none d-md-inline-block" href="#">Product</a>
            <a class="py-2 d-none d-md-inline-block" href="#">Features</a>
            <a class="py-2 d-none d-md-inline-block" href="#">Enterprise</a>
            <a class="py-2 d-none d-md-inline-block" href="#">Support</a>
            <a class="py-2 d-none d-md-inline-block" href="#">Pricing</a>
            <a class="py-2 d-none d-md-inline-block" href="#">Cart</a>
        </nav>
    </header>
    </div>
    <!-- section  about-->
    <div class="parallax" id="first_parallax">
        <section id="section_about">
            <div class="container" id="container_about">
                <div class="spiner_photo">
                    <div class="slider">
                        <div class="slider__wrapper">
                            <div class="slider__items">
                                <div class="slider__item">
                                    <img class="img-fluid" src="/parallax.png" alt="..." width="800" height="400" loading="lazy">
                                </div>
                                <div class="slider__item">
                                    <img class="img-fluid" src="/parallax.png" alt="..." width="800" height="400" loading="lazy">
                                </div>
                                <div class="slider__item">
                                    <img class="img-fluid" src="/parallax.png" alt="..." width="800" height="400" loading="lazy">
                                </div>
                                <div class="slider__item">
                                    <img class="img-fluid" src="/parallax.png" alt="..." width="800" height="400" loading="lazy">
                                </div>
                            </div>
                        </div>
                        <a class="slider__control slider__control_prev" href="#" role="button" data-slide="prev"></a>
                        <a class="slider__control slider__control_next" href="#" role="button" data-slide="next"></a>
                    </div>

                </div>
                <div class="text_about">
                    <h1>О КОМПАНИИ</h1>
                    <br>
                    <h3> Industriālais alpīnisms</h3>
                    <br>
                    <p>
                        Компания «Skin Ceiling» устанавливает натяжные потолки в Москве с 2009 года!
                        Собственное производство позволяет обеспечить выгодные условия покупки по самым низким ценам.
                        Использование только лучших материалов, комплектующих и профессиональный монтаж потолков
                    </p>
                </div>

            </div>
        </section>
    </div>

    <!-- section_ordering-->
    <div class="parallax">
        <section id="section_ordering">
            <div class="container">
                <div class="ordering_text">
                    <strong>
                        <h1>РАССЧИТАЕМ ВАШ ЗАКАЗ</h1>
                    </strong>
                    <b>
                        <h2>ВСЕГО ЗА 5 МИНУТ</h2>
                    </b>
                </div>
                <div class="ordering_form">
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Имя" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <input type="tel" class="form-control" placeholder="Телефон" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-secondary">Отправить заявку</button>
                    </form>
                </div>

            </div>
        </section>
    </div>


    <!-- section_worktype-->
    <div class="parallax">
        <section id="section_worktype">
            <div class="container">
                <div class="worktype_text">
                    <h1>ПОДБЕРИТЕ ПОВЕРХНОСТЬ</h1>
                    <h2>ДЛЯ ВАШЕГО ПОТОЛКА</h2>
                </div>
                <div class="container_worktype_cards">
                    <div class="card" style="width: 21rem;">
                        <img src="parallax.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.content.</p>
                            <a href="#" class="btn btn-secondary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card" style="width: 21rem;">
                        <img src="parallax.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card'sSome quick example text to build on the card title and make up the bulk of tSome quick example text to build on the card title and make up the bulk of the card's content.he card's content. content.</p>
                            <a href="#" class="btn btn-secondary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card" style="width: 21rem;">
                        <img src="parallax.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-secondary">Go somewhere</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>

    <!-- section_why-->
    <div class="parallax">
        <section id="section_why">
            <div class="container">
                <div class="worktype_text">
                    <h1>ПОЧЕМУ НАТЯЖНЫЕ ПОТОЛКИ</h1>
                    <h2>ЛУЧШИЙ ВАРИАНТ?</h2>
                </div>
                <div class="container_why">
                    <div class="video">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/xPehEEluF48?start=15" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="text">
                        <div class="container_text"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" color="white" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                            </svg>
                            <h4>Надёжность и долговечность</h4>
                        </div></br><br>

                        <div class="container_text"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" color="white" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                            </svg>
                            <h4>Надёжность и долговечность</h4>
                        </div> <br><br>
                        <div class="container_text"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" color="white" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                            </svg>
                            <h4>Надёжность и долговечность</h4>
                        </div>



                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- section_why_2-->
    <div class="parallax">
        <section id="section_why_2">
            <div class="container">

            </div>
        </section>
    </div>
    <!-- section_questions-->
    <div class="parallax">
        <section id="section_questions">
            <div class="container">

            </div>
        </section>
    </div>

    <!-- section_reviews-->
    <div class="parallax">
        <section id="section_reviews">
            <div class="container">

            </div>
        </section>
    </div>
    <!--  section_offer -->
    <div class="parallax">
        <section id="section_offer">
            <div class="container">


            </div>
        </section>
    </div>


    </div>

</body>

</html>