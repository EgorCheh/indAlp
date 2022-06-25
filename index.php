<?php

if ($_GET['land'] == null || $_GET['land'] == 'lv') {
    include "lv.php";
    $lan = "lv";
} else {
    include "ru.php";
    $lan = "ru";
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="/wall-img/favicon.png" type="image/png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ind-Alp</title>

    
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


        var img = document.getElementById("myImg");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function() {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }


        var span = document.getElementsByClassName("close")[0];

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
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script>
		!window.jQuery && document.write('<script src="jquery-1.4.3.min.js"><\/script>');
	</script>
	<script type="text/javascript" src="./fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="./fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="./fancybox/jquery.fancybox-1.3.4.css" media="screen" />
 	<link rel="stylesheet" href="style.css" />
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			*   Examples - images
			*/

			$("a#example1").fancybox();

			$("a#example2").fancybox({
				'overlayShow'	: false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'elastic'
			});

			$("a#example3").fancybox({
				'transitionIn'	: 'none',
				'transitionOut'	: 'none'	
			});

			$("a#example4").fancybox({
				'opacity'		: true,
				'overlayShow'	: false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'none'
			});

			$("a#example5").fancybox();

			$("a#example6").fancybox({
				'titlePosition'		: 'outside',
				'overlayColor'		: '#000',
				'overlayOpacity'	: 0.9
			});

			$("a#example7").fancybox({
				'titlePosition'	: 'inside'
			});

			$("a#example8").fancybox({
				'titlePosition'	: 'over'
			});

			$("a[rel=example_group]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});

			/*
			*   Examples - various
			*/

			$("#various1").fancybox({
				'titlePosition'		: 'inside',
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
			});

			$("#various2").fancybox();

			$("#various3").fancybox({
				'width'				: '75%',
				'height'			: '75%',
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
			});

			$("#various4").fancybox({
				'padding'			: 0,
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
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
            <a class="py-2 d-none d-md-inline-block" href="#section_about"><?php echo $_LANG['header-section_about']; ?></a>
            <a class="py-2 d-none d-md-inline-block" href="#section_worktype"><?php echo $_LANG['header-section_worktype']; ?></a>
            <a class="py-2 d-none d-md-inline-block" href="#section_objects"><?php echo $_LANG['header-section_objects']; ?></a>
            <a class="py-2 d-none d-md-inline-block" href="#section_why_2"><?php echo $_LANG['header-section_why_2']; ?></a>
            <a class="py-2 d-none d-md-inline-block" href="#section_questions"><?php echo $_LANG['header-section_questions']; ?></a>
            <a class="py-2 d-none d-md-inline-block" href="#section_career"><?php echo $_LANG['header-section_career']; ?></a>
            <a class="py-2 d-none d-md-inline-block" href="#section_contacts"><?php echo $_LANG['header-section_contacts']; ?></a>

            <?php if ($lan == "lv") : ?>
                <a style="color: #ffd034" class="py-2 d-none d-md-inline-block" href="/?land=ru">RUS</a>
            <?php else : ?>
                <a style="color: #ffd034" class="py-2 d-none d-md-inline-block" href="/?land=lv">LV</a>
            <?php endif; ?>




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

    <div class="first_space"></div>

    <!-- section  about-->

    <div class="parallax" id="first_parallax"></div>
    <div class="parallax">
        <section id="section_about">
            <div class="container about " id="container_about">

                <div class="text_about">
                    <h1><?php echo $_LANG['about-title']; ?></h1>
                    <br>
                    <h3> INDUSTRIĀLAIS ALPĪNISMS SIA </h3>
                    <br>

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
                    <div class="container-about-text">
                        <p align="justify">
                            <?php echo $_LANG['about-text']; ?></p>
                        <p align="center"><strong><?php echo $_LANG['about-under']; ?> </strong>
                        </p>
                    </div>
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
                        <h1><?php echo $_LANG['ordering-title']; ?></h1>
                    </strong>
                </div>
                <div class="ordering_form">
                    <form id="offer-5min" action="form-handler.php" method="POST">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="<?php echo $_LANG['form-name']; ?>" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <input type="tel" class="form-control" required placeholder="<?php echo $_LANG['form-tel']; ?>" name="phone" id="exampleInputPassword1">
                            <input type="hidden" name="form" value="request">
                        </div>
                        <div class="mb-3">
                            <textarea type="text" class="form-control" required placeholder="<?php echo $_LANG['form-description']; ?>" name="description" id="ordering_description"></textarea>

                        </div>
                        <button type="submit" class="btn btn-secondary"><?php echo $_LANG['form-submit']; ?></button>
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
                    <h1><?php echo $_LANG['worktype-title']; ?></h1>
                </div>
                <div class="container_worktype_cards">
                    <div class="card" >
                        <img src="/wall-img/fasad.jpg" class="card-img-top" alt="..." width="400" height="400">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $_LANG['worktype-type1']; ?></h5>
                            <p class="card-text">
                            <?php echo $_LANG['worktype-type1-text']; ?>
                            </p>

                        </div>
                    </div>
                    <div class="card" >
                        <img src="/wall-img/okna.jpg" class="card-img-top" alt="..." width="400" height="400">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $_LANG['worktype-type2']; ?></h5>
                            <p class="card-text">
                            <?php echo $_LANG['worktype-type2-text']; ?>
                            </p>

                        </div>
                    </div>
                    <div class="card" >
                        <img src="/wall-img/drygoe.jpg" class="card-img-top" alt="..." width="400" height="400">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $_LANG['worktype-type3']; ?></h5>
                            <p class="card-text">
                            <?php echo $_LANG['worktype-type3-text']; ?>
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
                    <h1><?php echo $_LANG['why-title']; ?> </h1>

                </div>
                <div class="container_why">

                    <div class="text">

                        <div class="row">
                            <div class="col">
                                <div class="container_text"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" color="white" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                    </svg>
                                    <h4><?php echo $_LANG['why-content-title-1']; ?></h4>
                                    <h5> <strong style="color:#ffd034;">95%</strong> <?php echo $_LANG['why-content-text-1']; ?></h5></br><br>
                                </div>
                            </div>

                            <div class="col">
                                <div class="container_text"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" color="white" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                    </svg>
                                    <h4><?php echo $_LANG['why-content-title-2']; ?></h4>
                                    <h5><strong style="color:#ffd034;"><?php echo $_LANG['why-content-text-2']; ?></h5></br><br>
                                </div>
                            </div>

                            <div class="col-5">
                                <div class="container_text"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" color="white" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                    </svg>
                                    <h4><?php echo $_LANG['why-content-title-3']; ?> </h4>
                                    <h5><?php echo $_LANG['why-content-text-3']; ?></h5></br><br>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="container_text"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" color="white" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                            <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                        </svg>
                                        <h4><?php echo $_LANG['why-content-title-4']; ?></h4>

                                    </div>
                                </div>
                                <div class="col">
                                    <div class="container_text"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" color="white" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                            <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                        </svg>
                                        <h4><?php echo $_LANG['why-content-title-5']; ?> </h4>
                                        <h5><?php echo $_LANG['why-content-text-5']; ?></h5></br><br>
                                    </div>
                                </div>
                                <div class="col-5" id="col-why-proff">
                                    <div class="container_text"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" color="white" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                            <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                        </svg>
                                        <h4><?php echo $_LANG['why-content-title-6']; ?> </h4>
                                        <h5><?php echo $_LANG['why-content-text-6']; ?></h5></br><br>
                                    </div>
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
                    <h1><?php echo $_LANG['why2-title']; ?> </h1>
                </div>
                <div class="container_worktype_cards">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <img src="/clients-img/220px-Olainfarm_logo.svg.png" alt="Cinque Terre" width="140" height="70">
                            </div>
                            <div class="col">
                                <img src="/clients-img/img_58b031a30d2071.63580347.jpg.webp" alt="Cinque Terre" width="340" height="80">
                            </div>
                            <div class="col">
                                <img src="/clients-img/img_59688d076fd319.67987052.png.webp" alt="Cinque Terre" width="120" height="40">
                            </div>
                            <div class="col">
                                <img src="/clients-img/kuber-logo.png" alt="Cinque Terre" width="140" height="70">
                            </div>
                        </div>
                        <div class="row" id="row_w90_ml50" >
                            <div class="col">
                                <img src="/clients-img/img_58afa85ff0fe80.91654338.png" alt="Cinque Terre" width="300" height="110">
                            </div>
                            <div class="col">
                                <img src="/clients-img/logo@2x_54e2d.png" alt="Cinque Terre" width="200" height="130">
                            </div>
                            <div class="col">
                                <img src="/clients-img/torensberg-logo-5e582921a2092-large.jpg" alt="Cinque Terre" width="210" height="100">
                            </div>
                        </div>
                        <div class="row " id="card_mb30">
                            <div class="col">
                                <img src="/clients-img/rs_logo_300_0.jpg" alt="Cinque Terre" width="300" height="90">
                            </div>
                            <div class="col">
                                <img src="/clients-img/700x700_civinity_thumbnail.png" alt="Cinque Terre" width="200" height="70">
                            </div>
                            <div class="col">
                                <img src="/clients-img/Снимок экрана 2021-11-02 в 00.05.09.png" alt="Cinque Terre" width="140" height="70">
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
                    <h1><?php echo $_LANG['questions-title']; ?></h1>
                    <h2 style="color:black"><?php echo $_LANG['questions-subtitle']; ?></h2>
                </div>
                <div class="container_worktype_cards row row-cols-1 row-cols-md-2 g-4">

                    <div class="col">
                        <div class="card qest-card" style="width: 36rem; height: auto;">
                            <div class="card-head qest">
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" color="#FFCE34" fill="currentColor" class="bi bi-check-circle " viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                </svg>
                                <h5 class="card-title"><?php echo $_LANG['questions-question-1']; ?></h5>
                            </div>

                            <p class="card-text qest"><?php echo $_LANG['questions-answer-1']; ?></p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card qest-card" style="width: 36rem; height: auto;">
                            <div class="card-head qest">
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" color="#FFCE34" fill="currentColor" class="bi bi-check-circle " viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                </svg>
                                <h5 class="card-title"><?php echo $_LANG['questions-question-2']; ?></h5>
                            </div>

                            <p class="card-text qest"><?php echo $_LANG['questions-answer-2']; ?></p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card qest-card" style="width: 36rem; height: auto;">
                            <div class="card-head qest">
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" color="#FFCE34" fill="currentColor" class="bi bi-check-circle " viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                </svg>
                                <h5 class="card-title"><?php echo $_LANG['questions-question-3']; ?></h5>
                            </div>

                            <p class="card-text qest"><?php echo $_LANG['questions-answer-3']; ?></p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card qest-card" style="width: 36rem; height: auto;">
                            <div class="card-head qest">
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" color="#FFCE34" fill="currentColor" class="bi bi-check-circle " viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                </svg>
                                <h5 class="card-title"><?php echo $_LANG['questions-question-4']; ?></h5>
                            </div>

                            <p class="card-text qest"><?php echo $_LANG['questions-answer-4']; ?></p>
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
                            <h2 style="color:black"><?php echo $_LANG['offer-title']; ?></h2>
                            <br>
                            <div class="mb-3">

                                <input type="text" class="form-control" placeholder="<?php echo $_LANG['form-name']; ?>" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <input type="tel" class="form-control" required placeholder="<?php echo $_LANG['form-tel']; ?>" name="phone" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <input type="mail" class="form-control" placeholder="Е-mail" name="mail" id="exampleInputPassword1">
                                <input type="hidden" name="form" value="request">
                            </div>
                            <button type="submit" class="btn btn-secondary" style=" background-color: #353333; border-color: #353333;;"><?php echo $_LANG['form-submit']; ?></button>
                    </form>
                </div>


            </div>
        </section>
    </div>
    <!---section objects--->
    <section id="section_objects">
        <div class="container">
            <div class="worktype_text">
                <h1><?php echo $_LANG['objects-title']; ?></h1>
                <h2 style="color:black"><?php echo $_LANG['objects-subtitle']; ?></h2>
            </div>

            <div class="container">

               

               
                <p class="row">
		<a class="col" rel="example_group" href="gallery-img/v_-10.jpg" title=""><img alt="" src="gallery-img/v_-10.jpg" width="290" height="200" tabindex="0"/></a>

		<a class="col" rel="example_group" href="/gallery-img/v_-11.jpg" title=""><img alt="" src="/gallery-img/v_-11.jpg" width="290" height="200" tabindex="0" /></a>

		<a class="col" rel="example_group" href="/gallery-img/v_-12.jpg" title=""><img alt="" src="/gallery-img/v_-12.jpg" width="290" height="200" tabindex="0" /></a>
		
		<a class="col" rel="example_group" href="/gallery-img/v_-14.jpg" title=""><img class="last" alt="" src="/gallery-img/v_-14.jpg" width="290" height="200" tabindex="0" /></a>
	</p>

            
                <p class="row">
		<a class="col" rel="example_group" href="gallery-img/v_-15.jpg" title=""><img alt="" src="gallery-img/v_-15.jpg" width="290" height="200" tabindex="0"/></a>

		<a class="col" rel="example_group" href="/gallery-img/v_-16.jpg" title=""><img alt="" src="/gallery-img/v_-16.jpg" width="290" height="200" tabindex="0" /></a>

		<a class="col" rel="example_group" href="/gallery-img/v_-8.jpg" title=""><img alt="" src="/gallery-img/v_-8.jpg" width="290" height="200" tabindex="0" /></a>
		
		<a class="col" rel="example_group" href="/gallery-img/v_-18.jpg" title=""><img class="last" alt="" src="/gallery-img/v_-18.jpg" width="290" height="200" tabindex="0" /></a>
	</p>
                
		
    <p class="row">
		<a class="col" rel="example_group" href="gallery-img/v_-19.jpg" title="" ><img alt="" src="gallery-img/v_-19.jpg" width="290" height="200" tabindex="0"/></a>

		<a class="col" rel="example_group" href="/gallery-img/v_-2.jpg" title=""><img alt="" src="/gallery-img/v_-2.jpg" width="290" height="200" tabindex="0" /></a>

		<a class="col" rel="example_group" href="/gallery-img/v_-20.jpg" title=""><img alt="" src="/gallery-img/v_-20.jpg" width="290" height="200" tabindex="0" /></a>
		
		<a class="col" rel="example_group" href="/gallery-img/v_-21.jpg" title=""><img class="last" alt="" src="/gallery-img/v_-21.jpg" width="290" height="200" tabindex="0" /></a>
	</p>

                <p class="row">
		<a class="col gallary-img" rel="example_group" href="gallery-img/v_-22.jpg" title=""><img alt="" src="gallery-img/v_-22.jpg" width="290" height="200" tabindex="0"/></a>

		<a class="col gallary-img" rel="example_group" href="/gallery-img/v_-23.jpg" title=""><img alt="" src="/gallery-img/v_-23.jpg" width="290" height="200" tabindex="0" /></a>

		<a class="col gallary-img" rel="example_group" href="/gallery-img/v_-3.jpg" title=""><img alt="" src="/gallery-img/v_-3.jpg" width="290" height="200" tabindex="0" /></a>
		
		<a class="col gallary-img" rel="example_group" href="/gallery-img/v_-4.jpg" title=""><img class="last" alt="" src="/gallery-img/v_-4.jpg" width="290" height="200" tabindex="0" /></a>
	</p>
    
               
                
                <p class="row">
		<a class="col gallary-img" rel="example_group" href="gallery-img/v_-5.jpg" title=""><img alt="" src="gallery-img/v_-5.jpg" width="290" height="200" tabindex="0"/></a>

		<a class="col gallary-img" rel="example_group" href="/gallery-img/v_-6.jpg" title=""><img alt="" src="/gallery-img/v_-6.jpg" width="290" height="200" tabindex="0" /></a>

		<a class="col gallary-img" rel="example_group" href="/gallery-img/v_-7.jpg" title=""><img alt="" src="/gallery-img/v_-7.jpg" width="290" height="200" tabindex="0" /></a>
		
		<a class="col gallary-img" rel="example_group" href="/gallery-img/v_-24.jpg" title=""><img class="last" alt="" src="/gallery-img/v_-24.jpg" width="290" height="200" tabindex="0" /></a>
	</p>




            </div>
    </section>


    </div>
    <div class="parallax">
        <section id="section_career">
            <div class="container">
                <div class="worktype_text">
                    <h1><?php echo $_LANG['career-title']; ?></h1> 
                    <h2 style="color:black"> <?php echo $_LANG['career-subtitle']; ?></h2>
                </div>
                <div class="container">
                    <h5 class="career-discription" style="color:black">
                    <?php echo $_LANG['career-text'];?>
                    </h5>
                    <div class="offer-input">
                        <form action="form-handler.php"  method="POST">

                            <div class="mb-3">

                                <input type="text" class="form-control career-input" placeholder="<?php echo $_LANG['form-name']; ?>" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <input type="tel" class="form-control career-input" required placeholder="<?php echo $_LANG['form-tel']; ?>" name="phone" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <input type="mail" class="form-control career-input" placeholder="Е-mail" name="mail" id="exampleInputPassword1">
                                <input type="hidden" name="form" value="career">
                            </div>
                            <div class="mb-3">
                                <textarea type="text" class="form-control" required placeholder="<?php echo $_LANG['form-description']; ?>" name="description" id="career_description"></textarea>
                            </div>
                            <button type="submit" class="btn btn-secondary" style=" background-color: #353333; border-color: #353333;;"><?php echo $_LANG['form-submit']; ?></button>
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
                    <h1 style="color:white"><?php echo $_LANG['contacts-title']; ?></h1>
                </div>
                <div class="container">
                    <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2176.471257164596!2d24.154346316105084!3d56.94072690721367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTbCsDU2JzI2LjYiTiAyNMKwMDknMjMuNSJF!5e0!3m2!1sru!2slv!4v1635703621841!5m2!1sru!2slv" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
                    <div class="contacts-info" style="color:white">
                        <div class="contact">
                            <h4><?php echo $_LANG['contacts-tel']; ?>:</h4>
                            <h6>+37129579997</h6>
                        </div>
                        <div class="contact">
                            <h4>E-mail:</h4>
                            <h6>info.indalplv@gmail.com</h6>
                        </div>
                        <div class="contact">
                            <h4><?php echo $_LANG['contacts-address']; ?>:</h4>
                            <h6>
                                Lauvas iela 6
                                Latgales priekšpilsēta, Rīga, LV-1003 </h6>
                        </div>
                        <br>
                        <div class="contact">
                            <h3 style=" color: #ffd034e5;"><?php echo $_LANG['contacts-form-title']; ?></h3>
                        </div>
                        <div class="offer-input" style="width: 200px;">
                            <form action="form-handler.php"  method="POST">

                                <div class="mb-3">

                                    <input type="text" class="form-control career-input" placeholder="<?php echo $_LANG['form-name']; ?>" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <input type="tel" class="form-control career-input" required placeholder="<?php echo $_LANG['form-tel']; ?>" name="phone" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <input type="mail" class="form-control career-input" placeholder="Е-mail" name="mail" id="exampleInputPassword1">
                                    <input type="hidden" name="form" value="kontact">
                                </div>
                                <div class="mb-3">
                                    <textarea type="text" class="form-control" required placeholder="<?php echo $_LANG['form-description']; ?>" name="description" id="career_description"></textarea>
                                </div>
                                <button type="submit" class="btn btn-secondary" style=" color: black; background-color: #ffd034e5; border-color: #353333;;"><?php echo $_LANG['form-submit']; ?></button>
                            </form>
                        </div>
                    </div>


                </div>
        </section>
    </div>
    </div>

</body>



</html>