<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<meta charset="<?php bloginfo('charset'); ?>"/>
<head>
    <meta charset="UTF-8"/>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/favicon.png" type="image/x-icon">
    <title><?php
        global $page, $paged;


        // Add the blog name.
        bloginfo('name');

        // Add the blog description for the home/front page.
        $site_description = get_bloginfo('description', 'display');
        if ($site_description && (is_home() || is_front_page()))
            echo " | $site_description";

        // Add a page number if necessary:
        if (($paged >= 2 || $page >= 2) && !is_404())
            echo esc_html(' | ' . sprintf(__('Page %s', 'twentyten'), max($paged, $page)));

        ?></title>
    <link rel="canonical" href="index.html"/>
    <meta property="og:locale" content="es_MX"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="<?php echo bloginfo('name'); ?>"/>
    <meta property="og:url" content="index.html"/>
    <meta property="og:site_name" content="<?php echo bloginfo('name'); ?>"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:title" content="<?php echo bloginfo('name'); ?>"/>

    <link rel="stylesheet" href="wp-content/cache/min/1/674d16f16a96df82ef7e4da840d2d38e.css" data-minify="1"/>
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css"
          href="//fonts.googleapis.com/css?family=PT+Sans:300,400,500,700%7CRoboto:700">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/style.css">
    <!--[if lt IE 10]>
    <div
        style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;">
        <a href="http://windows.microsoft.com/en-US/internet-explorer/"><img
            src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
            alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
    </div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
    <?php

    wp_head();
    ?>
    <?php
    $slider = false;
    if (is_front_page()):
        $slider = true;
    endif;

    ?>
</head>
<body>
<!-- Page Loader-->
<div id="page-loader">
    <div class="page-loader-logo">
        <div class="brand">
            <div class="brand__name"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/logo-162x47.png" alt="" width="162" height="47"/>
            </div>
        </div>
    </div>
    <div class="page-loader-body">
        <div id="loadingProgressG">
            <div class="loadingProgressG" id="loadingProgressG_1"></div>
        </div>
    </div>
</div>
<!-- Page-->
<div class="page">
    <!-- Page Header-->
    <header class="page-header section">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar-creative" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
                 data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fullwidth"
                 data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fullwidth"
                 data-lg-layout="rd-navbar-fullwidth" data-stick-up-clone="false" data-md-stick-up-offset="150px"
                 data-lg-stick-up-offset="60px" data-md-stick-up="true" data-lg-stick-up="true">
                <div class="rd-navbar-aside-outer rd-navbar-content-outer">
                    <div class="rd-navbar-content__toggle rd-navbar-fullwidth--hidden"
                         data-rd-navbar-toggle=".rd-navbar-content"><span></span></div>
                    <div class="rd-navbar-aside rd-navbar-content">
                        <div class="rd-navbar-aside__item">
                            <ul class="rd-navbar-items-list">
                                <li>
                                    <div class="unit unit-spacing-xxs unit-horizontal">
                                        <div class="unit__left"><span
                                                class="icon icon-sm icon-primary fl-bigmug-line-trophy55"></span></div>
                                        <div class="unit__body">
                                            <p>Publicidad, Infraestructura y Servicios Integrales</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="rd-navbar-aside__item">
                            <ul class="rd-navbar-items-list">
                                <li>
                                    <div class="unit unit-spacing-xxs unit-horizontal">
                                        <div class="unit__left"><span class="text-primary">Telefono:</span></div>
                                        <div class="unit__body"><a href="tel:(01) 5967606">(01) 5967606</a></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="rd-navbar-main-outer">
                    <div class="rd-navbar-main">
                        <!-- RD Navbar Panel -->
                        <div class="rd-navbar-panel">
                            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span>
                            </button>
                            <!-- RD Navbar Brand-->
                            <div class="rd-navbar-brand"><a class="brand" href="<?php echo get_option('home'); ?>">
                                    <div class="brand__name"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/logo-162x47.png" alt="" width="162"
                                                                  height="47"/>
                                    </div>
                                </a></div>
                        </div>
                        <!-- RD Navbar Nav -->
                        <div class="rd-navbar-nav-wrap">
                            <div class="rd-navbar-main-item"><a class="button button-xs button-primary"
                                                                href="mailto:ventas@artsignsoluciones.com">Escribenos</a></div>
                            <!-- RD Navbar Nav-->
                            <ul class="rd-navbar-nav">
                                <li><a href="<?php echo get_option('home'); ?>">Inicio</a></li>
                                <li><a href="<?php echo get_permalink(get_page_by_path('nosotros')); ?>">Nosotros</a>
                                </li>
                                <li><a href="<?php echo get_permalink(get_page_by_path('servicios')); ?>">Servicios</a>
                                </li>
                                <li><a href="<?php echo get_permalink(get_page_by_path('portafolio')); ?>">Portafolio</a>
                                </li>
                                <!-- <li><a href="<?php echo get_permalink(get_page_by_path('noticias')); ?>">Noticias</a>
                                </li> -->
                                <li><a href="<?php echo get_permalink(get_page_by_path('contacto')); ?>">Contacto</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Swiper -->
    <?php if ($slider){ ?>
    <section class="section swiper-slider_style-1">
        <div class="swiper-container swiper-slider swiper-slider_height-1" data-effect="slide" data-loop="true"
             data-direction="horizontal" data-keyboard="true" data-custom-slide-effect="interLeaveEffect">
            <div class="swiper-wrapper">

                <div class="swiper-slide bg-gray-dark slider-overlay"
                     style="background-image: url( <?php bloginfo('stylesheet_directory'); ?>/assets/images/slider-slide-3-1920x1080.jpg);">
                    <div class="slide-inner">
                        <div class="swiper-slide-caption">
                            <div class="shell shell-wide">
                                <div class="range">
                                    <div class="cell-md-5">
                                        <h1 data-caption-animate="fadeInUpSmall">Servicios <br> Generales</h1>

                                        <div class="object-decorated"><span class="object-decorated__divider"
                                                                            data-caption-animate="fadeInRightSmall"
                                                                            data-caption-delay="300"></span>
                                            <h4 data-caption-animate="fadeInRightSmall" data-caption-delay="550">
                                                Te atendemos todas las actividad vinculada a servicios publicitarios. </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide bg-gray-dark slider-overlay"
                     style="background-image: url( <?php bloginfo('stylesheet_directory'); ?>/assets/images/slider-slide-1-1920x1080.jpg);">
                    <div class="slide-inner">
                        <div class="swiper-slide-caption">
                            <div class="shell shell-wide">
                                <div class="range">
                                    <div class="cell-md-5">
                                        <h1 data-caption-animate="fadeInUpSmall">Infraestructura  <br></h1>

                                        <div class="object-decorated"><span class="object-decorated__divider"
                                                                            data-caption-animate="fadeInRightSmall"
                                                                            data-caption-delay="300"></span>
                                            <h4 data-caption-animate="fadeInRightSmall" data-caption-delay="550">Instalación, fabricación de estructuras metálicas</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide bg-gray-dark slider-overlay"
                     style="background-image: url( <?php bloginfo('stylesheet_directory'); ?>/assets/images/slider-slide-2-1920x1080.jpg);">
                    <div class="slide-inner">
                        <div class="swiper-slide-caption">
                            <div class="shell shell-wide">
                                <div class="range">
                                    <div class="cell-md-5">
                                        <h1 data-caption-animate="fadeInUpSmall">Publicidad <br> y Marketing</h1>

                                        <div class="object-decorated"><span class="object-decorated__divider"
                                                                            data-caption-animate="fadeInRightSmall"
                                                                            data-caption-delay="300"></span>
                                            <h4 data-caption-animate="fadeInRightSmall" data-caption-delay="550">Diseño, impresión, mantenimiento, serigrafiado, gigantografia  </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-navigation swiper-navigation_modern">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>
<?php } ?>