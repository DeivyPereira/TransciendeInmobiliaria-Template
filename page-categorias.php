<?php
/**
 * Template Name: Categorias Casas
 *
 * @package WordPress
 */
get_header(); ?>
<?php
$search = "";
$limit = $_GET['limit'] ? $_GET['limit'] : 10;
$pageinfo = $_GET['pageinfo'] ? $_GET['pageinfo'] : 1;
$codigo = $_GET['id'] ? $_GET['id'] : "";
$type = $_GET['type'] ? $_GET['type'] : "";
$category = $_GET['category'] ? $_GET['category'] : "";
$bathrooms = $_GET['bathrooms'] ? $_GET['bathrooms'] : ""; //baños
$bedrooms = $_GET['bedrooms'] ? $_GET['bedrooms'] : ""; //bedrooms
$money = $_GET['money'] ? $_GET['money'] : "";
$minprice = $_GET['minprice'] ? $_GET['minprice'] : "";
$maxprice = $_GET['maxprice'] ? $_GET['maxprice'] : "";
$minarea = $_GET['minarea'] ? $_GET['minarea'] : "";
$maxarea = $_GET['maxarea'] ? $_GET['maxarea'] : "";
$parqueo = $_GET['parqueo'] ? $_GET['parqueo'] : "";
$garages = $_GET['garages'] ? $_GET['garages'] : "";
$direction = $_GET['direction'] ? $_GET['direction'] : "";
$city = $_GET['city'] ? $_GET['city'] : "";
$description = $_GET['description'] ? $_GET['description'] : "";
$departament = $_GET['departament'] ? $_GET['departament'] : "";
$province = $_GET['province'] ? $_GET['province'] : "";
$city = $_GET['city'] ? $_GET['city'] : "";
$args = array(
    'method' => 'GET',
);
$search="";
$query=array();
if(!empty($limit)){
	$search.="?limit=" . $limit;
}
if(!empty($pageinfo)){
	$search.= "&page=" . $pageinfo;
}
if(!empty($codigo)){
	$search.= "&id=" . $codigo;
}	
if(!empty($type)){
	$search.="&type=" . $type;
}
if(!empty($category)){
	$search.= "&category=" . $category;
}	
if(!empty($bathrooms)){
	$search.= "&bathrooms=" . $bathrooms;
}	
if(!empty($bedrooms)){
	$search.= "&bedrooms=" . $bedrooms;
}	
if(!empty($price)){
	$search.= "&price=" . $price;
	$query['price'] = $price;
}	
if(!empty($minarea)){
	$search.= "&minarea=" . $minarea;
}	
if(!empty($maxarea)){
	$search.= "&maxarea=" . $maxarea;
}
if(!empty($minprice)){
	$search.= "&minprice=" . $minprice;
}	
if(!empty($maxprice)){
	$search.= "&maxprice=" . $maxprice;
}	
if(!empty($money)){
	$search.= "&money=" . $money;
}
if(!empty($garages)){
	$search.= "&garages=" . $garages;
}
if(!empty($direction)){
	$search.= "&direction=" . $direction;
}
if(!empty($city)){
	$search.= "&city=" . $city;
}
if(!empty($description)){
	$search.= "&description=" . $description;
}
if(!empty($departament)){
	$search.= "&departament=" . $departament;
}
if(!empty($province)){
	$search.= "&province=" . $province;
}
if(!empty($city)){
	$search.= "&city=" . $city;
}
//Inmuebles
//$inmueblerest = "http://localhost/puntacana-api/property/$ppc";
$inmueblerest = "http://venetronic.com/category/?$search";

$response = wp_remote_request($inmueblerest, $args);
$destacados = json_decode(wp_remote_retrieve_body($response), true);
$pageselect = $destacados['pages'];
$totalitems = $destacados['total'];
$destacados = $destacados['items'];
$total= count($destacados);

//principal

//Destacados
$inmueblerest = "http://venetronic.com/principal?limit=1";
$response = wp_remote_request($inmueblerest, $args);
$start = json_decode(wp_remote_retrieve_body($response), true);
$start = $start['items'];

//Districtos
$districtrest = "http://venetronic.com/district";
$response = wp_remote_request($districtrest, $args);
$districtinfo = json_decode(wp_remote_retrieve_body($response), true);
$district = $districtinfo['items'];


// Random

//Inmuebles
$inmueblerest = "http://venetronic.com/category?limit=3&random=1";
$response = wp_remote_request($inmueblerest, $args);
$random = json_decode(wp_remote_retrieve_body($response), true);
$random = $random['items'];

$tiposelect = array(2=>'Venta', 1=>'Alquiler');
$moneyselect = array(2=>'Soles', 1=>'Dolares');
$url = 'https://trasciendeinmobiliaria.com/categorias/'.$search;
//$url = "";


function shapeSpace_add_var($url, $key, $value) {
	
	$url = preg_replace('/(.*)(?|&)'. $key .'=[^&]+?(&)(.*)/i', '$1$2$4', $url .'&');
	$url = substr($url, 0, -1);
	
	if (strpos($url, '?') === false) {
		return ($url .'?'. $key .'='. $value);
	} else {
		return ($url .'&'. $key .'='. $value);
	}
}

function shapeSpace_remove_var($url, $key) {
	list($file, $parameters) = explode('?', $url);
	parse_str($parameters, $output);
	unset($output[$key]); 
	$result = $file . '?' . http_build_query($output); 
	return $result;
}
?>
<script>
var urlformavanzado = '<?php echo $url; ?>';
console.log('<?php echo $district; ?>');
</script>


<div id="ModalContact" class="modal animated bounceIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="overflow:auto;">
		
		
		<div class="sidebar-area" id="formcontactoMovil">
			 <div class="find-propertise-sidebar">
                    <h3 style="font-size:16px;">Agendar visita <i class="fa fa-remove" data-dismiss="modal"></i></h3>
                    <div class="listed-keyword" id="graciascontacto" style="display:none;">
                        <p style="text-align:justify; ">
                           
							<i class="fa fa-thumbs-o-up" aria-hidden="true" style="font-size: 100px; color: #77c720;"></i>
								<h3 style="font-weight: 700;
										font-size: 25px;
										transition: all 0.35s ease-out; text-align:center">Trasciende Inmobiliaria</h3>
										<p> Agradece tu interés en nuestros servicios; en breve nos pondremos en contacto contigo.</p>
						   
                        </p>
                    </div>
                    <div class="listed-keyword" >
							<form id="contactForm" name="contactForm">
                        <p style="text-align:justify; ">
                            <strong  style="font-size: 20px;"> Te gustó esta propiedad? <br /></strong>
                            <br /> No dudes en ponerte en contacto con nosotros para darte mas información
                        </p>
                        <ul>
                            <li>
                                <div class="single-field">
                                    <div class="input-box">
                                        <input type="text" class="form-control" placeholder="Email" id="email" requerid="requerid" name="email">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-field">
                                    <div class="input-box">
                                        <input type="text" class="form-control" placeholder="Nombre y Apellido" requerid="requerid" name="name"
                                            id="name">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-field">
                                    <div class="input-box">
                                        <input type="text" class="form-control" placeholder="Telefono" id="phone" requerid="requerid" name="phone">
                                       
                                    </div>
                                </div>
                            </li>
							 <li>
							<div class="single-field">
								<div class="g-recaptcha" data-sitekey="6LcFdsgUAAAAABSFaKRwS-lw14o4BQ-wmy2yL8l0"></div>
								<div style="color:red;" id="reCaptchaError" ></div>
							</div>
							 </li>
                            <li>
                                <div class="read-more"> 
                                        <button type="submit" class="btn btn-success" id="enviarF">CONTACTAR </button>
                                   
                                </div>
                            </li>
                        </ul>
						</form>
                    </div>
                </div>
			</div>
		
		
		</div>
	</div>
</div>


<div id="fsModal" class="modal animated bounceIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="overflow:auto;">
            <div class="sidebar-area">
                <div class="find-propertise-sidebar" style="margin-top: -30px; ">
               <?php $urlM = 'https://'.$_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>
                    <form method="get" action="<?php echo $urlM; ?>">
                        <h3>Buscador Avanzado <i class="fa fa-remove" data-dismiss="modal"></i></h3>
                        <div class="listed-keyword" style="margin-bottom:0px;">
                            <p style="display:inline-block;">Filtros Aplicados</p> <a style="display:inline-block;"
                                href="https://trasciendeinmobiliaria.com/categorias/">
                                <p>Borrar</p>
                            </a>
                            <div></div>
                            <?php if(!empty($type)): ?>
                            <a class="tag" href="<?php echo shapeSpace_remove_var($urlM, 'type'); ?>">
                                <p style="display: inline-block; margin: 0px 5px;">X</p>
                                <?php echo $tiposelect[$type] ; ?>
                            </a>

                            <?php endif; ?>
                            <?php if(!empty($category)):  ?>
                            <a class="tag" href="<?php echo shapeSpace_remove_var($urlM, 'category'); ?>">
                                <p style="display: inline-block; margin: 0px 5px;">X</p>
                                <?php echo $category ; ?>
                            </a>
                            <?php endif; ?>
                            <?php if(!empty($bathrooms)):  ?>
                            <a class="tag" href="<?php echo shapeSpace_remove_var($urlM, 'bathrooms'); ?>">
                                <p style="display: inline-block; margin: 0px 5px;">X</p>
                                Baño <?php echo $bathrooms ; ?>
                            </a>
                            <?php endif; ?>
                            <?php if(!empty($bedrooms)):  ?>
                            <a class="tag" href="<?php echo shapeSpace_remove_var($urlM, 'bedrooms'); ?>">
                                <p style="display: inline-block; margin: 0px 5px;">X</p>
                                Dormitorios <?php echo $bedrooms ; ?>
                            </a>
                            <?php endif; ?>
                            <?php if(!empty($garages)):  ?>
                            <a class="tag" href="<?php echo shapeSpace_remove_var($urlM, 'garages'); ?>">
                                <p style="display: inline-block; margin: 0px 5px;">X</p>
                                Cocheras <?php echo $garages ; ?>
                            </a>
                            <?php endif; ?>
                            <?php if(!empty($minarea)):  ?>
                            <a class="tag" href="<?php echo shapeSpace_remove_var($urlM, 'minarea'); ?>">
                                <p style="display: inline-block; margin: 0px 5px;">X</p>
                                Min Area <?php echo $minarea ; ?>
                            </a>
                            <?php endif; ?>
                            <?php if(!empty($maxarea)):  ?>
                            <a class="tag" href="<?php echo shapeSpace_remove_var($urlM, 'maxarea'); ?>">
                                <p style="display: inline-block; margin: 0px 5px;">X</p>
                                Max Area <?php echo $maxarea ; ?>
                            </a>
                            <?php endif; ?>
                            <?php if(!empty($minprice)):  ?>
                            <a class="tag" href="<?php echo shapeSpace_remove_var($urlM, 'minprice'); ?>">
                                <p style="display: inline-block; margin: 0px 5px;">X</p>
                                Min Precio <?php echo number_format($minprice, 0, ',', ','); ?>
                            </a>
                            <?php endif; ?>
                            <?php if(!empty($maxprice)):  ?>
                            <a class="tag" href="<?php echo shapeSpace_remove_var($urlM, 'maxprice'); ?>">
                                <p style="display: inline-block; margin: 0px 5px;">X</p>
                                Max Precio <?php echo number_format($maxprice, 0, ',', ','); ?>
                            </a>
                            <?php endif; ?>
                            <?php if(!empty($money)):  ?>
                            <a class="tag" href="<?php echo shapeSpace_remove_var($urlM, 'money'); ?>">
                                <p style="display: inline-block; margin: 0px 5px;">X</p>
                                <?php echo $moneyselect[$money] ; ?>
                            </a>
                            <?php endif; ?>
                            <?php if(!empty($departament)):  ?>
                            <a class="tag" href="<?php echo shapeSpace_remove_var($urlM, 'departament'); ?>">
                                <p style="display: inline-block; margin: 0px 5px;">X</p>
                                <?php echo $departament; ?>
                            </a>
                            <?php endif; ?>
                            <?php if(!empty($province)):  ?>
                            <a class="tag" href="<?php echo shapeSpace_remove_var($urlM, 'province'); ?>">
                                <p style="display: inline-block; margin: 0px 5px;">X</p>
                                <?php echo $province; ?>
                            </a>
                            <?php endif; ?>
                            <?php if(!empty($city)):  ?>
                            <a class="tag" href="<?php echo shapeSpace_remove_var($urlM, 'city'); ?>">
                                <p style="display: inline-block; margin: 0px 5px;">X</p>
                                <?php echo $city; ?>
                            </a>
                            <?php endif; ?>

                        </div>
                        <?php if(empty($type)): ?>
                        <div class="listed-keyword" style="margin-bottom:0px;  padding-bottom:0px">
                            <p style="display:inline-block"><strong>Tipo de Operación </strong></p> <i
                                class="pull-right flip fa fa-chevron-down"></i>
                            <div style="display:none;">

                                    <label style="display:block;">
                                    <input type="radio" name="type" value="1">Alquiler</label>

                                    <label style="display:block;">
                                    <input type="radio" name="type" value="2">Venta</label>
                            </div>
                        </div>
                        <?php endif; ?>

                        <div class="listed-keyword" style="margin-bottom:0px;  padding-bottom:0px">
                            <p style="display:inline-block"><strong>Ubicación</strong></p> <i
                                class="pull-right flip  fa fa-chevron-down"></i>
                            <ul style="display:none;">
                                <div class="single-field">
                                    <?php foreach($district as $v): ?>
                                    <label style="display:block;">
                                        <input type="checkbox" name="city"
                                            value="<?php echo $v['city']; ?>"><?php echo $v['city']; ?>
                                        (<?php echo $v['total']; ?>)</label>
                                    <?php endforeach; ?>
                                </div>
                            </ul>
                        </div>
                        <?php if(empty($category)): ?>
                        <div class="listed-keyword" style="margin-bottom:0px;  padding-bottom:0px">
                            <p style="display:inline-block"><strong>Tipo de Inmueble </strong></p> <i
                                class="pull-right flip  fa fa-chevron-down"></i>
                            <div style="display:none;">
                                <label style="display:block;">
                                    <input type="radio" name="category" value="Departamentos">Departamentos</label>

                                <label style="display:block;">
                                    <input type="radio" name="category" value="Casas">Casas</label>

                                <label style="display:block;">
                                    <input type="radio" name="category" value="Hoteles">Hoteles</label>

                                <label style="display:block;">
                                    <input type="radio" name="category" value="Habitación">Habitación</label>

                                <label style="display:block;">
                                    <input type="radio" name="category" value="Terrenos">Terrenos</label>

                                <label style="display:block;">
                                    <input type="radio" name="category" value="Oficinas">Oficinas</label>

                                <label style="display:block;">
                                    <input type="radio" name="category" value="Locales Comerciales">Locales
                                    Comerciales</label>

                                <label style="display:block;">
                                    <input type="radio" name="category" value="Locales Industriales">Locales
                                    Industriales</label>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if(empty($bedrooms)): ?>
                        <div class="listed-keyword" style="margin-bottom:0px;  padding-bottom:0px">
                            <p style="display:inline-block"><strong>Dormitorios</strong></p> <i
                                class="pull-right flip  fa fa-chevron-down"></i>
                            <div>
                                <label class="radio-label-vertical">
                                    <input type="radio" name="bedrooms" value="1">1</label>
                                <label class="radio-label-vertical">
                                    <input type="radio" name="bedrooms" value="2">2</label>
                                <label class="radio-label-vertical">
                                    <input type="radio" name="bedrooms" value="3">3</label>
                                <label class="radio-label-vertical">
                                    <input type="radio" name="bedrooms" value="4">4</label>
                                <label class="radio-label-vertical">
                                    <input type="radio" name="bedrooms" value="5">5</label>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if(empty($bathrooms)): ?>
                        <div class="listed-keyword" style="margin-bottom:0px;  padding-bottom:0px">
                            <p style="display:inline-block"><strong>Baños </strong></p> <i
                                class="pull-right flip  fa fa-chevron-down"></i>
                            <div>
                                <label class="radio-label-vertical">
                                    <input type="radio" name="bathrooms" value="1" >1</label>
                                <label class="radio-label-vertical">
                                    <input type="radio" name="bathrooms" value="2" >2</label>
                                <label class="radio-label-vertical">
                                    <input type="radio" name="bathrooms" value="3" >3</label>
                                <label class="radio-label-vertical">
                                    <input type="radio" name="bathrooms" value="4" >4</label>
                                <label class="radio-label-vertical">
                                    <input type="radio" name="bathrooms" value="5" >5</label>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if(empty($garages)): ?>
                        <div class="listed-keyword" style="margin-bottom:0px;  padding-bottom:0px">
                            <p style="display:inline-block"><strong>Cocheras</strong></p> <i
                                class="pull-right flip  fa fa-chevron-down"></i>
                            <div style="display:none;">
                                <label class="radio-label-vertical">
                                    <input type="radio" name="garages" value="1" >1</label>
                                <label class="radio-label-vertical">
                                    <input type="radio" name="garages" value="2" >2</label>
                                <label class="radio-label-vertical">
                                    <input type="radio" name="garages" value="3" >3</label>
                                <label class="radio-label-vertical">
                                    <input type="radio" name="garages" value="4" >4</label>
                                <label class="radio-label-vertical">
                                    <input type="radio" name="garages" value="5" >5</label>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if(empty($area)): ?>
                        <div class="listed-keyword" style="margin-bottom:0px;  padding-bottom:0px">
                            <p style="display:inline-block"><strong>Area</strong></p> <i
                                class="pull-right flip  fa fa-chevron-down"></i>
                            <div style="display:none; margin-bottom: 10px;">
                                <div class="input-box">
                                    <input type="text" class="form-control" placeholder="Area Min"  name="minarea" value="<?php echo  $_GET['minarea']; ?>"
                                        style="display:inline-block; width:42%">
                                    <input type="text" class="form-control" placeholder="Area Max" name="maxarea" value="<?php echo $_GET['maxarea']; ?>"
                                        style="display:inline-block; width:42%">
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        <div class="listed-keyword" style="margin-bottom:0px;  padding-bottom:0px">
                            <p style="display:inline-block"><strong>Precio</strong></p> <i
                                class="pull-right flip  fa fa-chevron-down"></i>
                            <div style="display:none; margin-bottom: 10px;">
                                <div class="input-box" style="text-align: center;">
                                    <label class="radio-label-vertical">
                                        <input type="radio" name="money" value="1" >Dolares</label>
                                    <label class="radio-label-vertical" style="margin-left: 20px;">
                                        <input type="radio" name="money" value="2" >Soles</label>
                                </div>
                                <div class="input-box">
                                    <input type="text" class="form-control" placeholder="Precio Min"   name="minprice" value="<?php echo $_GET['minprice']; ?>"
                                        style="display:inline-block; width:42%">
                                    <input type="text" class="form-control" placeholder="Precio Max"   name="maxprice" value="<?php echo $_GET['maxprice']; ?>"
                                        style="display:inline-block; width:42%">
                                </div>
                            </div>
                        </div>

                        <div class="listed-keyword">
                            <button class="btn" type="submit" style="margin-bottom: 30px;
    display: block;
    text-align: center;
    width: 95%;
    color: #fff; 
    background-color: #F58634;
    border-color: #F58634;
    ">Aplicar Filtros</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="configSetting is-mobile">
 <input type="hidden"   id="bookId" name="bookId">
    <p style="margin:9px; display:inline-block;">Mostrando <?php echo $pageinfo * 10   ?> de <?php echo $totalitems; ?>
        resultados</p>
    <a class="tag" style="    margin: 9px;
    float: right;
    width: 61px;" data-toggle="modal" data-target="#fsModal">
        <i class="fa fa-sliders"></i>
        Filtrar
    </a>
</div>
<div style="    background: #e4e4e4;">
    <div class="page-header-area"
        style="background-image: url( <?php bloginfo('stylesheet_directory'); ?>/images/panoramica/1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="header-page">
                        <img src="http://trasciendeinmobiliaria.com/wp-content/themes/trasciende/images/logo-trasparente-lado-blanco.png"
                            style="width: 500px; position: inherit;">
                        <ul>
                            <li> <a href="<?php echo get_site_url(); ?>">Inicio</a> </li>
                            <li>Propiedades</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="full-container is-mobile">
        <div class="row">
            <?php foreach ($destacados as $v): 
		  if(empty($v['imagen'])):
			$v['imagen']['img'] =" http://ximg.es/180x260/ffffff/000000";
		  endif;
		?>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 <?php echo ($v['tag']=='Vendido') ? "vendido":""; ?> <?php echo (strlen($v['tag'])>=10) ? "largo":""; ?>"  style="    margin: 10px 0px;
    border-top: 3px solid #7aa80a;">
               
                    <div class="list-view-image">
                        <a href="<?php echo get_site_url() . "/inmueble?id=" . $v['id']; ?>"> <img src="<?php echo $v['imagen']['img']; ?>" alt="<?php echo $v['name']; ?>"
                            style="max-height: 280px;">

                        <div class="ribbon " style="top: -6px;
    left: 10px;">
                            <span> <?php echo $v['tag']?></span>
                        </div>
						</a>
                    </div>
                    <div class="description styledescription" >
                        <div class="titlemobile"style="display: inline-block; "><?php echo $v['subcategory']; ?></div>
						<div class="type" style="display: inline-block;  float: right; margin-right: 5px; margin-top: 7px;">  
						 <button type="button" class="btn" data-toggle="modal" data-target="#ModalContact" data-book-id="<?php echo $v['id']; ?>" style="color: #fff; 
							background-color: #F58634;
							border-color: #F58634;">Contactar 
							</button>
							
						</div>
                        <br />
                        <div class="direction" style="display: inline-block;"><?php echo $v['city']; ?></div><br />
                        <div class="mts" style="display: inline-block;"><?php echo $v['areatotal']; ?> m2</div>
                        <div class="type" style="display: inline-block;  float: right;margin-right: 20px;">
						<?php echo $v['type']; ?></div><br />
                        <div class="price" style="display: inline-block;
    float: right; margin-right: 20px;"><?php echo $v['money']; ?>
                            <?php echo number_format($v['price'], 0, ',', ','); ?></div>
							
                        <div class="bedrooms"><?php echo $v['bedrooms']; ?> Dormitorios</div>
                    </div>
            </div>
            <?php endforeach; ?>
             <div class="pagination-area" style="padding-bottom: 10px;">
                                            <ul>
                                                <?php $totaladividir =  ceil($totalitems/$limit); $i=1; while ($i <= $totaladividir): ?>
                                                <?php if($i== $pageselect){ ?>
                                                <li class="active"><a
                                                        href="<?php echo shapeSpace_add_var($url, 'pageinfo', $i); ?>"><?php echo $i; ?></a>
                                                </li>
                                                <?php }else{ ?>
                                                <li><a
                                                        href="<?php echo shapeSpace_add_var($url, 'pageinfo', $i); ?>"><?php echo $i; ?></a>
                                                </li>
                                                <?php } ?>
                                                <?php $i++; endwhile; ?>
                                            </ul>
                                        </div>
        </div>
    </div>
    <div class="container not-is-mobile">
        <div class="row">
           
		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 not-is-mobile" id="sidebar" style=" margin-right: 25px;">
            <div class="sidebar-area " >
                <div class="find-propertise-sidebar sticky2" >
	
	
                    <h3 style="font-size:16px;">Buscador Avanzado</h3>
                    <div class="listed-keyword" >
							<input type="hidden"   id="bookId" name="bookId">
							<p style="display:inline-block;">Filtros Aplicados</p> <a style="display:inline-block;"
                                href="https://trasciendeinmobiliaria.com/categorias/">
                                <p>Borrar</p>
                            </a>
							</br>
                            <?php if(!empty($type)): ?>
                            <a class="tag" href="<?php echo shapeSpace_remove_var($url, 'type'); ?>">
                                <p style="display: inline-block; margin: 0px 5px;">X</p>
                                <?php echo $tiposelect[$type] ; ?>
                            </a>
                            <?php endif; ?>
                            <?php if(!empty($category)):  ?>
                            <a class="tag" href="<?php echo shapeSpace_remove_var($url, 'category'); ?>">
                                <p style="display: inline-block; margin: 0px 5px;">X</p>
                                <?php echo $category ; ?>
                            </a>
                            <?php endif; ?>
                            <?php if(!empty($bathrooms)):  ?>
                            <a class="tag" href="<?php echo shapeSpace_remove_var($url, 'bathrooms'); ?>">
                                <p style="display: inline-block; margin: 0px 5px;">X</p>
                                Baño <?php echo $bathrooms ; ?>
                            </a>
                            <?php endif; ?>
                            <?php if(!empty($bedrooms)):  ?>
                            <a class="tag" href="<?php echo shapeSpace_remove_var($url, 'bedrooms'); ?>">
                                <p style="display: inline-block; margin: 0px 5px;">X</p>
                                Dormitorios <?php echo $bedrooms ; ?>
                            </a>
                            <?php endif; ?>
                            <?php if(!empty($garages)):  ?>
                            <a class="tag" href="<?php echo shapeSpace_remove_var($url, 'garages'); ?>">
                                <p style="display: inline-block; margin: 0px 5px;">X</p>
                                Cocheras <?php echo $garages ; ?>
                            </a>
                            <?php endif; ?>
                            <?php if(!empty($minarea)):  ?>
                            <a class="tag" href="<?php echo shapeSpace_remove_var($url, 'minarea'); ?>">
                                <p style="display: inline-block; margin: 0px 5px;">X</p>
                                Min Area <?php echo $minarea ; ?>
                            </a>
                            <?php endif; ?>
                            <?php if(!empty($maxarea)):  ?>
                            <a class="tag" href="<?php echo shapeSpace_remove_var($url, 'maxarea'); ?>">
                                <p style="display: inline-block; margin: 0px 5px;">X</p>
                                Max Area <?php echo $maxarea ; ?>
                            </a>
                            <?php endif; ?>
                            <?php if(!empty($minprice)):  ?>
                            <a class="tag" href="<?php echo shapeSpace_remove_var($url, 'minprice'); ?>">
                                <p style="display: inline-block; margin: 0px 5px;">X</p>
                                Min Precio <?php echo number_format($minprice, 0, ',', ','); ?>
                            </a>
                            <?php endif; ?>
                            <?php if(!empty($maxprice)):  ?>
                            <a class="tag" href="<?php echo shapeSpace_remove_var($url, 'maxprice'); ?>">
                                <p style="display: inline-block; margin: 0px 5px;">X</p>
                                Max Precio <?php echo number_format($maxprice, 0, ',', ','); ?>
                            </a>
                            <?php endif; ?>
                            <?php if(!empty($money)):  ?>
                            <a class="tag" href="<?php echo shapeSpace_remove_var($url, 'money'); ?>">
                                <p style="display: inline-block; margin: 0px 5px;">X</p>
                                <?php echo $moneyselect[$money] ; ?>
                            </a>
                            <?php endif; ?>
                            <?php if(!empty($departament)):  ?>
                            <a class="tag" href="<?php echo shapeSpace_remove_var($url, 'departament'); ?>">
                                <p style="display: inline-block; margin: 0px 5px;">X</p>
                                <?php echo $departament; ?>
                            </a>
                            <?php endif; ?>
                            <?php if(!empty($province)):  ?>
                            <a class="tag" href="<?php echo shapeSpace_remove_var($url, 'province'); ?>">
                                <p style="display: inline-block; margin: 0px 5px;">X</p>
                                <?php echo $province; ?>
                            </a>
                            <?php endif; ?>
                            <?php if(!empty($city)):  ?>
                            <a class="tag" href="<?php echo shapeSpace_remove_var($url, 'city'); ?>">
                                <p style="display: inline-block; margin: 0px 5px;">X</p>
                                <?php echo $city; ?>
                            </a>
                            <?php endif; ?>
                        </div>
                        <?php if(empty($type)): ?>
                        <div class="listed-keyword" style="margin-bottom:0px;  padding-bottom:0px">
                            <p style="display:inline-block"><strong>Tipo de Operación </strong></p> <i
                                class="pull-right flip fa fa-chevron-down"></i>
                            <div style="display:none;">
                                <a href="<?php echo shapeSpace_add_var($url, 'type', '1'); ?>">
                                    <p>Alquiler</p>
                                </a>
                                <a href="<?php echo shapeSpace_add_var($url, 'type', '2'); ?>">
                                    <p>Venta</p>
                                </a>
                            </div>
                        </div>
                        <?php endif; ?>
                        <div class="listed-keyword" style="margin-bottom:0px;  padding-bottom:0px">
                            <p style="display:inline-block"><strong>Ubicación</strong></p> <i
                                class="pull-right flip  fa fa-chevron-down"></i>
                            <ul style="display:none;">
                                <div class="single-field">
                                    <?php foreach($district as $v): ?>
                                    <a href="<?php echo shapeSpace_add_var($url, 'city', $v['city']); ?>">
                                        <p><?php echo $v['city']; ?> (<?php echo $v['total']; ?>)</p>
                                    </a>
                                    <?php endforeach; ?>
                                </div>
                            </ul>
                        </div>
                        <?php if(empty($category)): ?>
                        <div class="listed-keyword" style="margin-bottom:0px;  padding-bottom:0px">
                            <p style="display:inline-block"><strong>Tipo de Inmueble </strong></p> <i
                                class="pull-right flip  fa fa-chevron-down"></i>
                            <div style="display:none;">
                                <a href="<?php echo shapeSpace_add_var($url, 'category', 'Departamentos'); ?>">
                                    <p>Departamentos</p>
                                </a>
                                <a href="<?php echo shapeSpace_add_var($url, 'category', 'Casas'); ?>">
                                    <p>Casas</p>
                                </a>
                                <a href="<?php echo shapeSpace_add_var($url, 'category', 'Hoteles'); ?>">
                                    <p>Hoteles</p>
                                </a>
                                <a href="<?php echo shapeSpace_add_var($url, 'category', 'Habitacion'); ?>">
                                    <p>Habitación</p>
                                </a>
                                <a href="<?php echo shapeSpace_add_var($url, 'category', 'Terrenos'); ?>">
                                    <p>Terrenos</p>
                                </a>
                                <a href="<?php echo shapeSpace_add_var($url, 'category', 'Oficinas'); ?>">
                                    <p>Oficinas</p>
                                </a>
                                <a href="<?php echo shapeSpace_add_var($url, 'category', 'Locales Comerciales'); ?>">
                                    <p>Locales Comerciales</p>
                                </a>
                                <a href="<?php echo shapeSpace_add_var($url, 'category', 'Locales Industriales'); ?>">
                                    <p>Locales Industriales</p>
                                </a>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if(empty($bedrooms)): ?>
                        <div class="listed-keyword" style="margin-bottom:0px;  padding-bottom:0px">
                            <p style="display:inline-block"><strong>Dormitorios</strong></p> <i
                                class="pull-right flip  fa fa-chevron-down"></i>
                            <div>
                                <label class="radio-label-vertical"
                                    onclick="javascript:window.location.href='<?php echo shapeSpace_add_var($url, 'bedrooms', '1'); ?>'; return false;">
                                    <input type="radio" name="bath" value="1">1</label>
                                <label class="radio-label-vertical"
                                    onclick="javascript:window.location.href='<? echo shapeSpace_add_var($url, 'bedrooms', '2'); ?>'; return false;">
                                    <input type="radio" name="bath" value="2" required>2</label>
                                <label class="radio-label-vertical"
                                    onclick="javascript:window.location.href='<?php echo shapeSpace_add_var($url, 'bedrooms', '3'); ?>'; return false;">
                                    <input type="radio" name="bath" value="3">3</label>
                                <label class="radio-label-vertical"
                                    onclick="javascript:window.location.href='<?php echo shapeSpace_add_var($url, 'bedrooms', '4'); ?>'; return false;">
                                    <input type="radio" name="bath" value="4">4</label>
                                <label class="radio-label-vertical"
                                    onclick="javascript:window.location.href='<?php echo shapeSpace_add_var($url, 'bedrooms', '5'); ?>'; return false;">
                                    <input type="radio" name="bath" value="5">5</label>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if(empty($bathrooms)): ?>
                        <div class="listed-keyword" style="margin-bottom:0px;  padding-bottom:0px">
                            <p style="display:inline-block"><strong>Baños </strong></p> <i
                                class="pull-right flip  fa fa-chevron-down"></i>
                            <div>
                                <label class="radio-label-vertical"
                                    onclick="javascript:window.location.href='<?php echo shapeSpace_add_var($url, 'bathrooms', '1'); ?>'; return false;">
                                    <input type="radio" name="bath" value="1" required>1</label>
                                <label class="radio-label-vertical"
                                    onclick="javascript:window.location.href='<?php echo shapeSpace_add_var($url, 'bathrooms', '2'); ?>'; return false;">
                                    <input type="radio" name="bath" value="2" required>2</label>
                                <label class="radio-label-vertical"
                                    onclick="javascript:window.location.href='<?php echo shapeSpace_add_var($url, 'bathrooms', '3'); ?>'; return false;">
                                    <input type="radio" name="bath" value="3" required>3</label>
                                <label class="radio-label-vertical"
                                    onclick="javascript:window.location.href='<?php echo shapeSpace_add_var($url, 'bathrooms', '4'); ?>'; return false;">
                                    <input type="radio" name="bath" value="4" required>4</label>
                                <label class="radio-label-vertical"
                                    onclick="javascript:window.location.href='<?php echo shapeSpace_add_var($url, 'bathrooms', '5'); ?>'; return false;">
                                    <input type="radio" name="bath" value="5" required>5</label>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if(empty($garages)): ?>
                        <div class="listed-keyword" style="margin-bottom:0px;  padding-bottom:0px">
                            <p style="display:inline-block"><strong>Cocheras</strong></p> <i
                                class="pull-right flip  fa fa-chevron-down"></i>
                            <div style="display:none;">
                                <label class="radio-label-vertical"
                                    onclick="javascript:window.location.href='<?php echo shapeSpace_add_var($url, 'garages', '1'); ?>'; return false;">
                                    <input type="radio" name="bath" value="1" required>1</label>
                                <label class="radio-label-vertical"
                                    onclick="javascript:window.location.href='<?php echo shapeSpace_add_var($url, 'garages', '2'); ?>'; return false;">
                                    <input type="radio" name="bath" value="2" required>2</label>
                                <label class="radio-label-vertical"
                                    onclick="javascript:window.location.href='<?php echo shapeSpace_add_var($url, 'garages', '3'); ?>'; return false;">
                                    <input type="radio" name="bath" value="3" required>3</label>
                                <label class="radio-label-vertical"
                                    onclick="javascript:window.location.href='<?php echo shapeSpace_add_var($url, 'garages', '4'); ?>'; return false;">
                                    <input type="radio" name="bath" value="4" required>4</label>
                                <label class="radio-label-vertical"
                                    onclick="javascript:window.location.href='<?php echo shapeSpace_add_var($url, 'garages', '5'); ?>'; return false;">
                                    <input type="radio" name="bath" value="5" required>5</label>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if(empty($area)): ?>
                        <div class="listed-keyword" style="margin-bottom:0px;  padding-bottom:0px">
                            <p style="display:inline-block"><strong>Area</strong></p> <i
                                class="pull-right flip  fa fa-chevron-down"></i>
                            <div style="display:none; margin-bottom: 10px;">
                                <div class="input-box">
                                    <input type="text" class="form-control" placeholder="Area Min"  name="minarea" id="minarea"
                                        style="display:inline-block; width:42%">
                                    <input type="text" class="form-control" placeholder="Area Max"  name="maxarea" id="maxarea"
                                        style="display:inline-block; width:42%">
                                    <i class="pull-right flip fa fa-arrow-circle-right formAvanzado"
                                        style="line-height: 35px; font-size: 20px;"></i>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        <div class="listed-keyword" style="margin-bottom:0px;  padding-bottom:0px">
                            <p style="display:inline-block"><strong>Precio</strong></p> <i
                                class="pull-right flip  fa fa-chevron-down"></i>
                            <div style="display:none; margin-bottom: 10px;">
                                <div class="input-box" style="text-align: center;">
                                    <label class="radio-label-vertical">
                                        <input type="radio" name="money" value="1" required>Dolares</label>
                                    <label class="radio-label-vertical" style="margin-left: 20px;">
                                        <input type="radio" name="money" value="2" required>Soles</label>
                                </div>
                                <div class="input-box">
                                    <input type="text" class="form-control" placeholder="Precio Min" name="minprice" id="minprice"
                                        style="display:inline-block; width:42%">
                                    <input type="text" class="form-control" placeholder="Precio Max" name="maxprice" id="maxprice"
                                        style="display:inline-block; width:42%"> 
                                    <i class="pull-right flip fa fa-arrow-circle-right formAvanzado"
                                        style="line-height: 35px; font-size: 20px;"></i>
                                </div>
                            </div>
                        </div>
				</div>
			</div>

		</div>
			
			
			
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" style="margin-left: -30px;">
                <div class="property-grid-view-area property-grid-view-two-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                <div class="property-topbar">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="show-result">
                                            <p>Mostrando <?php echo $pageinfo  *10  ?> de <?php echo $totalitems; ?>
                                                resultados</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="property-content-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                        <div class="list-view-area padding-top">
                                            <?php foreach ($destacados as $v): 
                                              if(empty($v['imagen'])):
												$v['imagen']['img'] =" http://ximg.es/180x260/ffffff/000000";
                                              endif;
                                        ?>
                                            <div class="single-list-view" style="    background: white;
	margin-bottom: 10px;
    box-shadow: bisque;
    border-radius: 10px;">
                                                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 acurate <?php echo ($v['tag']=='Vendido') ? "vendido":""; ?> <?php echo (strlen($v['tag'])>=10) ? "largo":""; ?>">
                                                    
                                        <div class="ribbon" style="left:-5px; top:-5px;">
                                                                <span> <?php echo $v['tag']?></span>
                                                            </div>
                                                    <a
                                                        href="<?php echo get_site_url() . "/inmueble?id=" . $v['id']; ?>">
                                                        <div class="list-view-image" style="margin-top: -10px;
    margin-left: -10px; margin-bottom:0px;">
                                                            <img src="<?php echo $v['imagen']['img']; ?>"
                                                                alt="<?php echo $v['name']; ?>"
                                                                style="max-height: 220px; width:260px">


                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-6 col-md-5 col-sm-5 col-xs-12 acurate">
                                                    <div class="list-view-content">
                                                        <h3><a
                                                                href="<?php echo get_site_url() . "/inmueble?id=" . $v['id']; ?>"><?php echo $v['name']; ?></a>
                                                        </h3>
                                                        <?php if( $v['reference']): ?> 
                                                            <p class="location">
                                                            <?php echo substr($v['reference'], 0,50) ; ?>
                                                        </p>
                                                        <?php endif; ?>
                                                        <p style="text-align: justify">
                                                            <?php echo substr($v['description'], 0,100) ; ?>..</p>
                                                    </div>
                                                    <div class="list-view-informations">
                                                        <ul style="display:inline-flex; padding-left: 20px;">
                                                            <li><i class="fa fa-home"></i>
                                                                <?php echo $v['areatotal']; ?> M2</li>
                                                            <li><i class="fa fa-bed" aria-hidden="true"></i>
                                                                <?php echo $v['bedrooms']; ?> </li>
                                                            <li><i class="flaticon-bath"></i>
                                                                <?php echo $v['bathrooms']; ?>
                                                            </li>
                                                            <li><i class="fa fa-car"></i>
                                                                <?php echo $v['garages']; ?>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 acurate" style="margin-bottom: -10px;">
                                                    <div class="list-view-price">
                                                        <ul>
                                                            <li
                                                                style="padding-top: 20px;  font-size:17px;  text-align: right;">
                                                                <a
                                                                    href="<?php echo get_site_url() . "/inmueble?id=" . $v['id']; ?>">
                                                                    <p
                                                                        style="color:black; font-size:18px;  margin-bottom: 2px;">
                                                                        <?php echo $v['type']?></p>
                                                                    <?php echo $v['money']; ?>
                                                                    <?php echo number_format($v['price'], 0, ',', ','); ?>
                                                                </a>
                                                            </li>
                                                            <li class="view-more" style="float: right;
    width: 60%;"><a href="<?php echo get_site_url() . "/inmueble?id=" . $v['id']; ?>">Ver
                                                                    más</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                        <div class="pagination-area">
                                            <ul>
                                                <?php $totaladividir =  ceil($totalitems/$limit); $i=1; while ($i <= $totaladividir): ?>
                                                <?php if($i== $pageselect){ ?>
                                                <li class="active"><a
                                                        href="<?php echo shapeSpace_add_var($url, 'pageinfo', $i); ?>"><?php echo $i; ?></a>
                                                </li>
                                                <?php }else{ ?>
                                                <li><a
                                                        href="<?php echo shapeSpace_add_var($url, 'pageinfo', $i); ?>"><?php echo $i; ?></a>
                                                </li>
                                                <?php } ?>
                                                <?php $i++; endwhile; ?>
                                            </ul>
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
</div>
<?php

get_footer(); ?>



<script>


function functioForm() {
	$("#contactForm").validate({
		lang: 'es',
		errorClass: "my-error-class",
		validClass: "my-valid-class",
		rules: {
				name: {
					required: true,
				},
				phone: {
					required: true,
				},
				email: {
					required: true,
				}
		},
		submitHandler: function(form) {   
			var response = grecaptcha.getResponse();
			if(response.length == 0){
				$( '#reCaptchaError' ).html( '<p>Verifica el recaptchat</p>' );
			} else {
				 var URLactual = window.location.href
				jQuery.ajax({
					url: 'https://trasciendeinmobiliaria.com/apiv2/mail',
					type: 'POST',
					data: {
						 name: document.getElementById("name").value,
						phone: document.getElementById("phone").value,
						email: document.getElementById("email").value,
						subject: 'Nuevo Mensaje de Agendar Visita',
						url: URLactual
					},
					success: function(msg) {
						var urls = 'https://trasciendeinmobiliaria.com/inmueble/?id='+$("#bookId").val( );
						var strWindowFeatures = "location=yes,height=570,width=520,scrollbars=yes,status=yes";
						var URL = "https://api.whatsapp.com/send?phone=51991892097&text=Hola me Interesa esta propiedad: " + urls;
						var win = window.open(URL, "_blank");
						$('#modal').modal('toggle');
					}
				})
			}		
		}   
	}
);
}

document.getElementById('enviarF').onclick = functioForm;
document.getElementById('enviarF').ontouchstart = functioForm;
</script>