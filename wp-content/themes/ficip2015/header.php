<!DOCTYPE html>

<!--[if IE 9]>
<html class="lt-ie10" lang="en"> <![endif]-->

<html class="no-js" lang="en">


<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php wp_title(); ?></title>


    <!-- If you are using CSS version, only link these 2 files, you may add app.css to use for your overrides if you like. -->

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css">

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/foundation.css">

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/responsiveslides.css">

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/jquery.bxslider.css">

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ficip-2015.css">


    <!-- If you are using the gem version, you need this only -->



    <?php wp_head(); ?>

    <script src="<?php bloginfo('template_url'); ?>/js/libs/jquery-2.1.3.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/libs/jquery.bxslider.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/init.js"></script>


<body <?php body_class( $class ); ?>>


<!-- body content here -->


<header>

    <div class="row">


        <!--

        <ul class="small-1 columns  right redes">
            <li>
                <a href="https://www.facebook.com/ficip?fref=ts" title="Facebook FICiP"  target="_blank">
                    <img src="<?php bloginfo('template_url'); ?>/images/icono-fb.png" alt="Facebook"/>
                </a>
            </li>

            <li>
                <a href="https://twitter.com/argentinaFICiP" title="Twitter FICiP" target="_blank">
                    <img src="<?php bloginfo('template_url'); ?>/images/icono-tw.png" alt="Twitter"/>
                </a>
            </li>
        </ul>
        -->


    </div>

    <div class="row encabezado">
        <div class="small-6 columns">
            <a class="logo" href="<?php bloginfo('url'); ?>" title="FiCiP">
                <img src="<?php bloginfo('template_url'); ?>/images/logo.png" width="" height=""/>
            </a>
        </div>
        <span class="ribbon">Próximo: Del 7 al 13 de Mayo de 2015</span>
        <nav class="menu clearfix">
            <?php wp_nav_menu(array('menu' => 'superior-right')); ?>
        </nav>

    </div>


</header>



