<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,800" rel="stylesheet" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/queries.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    


</head>
<body <?body_class(); ?>>
    <header>
        <nav class="row sticky">
            <div class="logo">
                <?php
                    if(function_exists('the_custom_logo')){
                            the_custom_logo();
                    }
                ?>
            </div>
            <a class="mobile-nav-icon js--nav-icon"><i class="fa fa-bars"></i></a>
               <?php wp_nav_menu(array(
                   'theme_location' => 'primary',
                   'container_class' => 'main-nav js--main-nav',
                   'container_id' => 'Main-nav',
                   'items_wrap' => '<ul id="Mobile-nav" class="main-nav js--main-nav">%3$s</ul>'
               )); ?>
        </nav>
    </header>