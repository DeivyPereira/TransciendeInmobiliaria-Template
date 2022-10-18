<?php
ini_set('display_errors', 0);
nocache_headers();
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
$ppc = $_GET['id'];
$args = array(
    'method' => 'GET',
);
//Inmuebles
//$inmueblerest = "http://localhost/puntacana-api/property/$ppc";
$inmueblerest = "http://venetronic.com/property/$ppc";
$response = wp_remote_request($inmueblerest, $args);
$destacados = json_decode(wp_remote_retrieve_body($response), true);
$destacados = $destacados['data'];
?>
<html <?php language_attributes(); ?>>
<meta charset="<?php bloginfo('charset'); ?>" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
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
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <?php if(!empty($destacados['name'])){ ?>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:locale" content="es_PE" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $destacados['name']; ?> - Trasciende Inmobiliaria" />
    <meta property="og:url" content="<?php echo "https://trasciendeinmobiliaria.com/inmueble/?id=".$ppc; ?>" />
    <meta property="og:site_name" content="<?php echo $destacados['name']; ?> - Trasciende Inmobiliaria" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="<?php echo $destacados['name']; ?> - Trasciende Inmobiliaria" />
    <meta property="og:title" content="<?php echo $destacados['name']; ?> - Trasciende Inmobiliariaa">
    <meta property="og:site_name" content="<?php echo $destacados['name']; ?> - Trasciende Inmobiliaria">
    <meta property="og:url" content="<?php echo "https://trasciendeinmobiliaria.com/inmueble/?id=".$ppc; ?> ">
    <meta property="og:description" content="<?php echo $destacados['description']; ?>">
    <meta property="og:type" content="article">
    <meta property="og:image" content="<?php echo $destacados['imagen'][0]['path']; ?>">

    <?php }else{ ?>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:locale" content="es_PE" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo bloginfo('name'); ?>" />
    <meta property="og:url" content="#" />
    <meta property="og:site_name" content="<?php echo bloginfo('name'); ?>" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="<?php echo bloginfo('name'); ?>" />

    <meta property="og:title" content="<?php echo bloginfo('name'); ?>">
    <meta property="og:site_name" content="<?php echo bloginfo('name'); ?>">
    <meta property="og:url" content="">
    <meta property="og:description" content="<?php echo $site_description; ?>">
    <meta property="og:type" content="article">
    <meta property="og:image" content="<?php bloginfo('stylesheet_directory'); ?>/images/logo.jpeg">
    <?php } ?>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-37064499-11"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-37064499-11');
    </script>

    <!-- favicon
      ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico">

    <!-- all css here -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css">
    <!-- Flat Icon CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/flaticon.css">
    <!-- animate css -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/animate.css">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/jquery-ui.min.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/meanmenu.min.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/owl.carousel.css">
    <!-- jQuery Carousel Evolution -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/inc/3dslider/css/style.css">
    <!-- lightsldier CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/lightslider.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/font-awesome.min.css">
    <!-- nivo slider CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/inc/custom-slider/css/nivo-slider.css"
        type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/inc/custom-slider/css/preview.css"
        type="text/css" media="screen" />
    <!-- lightsldier CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/lightslider.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/inc/fancybox/jquery.fancybox.css">
    <!-- style css -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css?v=<?php echo time(); ?>">
    <!-- responsive css -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/css/lightbox.min.css">
    <!-- modernizr css -->
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/vendor/modernizr-2.8.3.min.js"></script>

    <?php
    $slider = false;
    if (is_front_page()):
        $slider = true;
    endif;

    ?>

</head>

<body>
    <header>
        <div class="main-header sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-2 col-md-2 col-sm-12 col-xs-12">
                        <div class="logo-area">
                            <a href="<?php echo get_option('home'); ?>"> <img
                                    src="http://trasciendeinmobiliaria.com/wp-content/themes/trasciende/images/logo-trasparente-lado.png"
                                    class="imgLogo"></a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <div class="main-menu-area">
                            <nav>
                                <ul>
                                    <li class="active"><a href="<?php echo get_option('home'); ?>">Inicio</a></li>
                                    <li><a
                                            href="<?php echo get_permalink(get_page_by_path('nosotros')); ?>">Nosotros</a>
                                    </li>
                                    <li><a
                                            href="<?php echo get_permalink(get_page_by_path('categorias')); ?>">Propiedades</a>
                                        <ul>
                                            <li><a
                                                    href="<?php echo get_permalink(get_page_by_path('categorias')) . "?category=Departamentos"; ?>">Departamentos</a>
                                            </li>
                                            <li><a
                                                    href="<?php echo get_permalink(get_page_by_path('categorias')) . "?category=Casas"; ?>">Casas</a>
                                            </li>
                                            <li><a
                                                    href="<?php echo get_permalink(get_page_by_path('categorias')) . "?category=Hoteles"; ?>">Hoteles</a>
                                            </li>
                                            <li><a
                                                    href="<?php echo get_permalink(get_page_by_path('categorias')) . "?category=Habitacion"; ?>">Habitación</a>
                                            </li>
                                            <li><a
                                                    href="<?php echo get_permalink(get_page_by_path('categorias')) . "?category=Terrenos"; ?>">Terrenos</a>
                                            </li>
                                            <li><a
                                                    href="<?php echo get_permalink(get_page_by_path('categorias')) . "?category=Oficinas"; ?>">Oficinas</a>
                                            </li>
                                            <li><a
                                                    href="<?php echo get_permalink(get_page_by_path('categorias')) . "?category=Locales Comerciales"; ?>">Locales
                                                    Comerciales</a></li>
                                            <li><a
                                                    href="<?php echo get_permalink(get_page_by_path('categorias')) . "?category=Locales Industriales"; ?>">Locales
                                                    Industriales</a></li>
                                        </ul>
                                    </li>
                                    <li><a
                                            href="http://trasciendeinmobiliaria.com/quieres-vender-con-trasciende-inmobiliaria/">Vender</a>
                                    </li>
                                    <li><a href="<?php echo get_permalink(get_page_by_path('diferente')); ?>">¿Buscas
                                            algo diferente?</a> </li>
                                    <li style="z-index:1000px;"><a href="<?php echo get_permalink(get_page_by_path('contacto')); ?>">Más</a>
                                        <ul>
                                        <li><a
                                            href="<?php echo get_permalink(get_page_by_path('contacto')); ?>">Contacto</a>
                                            </li>
                                            <li><a
                                                    href="http://trasciendeinmobiliaria.com/category/notice/">Blog</a>
                                            </li>
                                            
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs acurate">
                        <div class="header-right">
                            <nav>
                                <ul>
                                    <li style="margin-left: -80px;">
                                        <li><a href="https://facebook.com/trasciendeinmobiliariaperu/" target="_blank"><i
	                                            class="fa fa-facebook" ></i></a></li>

	                                <li style="margin-left: -10px;"><a href="https://www.instagram.com/trasciendeinmobiliaria/" target="_blank"><i
	                                            class="fa fa-instagram" ></i></a></li>
                                    </li>
                                    <li style="width: auto;"><a
                                            href="<?php echo get_permalink(get_page_by_path('referidos')); ?>" style="background-color: #77c720;
    border-radius: 10px;
    color: white;
    padding: 12px 12px;">Gana dinero con nosotros</a> </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    <?php if(!$slider): ?>
        <!-- mobile-menu-area start -->
        <div class="mobile-menu-area mob-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li class="active"><a href="<?php echo get_option('home'); ?>">Inicio</a></li>
                                    <li><a
                                            href="<?php echo get_permalink(get_page_by_path('nosotros')); ?>">Nosotros</a>
                                    </li>
                                    <li><a
                                            href="<?php echo get_permalink(get_page_by_path('categorias')); ?>">Propiedades</a>

                                        <ul>
                                            <li><a
                                                    href="<?php echo get_permalink(get_page_by_path('categorias')) . "?category=Departamentos"; ?>">Departamentos</a>
                                            </li>
                                            <li><a
                                                    href="<?php echo get_permalink(get_page_by_path('categorias')) . "?category=Casas"; ?>">Casas</a>
                                            </li>
                                            <li><a
                                                    href="<?php echo get_permalink(get_page_by_path('categorias')) . "?category=Hoteles"; ?>">Hoteles</a>
                                            </li>
                                            <li><a
                                                    href="<?php echo get_permalink(get_page_by_path('categorias')) . "?category=Habitacion"; ?>">Habitación</a>
                                            </li>
                                            <li><a
                                                    href="<?php echo get_permalink(get_page_by_path('categorias')) . "?category=Terrenos"; ?>">Terrenos</a>
                                            </li>
                                            <li><a
                                                    href="<?php echo get_permalink(get_page_by_path('categorias')) . "?category=Oficinas"; ?>">Oficinas</a>
                                            </li>
                                            <li><a
                                                    href="<?php echo get_permalink(get_page_by_path('categorias')) . "?category=Locales Comerciales"; ?>">Locales
                                                    Comerciales</a></li>
                                            <li><a
                                                    href="<?php echo get_permalink(get_page_by_path('categorias')) . "?category=Locales Industriales"; ?>">Locales
                                                    Industriales</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo get_permalink(get_page_by_path('vender')); ?>">Vender</a>
                                    </li>
                                    <li><a href="<?php echo get_permalink(get_page_by_path('diferente')); ?>">¿Buscas
                                            algo diferente?</a> </li>
                                    <li><a
                                            href="<?php echo get_permalink(get_page_by_path('referidos')); ?>">Gana dinero con nosotros</a>
                                    </li>
                                    <li><a
                                            href="http://trasciendeinmobiliaria.com/category/notice/">Noticias</a>
                                    </li>
                                    <li><a
                                            href="<?php echo get_permalink(get_page_by_path('contacto')); ?>">Contacto</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile-menu-area end -->
    <?php endif; ?>
  <?php if($slider): ?>
	<div class="mean-container pantallaprincipal is-mobile">
	  <nav class="mean-nav" id="dropdown">
				<ul>
					<li class="active"><a href="<?php echo get_option('home'); ?>">Inicio</a></li>
					<li><a
							href="<?php echo get_permalink(get_page_by_path('nosotros')); ?>">Nosotros</a>
					</li>
					<li><a
							href="<?php echo get_permalink(get_page_by_path('categorias')); ?>">Propiedades</a>

						<ul>
							<li><a
									href="<?php echo get_permalink(get_page_by_path('categorias')) . "?category=Departamentos"; ?>">Departamentos</a>
							</li>
							<li><a
									href="<?php echo get_permalink(get_page_by_path('categorias')) . "?category=Casas"; ?>">Casas</a>
							</li>
							<li><a
									href="<?php echo get_permalink(get_page_by_path('categorias')) . "?category=Hoteles"; ?>">Hoteles</a>
							</li>
							<li><a
									href="<?php echo get_permalink(get_page_by_path('categorias')) . "?category=Habitacion"; ?>">Habitación</a>
							</li>
							<li><a
									href="<?php echo get_permalink(get_page_by_path('categorias')) . "?category=Terrenos"; ?>">Terrenos</a>
							</li>
							<li><a
									href="<?php echo get_permalink(get_page_by_path('categorias')) . "?category=Oficinas"; ?>">Oficinas</a>
							</li>
							<li><a
									href="<?php echo get_permalink(get_page_by_path('categorias')) . "?category=Locales Comerciales"; ?>">Locales
									Comerciales</a></li>
							<li><a
									href="<?php echo get_permalink(get_page_by_path('categorias')) . "?category=Locales Industriales"; ?>">Locales
									Industriales</a></li>
						</ul>
					</li>
					<li><a href="<?php echo get_permalink(get_page_by_path('vender')); ?>">Vender</a>
					</li>
					<li><a href="<?php echo get_permalink(get_page_by_path('diferente')); ?>">¿Buscas
							algo diferente?</a> </li>
					<li><a
							href="<?php echo get_permalink(get_page_by_path('referidos')); ?>">Referidos</a>
					</li>
					<li><a
							href="<?php echo get_permalink(get_page_by_path('noticias')); ?>">Noticias</a>
					</li>
					<li><a
							href="<?php echo get_permalink(get_page_by_path('contacto')); ?>">Contacto</a>
					</li>
				</ul>
			</nav>	
			</div >
		   <?php endif; ?>
							
							
    </header>
    <!-- header area end here -->