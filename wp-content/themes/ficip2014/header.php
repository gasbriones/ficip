<!DOCTYPE html>

<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->

<html class="no-js" lang="en" >



<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php wp_title(); ?></title>



  <!-- If you are using CSS version, only link these 2 files, you may add app.css to use for your overrides if you like. -->

  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css">

  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/foundation.css">

  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/responsiveslides.css">

  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">



  <!-- If you are using the gem version, you need this only -->



<?php wp_head(); ?>

  <script src="<?php bloginfo('template_url'); ?>/js/responsiveslides.js"></script>

  <script src="<?php bloginfo('template_url'); ?>/js/vendor/modernizr.js"></script>

  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.carouFredSel-6.2.1-packed.js"></script>

  <script src="<?php bloginfo('template_url'); ?>/js/jquery.jscroll.js"></script>



<body>





  <!-- body content here -->



  <header>

    <div class="row">

      <span id="superior-left" class="small-3 columns">

       Del 8 al 14 de Mayo del 2014

      </span>



      <ul class="small-1 columns  right redes">


          <li style="margin-right:0.5em;"><a href="https://www.facebook.com/ficip?fref=ts" title="Facebook FICiP" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/icono-fb.png" alt="Facebook" /></a></li>

          <li><a href="https://twitter.com/argentinaFICiP" title="Twitter FICiP" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/icono-tw.png" alt="Twitter" /></a></li>

        </ul>

       <nav id="superior-right" class="small-6 columns right small-offset-2">

          <?php wp_nav_menu( array('menu' => 'superior-right' )); ?>

      </nav>

    </div>

<div class="row encabezado">

    <div class="small-6 columns">

     <a  class="logo" href="<?php bloginfo('url'); ?>" title="FiCiP">

           <img src="<?php bloginfo('template_url'); ?>/images/logo.png" width="" height="" />

       </a>

    </div>

      <aside class="small-2 columns right">

                    <img src="<?php bloginfo('template_url'); ?>/images/4rta.png" width="" height="" />


      </aside>
 </div>


  </header>



