<?php
include "language.php";

?>
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


        var modal = document.getElementById("myModal");

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById("myImg");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function() {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>
    <script src="wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="magnific-popup/jquery.magnific-popup.js"></script>
    <script>
        $(document).ready(function() {
            $("form").submit(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "form-handler.php",
                    data: $(this).serialize(),
                    success: function(request) {
                        alert("Заявка отпралена");
                        $('#myModal').animate({
                            opacity: 0
                        }, 198, function() {
                            $(this).css('display', 'none');
                            $('#myOverlay').fadeOut(297);
                        });
                    },
                });
            });


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
            <a class="py-2 d-none d-md-inline-block" href="#section_worktype">УСЛУГИ</a>
            <a class="py-2 d-none d-md-inline-block" href="#section_objects">ГАЛЕРЕЯ</a>
            <a class="py-2 d-none d-md-inline-block" href="#section_why_2">КЛИЕНТЫ</a>
            <a class="py-2 d-none d-md-inline-block" href="#section_reviews">ОТЗЫВЫ</a>
            <a class="py-2 d-none d-md-inline-block" href="#section_questions">ВОПРОСЫ</a>
            <a class="py-2 d-none d-md-inline-block" href="#">КАРЬЕРА</a>
            <a class="py-2 d-none d-md-inline-block" href="#">КОНТАКТЫ</a>

        </nav>
    </header>




    <div id="myModal">
        <form action="form-handler.php" method="POST">
            <h3>Submit the offer</h3>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Имя" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <input type="tel" class="form-control" required placeholder="Телефон *" name="phone" id="exampleInputPassword1">
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

    <div class="parallax" id="first_parallax"></div>
    <div class="parallax">
        <section id="section_about">
            <div class="container about " id="container_about">

                <div class="text_about">
                    <h1>О КОМПАНИИ</h1>
                    <br>
                    <h3> INDUSTRIĀLAIS ALPĪNISMS SIA </h3>
                    <br>
                    <p>
                    <div class="spiner_photo">
                        <div class="slider  slider-1 ">
                            <div class="slider__wrapper">
                                <div class="slider__items">
                                    <div class="slider__item">
                                        <img class="img-fluid" src="/wall-img/108208553_174057757442404_1619047259786643689_n.jpg" alt="..." width="800" height="400" loading="lazy">
                                    </div>
                                    <div class="slider__item">
                                        <img class="img-fluid" src="/wall-img/93713236_3047035792009527_4129817943678648320_n.jpg" alt="..." width="800" height="400" loading="lazy">
                                    </div>
                                    <div class="slider__item">
                                        <img class="img-fluid" src="/wall-img/93803379_3047035098676263_6274875661005881344_n.jpg" alt="..." width="800" height="400" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <a class="slider__control slider__control_prev" href="#" role="button" data-slide="prev"></a>
                            <a class="slider__control slider__control_next" href="#" role="button" data-slide="next"></a>
                        </div>

                    </div>
                    Латвийская компания, предлагающая многоцелевые решения по методу промышленного альпинизма для широкого спектра услуг - работы на высоте.


                    Наш обширный отраслевой опыт в сочетании с первоклассной командой гарантирует, что мы можем предоставить нашим клиентам услуги в области различных решений по работам на высоте, от стадии строительства до контрактов на ежегодное техническое обслуживание.

                    Компания INDUSTRIĀLAIS ALPĪNISMS SIA работает с 2012 года, с постоянным ростом численности персонала и ресурсов, с хорошей репутацией и многими реализованными проектами.


                    Наша основная цель - создать комплексную услугу для наших клиентов, предоставляя им первоклассные услуги на высоте; от осмотра, мойки фасада, строительных работ, установки кондиционеров/ баннеров, очистки крыш, фасадов, общего технического обслуживания до годовых договоров на техническое обслуживание.

                    Мы постоянно нанимаем и ищем новые таланты, которые помогают нам рости.

                    Наши клиенты - это наш имидж и репутация на рынке.

                    Наше миссия - предоставлять нашим клиентам самые высокие стандарты обслуживания, учитывая все меры безопасности в любое время, независимо от размера работы.
                    </p>
                    <p><strong>МЫ ИМЕЕМ ОПЫТ С БОЛЬШИМИ КОММЕРЧЕСКИМИ ОБЪЕКТАМИ </strong>
                    </p>
                </div>

            </div>
        </section>
    </div>
    </div>

    <!-- section_ordering-->
    <div class="parallax ordering">
        <section id="section_ordering">
            <div class="container">
                <div class="ordering_text">
                    <strong>
                        <h1>РАССЧИТАЕМ ВАШ ЗАКАЗ</h1>
                    </strong>
                </div>
                <div class="ordering_form">
                    <form id="offer-5min" action="form-handler.php" method="POST">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Имя" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <input type="tel" class="form-control" required placeholder="Телефон *" name="phone" id="exampleInputPassword1">
                            <input type="hidden" name="form" value="min">
                        </div>
                        <div class="mb-3">
                            <textarea type="text" class="form-control" required placeholder="Краткое описание запроса" name="description" id="ordering_description"></textarea>

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
                    <h1>УСЛУГИ </h1>
                </div>
                <div class="container_worktype_cards">
                    <div class="card" style="width: 21rem;">
                        <img src="/wall-img/fasad.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Фасадные работы</h5>
                            <p class="card-text">
                                <br>Ремонт фасадов
                                <br>Косметический ремонт фасадов
                                <br>Капитальный ремонт фасадов
                                <br>Штукатурка фасада
                                <br>Ремонт штукатурки фасада
                                <br>Ремонт кирпичной кладки
                                <br>Отделка монолитных поясов
                                <br>Ремонт трещин на фасаде
                                <br>Герметизация межпанельных швов
                                <br>Герметизация окон
                                <br>Покраска фасада
                                <br>Покраска кровли
                                <br>Покраска пожарных лестниц
                                <br>Покраска металлоконструкций
                                <br>Покраска дымовых труб
                                <br>Покраска промышленных объектов и помещений
                                <br>Покраска водонапорных башен
                                <br>Покраска промышленных объектов и помещений
                            </p>

                        </div>
                    </div>
                    <div class="card" style="width: 21rem;">
                        <img src="/wall-img/okna.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Клининговые услуги</h5>
                            <p class="card-text">Мойка окон
                                <br>Мойка фасадов
                                <br>Обеспыливание балок
                                <br>Мойка цехов промышленных
                            </p>

                        </div>
                    </div>
                    <div class="card" style="width: 21rem;">
                        <img src="/wall-img/drygoe.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Другие работы </h5>
                            <p class="card-text">
                                <br> Монтаж кондиционеров
                                <br>Монтаж водостоков
                                <br>Монтаж/демонтаж баннеров
                                <br>Удаление деревьев
                                <br>Обрезка ветвей деревьев
                                <br>Уборка снега с крыш
                                <br>Удаление сосулек
                                <br>Очистка водостоков и желобов
                            </p>

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
                    <h1>ПОЧЕМУ МЫ ? </h1>

                </div>
                <div class="container_why">
                    <div class="text">
                        <div class="container_text"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" color="white" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                            </svg>
                            <h4>Профессионализм</h4>
                            <h5>Мы подготовим предложение по оптимальному решению всех пожеланий. Мы всегда считаем приоритетными интересы заказчика, и нам доверяют на протяжении 10 лет. </h5></br><br>
                        </div>
                        <div class="container_text"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" color="white" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                            </svg>
                            <h4>Скорость</h4>
                            <h5>Мы способны быстро реагировать на Ваш запрос. И делаем свою работу в установленные сроки. </h5></br><br>
                        </div>
                        <div class="container_text"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" color="white" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                            </svg>
                            <h4>Надежность</h4>
                            <h5>Работаем, соблюдая все меры безопасности. </h5></br><br>
                        </div>
                        <div class="container_text"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" color="white" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                            </svg>
                            <h4>Гибкость </h4>
                            <h5>Находим решение наиболее подходящее под Ваш запрос. </h5></br><br>
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
                    <h1>КЛИЕНТЫ </h1>
                </div>
                <div class="container_worktype_cards">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <img src="/clients-img/220px-Olainfarm_logo.svg.png" alt="Cinque Terre" width="190" height="120">
                            </div>
                            <div class="col">
                                <img src="/clients-img/img_58b031a30d2071.63580347.jpg.webp" alt="Cinque Terre" width="390" height="130">
                            </div>
                            <div class="col">
                                <img src="/clients-img/img_59688d076fd319.67987052.png.webp" alt="Cinque Terre" width="190" height="90">
                            </div>
                            <div class="col">
                                <img src="/clients-img/kuber-logo.png" alt="Cinque Terre" width="190" height="120">
                            </div>
                        </div>
                        <div class="row" style="width: 90%; margin-left: 50px;">
                            <div class="col">
                                <img src="/clients-img/img_58afa85ff0fe80.91654338.png" alt="Cinque Terre" width="350" height="160">
                            </div>
                            <div class="col">
                                <img src="/clients-img/logo@2x_54e2d.png" alt="Cinque Terre" width="250" height="180">
                            </div>
                            <div class="col">
                                <img src="/clients-img/torensberg-logo-5e582921a2092-large.jpg" alt="Cinque Terre" width="260" height="150">
                            </div>
                        </div>
                        <div class="row " style="margin-bottom: 30px;">
                            <div class="col">
                                <img src="/clients-img/rs_logo_300_0.jpg" alt="Cinque Terre" width="350" height="140">
                            </div>
                            <div class="col">
                                <img src="/clients-img/700x700_civinity_thumbnail.png" alt="Cinque Terre" width="250" height="120">
                            </div>
                            <div class="col">
                                <img src="/clients-img/Снимок экрана 2021-11-02 в 00.05.09.png" alt="Cinque Terre" width="190" height="120">
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
                                <h5 class="card-title">На какой высоте могут работать промышленные альпинисты?</h5>
                            </div>

                            <p class="card-text">Высота проведения альпинистских мероприятий ограничивается лишь одним фактором — длиной веревки. Имея в распоряжении профессиональное снаряжение и соответствующую экипировку, альпинисты могут работать на сооружениях любой этажности. С точки зрения безопасности, чем ниже конструкция, тем меньше времени понадобится высотнику для спуска при возникновении опасной ситуации. Поэтому для альпиниста ключевую роль играет не высота конструкции, а расстояние от места крепления снаряжения до зоны проведения работ.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 36rem;">
                            <div class="card-head">
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" color="#FFCE34" fill="currentColor" class="bi bi-check-circle " viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                </svg>
                                <h5 class="card-title">Влияют ли погодные условия на проведение работ?</h5>
                            </div>

                            <p class="card-text">Погода — самый важный фактор в промышленном альпинизме. Именно от нее в большей степени зависит качество, скорость и безопасность высотных работ. Высотные мероприятия не проводятся при дожде, при сильном ветре, при низкой (-25) температуре воздуха. К тому же следует взять во внимание характер работ. Так, например, покраску, мытье окон или монтаж необходимо осуществлять, учитывая особенности технологического процесса и рекомендации по проведению той или иной процедуры.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 36rem;">
                            <div class="card-head">
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" color="#FFCE34" fill="currentColor" class="bi bi-check-circle " viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                </svg>
                                <h5 class="card-title">Как узнать стоимость работ? </h5>
                            </div>

                            <p class="card-text">Рассчитать стоимость работ самостоятельно не возможно. Разумнее набрать телефон, указанный на нашем сайте, и вызвать профессионала. Для точного определения стоимости работ необходимо понимать многие тонкости самого процесса, на месте оценить масштаб предстоящих мероприятий и особенности здания. Выезд консультанта на объект следует обговорить заранее, а затем обеспечить доступ на место проведения работ.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 36rem;">
                            <div class="card-head">
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" color="#FFCE34" fill="currentColor" class="bi bi-check-circle " viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                </svg>
                                <h5 class="card-title">Можете ли вы удалять деревья, ветви деревьев? </h5>
                            </div>

                            <p class="card-text">Да, конечно! Мы удаляем деревья методом промышленного альпинизма, без использования спецтехники: автовышки, автокрана. Наш метод ничем не уступает спиливанию деревьев с автовышки, а во многом и превосходит: экономия на аренде автовышки, возможность работы в стесненных и труднодоступных местах. </p>
                        </div>
                    </div>

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
                            <h2 style="color:black">НАПИШИТЕ НАМ СВОЙ ЗАПРОС </h2>
                            <br>
                            <div class="mb-3">

                                <input type="text" class="form-control" placeholder="Имя" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <input type="tel" class="form-control" required placeholder="Телефон *" name="phone" id="exampleInputPassword1">
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

            <div class="container">

                <div class="row">
                    <div class="col">
                        <img src="/gallery-img/v_-10.jpg" alt="Cinque Terre" width="290" height="200" tabindex="0">
                    </div>
                    <div class="col">
                        <img src="/gallery-img/v_-11.jpg" alt="Cinque Terre" width="290" height="200" tabindex="0">
                    </div>
                    <div class="col">
                        <img src="/gallery-img/v_-12.jpg" alt="Cinque Terre" width="290" height="200" tabindex="0">
                    </div>
                    <div class="col">
                        <img src="/gallery-img/v_-13.jpg" alt="Cinque Terre" width="290" height="200" tabindex="0">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <img src="/gallery-img/v_-15.jpg" alt="Cinque Terre" width="290" height="200" tabindex="0">
                    </div>
                    <div class="col">
                        <img src="/gallery-img/v_-16.jpg" alt="Cinque Terre" width="290" height="200" tabindex="0">
                    </div>
                    <div class="col">
                        <img src="/gallery-img/v_-17.jpg" alt="Cinque Terre" width="290" height="200" tabindex="0">
                    </div>
                    <div class="col">
                        <img src="/gallery-img/v_-18.jpg" alt="Cinque Terre" width="290" height="200" tabindex="0">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <img src="/gallery-img/v_-19.jpg" alt="Cinque Terre" width="290" height="200" tabindex="0">
                    </div>
                    <div class="col">
                        <img src="/gallery-img/v_-2.jpg" alt="Cinque Terre" width="290" height="200" tabindex="0">
                    </div>
                    <div class="col">
                        <img src="/gallery-img/v_-20.jpg" alt="Cinque Terre" width="290" height="200" tabindex="0" >
                    </div>
                    <div class="col">
                        <img src="/gallery-img/v_-21.jpg" alt="Cinque Terre" width="290" height="200" tabindex="0">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <img src="/gallery-img/v_-22.jpg" alt="Cinque Terre" width="290" height="200" tabindex="0">
                    </div>
                    <div class="col">
                        <img src="/gallery-img/v_-23.jpg" alt="Cinque Terre" width="290" height="200" tabindex="0">
                    </div>
                    <div class="col">
                        <img src="/gallery-img/v_-3.jpg" alt="Cinque Terre" width="290" height="200" tabindex="0">
                    </div>
                    <div class="col">
                        <img src="/gallery-img/v_-4.jpg" alt="Cinque Terre" width="290" height="200" tabindex="0">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <img src="/gallery-img/v_-5.jpg" alt="Cinque Terre" width="290" height="200" tabindex="0">
                    </div>
                    <div class="col">
                        <img src="/gallery-img/v_-6.jpg" alt="Cinque Terre" width="290" height="200" tabindex="0">
                    </div>
                    <div class="col">
                        <img src="/gallery-img/v_-7.jpg" alt="Cinque Terre" width="290" height="200" tabindex="0">
                    </div>
                    <div class="col">
                        <img src="/gallery-img/v_-8.jpg" alt="Cinque Terre" width="290" height="200" tabindex="0">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <img src="/gallery-img/v_-9.jpg" alt="Cinque Terre" width="290" height="200" tabindex="0">
                    </div>
                    <div class="col">
                        <img src="/gallery-img/v_-14.jpg" alt="Cinque Terre" width="290" height="200" tabindex="0">
                    </div>
                    <div class="col">
                        <img src="/gallery-img/v_-9.jpg" alt="Cinque Terre" width="290" height="200" tabindex="0">
                    </div>
                    <div class="col">
                        <img src="/gallery-img/v_-13.jpg" alt="Cinque Terre" width="290" height="200" tabindex="0">
                    </div>
                </div>




            </div>
    </section>


    </div>
    <div class="parallax">
        <section id="section_career">
            <div class="container">
                <div class="worktype_text">
                    <h1>КАРЬЕРА</h1>
                    <h2 style="color:black">РАБОТА У НАС </h2>
                </div>
                <div class="container">
                    <h5 class="career-discription" style="color:black">
                        Если вы думаете, что у вас есть все, что нужно для высотных работ, подайте заявку здесь. Заполните онлайн-форму, загрузите свое резюме, и мы свяжемся с вами, если будут подходящие вакансии.
                    </h5>
                    <div class="offer-input">
                        <form action="form-handler.php" style="width: 450px;" method="POST">

                            <div class="mb-3">

                                <input type="text" class="form-control career-input" placeholder="Имя" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <input type="tel" class="form-control career-input" required placeholder="Телефон *" name="phone" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <input type="mail" class="form-control career-input" placeholder="Е-mail" name="mail" id="exampleInputPassword1">
                                <input type="hidden" name="form" value="15pass">
                            </div>
                            <div class="mb-3">
                                <textarea type="text" class="form-control" required placeholder="Краткое описаниe" name="description" id="career_description"></textarea>
                            </div>
                            <button type="submit" class="btn btn-secondary" style=" background-color: #353333; border-color: #353333;;">Отправить заявку</button>
                        </form>
                    </div>
                    <div class="offer-img">

                    
                    </div>
                    
                </div>
            </div>
        </section>
    </div>

    <div class="parallax">
        <section id="section_contacts">
            <div class="container">
                <div class="worktype_text">
                    <h1 style="color:white">КОНТАКТЫ</h1>
                </div>
                <div class="container">
                    <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2176.471257164596!2d24.154346316105084!3d56.94072690721367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTbCsDU2JzI2LjYiTiAyNMKwMDknMjMuNSJF!5e0!3m2!1sru!2slv!4v1635703621841!5m2!1sru!2slv" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
                    <div class="contacts-info" style="color:white">
                        <div class="contact">
                            <h4>Телефон:</h4>
                            <h6>+37128270850</h6>
                        </div>
                        <div class="contact">
                            <h4>E-mail:</h4>
                            <h6>industrialaisalp@gmail.com</h6>
                        </div>
                        <div class="contact">
                            <h4>Адрес:</h4>
                            <h6>
                                Lauvas iela 6
                                Latgales priekšpilsēta, Rīga, LV-1003 </h6>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>

                </div>
        </section>
    </div>
    </div>

</body>



</html>