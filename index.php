<?php get_header(); ?>
<?php
$args = array(
    'method' => 'GET',
);

//Destacados
$inmueblerest = "http://venetronic.com/principal?limit=3";
$response = wp_remote_request($inmueblerest, $args);
$start = json_decode(wp_remote_retrieve_body($response), true);
$start = $start['items'];


//Inmuebles
$inmueblerest = "http://venetronic.com/destacado?limit=20";
$response = wp_remote_request($inmueblerest, $args);
$destacados = json_decode(wp_remote_retrieve_body($response), true);
$destacados = $destacados['items'];
//Categorias
$categoryselect = "http://venetronic.com/countcategory";
$response = wp_remote_request($categoryselect, $args);
$categorias = json_decode(wp_remote_retrieve_body($response), true);



//Agentes
$inmueblerest = "https://venetronic.com/agents-public?limit=10";
$response = wp_remote_request($inmueblerest, $args);
$agents = json_decode(wp_remote_retrieve_body($response), true);
$agents = $agents['items'];


//Testimonios
$inmueblerest = "https://venetronic.com/testimony-public?limit=10";
$response = wp_remote_request($inmueblerest, $args);
$testimony = json_decode(wp_remote_retrieve_body($response), true);
$testimony = $testimony['items'];
?>
<!-- slider area-->
<div class="slider-area">
    <div class="bend niceties preview-2">
        <div id="ensign-nivoslider" class="slides">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/fondo-principal.jpg" alt=""
                title="#slider-direction-1" />
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/fondo-principal-2.jpg" alt=""
                title="#slider-direction-2" />
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/fondo-principal-3.jpg" alt=""
                title="#slider-direction-3" />
        </div>
        <!-- direction 1 -->
        <div id="slider-direction-1" class="slider-direction">
            <div class="slider-content t-cn s-tb slider-2">
                <div class="title-container s-tb-c" style="display: block;     margin-top: 50px;">

                    <h1 class="title1"><img
                            src="http://trasciendeinmobiliaria.com/wp-content/themes/trasciende/images/logo-trasparente-lado-blanco.png"
                            style="width: 500px;
    position: inherit;"></h1>
                    <h1 class="title1">¿Cómo te podemos ayudar?</h1>
                    <div class="slider-botton">
                        <ul>
                            <li><a class="nivo-nextNav" style="font-size: 25px; cursor: pointer;"
                                    title="#slider-direction-2">Comprar </a></li>
                            <li><a class="nivo-prevNav" style="font-size: 25px; cursor: pointer;"
                                    title="#slider-direction-2">Alquilar</a></li>
                            <li><a href="http://trasciendeinmobiliaria.com/quieres-vender-con-trasciende-inmobiliaria/"
                                    style="font-size: 25px;">Vender</a></li>
                            <li style="display: block; margin-top: 70px;">
                                <a href="http://trasciendeinmobiliaria.com/referidos/" style="font-size: 25px;">
                                    Gana dinero con nosotros
                                    <i class="fa fa-money" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="slider-direction-2" class="t-cn slider-direction">
            <div class="slider-content t-cn s-tb slider-2">
                <div class="title-container s-tb-c title-compress">
                    <h1 class="title1"><img
                            src="http://trasciendeinmobiliaria.com/wp-content/themes/trasciende/images/logo-trasparente-lado-blanco.png"
                            style="width: 500px; position: inherit;"></h1>
                    <div class="title2"><strong>Encuentre casas, departamentos, oficinas, terrenos, locales y más
                            inmuebles en venta y alquiler.</strong></div>
                    <div class="slider-botton">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="leave-comments-area">
                                        <form action="<?php echo get_permalink(get_page_by_path('categorias')); ?>"
                                            method="get">
                                            <fieldset>
                                                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 acurate"
                                                    style="padding: 0px 2px;">
                                                    <div class="form-group">
                                                        <select name="city">
                                                            <option value="" selected="selected">Seleccione Distrito
                                                            </option>
                                                            <option value="Ancon">Ancon</option>
                                                            <option value="Ate">Ate</option>
                                                            <option value="Barranco">Barranco</option>
                                                            <option value="Breña">Breña</option>
                                                            <option value="Carabayllo">Carabayllo</option>
                                                            <option value="Chaclacayo">Chaclacayo</option>
                                                            <option value="Chorrillos">Chorrillos</option>
                                                            <option value="Cieneguilla">Cieneguilla</option>
                                                            <option value="Comas">Comas</option>
                                                            <option value="El Agustino">El Agustino</option>
                                                            <option value="Independencia">Independencia</option>
                                                            <option value="Jesús María">Jesús María</option>
                                                            <option value="La Molina">La Molina</option>
                                                            <option value="La Victoria">La Victoria</option>
                                                            <option value="Lima">Lima</option>
                                                            <option value="Lince">Lince</option>
                                                            <option value="Los Olivos">Los Olivos</option>
                                                            <option value="Lurigancho">Lurigancho</option>
                                                            <option value="Lurín">Lurín</option>
                                                            <option value="Magdalena del Mar">Magdalena del Mar</option>
                                                            <option value="Miraflores">Miraflores</option>
                                                            <option value="Pachacamac">Pachacamac</option>
                                                            <option value="Pucusana">Pucusana</option>
                                                            <option value="Pueblo Libre">Pueblo Libre</option>
                                                            <option value="Puente Piedra">Puente Piedra</option>
                                                            <option value="Punta Hermosa">Punta Hermosa</option>
                                                            <option value="Punta Negra">Punta Negra</option>
                                                            <option value="Rimac">Rimac</option>
                                                            <option value="San Bartolo">San Bartolo</option>
                                                            <option value="San Borja">San Borja</option>
                                                            <option value="San Isidro">San Isidro</option>
                                                            <option value="San Juan de Lurigancho">San Juan de
                                                                Lurigancho</option>
                                                            <option value="San Juan de Miraflores">San Juan de
                                                                Miraflores</option>
                                                            <option value="San Luis">San Luis</option>
                                                            <option value="San Martín de Porres">San Martín de Porres
                                                            </option>
                                                            <option value="San Miguel">San Miguel</option>
                                                            <option value="Santa Anita">Santa Anita</option>
                                                            <option value="Santa María del Mar">Santa María del Mar
                                                            </option>
                                                            <option value="Santa Rosa"> Santa Rosa</option>
                                                            <option value="Santiago de Surco">Santiago de Surco</option>
                                                            <option value="Surquillo">Surquillo</option>
                                                            <option value="Villa El Salvador">Villa El Salvador</option>
                                                            <option value="Villa María del Triunfo">Villa María del
                                                                Triunfo</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 acurate"
                                                    style="padding: 0px 2px;">
                                                    <div class="form-group">
                                                        <select name="type">
                                                            <option value="2">Venta</option>
                                                            <option value="1">Alquiler</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 acurate"
                                                    style="padding: 0px 2px;">
                                                    <div class="form-group">
                                                        <select name="category">
                                                            <option value="">Tipo de inmueble</option>
                                                            <option value="Departamentos">Departamentos</option>
                                                            <option value="Casas">Casas</option>
                                                            <option value="Hoteles">Hoteles</option>
                                                            <option value="Habitación">Habitación</option>
                                                            <option value="Terrenos">Terrenos</option>
                                                            <option value="Oficinas">Oficinas</option>
                                                            <option value="Locales Comerciales">Locales Comerciales
                                                            </option>
                                                            <option value="Locales Industriales">Locales Industriales
                                                            </option>
                                                            <option value="Otros">Otros</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-5 col-sm-5 col-xs-12 acurate"
                                                    style="padding: 0px 2px;">
                                                    <div class="form-group">
                                                        <input type="text" name="description"
                                                            placeholder="Descripción: Piscina, frente al mar, etc.."
                                                            style="width:100%">

                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center acurate">
                                                    <div class="form-group">
                                                        <button class="btn-send" type="submit">Buscar</button>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="slider-direction-3" class="t-cn slider-direction">
                <div class="slider-content t-cn s-tb slider-2">
                    <div class="title-container s-tb-c title-compress">
                        <h1 class="title1"><img
                                src="http://trasciendeinmobiliaria.com/wp-content/themes/trasciende/images/logo-trasparente-lado-blanco.png"
                                style="width: 500px; position: inherit;"></h1>
                        <div class="title2"><strong>Encuentre casas, departamentos, oficinas, terrenos, locales y más
                                inmuebles en venta y alquiler.</strong></div>
                        <div class="slider-botton">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="leave-comments-area">
                                            <form action="<?php echo get_permalink(get_page_by_path('categorias')); ?>"
                                                method="get">
                                                <fieldset>
                                                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 acurate"
                                                        style="padding: 0px 2px;">
                                                        <div class="form-group">
                                                            <select name="city">
                                                                <option value="" selected="selected">Seleccione Distrito
                                                                </option>
                                                                <option value="Ancon">Ancon</option>
                                                                <option value="Ate">Ate</option>
                                                                <option value="Barranco">Barranco</option>
                                                                <option value="Breña">Breña</option>
                                                                <option value="Carabayllo">Carabayllo</option>
                                                                <option value="Chaclacayo">Chaclacayo</option>
                                                                <option value="Chorrillos">Chorrillos</option>
                                                                <option value="Cieneguilla">Cieneguilla</option>
                                                                <option value="Comas">Comas</option>
                                                                <option value="El Agustino">El Agustino</option>
                                                                <option value="Independencia">Independencia</option>
                                                                <option value="Jesús María">Jesús María</option>
                                                                <option value="La Molina">La Molina</option>
                                                                <option value="La Victoria">La Victoria</option>
                                                                <option value="Lima">Lima</option>
                                                                <option value="Lince">Lince</option>
                                                                <option value="Los Olivos">Los Olivos</option>
                                                                <option value="Lurigancho">Lurigancho</option>
                                                                <option value="Lurín">Lurín</option>
                                                                <option value="Magdalena del Mar">Magdalena del Mar
                                                                </option>
                                                                <option value="Miraflores">Miraflores</option>
                                                                <option value="Pachacamac">Pachacamac</option>
                                                                <option value="Pucusana">Pucusana</option>
                                                                <option value="Pueblo Libre">Pueblo Libre</option>
                                                                <option value="Puente Piedra">Puente Piedra</option>
                                                                <option value="Punta Hermosa">Punta Hermosa</option>
                                                                <option value="Punta Negra">Punta Negra</option>
                                                                <option value="Rimac">Rimac</option>
                                                                <option value="San Bartolo">San Bartolo</option>
                                                                <option value="San Borja">San Borja</option>
                                                                <option value="San Isidro">San Isidro</option>
                                                                <option value="San Juan de Lurigancho">San Juan de
                                                                    Lurigancho</option>
                                                                <option value="San Juan de Miraflores">San Juan de
                                                                    Miraflores</option>
                                                                <option value="San Luis">San Luis</option>
                                                                <option value="San Martín de Porres">San Martín de
                                                                    Porres</option>
                                                                <option value="San Miguel">San Miguel</option>
                                                                <option value="Santa Anita">Santa Anita</option>
                                                                <option value="Santa María del Mar">Santa María del Mar
                                                                </option>
                                                                <option value="Santa Rosa"> Santa Rosa</option>
                                                                <option value="Santiago de Surco">Santiago de Surco
                                                                </option>
                                                                <option value="Surquillo">Surquillo</option>
                                                                <option value="Villa El Salvador">Villa El Salvador
                                                                </option>
                                                                <option value="Villa María del Triunfo">Villa María del
                                                                    Triunfo</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 acurate"
                                                        style="padding: 0px 2px;">
                                                        <div class="form-group">
                                                            <select name="type">
                                                                <option value="2">Venta</option>
                                                                <option value="1" selected="selected">Alquiler</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 acurate"
                                                        style="padding: 0px 2px;">
                                                        <div class="form-group">
                                                            <select name="category">
                                                                <option value="">Tipo de inmueble</option>
                                                                <option value="Departamentos">Departamentos</option>
                                                                <option value="Casas">Casas</option>
                                                                <option value="Hoteles">Hoteles</option>
                                                                <option value="Habitación">Habitación</option>
                                                                <option value="Terrenos">Terrenos</option>
                                                                <option value="Oficinas">Oficinas</option>
                                                                <option value="Locales Comerciales">Locales Comerciales
                                                                </option>
                                                                <option value="Locales Industriales">Locales
                                                                    Industriales</option>
                                                                <option value="Otros">Otros</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-5 col-sm-5 col-xs-12 acurate"
                                                        style="padding: 0px 2px;">
                                                        <div class="form-group">
                                                            <input type="text" name="description"
                                                                placeholder="Descripción: Piscina, frente al mar, etc.."
                                                                style="width:100%">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center acurate">
                                                        <div class="form-group">
                                                            <button class="btn-send" type="submit">Buscar</button>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- slider end-->
    <div class="bend2 ">
        <img src="http://trasciendeinmobiliaria.com/wp-content/themes/trasciende/images/logo-trasparente-blanco.png" style=" width: 45%;
    display: block;
    margin: auto; padding-top: 15px;">
        <h1 class="title">Encuentra el inmueble que te hará transcender en tu vida</h1>

        <div class="leave-comments-area">
            <form action="<?php echo get_permalink(get_page_by_path('categorias')); ?>" method="get">
                <fieldset>
                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 acurate" style="padding: 0px 2px;">
                        <div class="form-group">
                            <select name="type">
                                <option value="2">Venta</option>
                                <option value="1">Alquiler</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 acurate" style="padding: 0px 2px;">
                        <div class="form-group">
                            <select name="category">
                                <option value="">Tipo de inmueble</option>
                                <option value="Departamentos">Departamentos</option>
                                <option value="Casas">Casas</option>
                                <option value="Hoteles">Hoteles</option>
                                <option value="Habitación">Habitación</option>
                                <option value="Terrenos">Terrenos</option>
                                <option value="Oficinas">Oficinas</option>
                                <option value="Locales Comerciales">Locales Comerciales
                                </option>
                                <option value="Locales Industriales">Locales Industriales
                                </option>
                                <option value="Otros">Otros</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 acurate" style="padding: 0px 2px;">
                        <div class="form-group">
                            <select name="city">
                                <option value="" selected="selected">Seleccione Distrito </option>
                                <option value="Ancon">Ancon</option>
                                <option value="Ate">Ate</option>
                                <option value="Barranco">Barranco</option>
                                <option value="Breña">Breña</option>
                                <option value="Carabayllo">Carabayllo</option>
                                <option value="Chaclacayo">Chaclacayo</option>
                                <option value="Chorrillos">Chorrillos</option>
                                <option value="Cieneguilla">Cieneguilla</option>
                                <option value="Comas">Comas</option>
                                <option value="El Agustino">El Agustino</option>
                                <option value="Independencia">Independencia</option>
                                <option value="Jesús María">Jesús María</option>
                                <option value="La Molina">La Molina</option>
                                <option value="La Victoria">La Victoria</option>
                                <option value="Lima">Lima</option>
                                <option value="Lince">Lince</option>
                                <option value="Los Olivos">Los Olivos</option>
                                <option value="Lurigancho">Lurigancho</option>
                                <option value="Lurín">Lurín</option>
                                <option value="Magdalena del Mar">Magdalena del Mar</option>
                                <option value="Miraflores">Miraflores</option>
                                <option value="Pachacamac">Pachacamac</option>
                                <option value="Pucusana">Pucusana</option>
                                <option value="Pueblo Libre">Pueblo Libre</option>
                                <option value="Puente Piedra">Puente Piedra</option>
                                <option value="Punta Hermosa">Punta Hermosa</option>
                                <option value="Punta Negra">Punta Negra</option>
                                <option value="Rimac">Rimac</option>
                                <option value="San Bartolo">San Bartolo</option>
                                <option value="San Borja">San Borja</option>
                                <option value="San Isidro">San Isidro</option>
                                <option value="San Juan de Lurigancho">San Juan de Lurigancho</option>
                                <option value="San Juan de Miraflores">San Juan de Miraflores</option>
                                <option value="San Luis">San Luis</option>
                                <option value="San Martín de Porres">San Martín de Porres</option>
                                <option value="San Miguel">San Miguel</option>
                                <option value="Santa Anita">Santa Anita</option>
                                <option value="Santa María del Mar">Santa María del Mar</option>
                                <option value="Santa Rosa"> Santa Rosa</option>
                                <option value="Santiago de Surco">Santiago de Surco</option>
                                <option value="Surquillo">Surquillo</option>
                                <option value="Villa El Salvador">Villa El Salvador</option>
                                <option value="Villa María del Triunfo">Villa María del Triunfo</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-5 col-xs-12 acurate" style="padding: 0px 2px;">
                        <div class="form-group">
                            <input type="text" name="description"
                                placeholder="Descripción: Piscina, frente al mar, etc.." style="width:100%">

                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center acurate">
                        <div class="form-group">
                            <button class="btn-send" type="submit">Buscar</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>

    <div class="home-featured-project-area is-mobile" style="padding: 20px 0px;">



        <div class="full-container">

            <div class="row" style="    text-align: -webkit-center;">

                <img src="http://trasciendeinmobiliaria.com/wp-content/themes/trasciende/images/logo-trasparente.png"
                    style=" width: 295px;">
                <h2 style="margin: 20px 27px;
    text-align: center;
    font-size: 22px;
}
">Hacemos tu vida más fácil</h2>





                <div class="wrapperButton">
                    <a href="http://trasciendeinmobiliaria.com/quieres-vender-con-trasciende-inmobiliaria/">
                        <div class="wave-1" style="left:100px"></div>
                        <div class="wave-2" style="left:100px"></div>
                        <span>Vende con Nosotros</span>
                    </a>
                </div>

                <div class="wrapperButton">
                    <a href="<?php echo get_permalink(get_page_by_path('referidos')); ?>">
                        <div class="wave-1" style="left:40px"></div>
                        <div class="wave-2" style="left:40px"></div>
                        <span>Gana Dinero con Nosotros</span>
                    </a>
                </div>

                <div class="wrapperButton">
                    <a href="<?php echo get_permalink(get_page_by_path('diferente')); ?>">
                        <div class="wave-1" style="left:-50px"></div>
                        <div class="wave-2" style="left:-50px"></div>
                        <span>Buscas algo diferente?</span>
                    </a>
                </div>

            </div>

        </div>
    </div>
    <div class="home-listing-property-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="section-title-area">
                        <h2>Inmuebles destacados</h2>
                        <p>Encuentre casas, departamentos, oficinas, terrenos, locales y más inmuebles en venta y
                            alquiler. </p>
                    </div>
                </div>
            </div>
            <div class="row padding-top ">
                <div class="property-grid-view-area property-grid-view-two-area" style="padding:0px;">
                    <div class="property-content-area">
                        <div class="grid-view-area">
                            <div class="total-property-listing-movil">

                                <?php $i=0; foreach ($destacados as $v):
						if(empty($v['imagen'])):
								$v['imagen']['img'] =" http://ximg.es/180x260/ffffff/000000";
							  endif;
				   ?>
                                <div class="single-listing">
                                    
                                    <div class="ribbon" >
                                        <span style="font-size:10px;"> <?php echo $v['tag']?></span>
                                    </div>
                                    <div class="listing-image">
                                        <a href="<?php echo get_site_url() . "/inmueble?id=" . $v['id']; ?>"
                                            style="background:none;padding: 0px;">
                                            <img src="<?php echo $v['imagen']['img']; ?>"
                                                alt="<?php echo $v['name']; ?>"
                                                style="min-height:200px; max-height: 200px; width:100%">
                                        </a>

                                        <a href="<?php echo get_site_url() . "/inmueble?id=" . $v['id']; ?>"><i
                                                class="fa fa-plus" aria-hidden="true"></i></a>
                                    </div>

                                    <div class="property-details" style="margin-top:0px; padding-top:5px;">
                                        <span style="float:left; color:black; font-weight: bold; text-transform: uppercase;
    font-size: 15px;"><?php echo $v['type']; ?></span>
                                        <span
                                            style="float:right; border-radius:5px; color:black; font-weight: bold; color: #77c720;"><?php echo $destacados['money']; ?>
                                            <?php echo $v['money']; ?>
                                            <?php echo number_format($v['price'], 0, '.', ','); ?></span>
                                        <br />
                                        <h3><a style="font-size:15px;"
                                                href="<?php echo get_site_url() . "/inmueble?id=" . $v['id']; ?>"><?php echo $v['name']; ?></a>
                                        </h3>
                                        <p>
                                            <?php echo $v['city']; ?>
                                        </p>
                                        <ul style="display:inline-flex;     margin-left: -10px;">
                                            <li style="margin-right: 10px;">
                                                <i class="fa fa-home" style=" color: #77c720;"></i> &nbsp;
                                                <?php echo $v['areatotal']; ?> M2
                                            </li>
                                            <li style="margin-right: 10px;">
                                                <i class="fa fa-bed" style=" color: #77c720;"></i> &nbsp;
                                                <?php echo $v['bedrooms']; ?>
                                            </li>
                                            <li style="margin-right: 10px;">
                                                <i class="flaticon-bath" style="color:  #77c720;"></i> &nbsp;
                                                <?php echo $v['bathrooms']; ?>
                                            </li>
                                            <li>
                                                <i class="fa fa-car" style="color: #77c720;"></i> &nbsp;
                                                <?php echo $v['garages']; ?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <?php $i++; endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home-featured-project-area" style="padding: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="section-title-area">
                        <h2>Tipos de Inmuebles</h2>
                        <p>Elige la categoria de tu interes, para visualizar todas nuestras propiedades </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="featured-project">
                    <div class="single-featured">
                        <a
                            href="<?php echo get_permalink(get_page_by_path('categorias')) . "?category=Departamentos"; ?>">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/featured/departamentos.jpg"
                                alt="" style="height: 380px;">
                            <div class="featured-details">
                                <h3 style="color:white;">Departamentos</h3>
                                <p>Compra los departamentos mas adecuados para ti y tu familia</p>
                            </div>
                        </a>
                    </div>

                    <div class="single-featured">
                        <a href="<?php echo get_permalink(get_page_by_path('categorias')) . "?category=Casas"; ?>">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/featured/casas.jpg" alt=""
                                style="height: 380px;">
                            <div class="featured-details">
                                <h3 style="color:white;">Casas</h3>
                                <p>Aqui encontraras la casa de tus sueños
                                </p>
                            </div>
                        </a>
                    </div>

                    <div class="single-featured">
                        <a href="<?php echo get_permalink(get_page_by_path('categorias')) . "?category=Terrenos"; ?>">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/featured/terrenos.jpg" alt=""
                                style="height: 380px;">
                            <div class="featured-details">
                                <h3 style="color:white;">Terrenos</h3>
                                <p>Edifica el inmueble que soñaste desde cero y a tu gusto</p>
                            </div>
                        </a>
                    </div>

                    <div class="single-featured">
                        <a href="<?php echo get_permalink(get_page_by_path('categorias')) . "?category=Oficinas"; ?>">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/featured/oficinas.jpg" alt=""
                                style="height: 380px;">
                            <div class="featured-details">
                                <h3 style="color:white;">Oficinas</h3>
                                <p>Encuentra el mejor lugar para desempeñar tus labores</p>
                            </div>
                        </a>
                    </div>

                    <div class="single-featured">
                        <a
                            href="<?php echo get_permalink(get_page_by_path('categorias')) . "?category=Locales Comerciales"; ?>">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/featured/comercial.jpg" alt=""
                                style="height: 380px;">
                            <div class="featured-details">
                                <h3 style="color:white;">Locales Comerciales</h3>
                                <p>Realiza los mejores negocios con nuestras excelentes ubicaciones</p>
                            </div>
                        </a>
                    </div>
                    <div class="single-featured">
                        <a
                            href="<?php echo get_permalink(get_page_by_path('categorias')) . "?category=Locales Industriales"; ?>">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/featured/industrial.jpg" alt=""
                                style="height: 380px;">
                            <div class="featured-details">
                                <h3 style="color:white;">Locales Industriales</h3>
                                <p>Manufactura tus productos en los locales que te brindaremos, tomando en cuenta la zonificación requerida</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--
		     <div class="home-page-testimonial-area">
            <div class="container">
              <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="testimonial-area">
                          <div class="single-testiminial">
							      <h3>¡Publica con nosotros!</h3>
                              <p>¿Tienes una inmobiliaria o conoces a alguien que quiera vender o alquilar ?<br/>
						Conoce los planes y productos especializados que hemos desarrollado para potenciar tu negocio.</p>
                          
						  <div class="button"><a href="<?php echo get_permalink(get_page_by_path('referidos')); ?>">  
						  <button type="submit" style="display: inline-block;
    background: #77c720;
    color: #ffffff;
    padding: 5px 40px;
    margin-top: 10px;
    transition: all 0.35s ease-out;
    border: none;
    border-radius: 10px;
    font-size: 23px;">Publicar</button></a></div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
        </div> 
-->
    <div class="home-featured-project-area not-is-mobile" style="padding-bottom: 10px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="section-title-area">
                        <h2>Casos de Exito</h2>
                        <p>Nuestros clientes, hablan de nosotros</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home-page-testimonial-area not-is-mobile">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="testimonial-area">
					<?php $i=0; foreach ($testimony as $v):
						if(empty($v['photo'])):
								$v['photo'] =" http://ximg.es/260x200/ffffff/000000";
							  else:
							  		$v['photo'] ="http://venetronic.com/".$v['photo'];
								endif;
				   ?>
                        <div class="single-testiminial">
						
							<img src="<?php echo $v['photo']; ?>" class="img-circle" alt="<?php echo $v['name']; ?>" width="500">
							
                            <h3><?php echo $v['name']; ?> </h3>
							<i class="fa fa-quote-left" aria-hidden="true" style="display:inline-block;"></i> 
                            <p  style="display:inline-block;"><?php echo $v['description']; ?> </p>
							<i class="fa fa-quote-right" aria-hidden="true" style="display:inline-block;"></i> 
							<br/>
                           <!--- -->
                        </div>
						
						 <?php $i++; endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!--
    <div class="home-our-agent-area not-is-mobile">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="section-title-area">
                        <h2>Nuestros Agentes</h2>
                        <p>Profesionales íntegros, capacitados para brindarle la mejor experiencia de compra de su inmueble.</p>
                    </div>
                </div>
            </div>
            <div class="row padding-top" style="width: 80%;
    margin: 0 auto;" >
		<div class="total-agents">
				<?php $i=0; foreach ($agents as $v):
						if(empty($v['photo'])):
								$v['photo'] =" http://ximg.es/180x260/ffffff/000000";
							  else:
							  		$v['photo'] ="http://venetronic.com/".$v['photo'];
								endif;
							  
				   ?>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="single-agent">
                        <a href="#"><img style="max-height:360px; max-height:360px; min-height:360px; min-height:360px;"
                                src="<?php echo $v['photo']; ?>"
                                alt="<?php echo $v['name']; ?>"></a>
                        <div class="agent-details">
                            <h3><a href="#"><?php echo $v['name']; ?></a></h3>
                            <p class="designation"><?php echo $v['cargo']; ?></p>
                        </div>
                       
                    </div>
                </div>
				<?php $i++; endforeach; ?>
				
			</div>
            </div>
        </div>
    </div>
	-->

    <?php //get_sidebar(); ?>
    <?php get_footer(); ?>