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
    <script type="text/javascript" src="libs/jQuery-slimScroll-1.3.8/jQuery-slimScroll-1.3.8/jquery.slimscroll.min.js"></script>
    <link rel="stylesheet" href="app/css/main-691ba323ef.css">
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
        $(function(){
            $('.content_desc').slimScroll({
                height: '450px'
            });
        });
    </script>
    <script src="app/libs/jquery.bxslider/jquery.bxslider.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.bx_slider').bxSlider({
                mode: 'fade',           // тип перехода между слайдами может быть 'horizontal', 'vertical', 'fade'
                captions: true,         // отображение title
                easing: 'easeInOutQuad', // анимация слайда
                controls: false,         // отображение стрелки - вперед, назад
                startSlide: 0,          // Показ начнется с заданного слайда
                infiniteLoop: true,     // показывать первый слайд за последним
                auto: true,
                responsive: true,  // сделать автоматический переход
                pager: true,
                pause: 4000,            // время между сменой слайдов в м-сек
                speed: 500,          // длительность перехода слайда в м-сек
                useCSS: true           // CSS переходы
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
                <div class="before_content">
                    <div class="pr_header">
                        <h2>Сегодня КЕТРА это:</h2>
                    </div>
                    <div class="slider_area">
                        <ul class="bx_slider">
                            <li>
                                <div class="info">
                                    <div class="inf_header">
                                        <h3>Тепло и звукоизоляция</h3>
                                    </div>
                                    <div class="inf_body">
                                        <p class="sp_adv">Возведение стен без использования дополнительных утепляющих
                                            материалов</p>
                                        <p class="sp_adv">Экономия отопления</p>
                                        <p class="sp_adv">Исключение расходов на звукоизоляцию помещения</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <div class="inf_header">
                                        <h3>Высокая скорость строительства</h3>
                                    </div>
                                    <div class="inf_body">
                                        <p class="sp_adv">Однорядная кладка, в которой длина камня соотвествует толщине
                                            стены</p>
                                        <p class="sp_adv">Скорость кладки 1м2 стены из блоков в 10 раз быстрее, чем из
                                            малоформатного кирпича</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <div class="inf_header">
                                        <h3>Экологичность</h3>
                                    </div>
                                    <div class="inf_body">
                                        <p class="sp_adv">Основной материал - глина</p>
                                        <p class="sp_adv">Не содержит вредных примесей</p>
                                        <p class="sp_adv">Идеальный влаго- и теплообмен. Ваши стены "дышат"</p>
                                        <p class="sp_adv">Предотвращение образования плесени и грибков</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <div class="inf_header">
                                        <h3>Экономия ресурсов</h3>
                                    </div>
                                    <div class="inf_body">
                                        <p class="sp_adv">Сокращение расхода раствора за счет отсутсвия швов</p>
                                        <p class="sp_adv">Уменьшение использования рабочей силы</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="product_content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="product_wrapp">
                            <div class="img_top">
                                <img src="app/img/product_img/1450870562_ketra-blok-38-2.jpg" alt="ketra_38" class="img_preview">
                            </div>
                            <div class="desc">
                                <h3 class="title">КЕТРА 55</h3>
                                <p class="price">0.00 руб/ шт</p>
                            </div>
                            <div class="hover_wrapp">
                                <p class="look">описание</p>
                                <div class="font_wr">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="b_bg">
                            <div class="big_desc">
                                <i class="fa fa-times fa_times" aria-hidden="true"></i>
                                <div class="bg_call">Заказть звонок</div>
                                <div class="desc_head">
                                    <div class="desc_title">
                                        <h3>КЕТРА 55</h3>
                                    </div>
                                </div>
                                <div class="content_desc">
                                    <div class="col-md-4">
                                        <div class="main_desc">
                                            <div class="main_desc_h">Основные характеристики</div>
                                            <div class="main_content">
                                                <div class="item_content">
                                                    <p class="sp_l">Применение</p>
                                                    <p class="sp_r">Стеновой</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Цвет</p>
                                                    <p class="sp_r">Красный</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Размер (Тип)</p>
                                                    <p class="sp_r">10.7 NF</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Пустотность</p>
                                                    <p class="sp_r">52,5%</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Поверхность</p>
                                                    <p class="sp_r">Гладкая</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Фаска</p>
                                                    <p class="sp_r">Нет</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Марка прочности</p>
                                                    <p class="sp_r">М-100</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">ГОСТ</p>
                                                    <p class="sp_r">530-2012</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Морозостойкость</p>
                                                    <p class="sp_r">F50 Циклов</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Теплопроводность</p>
                                                    <p class="sp_r">0,11 Вт/м°С</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Влагопоглощение</p>
                                                    <p class="sp_r">20</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Вес</p>
                                                    <p class="sp_r">15,1 кг</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="main_sizes">
                                            <div class="sizes_h">Размеры</div>
                                            <div class="sizes_content">
                                                <div class="item_size">
                                                    <p class="p_l">Длина</p>
                                                    <p class="pr">380</p>
                                                </div>
                                                <div class="item_size">
                                                    <p class="p_l">Ширина</p>
                                                    <p class="pr">250</p>
                                                </div>
                                                <div class="item_size">
                                                    <p class="p_l">Высота</p>
                                                    <p class="pr">219</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="transporting">
                                            <div class="trans_h">Транспортировка</div>
                                            <div class="trans_content">
                                                <div class="item_trans">
                                                    <p class="p_l">Упаковка</p>
                                                    <p class="p_r">термопленка</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Поддоны</p>
                                                    <p class="p_r">Невозвращаемые</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Кол-во на поддоне</p>
                                                    <p class="p_r">60шт</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Количество в 1 м2</p>
                                                    <p class="p_r">17.3</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Количество в 1 м3</p>
                                                    <p class="p_r">45.8</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Норма загрузки шт. а/м 20 тонн.</p>
                                                    <p class="p_r">1320</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="phone">
                                    <div class="modal_forms">
                                        <div class="err_block">
                                            Не все поля заполнены!
                                        </div>
                                        <div class="modal_confirm">
                                            Спасибо!
                                        </div>
                                        <form action="" method="post" id="my_form">
                                            <div class="form_line">
                                                <input type="text" name="name" class="form_style" id="name" placeholder="Ваше имя">
                                            </div>
                                            <div class="form_line">
                                                <input type="text" name="s_name" class="form_style" id="s_name" placeholder="Телефон">
                                            </div>
                                            <button type="submit" name="enter" class="btn_modal">Заказать звонок</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product_wrapp">
                            <div class="img_top">
                                <img src="app/img/product_img/1450870562_ketra-blok-38-2.jpg" alt="ketra_38" class="img_preview">
                            </div>
                            <div class="desc">
                                <h3 class="title">КЕТРА 55</h3>
                                <p class="price">0.00 руб/ шт</p>
                            </div>
                            <div class="hover_wrapp">
                                <p class="look">описание</p>
                                <div class="font_wr">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="b_bg">
                            <div class="big_desc">
                                <i class="fa fa-times fa_times" aria-hidden="true"></i>
                                <div class="bg_call">Заказть звонок</div>
                                <div class="desc_head">
                                    <div class="desc_title">
                                        <h3>КЕТРА 55</h3>
                                    </div>
                                </div>
                                <div class="content_desc">
                                    <div class="col-md-4">
                                        <div class="main_desc">
                                            <div class="main_desc_h">Основные характеристики</div>
                                            <div class="main_content">
                                                <div class="item_content">
                                                    <p class="sp_l">Применение</p>
                                                    <p class="sp_r">Стеновой</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Цвет</p>
                                                    <p class="sp_r">Красный</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Размер (Тип)</p>
                                                    <p class="sp_r">10.7 NF</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Пустотность</p>
                                                    <p class="sp_r">52,5%</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Поверхность</p>
                                                    <p class="sp_r">Гладкая</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Фаска</p>
                                                    <p class="sp_r">Нет</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Марка прочности</p>
                                                    <p class="sp_r">М-100</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">ГОСТ</p>
                                                    <p class="sp_r">530-2012</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Морозостойкость</p>
                                                    <p class="sp_r">F50 Циклов</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Теплопроводность</p>
                                                    <p class="sp_r">0,11 Вт/м°С</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Влагопоглощение</p>
                                                    <p class="sp_r">20</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Вес</p>
                                                    <p class="sp_r">15,1 кг</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="main_sizes">
                                            <div class="sizes_h">Размеры</div>
                                            <div class="sizes_content">
                                                <div class="item_size">
                                                    <p class="p_l">Длина</p>
                                                    <p class="pr">380</p>
                                                </div>
                                                <div class="item_size">
                                                    <p class="p_l">Ширина</p>
                                                    <p class="pr">250</p>
                                                </div>
                                                <div class="item_size">
                                                    <p class="p_l">Высота</p>
                                                    <p class="pr">219</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="transporting">
                                            <div class="trans_h">Транспортировка</div>
                                            <div class="trans_content">
                                                <div class="item_trans">
                                                    <p class="p_l">Упаковка</p>
                                                    <p class="p_r">термопленка</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Поддоны</p>
                                                    <p class="p_r">Невозвращаемые</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Кол-во на поддоне</p>
                                                    <p class="p_r">60шт</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Количество в 1 м2</p>
                                                    <p class="p_r">17.3</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Количество в 1 м3</p>
                                                    <p class="p_r">45.8</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Норма загрузки шт. а/м 20 тонн.</p>
                                                    <p class="p_r">1320</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="phone">
                                    <div class="modal_forms">
                                        <div class="err_block">
                                            Не все поля заполнены!
                                        </div>
                                        <div class="modal_confirm">
                                            Спасибо!
                                        </div>
                                        <form action="" method="post" id="my_form">
                                            <div class="form_line">
                                                <input type="text" name="name" class="form_style" id="name" placeholder="Ваше имя">
                                            </div>
                                            <div class="form_line">
                                                <input type="text" name="s_name" class="form_style" id="s_name" placeholder="Телефон">
                                            </div>
                                            <button type="submit" name="enter" class="btn_modal">Заказать звонок</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product_wrapp">
                            <div class="img_top">
                                <img src="app/img/product_img/1450870562_ketra-blok-38-2.jpg" alt="ketra_38" class="img_preview">
                            </div>
                            <div class="desc">
                                <h3 class="title">КЕТРА 55</h3>
                                <p class="price">0.00 руб/ шт</p>
                            </div>
                            <div class="hover_wrapp">
                                <p class="look">описание</p>
                                <div class="font_wr">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="b_bg">
                            <div class="big_desc">
                                <i class="fa fa-times fa_times" aria-hidden="true"></i>
                                <div class="bg_call">Заказть звонок</div>
                                <div class="desc_head">
                                    <div class="desc_title">
                                        <h3>КЕТРА 55</h3>
                                    </div>
                                </div>
                                <div class="content_desc">
                                    <div class="col-md-4">
                                        <div class="main_desc">
                                            <div class="main_desc_h">Основные характеристики</div>
                                            <div class="main_content">
                                                <div class="item_content">
                                                    <p class="sp_l">Применение</p>
                                                    <p class="sp_r">Стеновой</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Цвет</p>
                                                    <p class="sp_r">Красный</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Размер (Тип)</p>
                                                    <p class="sp_r">10.7 NF</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Пустотность</p>
                                                    <p class="sp_r">52,5%</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Поверхность</p>
                                                    <p class="sp_r">Гладкая</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Фаска</p>
                                                    <p class="sp_r">Нет</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Марка прочности</p>
                                                    <p class="sp_r">М-100</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">ГОСТ</p>
                                                    <p class="sp_r">530-2012</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Морозостойкость</p>
                                                    <p class="sp_r">F50 Циклов</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Теплопроводность</p>
                                                    <p class="sp_r">0,11 Вт/м°С</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Влагопоглощение</p>
                                                    <p class="sp_r">20</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Вес</p>
                                                    <p class="sp_r">15,1 кг</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="main_sizes">
                                            <div class="sizes_h">Размеры</div>
                                            <div class="sizes_content">
                                                <div class="item_size">
                                                    <p class="p_l">Длина</p>
                                                    <p class="pr">380</p>
                                                </div>
                                                <div class="item_size">
                                                    <p class="p_l">Ширина</p>
                                                    <p class="pr">250</p>
                                                </div>
                                                <div class="item_size">
                                                    <p class="p_l">Высота</p>
                                                    <p class="pr">219</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="transporting">
                                            <div class="trans_h">Транспортировка</div>
                                            <div class="trans_content">
                                                <div class="item_trans">
                                                    <p class="p_l">Упаковка</p>
                                                    <p class="p_r">термопленка</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Поддоны</p>
                                                    <p class="p_r">Невозвращаемые</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Кол-во на поддоне</p>
                                                    <p class="p_r">60шт</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Количество в 1 м2</p>
                                                    <p class="p_r">17.3</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Количество в 1 м3</p>
                                                    <p class="p_r">45.8</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Норма загрузки шт. а/м 20 тонн.</p>
                                                    <p class="p_r">1320</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="phone">
                                    <div class="modal_forms">
                                        <div class="err_block">
                                            Не все поля заполнены!
                                        </div>
                                        <div class="modal_confirm">
                                            Спасибо!
                                        </div>
                                        <form action="" method="post" id="my_form">
                                            <div class="form_line">
                                                <input type="text" name="name" class="form_style" id="name" placeholder="Ваше имя">
                                            </div>
                                            <div class="form_line">
                                                <input type="text" name="s_name" class="form_style" id="s_name" placeholder="Телефон">
                                            </div>
                                            <button type="submit" name="enter" class="btn_modal">Заказать звонок</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="caption-section">
        <div class="container text-center">
            <h3>Остались
                <span>вопросы?</span>
            </h3>
            <p>Рассчитать стоимость доставки</p>
            <div class="link-btn">
                <a href="">order</a>
            </div>
        </div>
    </div>
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
