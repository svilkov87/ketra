<?php
include("include/connection.php");
## проверка ошибок
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>frontend-developer VSN</title>
    <meta name="description" content="cv" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="app/img/favicon_fd.ico"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
    <link rel="stylesheet" href="app/libs/font-awesome-4.2.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="app/css/bootstrap.min.css">
    <link rel="stylesheet" href="app/css/animate.css">
    <script src="app/libs/jquery/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="app/css/main-67f4d89639.css">
    <!--[if lt IE 9]-->
    <script src="app/libs/html5shiv/es5-shim.min.js"></script>
    <script src="app/libs/html5shiv/html5shiv.min.js"></script>
    <script src="app/libs/html5shiv/html5shiv-printshiv.min.js"></script>
    <script src="app/libs/respond/respond.min.js"></script>
    <!--[endif]-->
    <script src="app/libs/scrollto/jquery.scrollTo.min.js"></script>
    <script src="app/libs/main.js"></script>
    <script type="text/javascript" src="app/libs/wow.min.js"></script>
    <script type="text/javascript">
        new WOW().init();
    </script>
    <script src="app/libs/jquery.bxslider/jquery.bxslider.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.bxslider').bxSlider({
                mode: 'horizontal',
                captions: true,
                easing: 'easeInOutQuad',
                controls: false,
                startSlide: 0,
                infiniteLoop: true,
                auto: true,
                responsive: true,
                pager: false,
                pause: 4500,
                speed: 500,
                useCSS: true
            });
        });
    </script>
    <link href="app/libs/jquery.bxslider/jquery.bxslider.css" rel="stylesheet">
</head>
<body>
<div class="main">
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div id="object"></div>
            </div>
        </div>
    </div>
    <i class="fa fa-chevron-up" aria-hidden="true" id="top"></i>
    <header class="header">
        <nav class="navbar">
            <div class="container">
                <div class="row">
                    <div class="nav_left">
                        <a href="#" class="link_logo">
                            <img src="app/img/ketra_logo.png" alt="ketralogo">
                        </a>
                    </div>
                    <div class="nav_right">
                        <ul class="ul_right">
                            <li class="li_right"><a href="#main" class="active">Главная</a></li>
                            <li class="li_right"><a href="#products">Продукция</a></li>
                            <li class="li_right"><a href="#delivery">Доставка</a></li>
                            <li class="li_right"><a href="#actions">Акции</a></li>
                            <li class="li_right"><a href="#contacts">Контакты</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <section class="cv_sections" id="main">
        <div class="container">
            <div class="row">
                <div class="head_top">
                    <h1>Керамические блоки КЕТРА</h1>
                    <span class="span_ht">Высокий стандарт строительства</span>
                </div>
                <div class="button_go"></div>
            </div>
        </div>
    </section>
    <section class="cv_sections" id="products">
        <div class="container">
            <div class="row">
                <div class="pr_header">
                    <h2>Сегодня КЕТРА это:</h2>
                </div>
                <div class="col-md-8">
                    <div class="advantages">
                        <!--<div class="today_ketra">Сегодня блоки КЕТРА это:</div>-->
                        <ul class="ul_adv">
                            <li class="li_adv">
                                <h3>Тепло и звукоизоляция</h3>
                                <p class="sp_adv">Возведение стен без использования дополнительных утепляющих материалов</p>
                                <p class="sp_adv">Экономия отопления</p>
                                <p class="sp_adv">Исключение расходов на звукоизоляцию помещения</p>
                            </li>
                            <li class="li_adv">
                                <h3>Высокая скорость строительства</h3>
                                <p class="sp_adv">Однорядная кладка, в которой длина камня соотвествует толщине стены</p>
                                <p class="sp_adv">Скорость кладки 1м2 стены из блоков в 10 раз быстрее, чем из малоформатного кирпича</p>
                            </li>
                            <li class="li_adv">
                                <h3>Экологичность</h3>
                                <p class="sp_adv">Основной материал - глина</p>
                                <p class="sp_adv">Не содержит вредных примесей</p>
                                <p class="sp_adv">Идеальный влаго- и теплообмен. Ваши стены "дышат"</p>
                                <p class="sp_adv">Предотвращение образования плесени и грибков</p>
                            </li>
                            <li class="li_adv">
                                <h3>Экономия ресурсов</h3>
                                <p class="sp_adv">Сокращение расхода раствора за счет отсутсвия швов</p>
                                <p class="sp_adv">Уменьшение использования рабочей силы</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="order_block">
                        <div class="head_order">
                            <div class="h">Оформить заказ</div>
                            <span class="sp_desc_order">Пожалуйста, укажите Ваши контактные данные и мы Вам перезвоним.</span>
                        </div>
                        <form action="" name="order" class="main_form">
                            <label class="l_header">Ваше Имя *</label>
                            <input type="text" name="name" id="name" class="form_control">
                            <label class="l_header">Телефон *</label>
                            <input type="text" name="phone" id="phone" class="form_control">
                            <button class="b_order" type="submit">Заказть</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cv_sections" id="delivery">

    </section>
    <section class="hireme">

    </section>
    <section class="cv_sections" id="actions">

    </section>
    <section class="cv_sections" id="contacts">

    </section>
</div>
</body>
</html>
