<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<title>Smart Solution</title>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">

<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->
<!---->
<!--    <link rel="stylesheet" href="css/font-awesome.min.css">-->
<!---->
<!--    <link rel="stylesheet" href="css/style.css">-->
<!---->
<!---->
<!---->
<!--    <script src="js/jquery-3.1.0.min.js" defer></script>-->
<!---->
<!--    <script src="js/bootstrap.js" defer></script>-->
<!---->
<!--    <script src="js/menumobile.js" defer></script>-->

    <?php wp_head(); ?>
</head>



<header class="header">

    <div class="logo"><a href="/">

            <img class="img_logo" src="<?php bloginfo('template_url'); ?>/images/logo_smartsolution.svg" alt="Логотип компании Smart Solution"></a>

    </div>

    <nav class="header_nav">

        <ul class="nav nav-pills header_nav_menu">

            <li><a href="index_security.html">Категории</a>

            <li><a href="#">Доставка и оплата</a>

            <li><a href="#">О магазине</a>

        </ul>

    </nav>

    <div class="currency">

        <ul class="nav nav-pills menu_currency">

            <li><a href="#">&#36;</a>

            <li><a href="#">&euro;</a>

            <li><a href="#">&#8372;</a>

        </ul>

    </div>

    <div class="user_corner">

        <div class="wr_search_tel">

            <form class="search"><input type="text"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></form>

            <div class="wr_tel_menu">

                <div class="tel">

                    <a href="tel:+380444567898">044 456-78-98</a>

                    <a href="tel:+380506785687">050 678-56-87</a>

                </div>

                <div class="menu_mobile"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></div>

            </div>

        </div>

        <div class="wr_cart_feedback">

            <div class="cart">

                <i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i>

                <p><span>0</span> товаров</p>

            </div>

            <div class="feedback">

                <i class="fa fa-phone fa-2x" aria-hidden="true"></i>

                <p>Обратный звонок</p>

            </div>

        </div>

    </div>

</header>



<div class="wr_slide col-xs-12">

    <div id="carousel-generic" class="col-xs-12 text-center

		 carousel slide" data-ride="carousel">

        <!-- Indicators -->

        <ol class="carousel-indicators">

            <li data-target="#carousel-generic" data-slide-to="0" class="active"></li>

            <li data-target="#carousel-generic" data-slide-to="1"></li>

        </ol>



        <!-- Wrapper for slides -->

        <div class="carousel-inner" role="listbox">

            <div class="item active">

                <img class="center-block" src="<?php bloginfo('template_url'); ?>/images/slide1.jpg" alt="Слайд1">

                <div class="center-block carousel-caption">

                    <p><a href="#" title="Узнать больше о предложении">Узнать больше</a></p>

                </div>

            </div>

            <div class="item">

                <img class="center-block" src="<?php bloginfo('template_url'); ?>/images/slide2.jpg" alt="Слайд2">

                <div class="center-block carousel-caption">

                    <p><a href="#" title="Узнать больше о предложении">Узнать больше</a></p>

                </div>

            </div>

        </div>

    </div>

</div>



<div class="wr_section_1">

    <section class="clearfix section_1">

        <h2 class="col-xs-12">Комфорт</h2>

        <ul class="col-xs-8 col-xs-offset-2 nav nav-pills">

            <li class="col-xs-12 col-sm-4"><a href="#">Подкатегория 1</a></li>

            <li class="col-xs-12 col-sm-4"><a href="#">Подкатегория 2</a></li>

            <li class="col-xs-12 col-sm-4"><a href="#">Подкатегория 3</a></li>

        </ul>

        <p class="col-xs-12">Краткое описание категории: Согласно Венинг-Мейенсу, цвет сменяет недонасыщенный соленосный артезианский бассейн, делая этот типологический таксон районирования носителем . Ниже несколько товаров</p>



        <div class="col-xs-12 wr_card_products">

            <div class="card_product">

                <img src="<?php bloginfo('template_url'); ?>/images/product1.png" alt="товар1">

                <h3>Название товара</h3>

                <p>150&#8372;</p>

            </div>

            <div class="card_product">

                <img src="<?php bloginfo('template_url'); ?>/images/product1.png" alt="товар1">

                <h3>Название товара</h3>

                <p>150&#8372;</p>

            </div>

            <div class="card_product">

                <img src="<?php bloginfo('template_url'); ?>/images/product1.png" alt="товар1">

                <h3>Название товара</h3>

                <p>150&#8372;</p>

            </div>

            <div class="card_product">

                <img src="<?php bloginfo('template_url'); ?>/images/product1.png" alt="товар1">

                <h3>Название товара</h3>

                <p>150&#8372;</p>

            </div>

        </div>

    </section>

    <section class="clearfix section_1">

        <h2 class="col-xs-12">Безопасность</h2>

        <ul class="col-xs-8 col-xs-offset-2 nav nav-pills">

            <li class="col-xs-12 col-sm-4"><a href="#">Подкатегория 1</a></li>

            <li class="col-xs-12 col-sm-4"><a href="#">Подкатегория 2</a></li>

            <li class="col-xs-12 col-sm-4"><a href="#">Подкатегория 3</a></li>

        </ul>

        <p class="col-xs-12">Краткое описание категории: Согласно Венинг-Мейенсу, цвет сменяет недонасыщенный соленосный артезианский бассейн, делая этот типологический таксон районирования носителем . Ниже несколько товаров</p>



        <div class="col-xs-12 wr_card_products">

            <div class="card_product">

                <img src="<?php bloginfo('template_url'); ?>/images/product1.png" alt="товар1">

                <h3>Название товара</h3>

                <p>150&#8372;</p>

            </div>

            <div class="card_product">

                <img src="<?php bloginfo('template_url'); ?>/images/product1.png" alt="товар1">

                <h3>Название товара</h3>

                <p>150&#8372;</p>

            </div>

            <div class="card_product">

                <img src="<?php bloginfo('template_url'); ?>/images/product1.png" alt="товар1">

                <h3>Название товара</h3>

                <p>150&#8372;</p>

            </div>

            <div class="card_product">

                <img src="<?php bloginfo('template_url'); ?>/images/product1.png" alt="товар1">

                <h3>Название товара</h3>

                <p>150&#8372;</p>

            </div>

        </div>

    </section>

    <section class="clearfix section_1">

        <h2 class="col-xs-12">Мультимедиа</h2>

        <ul class="col-xs-8 col-xs-offset-2 nav nav-pills">

            <li class="col-xs-12 col-sm-4"><a href="#">Подкатегория 1</a></li>

            <li class="col-xs-12 col-sm-4"><a href="#">Подкатегория 2</a></li>

            <li class="col-xs-12 col-sm-4"><a href="#">Подкатегория 3</a></li>

        </ul>

        <p class="col-xs-12">Краткое описание категории: Согласно Венинг-Мейенсу, цвет сменяет недонасыщенный соленосный артезианский бассейн, делая этот типологический таксон районирования носителем . Ниже несколько товаров</p>



        <div class="col-xs-12 wr_card_products">

            <div class="card_product">

                <img src="<?php bloginfo('template_url'); ?>/images/product1.png" alt="товар1">

                <h3>Название товара</h3>

                <p>150&#8372;</p>

            </div>

            <div class="card_product">

                <img src="<?php bloginfo('template_url'); ?>/images/product1.png" alt="товар1">

                <h3>Название товара</h3>

                <p>150&#8372;</p>

            </div>

            <div class="card_product">

                <img src="<?php bloginfo('template_url'); ?>/images/product1.png" alt="товар1">

                <h3>Название товара</h3>

                <p>150&#8372;</p>

            </div>

            <div class="card_product">

                <img src="<?php bloginfo('template_url'); ?>/images/product1.png" alt="товар1">

                <h3>Название товара</h3>

                <p>150&#8372;</p>

            </div>

        </div>

    </section>

    <section class="clearfix section_1">

        <h2 class="col-xs-12">Эффективность</h2>

        <ul class="col-xs-8 col-xs-offset-2 nav nav-pills">

            <li class="col-xs-12 col-sm-4"><a href="#">Подкатегория 1</a></li>

            <li class="col-xs-12 col-sm-4"><a href="#">Подкатегория 2</a></li>

            <li class="col-xs-12 col-sm-4"><a href="#">Подкатегория 3</a></li>

        </ul>

        <p class="col-xs-12">Краткое описание категории: Согласно Венинг-Мейенсу, цвет сменяет недонасыщенный соленосный артезианский бассейн, делая этот типологический таксон районирования носителем . Ниже несколько товаров</p>



        <div class="col-xs-12 wr_card_products">

            <div class="card_product">

                <img src="<?php bloginfo('template_url'); ?>/images/product1.png" alt="товар1">

                <h3>Название товара</h3>

                <p>150&#8372;</p>

            </div>

            <div class="card_product">

                <img src="<?php bloginfo('template_url'); ?>/images/product1.png" alt="товар1">

                <h3>Название товара</h3>

                <p>150&#8372;</p>

            </div>

            <div class="card_product">

                <img src="<?php bloginfo('template_url'); ?>/images/product1.png" alt="товар1">

                <h3>Название товара</h3>

                <p>150&#8372;</p>

            </div>

            <div class="card_product">

                <img src="<?php bloginfo('template_url'); ?>/images/product1.png" alt="товар1">

                <h3>Название товара</h3>

                <p>150&#8372;</p>

            </div>

        </div>

    </section>

</div>



<section class="col-xs-12 section_2">

    <div class="col-xs-4 col-sm-2 head_popular_products">

        <h2>Must Have</h2>

        <p>Cамые популярные товары на нашем сайте.</p>

    </div>

    <div class="col-xs-8 col-sm-10 popular_products wr_card_products">

        <div class="card_product">

            <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/product2.gif" alt="товар1">

            <h3>Название товара</h3>

            <p>150&#8372;</p>

        </div>

        <div class="card_product">

            <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/product2.gif" alt="товар1">

            <h3>Название товара</h3>

            <p>150&#8372;</p>

        </div>

        <div class="card_product">

            <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/product2.gif" alt="товар1">

            <h3>Название товара</h3>

            <p>150&#8372;</p>

        </div>

        <div class="card_product">

            <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/product2.gif" alt="товар1">

            <h3>Название товара</h3>

            <p>150&#8372;</p>

        </div>

    </div>

</section>

<section class="col-xs-12 section_2">

    <div class="col-xs-4 col-sm-2 head_popular_products">

        <h2>Идеи для подарка</h2>

        <p>Подборка товаров, которым будут рады в любом доме.</p>

    </div>

    <div class="col-xs-8 col-sm-10 popular_products wr_card_products">

        <div class="card_product">

            <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/product2.gif" alt="товар1">

            <h3>Название товара</h3>

            <p>150&#8372;</p>

        </div>

        <div class="card_product">

            <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/product2.gif" alt="товар1">

            <h3>Название товара</h3>

            <p>150&#8372;</p>

        </div>

        <div class="card_product">

            <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/product2.gif" alt="товар1">

            <h3>Название товара</h3>

            <p>150&#8372;</p>

        </div>

        <div class="card_product">

            <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/product2.gif" alt="товар1">

            <h3>Название товара</h3>

            <p>150&#8372;</p>

        </div>

    </div>

</section>

<section class="col-xs-12 section_2">

    <div class="col-xs-4 col-sm-2 head_popular_products">

        <h2>Новые товары</h2>

        <p>Новые поступления. Самые свежие новинки.</p>

    </div>

    <div class="col-xs-8 col-sm-10 popular_products wr_card_products">

        <div class="card_product">

            <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/product2.gif" alt="товар1">

            <h3>Название товара</h3>

            <p>150&#8372;</p>

        </div>

        <div class="card_product">

            <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/product2.gif" alt="товар1">

            <h3>Название товара</h3>

            <p>150&#8372;</p>

        </div>

        <div class="card_product">

            <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/product2.gif" alt="товар1">

            <h3>Название товара</h3>

            <p>150&#8372;</p>

        </div>

        <div class="card_product">

            <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/product2.gif" alt="товар1">

            <h3>Название товара</h3>

            <p>150&#8372;</p>

        </div>

    </div>

</section>





<div class="col-xs-12 wr_footer">

    <div class="logo_footer col-xs-12">

        <img class="center-block img_logo_footer" src="<?php bloginfo('template_url'); ?>/images/logo_smartsolution_footer.svg" alt="Логотип компании Smart Solution">

    </div>

    <footer class="footer">

        <div class="wr_nav1">

            <ul class="nav nav-pills nav-stacked">

                <li>

                    <a href="#"><span class="icon-hs-facebook"></span></a>

                </li>

                <li><a href="#">Доставка и оплата</a></li>

                <li><a href="#">Гарантийные обязательства</a></li>

            </ul>

        </div>

        <div class="wr_nav2">

            <ul class="nav nav-pills nav-stacked">

                <li><a href="http://homesystems.com.ua/umnyj-dom/komfort/" target="_blank">Комфорт</a></li>

                <li><a href="http://homesystems.com.ua/umnyj-dom/razvlecheniya/" target="_blank">Мультимедиа</a></li>

                <li><a href="http://homesystems.com.ua/umnyj-dom/bezopasnost/" target="_blank">Безопасность</a></li>

                <li><a href="http://homesystems.com.ua/umnyj-dom/energoeffektivnost/" target="_blank">Эффективность</a></li>

            </ul>

        </div>

        <address class="wr_nav3">

            <ul class="nav">

                <li>Наш адрес: <a href="#">Киев, ул. Уличная, 25</a></li>

                <li>Телефон: <a href="tel:+380444567898">456-78-98</a></li>

                <li><a href="tel:+380506785687">050 678-56-87</a></li>

            </ul>

        </address>

    </footer>

</div>

</html>

