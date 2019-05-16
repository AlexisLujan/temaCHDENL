<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no,
   initial-scale=1.0 maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Oswald" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/estilos.css">
  <title>
    <?php if(is_home()){
      echo get_bloginfo('name');
    }elseif(is_single()){
      echo the_title();
    }else{
      echo get_bloginfo('name');
    } ?>
  </title>
  <?php
  wp_head();
   ?>
</head>
<body>
  <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.2"></script>


  <header>
    <div class="container">
      <div class="row">
        <div class="ml-auto">
          <div class="redes-sociales col-xs-12 col-sm-12 d-flex align-items-end">

            <a class="youtube" href="https://www.youtube.com/channel/UC4PXU59b8LpxWP6qix96kBg">
              <i class="fa fa-youtube"></i>
            </a>
            <a class="facebook" href="https://www.facebook.com/groups/1929621727324951/">
              <i class="fa fa-facebook-square"></i>
            </a>
            <a class="discord" href="#"><i class="fa fa-discord"></i></a>
          </div>
        </div>

      </div>



  <nav class="menu">
    <div class="container">
      <div class="row">
        <ul class="nav d-flex align-items-center">
          <li class="nav-item active">
            <div class="logo col-xs-12 col-sm-2 mt-0">
              <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/Logo2.png" style="width: 400px;" alt="Texto alternativo"></a>
            </div>
        </li>
        <!--
        <ul class="col-md-12">

          <li><a href="#">HTML</a></li>
          <li><a href="#">CSS</a></li>
          <li><a href="#">JS</a></li>
          <li><a href="#">JQuery</a></li>
          <li><a href="#">Photoshop</a></li>
          <li><a href="#">Git</a></li>
        </ul>
        -->
        <?php wp_nav_menu(array(
          'container'=> false,
          'menu_class' => '',
          'items_wrap' => '<ul class=" col-sm-10">%3$s</ul>',
          'theme_location' =>'menu-top'
        )); ?>
      </ul>
      </div>
    </div>
  </nav>


  <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Header')) : endif; ?>
  </div>
  </header>
