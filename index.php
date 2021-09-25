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

            var slider = new SimpleAdaptiveSlider(' .slider-1 ', {
                autoplay: true,
                interval: 7000,

            });
            var slider2 = new SimpleAdaptiveSlider('.slider-2   ', {
                autoplay: false,
                interval: 7000,

            });

            var slider = new SimpleAdaptiveSlider(' .slider-3 ', {
                autoplay: false,
                interval: 7000,

            });
            var slider = new SimpleAdaptiveSlider(' .slider-4 ', {
                autoplay: false,
                interval: 7000,

            });
            var slider = new SimpleAdaptiveSlider(' .slider-5 ', {
                autoplay: false,
                interval: 7000,

            });


        });
    </script>

    <link rel="stylesheet" href="magnific-popup/magnific-popup.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="magnific-popup/jquery.magnific-popup.js"></script>
    <script>
        $(document).ready(function() {
            /* $("#offer-5min").submit(function(e) {
                 e.preventDefault();
                 $.ajax({
                     type: "POST",
                     url: "form-handler.php",
                     data: $(this).serialize(),
                     success: function(request) {
                        alert("OK");
                     },
                 });
             });*/
            $('.work-type').click(function(event) {
                event.preventDefault();
                $('#myOverlay').fadeIn(297, function() {
                    $('#myModal')
                        .css('display', 'block')
                        .animate({
                            opacity: 1
                        }, 198);
                });
            });

            $('#myModal__close, #myOverlay').click(function() {
                $('#myModal').animate({
                    opacity: 0
                }, 198, function() {
                    $(this).css('display', 'none');
                    $('#myOverlay').fadeOut(297);
                });
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
            <a class="py-2 d-none d-md-inline-block" href="#section_about">О КОМПАНИИ</a>
            <a class="py-2 d-none d-md-inline-block" href="#section_worktype">ПОТОЛКИ</a>
            <a class="py-2 d-none d-md-inline-block" href="#section_reviews">ОТЗЫВЫ</a>
            <a class="py-2 d-none d-md-inline-block" href="#section_questions">ВОПРОСЫ</a>
            <a class="py-2 d-none d-md-inline-block" href="tel:+3712161166">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                </svg>
                +3712161166</a>

        </nav>
    </header>




    <div id="myModal">
        <form action="form-handler.php" method="POST">
            <h3>Submit the offer</h3>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Имя" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <input type="tel" class="form-control" placeholder="Телефон" name="phone" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <input type="mail" class="form-control" placeholder="Е-mail" name="mail" id="exampleInputPassword1">
                <input type="hidden" name="form" value="work">
            </div>
            <button type="submit" class="btn btn-secondary" style=" background-color: #353333; border-color: #353333;;">Отправить заявку</button>
        </form>
    </div>
    <div id="myOverlay"></div>






    </div>
    <!-- section  about-->
    <div class="parallax" id="first_parallax">
        <section id="section_about">
            <div class="container" id="container_about">
                <div class="spiner_photo">
                    <div class="slider slider-1 ">
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
                    <form id="offer-5min" action="form-handler.php" method="POST">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Имя" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <input type="tel" class="form-control" placeholder="Телефон" name="phone" id="exampleInputPassword1">
                            <input type="hidden" name="form" value="min">
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
                            <a href="" class="btn btn-secondary work-type">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card" style="width: 21rem;">
                        <img src="parallax.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card'sSome quick example text to build on the card title and make up the bulk of tSome quick example text to build on the card title and make up the bulk of the card's content.he card's content. content.</p>
                            <a href="" class="btn btn-secondary work-type">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card" style="width: 21rem;">
                        <img src="parallax.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="" class="btn btn-secondary ">Go somewhere</a>
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
                <div class="worktype_text">
                    <h1>НАДЕЖНОЕ СОТРУДНИЧЕСТВО</h1>
                    <h2 style="color:black">С НАШЕЙ КОМПАНИЕЙ</h2>
                </div>
                <div class="container_worktype_cards">
                    <div class="card" style="width: 18rem;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" color="#FFCE34" fill="currentColor" class="bi bi-check-circle why2" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                        </svg>
                        <div class="card-body">
                            <hr>
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" color="#FFCE34" fill="currentColor" class="bi bi-check-circle why2" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                        </svg>
                        <div class="card-body">
                            <hr>
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" color="#FFCE34" fill="currentColor" class="bi bi-check-circle why2" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                        </svg>
                        <div class="card-body">
                            <hr>
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" color="#FFCE34" fill="currentColor" class="bi bi-check-circle why2" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                        </svg>
                        <div class="card-body">
                            <hr>
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
    <!-- section_questions-->
    <div class="parallax">
        <section id="section_questions">
            <div class="container">
                <div class="worktype_text">
                    <h1>ЧАСТО ЗАДАВАЕМЫЕ</h1>
                    <h2 style="color:black">ВОПРОСЫ КЛИЕНТОВ</h2>
                </div>
                <div class="container_worktype_cards row row-cols-1 row-cols-md-2 g-4">

                    <div class="col">
                        <div class="card" style="width: 36rem;">
                            <div class="card-head">
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" color="#FFCE34" fill="currentColor" class="bi bi-check-circle " viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                </svg>
                                <h5 class="card-title">Сколько лет существует компания?</h5>
                            </div>

                            <p class="card-text">Наша компания работает на рынке услуг уже 20 лет. Мы работаем с клиентами из России и бывших стран СНГ. Самым важным для нас всегда будет добиться результата, который хочет получить наш клиент, сотрудничая с нашей компанией. </p>

                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 36rem;">
                            <div class="card-head">
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" color="#FFCE34" fill="currentColor" class="bi bi-check-circle " viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                </svg>
                                <h5 class="card-title">Сколько лет существует компания?</h5>
                            </div>

                            <p class="card-text">Наша компания работает на рынке услуг уже 20 лет. Мы работаем с клиентами из России и бывших стран СНГ. Самым важным для нас всегда будет добиться результата, который хочет получить наш клиент, сотрудничая с нашей компанией. </p>

                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 36rem;">
                            <div class="card-head">
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" color="#FFCE34" fill="currentColor" class="bi bi-check-circle " viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                </svg>
                                <h5 class="card-title">Сколько лет существует компания?</h5>
                            </div>

                            <p class="card-text">Наша компания работает на рынке услуг уже 20 лет. Мы работаем с клиентами из России и бывших стран СНГ. Самым важным для нас всегда будет добиться результата, который хочет получить наш клиент, сотрудничая с нашей компанией. </p>

                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 36rem;">
                            <div class="card-head">
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" color="#FFCE34" fill="currentColor" class="bi bi-check-circle " viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                </svg>
                                <h5 class="card-title">Сколько лет существует компания?</h5>
                            </div>

                            <p class="card-text">Наша компания работает на рынке услуг уже 20 лет. Мы работаем с клиентами из России и бывших стран СНГ. Самым важным для нас всегда будет добиться результата, который хочет получить наш клиент, сотрудничая с нашей компанией. </p>

                        </div>
                    </div>

                </div>

            </div>
        </section>
    </div>

    <!-- section_reviews-->
    <div class="parallax">
        <section id="section_reviews">
            <div class="container">
                <div class="worktype_text">
                    <h1>ОТЗЫВЫ</h1>
                    <h2 style="color:black">НАШИХ КЛИЕНТОВ</h2>
                </div>
                <div class="slider slider-2">
                    <div class="slider__wrapper">
                        <div class="slider__items">
                            <div class="slider__item">
                                <div class="slider-container-reviews">

                                    <div class="photo">
                                        <img src="/ron.jpg" alt="" srcset="">
                                    </div>
                                    <div class="text">
                                        Чем меньше я знаю о чужих интрижках, тем я счастливей. Я не испытываю радости от заботы о других людях. Как-то я работал с одним парнем в течение трех лет и даже имени его не знал... Лучший друг за всю жизнь! Мы все еще временами никогда не разговариваем.
                                        <br><br>
                                        <strong>Рон Суонсон</strong>
                                        <br>Пауни, штат Индиана 2018-03-15
                                    </div>
                                </div>
                            </div>

                            <div class="slider__item">
                                <div class="slider-container-reviews">

                                    <div class="photo">
                                        <img src="/ron.jpg" alt="" srcset="">
                                    </div>
                                    <div class="text">
                                        Чем меньше я знаю о чужих интрижках, тем я счастливей. Я не испытываю радости от заботы о других людях. Как-то я работал с одним парнем в течение трех лет и даже имени его не знал... Лучший друг за всю жизнь! Мы все еще временами никогда не разговариваем.
                                        <br><br>
                                        <strong>Рон Суонсон</strong>
                                        <br>Пауни, штат Индиана 2018-03-15
                                    </div>
                                </div>
                            </div>


                            <div class="slider__item">
                                <div class="slider-container-reviews">

                                    <div class="photo">
                                        <img src="/ron.jpg" alt="" srcset="">
                                    </div>
                                    <div class="text">
                                        Чем меньше я знаю о чужих интрижках, тем я счастливей. Я не испытываю радости от заботы о других людях. Как-то я работал с одним парнем в течение трех лет и даже имени его не знал... Лучший друг за всю жизнь! Мы все еще временами никогда не разговариваем.
                                        <br><br>
                                        <strong>Рон Суонсон</strong>
                                        <br>Пауни, штат Индиана 2018-03-15
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <a class="slider__control slider__control_prev" href="#" role="button" data-slide="prev"></a>
                    <a class="slider__control slider__control_next" href="#" role="button" data-slide="next"></a>
                </div>
            </div>
        </section>
    </div>
    <!--  section_offer -->
    <div class="parallax">
        <section id="section_offer">
            <div class="container">
                <div class="container_form">
                    <form action="form-handler.php" method="POST">
                        <div class="worktype_text">
                            <h2 style="color:black">ПОЗВОНИТЕ СЕЙЧАС И ПОЛУЧИТЕ</h2>
                            <h1>СКИДКУ 15%!</h1><br>
                            <div class="mb-3">

                                <input type="text" class="form-control" placeholder="Имя" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <input type="tel" class="form-control" placeholder="Телефон" name="phone" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <input type="mail" class="form-control" placeholder="Е-mail" name="mail" id="exampleInputPassword1">
                                <input type="hidden" name="form" value="15pass">
                            </div>
                            <button type="submit" class="btn btn-secondary" style=" background-color: #353333; border-color: #353333;;">Отправить заявку</button>
                    </form>
                </div>


            </div>
        </section>
    </div>
<!---section objects--->
        <section id="section_objects">
            <div class="container">
            <div class="worktype_text">
                    <h1>ОБЪЕКТЫ</h1>
                    <h2 style="color:black">ГАЛЕРЕЯ</h2> 
            </div>
            <div class="container objects" id="container_about">
                <div class="spiner_photo">
                    <div class="slider slider-3 ">
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
                <br>
                    <h2> Industriālais alpīnisms</h2>
                    <br>
                    <p>
                        Компания «Skin Ceiling» устанавливает натяжные потолки в Москве с 2009 года!
                        Собственное производство позволяет обеспечить выгодные условия покупки по самым низким ценам.
                        Использование только лучших материалов, комплектующих и профессиональный монтаж потолков
                    </p>
                </div>

            </div>

            <hr>

            <div class="container objects" id="container_about">
                <div class="spiner_photo">
                    <div class="slider slider-4 ">
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
                <br>
                    <h2> Industriālais alpīnisms</h2>
                    <br>
                    <p>
                        Компания «Skin Ceiling» устанавливает натяжные потолки в Москве с 2009 года!
                        Собственное производство позволяет обеспечить выгодные условия покупки по самым низким ценам.
                        Использование только лучших материалов, комплектующих и профессиональный монтаж потолков
                    </p>
                </div>

            </div>

<hr>
            <div class="container objects" id="container_about">
                <div class="spiner_photo">
                    <div class="slider slider-5 ">
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
                    <br>
                    <h2> Industriālais alpīnisms</h2>
                    <br>
                    <p>
                        Компания «Skin Ceiling» устанавливает натяжные потолки в Москве с 2009 года!
                        Собственное производство позволяет обеспечить выгодные условия покупки по самым низким ценам.
                        Использование только лучших материалов, комплектующих и профессиональный монтаж потолков
                    </p>
                </div>

            </div>

            </div>
        </section>


    </div>

</body>



</html>