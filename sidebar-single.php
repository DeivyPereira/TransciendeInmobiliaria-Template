<?php
$ppc = $_GET['id'];
$args = array(
    'method' => 'GET',
);
$search = $_GET['id'];
$limit = $_GET['limit'] ? $_GET['limit'] : 100;
$pageinfo = $_GET['page'] ? $_GET['page'] : 1;
$codigo = $_GET['code'] ? $_GET['code'] : "";
$type = $_GET['type'] ? $_GET['type'] : "";
$category = $_GET['category'] ? $_GET['category'] : "";
$bathrooms = $_GET['bathrooms'] ? $_GET['bathrooms'] : ""; //baños
$bedrooms = $_GET['bedrooms'] ? $_GET['bedrooms'] : ""; //bedrooms
$price = $_GET['price'] ? $_GET['price'] : "";
$minarea = $_GET['minarea'] ? $_GET['minarea'] : "";
$maxarea = $_GET['maxarea'] ? $_GET['maxarea'] : "";
$parqueo = $_GET['parqueo'] ? $_GET['parqueo'] : "";
$direction = $_GET['direction'] ? $_GET['direction'] : "";
$args = array(
    'method' => 'GET',
);
$search = "?limit=" . $limit . "&page=" . $page . "&code=" . $code . "&type=" . $type . "&category=" . $category . "&bathrooms=" . $bathrooms . "&bedrooms=" . $bedrooms . "&price=" . $price . "&minarea=" . $minarea . "&maxarea=" . $maxarea . "&parqueo=" . $parqueo. "&direction=". $direction;
//Inmuebles
//$inmueblerest = "http://localhost/puntacana-api/property/$ppc";
$inmueblerest = "http://trasciendeinmobiliaria.com/api/category/$search";
$response = wp_remote_request($inmueblerest, $args);
$destacados = json_decode(wp_remote_retrieve_body($response), true);
$pages = $destacados['pages'];
$total = $destacados['total'];
$destacados = $destacados['items'];


//principal

//Destacados
$inmueblerest = "http://trasciendeinmobiliaria.com/api/principal?limit=1";
$response = wp_remote_request($inmueblerest, $args);
$start = json_decode(wp_remote_retrieve_body($response), true);
$start = $start['items'];



// Random

//Inmuebles
$inmueblerest = "http://trasciendeinmobiliaria.com/api/category?limit=3&random=1";
$response = wp_remote_request($inmueblerest, $args);
$random = json_decode(wp_remote_retrieve_body($response), true);
$random = $random['items'];

?>

                <div class="sidebar-area">
                    <div class="find-propertise-sidebar">
                        <h3>Busqueda Avanzada</h3>
                        <div class="listed-keyword">
                        
                        <form action="<?php echo get_permalink(get_page_by_path('categorias')); ?>" method="get" >
                            <ul>
                                <li>                                                
                                    <div class="single-field">
                                        <div class="input-box">
                                            <select name="type" >
                                                <option value="" selected="selected" >Que deseas realizar</option>
                                                <option value="2">Compra</option>
                                                <option value="3">Alquiler</option>
                                                <option value="1">Alquiler Temporal</option>
                                            </select>
                                        </div>
                                    </div>
                                </li>
                                <li>                                                
                                    <div class="single-field">
                                        <div class="input-box">
                                            <select name="category" >
                                                <option value="" selected="selected" >Tipo</option>
                                                <option value="Departamentos">Departamentos</option>
                                                <option value="Casas">Casas</option>
                                                <option value="Hoteles">Hoteles</option>
                                                <option value="Habitación">Habitación</option>
                                                <option value="Terrenos">Terrenos</option>
                                                <option value="Oficinas">Oficinas</option>
                                                <option value="Locales Comerciales">Locales Comerciales</option>
                                                <option value="Locales Industriales">Locales Industriales</option>
                                                <option value="Otros">Otros</option>
                                            </select>
                                        </div>
                                    </div>
                                </li>
                                <li>                                                
                                    <div class="single-field">
                                        <div class="input-box">
                                            <select name="bedrooms">
                                                <option value="" selected="selected">Min Habitaciones</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                                <option value="">3</option>
                                                <option value="">4</option>
                                                <option value="">5</option>
                                            </select>
                                        </div>
                                    </div>
                                </li>
                                <li>                                                
                                    <div class="single-field">
                                        <div class="input-box">
                                            <select name="bathrooms">
                                                <option value="" selected="selected">Min Baños</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                                <option value="">3</option>
                                                <option value="">4</option>
                                                <option value="">5</option>
                                            </select>
                                        </div>
                                    </div>
                                </li>
                                <li>                                                
                                    <div class="single-field">
                                        <div class="input-box">
                                            <select  name="minarea"  >
                                                <option value="" selected="selected">Min Area</option>
                                                <option value="0"> 0 Mts2</option>
                                                        <option value="100"> 100 Mts2</option>
                                                        <option value="300"> 300 Mts2</option>
                                                        <option value="500"> 500 Mts2</option>
                                                        <option value="700"> 700 Mts2</option>
                                                        <option value="900"> 900 Mts2</option>
                                                        <option value="1100"> 1,100 Mts2</option>
                                                        <option value="1300"> 1,300 Mts2</option>
                                                        <option value="1500"> 1,500 Mts2</option>
                                                        <option value="1700"> 1,700 Mts2</option>
                                                        <option value="1900"> 1,900 Mts2</option>
                                            </select>
                                        </div>
                                    </div>
                                </li>
                                <li>                                                
                                    <div class="single-field">
                                        <div class="input-box">
                                            <input type="text" class="form-control" placeholder="Rango de Precio">
                                        </div>
                                    </div>
                                </li>
                                <li>                                                
                                    <div class="single-field">
                                        <div class="input-box">
                                            <input type="text" class="form-control" placeholder="Identificador" name="code">
                                        </div>
                                    </div>
                                </li>
                                <li>                            
                                  <div class="read-more">
                                      <button type="button" class="btn btn-success btn-lg">Buscar Ahora</button>
                                  </div>
                                </li>
                            </ul>
                            
                        </form>
                        </div>
                        <div class="single-sidebar">
                        <h2>Otras Propiedades</h2>
                            <div class="sidebar-top-agint">
                                <?php foreach ($destacados as $v): ?>
                                    <div class="media single-post">
                                        <div class="pull-left">
                                            <a href="<?php echo get_site_url() . "/inmueble?id=" . $v['id']; ?>">
                                                <img class="media-object" src="<?php echo $v['imagen']['img']; ?>" alt="<?php echo $v['name']; ?>">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="property-info">
                                            <h4><a href="<?php echo get_site_url() . "/inmueble?id=" . $v['id']; ?>"><?php echo $v['name']; ?></a></h4>
                                            <ul>
                                                <li><?php echo $v['bathrooms'] ?> Baños</li>
                                                <li><?php echo $v['bedrooms'] ?> Habitaciónes</li>
                                                <li><?php echo $v['area'] ?> Mts2</li>
                                            </ul>
                                            <a href="<?php echo get_site_url() . "/inmueble?id=" . $v['id']; ?>"><?php echo $v['money']; ?> <?php echo $v['price']; ?></a>
                                            </div>
                                        </div>
                                    </div>    
                                <?php endforeach; ?>                      
                            </div>
                        </div>
                        <div class="single-sidebar">
                            <!-- <div class="advertise-area  padding-top">
                                 <img src="images/add.jpg" alt="">
                            </div> -->
                        </div>
                    </div>
                    </div>
<!-- 
<div class="sidebar-mobile-canvas-icon" title="Click to show Canvas Sidebar"><i
        class="fa fa-sliders"></i></div>
<div class="primary-sidebar sidebar col-md-3 sidebar-mobile-canvas gf-sticky">
    <aside id="ere_widget_search_form-2" class="widget ere_widget ere_widget_search_form"><h4
            class="widget-title"><span>Contáctanos</span></h4>

        <div class="ere-property-advanced-search clearfix tab color-dark ">
            <div class="form-search-wrap">
                <div class="form-search-inner">
                    <div class="ere-search-content">
                        <div data-href=""
                             class="search-properties-form">
                            <div class="row">


                                <div class="col-md-12 col-sm-12 col-xs-12 form-group"><p>Te gusto esta propiedad? No
                                        dudes en ponerte en contacto con nosotros para darte mas información</p>
                                </div>
                                <div
                                    class="col-md-12 col-sm-12 col-xs-12 form-group submit-search-form ">

                                </div>
                                <div
                                    class="col-md-12 col-sm-12 col-xs-12 form-group submit-search-form ">
                                    <input type="checkbox" value="politica" id="cboxSMS" checked >
                                    <small>Acepto políticas y términos .</small>
                                </div>
                                <div
                                    class="col-md-12 col-sm-12 col-xs-12 form-group submit-search-form pull-right">

                                  <a href="https://api.whatsapp.com/send?phone=18499161900&text=Hola me gustaria, obtener información respecto al inmueble http://landpuntacana.com/inmueble/?id=<?php echo $ppc; ?>"
                                    <a href="https://api.whatsapp.com/send?phone=18499161900"
                                       target="_blank">
                                        <button type="button" class="ere-advanced-search-btn"  id="sendNewSms"><i
                                                class="fa fa-phone"></i> Contactar via Whatsaaps
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <aside id="ere_widget_mortgage_calculator-2"
           class="widget ere_widget ere_widget_mortgage_calculator"><h4 class="widget-title">
            <span>Calcula tu credito</span>
        </h4>

        <div class="ere-mortgage-wrap">
            <div class="ere-mortgage-form">
                <div class="form-group mc-item"><span class="title-mc-item">Precio de venta</span> <input
                        class="form-control" id="mc_sale_price" type="text" placeholder="RD $"></div>
                <div class="form-group mc-item"><span class="title-mc-item">Pago inicial</span>
                    <input class="form-control" id="mc_down_payment" type="text" placeholder="RD $">
                </div>
                <div class="form-group mc-item"><span class="title-mc-item">Término [Años]</span>
                    <input class="form-control" id="mc_term_years" type="text" placeholder="Años">
                </div>
                <div class="form-group mc-item"><span
                        class="title-mc-item">Tasa de interés en %</span> <input class="form-control"
                                                                                 id="mc_interest_rate"
                                                                                 type="text"
                                                                                 placeholder="%">
                </div>
                <button type="button" id="btn_mc" class="btn btn-md btn-dark btn-classic btn-block">
                    Calcular
                </button>
                <div class="mc-output"></div>
            </div>
        </div>
    </aside>

    <aside id="ere_widget_recent_properties-2"
           class="widget ere_widget ere_widget_recent_properties ere-property"><h4
            class="widget-title"><span>Otras propiedades</span></h4>

        <div class="list-recent-properties">
            <div class="owl-carousel"
                 data-plugin-options='{"items":1, "dots": true, "nav": false, "autoplay": true, "loop": true, "responsive": {}, "speed":10000}'>
                <?php foreach ($destacados as $v): ?>
                    <div class="property-item">
                        <div class="property-inner">
                            <div class="property-image"><img width="370" height="180"
                                                             src="<?php echo $v['imagen']['img']; ?>"
                                                             onerror="this.src = '<?php echo $v['imagen']['img']; ?>';"
                                                             alt="<?php echo $v['name']; ?>"
                                                             title="<?php echo $v['name']; ?>">

                                <div class="property-action block-center">
                                    <div class="block-center-inner">
                                        <div class="property-view-gallery-wrap"
                                             data-toggle="tooltip"
                                             title="<?php echo $v['imagen']['count']; ?> Fotos">
                                            <a
                                                data-property-id="771"
                                                href="javascript:void(0)"
                                                class="property-view-gallery"><i
                                                    class="fa fa-camera"></i></a>
                                        </div>
                                        <div class="social-share">
                                            <div class="social-share-hover"><i class="fa fa-share-alt"
                                                                               aria-hidden="true"></i>

                                                <div class="social-share-list">
                                                    <div class="list-social-icon clearfix"><a
                                                            onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=http%3A//landpuntacana.com/inmueble/?id=<?php echo $v['id']; ?>');"
                                                            href="javascript:void(0)"> <i
                                                                class="fa fa-facebook"></i> </a> <a
                                                            onclick="popUp=window.open('https://twitter.com/home?status=Visualiza%20este%20inmueble%20<?php echo $v['name']; ?>%20http%3A//landpuntacana.com/inmueble/?id=<?php echo $v['id']; ?>','sharer','scrollbars=yes');popUp.focus();return false;"
                                                            href="javascript:void(0)"> <i
                                                                class="fa fa-twitter"></i> </a> <a
                                                            href="javascript:void(0)"
                                                            onclick="popUp=window.open('https://plus.google.com/share?url=http%3A//landpuntacana.com/inmueble/?id=<?php echo $v['id']; ?>','sharer','scrollbars=yes');popUp.focus();return false;">
                                                            <i class="fa fa-google-plus"></i> </a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="property-link"
                                       href="<?php echo get_site_url() . "/inmueble?id=" . $v['id']; ?>"
                                       title="<?php echo $v['name']; ?>"></a></div>
                            </div>
                            <div class="property-item-content"><h4 class="property-title fs-18"><a
                                        href="<?php echo get_site_url() . "/inmueble?id=" . $v['id']; ?>"
                                        title="<?php echo $v['name']; ?>"><?php echo $v['name']; ?></a></h4>

                                <div class="property-price"><span> <?php echo $v['money']; ?> <?php echo $v['price']; ?>  <span
                                            class="property-price-postfix fs-12 accent-color"> / Mes</span> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </aside>


</div>-->