<?php
/**
 * Template Name: Pagina de producto detalle
 *
 * @package WordPress
 */
get_header(); ?>
<?php
$ppc = $_GET["id"];
$args = [
    "method" => "GET",
]; //Inmuebles //$inmueblerest = "http://localhost/puntacana-api/property/$ppc";
$inmueblerest = "http://venetronic.com/property/$ppc";
$response = wp_remote_request($inmueblerest, $args);
$destacados = json_decode(wp_remote_retrieve_body($response), true);
$destacados = $destacados["data"];
$inmueblerest =
    "http://venetronic.com/category?limit=3&city=" .
    $destacados["city"] .
    "&type=" .
    $destacados["typeval"];
$response = wp_remote_request($inmueblerest, $args);
$random = json_decode(wp_remote_retrieve_body($response), true);
$random = $random["items"];
$text = rawurlencode("https://trasciendeinmobiliaria.com/inmueble/?id=" . $ppc);
?>
<div id="ModalContact" class="modal animated bounceIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="overflow:auto;">
            <div class="sidebar-area" id="formcontactoMovil">
                <div class="find-propertise-sidebar">
                    <h3 style="font-size:16px;">Agendar visita <i class="fa fa-remove" data-dismiss="modal"></i></h3>
                    <div class="listed-keyword" id="graciascontactoM" style="display:none;">
                        <p style="text-align:center; ">
                   <i class="fa fa-thumbs-o-up" aria-hidden="true" style="font-size: 100px; color: #77c720;"></i>
						<h2 style="font-weight: 700;
							font-size: 25px;
							transition: all 0.35s ease-out; text-align:center">Trasciende Inmobiliaria</h2>
							<p> Agradece tu interés en nuestros servicios; en breve nos pondremos en contacto contigo.</p>

                        </p>
                    </div>
                    <div class="listed-keyword">
                        <form id="contactFormM" name="contactFormM">
                            <img src=<?php echo $destacados["imagen"][0][
                                "path"
                            ]; ?> alt="" class="ImgTeGustoEstaPropiedad">
                            <p style="text-align:center; ">
                                <strong style="font-size: 17px; "> ¿Te gustó esta propiedad? </strong>
                            </p>
                            <ul>
							
							  <li>
                                    <div class="single-field">
                                        <div class="input-box">
                                            <input type="text" class="form-control" placeholder="Nombre y Apellido" name="nameM"
                                                requerid="requerid" id="nameM">
                                        </div>
                                    </div>
                                </li>
								
                                <li>
                                    <div class="single-field">
                                        <div class="input-box">
                                            <input type="text" class="form-control" placeholder="Celular" id="phoneM" name="phoneM"
                                                requerid="requerid">

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-field">
                                        <div class="input-box">
                                            <input type="text" class="form-control" placeholder="Email" id="emailM" name="emailM"
                                                requerid="requerid">
                                        </div>
                                    </div>
                                </li>
                                <li >
                                <div class="single-field">
                                    <div class="input-box">
                                        <textarea name="messageM" class="form-control" >Hola, estoy interesado en esta propiedad con referencia <?php echo $destacados[
                                            "id"
                                        ]; ?>. Quisiera que me contacten para recibir mas información</textarea>
                                    </div>
                                </div>
                             </li>
                                <li>
                                    <div class="read-more">
                                        <button type="submit" class="btn btn-success" id="enviarM"
                                    >CONTACTAR </button>

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

<div class="property-page-area" style="padding:0px;" id="main-content">
    <div class="full-container is-mobile">
        <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h4 style="color: #77c720; padding:15px 10px 0px 10px; margin:0px; text-transform: uppercase;">
                        <?php echo $destacados["type"]; ?> </h4>
                    <h4 style="padding:10px;"><?php echo $destacados[
                        "name"
                    ]; ?> </h4>
                    <?php echo $destacados["reference"]; ?>
                    <div class="pricemovilDiv">
                        <span class="pricemovilSpan">Precio<br /></span>
                        <span class="pricemovilSpan2">
                            <?php echo $destacados["money"]; ?>
                            <?php echo number_format(
                                $destacados["price"],
                                0,
                                ".",
                                ","
                            ); ?></span>
                    </div>
</div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="property-slider">
                    <div class="single-portfolio-gellary">
                        <ul id="image-galleryMovil" class="gallery">
                            <?php foreach ($destacados["imagen"] as $v): ?>
                            <li data-thumb="<?php echo $v[
                                "path"
                            ]; ?>" data-src="<?php echo $v["path"]; ?>">
                                <a href="<?php echo $v[
                                    "path"
                                ]; ?>" data-lightbox="image-1"
                                    data-title="<?php echo $destacados[
                                        "name"
                                    ]; ?>">
                                    <div
                                        style='height: 250px; background-image: url("<?php echo $v[
                                            "path"
                                        ]; ?>"); background-size: contain; background-repeat: no-repeat; background-position: 50% 50%;'>
                                    </div>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                
                </div>
                <div class="property-details" style="margin-top:0px;">
                    <div class="single-property-details" style="margin-top:0px; padding:20px;">
                        <h4 style=" margin-bottom: -20px;">Información Esencial:</h4>
                        <div class="agent-area" style="border: 1px solid #77c720; background-color: #c7c7c72b;">
                            <div class="media">
                                <div class="media-body">
                                    <div class="single-property-details" style="margin-top:0px;">
                                        <div class="single-informations">
                                            <?php if ($destacados["id"]): ?>
                                            <div>
                                                <div class="div55"><i class="fa fa-check-circle vinetas"></i>ID de propiedad
                                                </div>
                                                <div class="div50">000<?php echo $destacados[
                                                    "id"
                                                ]; ?>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                            <?php if (
                                                $destacados["subcategory"]
                                            ): ?>
                                            <div>
                                                <div class="div55"><i class="fa fa-check-circle vinetas"></i>Tipo</div>
                                                <div class="div50" >
                                                    <?php echo $destacados[
                                                        "subcategory"
                                                    ]; ?>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                            <?php if (
                                                $destacados["areatotal"]
                                            ): ?>
                                            <div>
                                                <div class="div55"><i class="fa fa-check-circle vinetas"></i>Área Total</div>
                                                <div class="div50">
                                                    <?php echo $destacados[
                                                        "areatotal"
                                                    ]; ?> M2</div>
                                            </div>
                                            <?php endif; ?>
                                            <?php if ($destacados["area"]): ?>
                                            <div>
                                                <div class="div55"><i class="fa fa-check-circle vinetas"></i>Área Construida:
                                                </div>
                                                <div class="div50">
                                                    <?php echo $destacados[
                                                        "area"
                                                    ]; ?> M2</div>
                                            </div>
                                            <?php endif; ?>
                                            <?php if (
                                                $destacados["bedrooms"]
                                            ): ?>
                                            <div>
                                                <div class="div55"><i class="fa fa-check-circle vinetas"></i>Dormitorios</div>
                                                <div class="div50">
                                                    <?php echo $destacados[
                                                        "bedrooms"
                                                    ]; ?>
                                                </div>
                                            </div>
                                            <?php endif; ?>

                                            <?php if (
                                                $destacados["bathrooms"]
                                            ): ?>
                                            <div>
                                                <div class="div55"><i class="fa fa-check-circle vinetas"></i>Baños</div>
                                                <div class="div50">
                                                    <?php echo $destacados[
                                                        "bathrooms"
                                                    ]; ?>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                            <?php if (
                                                $destacados["garages"]
                                            ): ?>
                                            <div>
                                                <div class="div55"><i class="fa fa-check-circle vinetas"></i>Cochera</div>
                                                <div class="div50">
                                                    <?php echo $destacados[
                                                        "garages"
                                                    ]; ?>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                            <?php if ($destacados["pisos"]): ?>
                                            <div>
                                                <div class="div55"><i class="fa fa-check-circle vinetas"></i>Pisos</div>
                                                <div class="div50">
                                                    <?php echo $destacados[
                                                        "pisos"
                                                    ]; ?>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                            <?php if (
                                                $destacados["ascensores"]
                                            ): ?>
                                            <div>
                                                <div class="div55"><i class="fa fa-check-circle vinetas"></i>Ascensores</div>
                                                <div class="div50">
                                                    <?php echo $destacados[
                                                        "ascensores"
                                                    ]; ?>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                            <?php if (
                                                $destacados["commercial"]
                                            ): ?>
                                            <div>
                                                <div class="div55"><i class="fa fa-check-circle vinetas"></i>Uso Comercial
                                                </div>
                                                <div class="div50">
                                                    <?php echo !empty(
                                                        $destacados[
                                                            "commercial"
                                                        ]
                                                    )
                                                        ? "Si"
                                                        : "No"; ?>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                            <?php if (
                                                $destacados["antiguedad"]
                                            ): ?>
                                            <div>
                                                <div class="div55"><i class="fa fa-check-circle vinetas"></i>Antigüedad:</div>
                                                <div class="div50">
                                                    <?php if (
                                                        $destacados["tag"] ==
                                                        "Estreno"
                                                    ) {
                                                        echo "Estreno";
                                                    } else {
                                                        echo $destacados[
                                                            "antiguedad"
                                                        ];
                                                    } ?>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                            <?php if (
                                                $destacados["mascotas"]
                                            ): ?>
                                            <div>
                                                <div class="div55"><i class="fa fa-check-circle vinetas"></i>Mascota:</div>
                                                <div class="div50">
                                                    <?php echo !empty(
                                                        $destacados["mascotas"]
                                                    )
                                                        ? "Si"
                                                        : "No"; ?>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-property-details" style="padding:0px 20px;;">
                    <h4><strong>Descripción:</strong></h4>
                </div>
                <p style="text-align: justify; padding:0px 20px;;">
                    <?php echo $destacados["description"]; ?>
                </p>
                <div class="single-property-details" style="padding:0px 15px">
                    <h4 style="display: inline-block;"><strong>Información General:</strong></h4>
                    <i class="pull-right flip fa fa-chevron-down" style="margin-top: 12px;"></i>
                    <div class="single-informations" style="display:none;">
                        <?php if ($destacados["statusinmueble"]): ?>
                        <div>
                            <div class="div55"><i class="fa fa-check-circle vinetas"></i>ID de propiedad</div>
                            <div class="div50">000
                                <?php echo $destacados["id"]; ?>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if ($destacados["professional"]): ?>
                        <div>
                            <div class="div55"><i class="fa fa-check-circle vinetas"></i>Uso Profesional</div>
                            <div class="div50"> <?php echo !empty(
                                $destacados["professional"]
                            )
                                ? "Si"
                                : "No"; ?>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if ($destacados["professional"]): ?>
                        <div>
                            <div class="div55"><i class="fa fa-check-circle vinetas"></i>Luminosidad</div>
                            <div class="div50"> <?php echo !empty(
                                $destacados["luminosidad"]
                            )
                                ? "Si"
                                : "No"; ?>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if ($destacados["luminosidad"]): ?>
                        <div>
                            <div class="div55"><i class="fa fa-check-circle vinetas"></i>Luminosidad</div>
                            <div class="div50"><?php echo $destacados[
                                "luminosidad"
                            ]; ?></div>
                        </div>

                        <?php endif; ?>
                        <?php if ($destacados["departforpisos"]): ?>
                        <div>
                            <div class="div55"><i class="fa fa-check-circle vinetas"></i>Departamento por pisos</div>
                            <div class="div50"><?php echo $destacados[
                                "departforpisos"
                            ]; ?>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if ($destacados["ascensores"]): ?>
                        <div>
                            <div class="div55"><i class="fa fa-check-circle vinetas"></i>Ascensores</div>
                            <div class="div50"><?php echo $destacados[
                                "ascensores"
                            ]; ?>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if ($destacados["disposition"]): ?>
                        <div>
                            <div class="div55"><i class="fa fa-check-circle vinetas"></i>Disposición</div>
                            <div class="div50"><?php echo $destacados[
                                "disposition"
                            ]; ?>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if ($destacados["typegarages"]): ?>
                        <div>
                            <div class="div55"><i class="fa fa-check-circle vinetas"></i>Tipo Cochera</div>
                            <div class="div50"><?php echo $destacados[
                                "typegarages"
                            ]; ?>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if ($destacados["services"]): ?>
                        <div>
                            <div class="div55"><i class="fa fa-check-circle vinetas"></i>Puerta cochera</div>
                            <div class="div50"><?php echo $destacados[
                                "doorgarage"
                            ]; ?></div>
                        </div>
                    </div>
                    <?php endif; ?>


                    <div class="separador"></div>
                </div>
            </div>

            <div class="single-property-details margin-top" style="padding:0px 30px;">
                <?php if ($destacados["services"]): ?>
                <div>
                    <h4 style="display: inline-block;"><strong>Servicios:</strong></h4>
                    <i class="pull-right flip fa fa-chevron-down" style="margin-top: 12px;"></i>
                    <div class="single-informations" style="display:none;">
                        <ul style="display: flex;  flex-wrap: wrap;     margin-left: 6px;">
                            <?php foreach ($destacados["services"] as $v): ?>
                            <li style="width: 250px;">
                                <i class="fa fa-check-circle vinetas"></i> <?php echo $v; ?>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <?php endif; ?>
                <div class="separador"></div>


                <?php if ($destacados["ambiences"]): ?>
                <div>
                    <h4 style="display: inline-block;"><strong>Ambientes:</strong></h4>
                    <i class="pull-right flip fa fa-chevron-down" style="margin-top: 12px;"></i>
                    <div class="single-informations" style="display:none;">
                        <ul style="display: flex;  flex-wrap: wrap;     margin-left: 6px;">
                            <?php foreach ($destacados["ambiences"] as $v): ?>
                            <li style="width: 250px;">
                                <i class="fa fa-check-circle vinetas"></i> <?php echo $v; ?>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <?php endif; ?>

                <div class="separador"></div>

                <?php if ($destacados["services"]): ?>
                <div>
                    <h4 style="display: inline-block;"><strong>Adicionales:</strong></h4>
                    <i class="pull-right flip fa fa-chevron-down" style="margin-top: 12px;"></i>
                    <div class="single-informations" style="display:none;">
                        <ul style="display: flex;  flex-wrap: wrap;     margin-left: 6px;">
                            <?php foreach ($destacados["additionals"] as $v): ?>
                            <li style="width: 250px;">
                                <i class="fa fa-check-circle vinetas"></i> <?php echo $v; ?>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <?php endif; ?>

                <div class="separador"></div>


                <?php if ($destacados["common_areas"]): ?>
                <div>
                    <h4 style="display: inline-block;"><strong>Áreas Comunes:</strong></h4>
                    <i class="pull-right flip fa fa-chevron-down" style="margin-top: 12px;"></i>
                    <div class="single-informations" style="display:none;">
                        <ul style="display: flex;  flex-wrap: wrap;     margin-left: 6px;">
                            <?php foreach (
                                $destacados["common_areas"]
                                as $v
                            ): ?>
                            <li style="width: 250px;">
                                <i class="fa fa-check-circle vinetas"></i> <?php echo $v; ?>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <?php endif; ?>

                <div class="separador"></div>

                <?php if ($destacados["caracteristicas"]): ?>
                <div>
                    <h4 style="display: inline-block;"><strong>Caracteristicas:</strong></h4>
                    <i class="pull-right flip fa fa-chevron-down" style="margin-top: 12px;"></i>
                    <div class="single-informations" style="display:none;">
                        <ul style="display: flex;  flex-wrap: wrap;     margin-left: 6px;">
                            <?php foreach (
                                $destacados["caracteristicas"]
                                as $v
                            ): ?>
                            <li style="width: 250px;">
                                <i class="fa fa-check-circle vinetas"></i> <?php echo $v; ?>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <?php endif; ?>
            </div>

            <div class="separador"></div>

            <div class="single-property-details" style="padding:0px 30px;">
                <h4><strong>Ubicación:</strong></h4>
                <div class="single-informations">
                    <ul>
                        <li>
                            <?php echo $destacados["reference"]; ?>
                        </li>
                    </ul>
                </div>
                <!-- Google Map Start Here -->
                <div id="mapm" style="width:100%;height:350px;"></div>
                <!-- Google Map Form Start Here -->
            </div>

            <div class="pageDetailMovilAction">
                  
                        <button type="button" class="btn buttonWhatsapps">
                            <i class="fa fa-whatsapp"></i>
                            <a href="https://api.whatsapp.com/send?phone=51991892097&text=Hola, estoy interesado en esta propiedad con referencia <?php echo $text; ?>. Quisiera que me contacten para recibir mas información"
                        target="_blank"> Whatsapp       </a>
                        </button>
              
                    <button type="button" class="btn buttonContactar" data-toggle="modal" data-target="#ModalContact" >Contactar
                    </button>
            </div>
        </div>
    </div>
</div>
</div>
<div class="container not-is-mobile">
    <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h3><?php echo $destacados["name"]; ?>
                        <span style="float:right; padding:5px; border-radius:5px; color:black; text-align:right;">
                            <span style="color: #77c720;"> <?php echo $destacados[
                                "type"
                            ]; ?></span><br />
                            <?php echo $destacados["money"]; ?>
                            <?php echo number_format(
                                $destacados["price"],
                                0,
                                ".",
                                ","
                            ); ?>
                        <div class="footer-social-icons" style="margin-top:0px;">
                        <!--
                            
<script>
    
const shareData = {
  title: <?php echo $destacados["name" ]; ?>,
  text:  <?php echo $destacados["description" ]; ?>,
  url: <?php echo $_SERVER["HTTP_HOST"]; ?>
}

</script>


-->
	                            <ul>
	                                <li><a href="#" onclick="window.alert('Error Reportado')"><i class="fa fa-bug"></i></a></li>
	                                <li><a href="#" onclick="window.print()"><i class="fa fa-print"></i></a></li>
	                                <li><a href="#" onclick="navigator.share({title: '<?php echo $destacados['name']; ?>',  url: '<?php echo $_SERVER['HTTP_HOST']; ?>' })"><i class="fa fa-share-alt"></i></a></li>
	                            </ul>
	                        </div>    
                        </span>
                    </h3>
                    <ul style=" margin-bottom:20px;">
                    <?php if(!empty($destacados["reference"])) { ?>
                        <li><i class="flaticon-placeholder"></i>
                            <?php echo $destacados["reference"]; ?>
                        </li>
                        <?php } ?>
                        <li> &nbsp; Area:
                            <?php echo $destacados[
                                "areatotal"
                            ]; ?> M2 - Dormitorios /
                            <?php echo $destacados[
                                "bedrooms"
                            ]; ?> &nbsp; - &nbsp; Baños /
                            <?php echo $destacados["bathrooms"]; ?> &nbsp; -
                            <?php if ($destacados["garages"]) {
                                echo "Cocheras: " . $destacados["garages"];
                            } ?>
                        </li>
                    </ul>
    </div>
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="property-slider">
                <div class="A">
              
                    <div class="single-portfolio-gellary">
                        <ul id="image-gallery" class="gallery">

                            <?php if(!empty($destacados['video'])): ?>
                                <li  data-thumb="https://invisionstudio.com/wp-content/uploads/2016/03/The-Boutique-Real-Estate-Group-Play-Button.jpg" data-src="<?php echo $destacados["imagen"][0]['path']; ?>">
                                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/<?php echo $destacados['video']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </li>
                            <?php endif; ?>
                            <?php foreach ($destacados["imagen"] as $v): ?>
                            <li data-thumb="<?php echo $v[
                                "path"
                            ]; ?>" data-src="<?php echo $v["path"]; ?>">
                                <a href="<?php echo $v[
                                    "path"
                                ]; ?>" data-lightbox="image-1"
                                    data-title="<?php echo $destacados[
                                        "name"
                                    ]; ?>">
                                    <div
                                        style='height: 500px; background-image: url("<?php echo $v[
                                            "path"
                                        ]; ?>"); background-size: contain; background-repeat: no-repeat; background-position: 50% 50%;'>

                                    </div>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="property-details" style="margin-top:20px;">
                    <div class="single-property-details">
                    <h4>Información Esencial:</h4>
                </div>
                        <div class="single-property-details"  style="border: 1px solid #77c720; background-color: #c7c7c72b;">

                            <div class="agent-area" style="margin-top:10px;">
                                <div class="media">
                                    <div class="media-body" style="padding-top: 20px;">   
  
                                        <div class="single-property-details" style="margin-top:0px;">
                                            <div class="single-informations">
                                                <ul style="display: flex;  flex-wrap: wrap;">
                                                    <?php if (
                                                        $destacados["id"]
                                                    ): ?>
                                                    <li style="width: 205px;"><i class="fa fa-check-circle vinetas"></i>ID de
                                                        propiedad: 000<?php echo $destacados[
                                                            "id"
                                                        ]; ?> </li>
                                                    <?php endif; ?>
                                                    <?php if (
                                                        $destacados[
                                                            "subcategory"
                                                        ]
                                                    ): ?>
                                                    <li style="width: 205px;"><i class="fa fa-check-circle vinetas"></i>Tipo:
                                                        <?php echo $destacados[
                                                            "subcategory"
                                                        ]; ?></li>
                                                    <?php endif; ?>
                                                    <?php if (
                                                        $destacados["areatotal"]
                                                    ): ?>
                                                    <li style="width: 205px;"><i class="fa fa-check-circle vinetas"></i>Área
                                                        Total:
                                                        <?php echo $destacados[
                                                            "areatotal"
                                                        ]; ?> M2</li>
                                                    <?php endif; ?>
                                                    <?php if (
                                                        $destacados["area"]
                                                    ): ?>
                                                    <li style="width: 205px;"><i class="fa fa-check-circle vinetas"></i>Área
                                                        Construida: <?php echo $destacados[
                                                            "area"
                                                        ]; ?> M2</li>
                                                    <?php endif; ?>
                                                    <?php if (
                                                        $destacados["bedrooms"]
                                                    ): ?>
                                                    <li style="width: 205px;"><i
                                                            class="fa fa-check-circle vinetas"></i>Dormitorios:
                                                        <?php echo $destacados[
                                                            "bedrooms"
                                                        ]; ?></li>
                                                    <?php endif; ?>
                                                    <?php if (
                                                        $destacados["bathrooms"]
                                                    ): ?>
                                                    <li style="width: 205px;"><i class="fa fa-check-circle vinetas"></i>Baños:
                                                        <?php echo $destacados[
                                                            "bathrooms"
                                                        ]; ?></li>
                                                    <?php endif; ?>
                                                    <?php if (
                                                        $destacados["garages"]
                                                    ): ?>
                                                    <li style="width: 205px;"><i
                                                            class="fa fa-check-circle vinetas"></i>Cochera:
                                                        <?php echo $destacados[
                                                            "garages"
                                                        ]; ?></li>
                                                    <?php endif; ?>
                                                    <?php if (
                                                        $destacados["pisos"]
                                                    ): ?>
                                                    <li style="width: 205px;"><i class="fa fa-check-circle vinetas"></i>Pisos:
                                                        <?php echo $destacados[
                                                            "pisos"
                                                        ]; ?></li>
                                                    <?php endif; ?>
                                                    <?php if (
                                                        $destacados[
                                                            "ascensores"
                                                        ]
                                                    ): ?>
                                                    <li style="width: 205px;"><i
                                                            class="fa fa-check-circle vinetas"></i>Ascensores:
                                                        <?php echo $destacados[
                                                            "ascensores"
                                                        ]; ?></li>
                                                    <?php endif; ?>
                                                    <?php if (
                                                        $destacados[
                                                            "commercial"
                                                        ]
                                                    ): ?>
                                                    <li style="width: 205px;"><i class="fa fa-check-circle vinetas"></i>Uso
                                                        Comercial:
                                                        <?php echo !empty(
                                                            $destacados[
                                                                "commercial"
                                                            ]
                                                        )
                                                            ? "Si"
                                                            : "No"; ?>
                                                    </li>
                                                    <?php endif; ?>
                                                    <?php if (
                                                        $destacados[
                                                            "antiguedad"
                                                        ]
                                                    ): ?>
                                                    <li style="width: 205px;"><i
                                                            class="fa fa-check-circle vinetas"></i>Antigüedad:
                                                         <?php if (
                                                             $destacados[
                                                                 "tag"
                                                             ] == "Estreno"
                                                         ) {
                                                             echo "Estreno";
                                                         } else {
                                                             echo $destacados[
                                                                 "antiguedad"
                                                             ];
                                                         } ?></li>
                                                    <?php endif; ?>
                                                    <?php if (
                                                        $destacados["mascotas"]
                                                    ): ?>
                                                    <li style="width: 205px;"><i
                                                            class="fa fa-check-circle vinetas"></i>Mascota:
                                                        <?php echo !empty(
                                                            $destacados[
                                                                "mascotas"
                                                            ]
                                                        )
                                                            ? "Si"
                                                            : "No"; ?>
                                                    </li>
                                                    <?php endif; ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-property-details" style="margin-top:20px;">
                    <h4>Descripción:</h4>
                </div>
                <p style="text-align: justify;">
                    <?php echo $destacados["description"]; ?>
                </p>
                <div class="single-property-details">
                    <h4>Información General:</h4>
                    <div class="single-informations">
                        <ul style="display: flex;  flex-wrap: wrap;     margin-left: 18px;">
                            <?php if ($destacados["statusinmueble"]): ?>
                            <li style="width: 250px;"><i class="fa fa-check-circle vinetas"></i>Estado del inmueble:
                                <?php echo $destacados["statusinmueble"]; ?>
                            </li>
                            <?php endif; ?>
                            <?php if ($destacados["professional"]): ?>
                            <li style="width: 250px;"><i class="fa fa-check-circle vinetas"></i>Uso Profesional:
                                <?php echo !empty($destacados["professional"])
                                    ? "Si"
                                    : "No"; ?>
                            </li>
                            <?php endif; ?>
                            <?php if ($destacados["luminosidad"]): ?>
                            <li style="width: 250px;"><i class="fa fa-check-circle vinetas"></i>Luminosidad:
                                <?php echo $destacados["luminosidad"]; ?>
                            </li>
                            <?php endif; ?>
                            <?php if ($destacados["departforpisos"]): ?>
                            <li style="width: 250px;"><i class="fa fa-check-circle vinetas"></i>Departamento por pisos:
                                <?php echo $destacados["departforpisos"]; ?>
                            </li>
                            <?php endif; ?>
                            <?php if ($destacados["ascensores"]): ?>
                            <li style="width: 250px;"><i class="fa fa-check-circle vinetas"></i>Ascensores:
                                <?php echo $destacados["ascensores"]; ?>
                            </li>
                            <?php endif; ?>
                            <?php if ($destacados["disposition"]): ?>
                            <li style="width: 250px;"><i class="fa fa-check-circle vinetas"></i>Disposición:
                                <?php echo $destacados["disposition"]; ?>
                            </li>
                            <?php endif; ?>
                            <?php if ($destacados["typegarages"]): ?>
                            <li style="width: 250px;"><i class="fa fa-check-circle vinetas"></i>Tipo Cochera:
                                <?php echo $destacados["typegarages"]; ?>
                            </li>
                            <?php endif; ?>
                            <?php if ($destacados["services"]): ?>
                            <li style="width: 250px;"><i class="fa fa-check-circle vinetas"></i>Puerta cochera:
                                <?php echo $destacados["doorgarage"]; ?>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="single-property-details margin-top">
                    <?php if ($destacados["services"]): ?>
                    <h4>Servicios:</h4>
                    <div class="single-informations">
                        <ul style="display: flex;  flex-wrap: wrap;     margin-left: 18px;">
                            <?php foreach ($destacados["services"] as $v): ?>
                            <li style="width: 250px;">
                                <i class="fa fa-check-circle vinetas"></i> <?php echo $v; ?>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                    <?php if ($destacados["ambiences"]): ?>
                    <h4>Ambientes:</h4>
                    <div class="single-informations">
                        <ul style="display: flex;  flex-wrap: wrap;     margin-left: 18px;">
                            <?php foreach ($destacados["ambiences"] as $v): ?>
                            <li style="width: 250px;">
                                <i class="fa fa-check-circle vinetas"> </i><?php echo $v; ?>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                    <?php if ($destacados["services"]): ?>
                    <h4>Adicionales:</h4>
                    <div class="single-informations">
                        <ul style="display: flex;  flex-wrap: wrap;     margin-left: 18px;">
                            <?php foreach ($destacados["additionals"] as $v): ?>
                            <li style="width: 250px;">
                                <i class="fa fa-check-circle vinetas"> </i><?php echo $v; ?>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                    <?php if ($destacados["common_areas"]): ?>
                    <h4>Áreas Comunes:</h4>

                    <div class="single-informations">
                        <ul style="display: flex;  flex-wrap: wrap;     margin-left: 18px;">
                            <?php foreach (
                                $destacados["common_areas"]
                                as $v
                            ): ?>
                            <li style="width: 250px;">
                                <i class="fa fa-check-circle vinetas"></i><?php echo $v; ?>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                    <?php if ($destacados["caracteristicas"]): ?>
                    <h4>Caracteristicas:</h4>
                    <div class="single-informations">
                        <ul style="display: flex;  flex-wrap: wrap;     margin-left: 18px;">
                            <?php foreach (
                                $destacados["caracteristicas"]
                                as $v
                            ): ?>
                            <li style="width: 250px;">
                                <i class="fa fa-check-circle vinetas"></i><?php echo $v; ?>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                    <h4 style="margin-top:20px;">Ubicación:</h4>
                    <div class="single-property-details margin-top">
                        <div class="single-informations">
                            <ul>
                                <li>
                                    <?php echo $destacados["reference"]; ?>
                                </li>
                            </ul>
                        </div>
                        <!-- Google Map Start Here -->
                        <div id="map" style="width:100%;height:350px;"></div>
                        <!-- Google Map Form Start Here -->
                    </div>
                    <!-- -->
                </div>
            </div>
            <div class="property-grid-view-area property-grid-view-two-area" style="padding:0px;">
                <div class="property-content-area">
                    <div class="grid-view-area">
                        <h4 style="font-size: 24px;"><strong>Propiedades Similares:</strong></h4>
                        <?php foreach ($random as $v): ?>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 padding-top">
                        <div class="ribbon" style="left: 20px;
    top: 36px;">
                                        <span style="font-size:10px;"> <?php echo $v[
                                            "tag"
                                        ]; ?></span>
                                    </div>
                            <div class="single-listing">
                                
                           
                                <div class="listing-image">
                                    <a href="<?php echo get_site_url() .
                                        "/inmueble?id=" .
                                        $v["id"]; ?>"
                                        style="background:none;padding: 0px;">
                                        <img src="<?php echo $v["imagen"][
                                            "img"
                                        ]; ?>" alt="<?php echo $v["name"]; ?>"
                                            style="min-height:180px; max-height: 180px; width:260px">
                                    </a>
                                    <a href="<?php echo get_site_url() .
                                        "/inmueble?id=" .
                                        $v["id"]; ?>"><i
                                            class="fa fa-plus" aria-hidden="true"></i></a>
                                </div>

                                <div class="property-details" style="margin-top:0px; padding-top: 0px;">
                                    <span
                                        style="float:left; color:black; font-weight: bold; "><?php echo $v[
                                            "type"
                                        ]; ?></span>
                                    <span
                                        style="float:right; border-radius:5px; color:black; font-weight: bold; color: #77c720;"><?php echo $destacados[
                                            "money"
                                        ]; ?>
                                        <?php echo number_format(
                                            $v["price"],
                                            0,
                                            ".",
                                            ","
                                        ); ?></span>
                                    <br />
                                    <h3><a style="font-size:15px;"
                                            href="<?php echo get_site_url() .
                                                "/inmueble?id=" .
                                                $v[
                                                    "id"
                                                ]; ?>" alt="<?php echo $v[
    "name"
]; ?>" >
                                            
                                            <?php echo strlen($v["name"]) >= 60
                                                ? substr(
                                                        $v["name"],
                                                        0,

                                                        60
                                                    ) . "..."
                                                : $v["name"]; ?>
                                        
                                        </a>
                                    </h3>
                                    <p>
                                        <?php echo $v["city"]; ?>
                                    </p>
                                    <ul style="display:inline-flex;     margin-left: -10px;">
                                        <li style="margin-right: 10px;">
                                            <i class="fa fa-home" style=" color: #77c720;"></i> 
                                            <?php echo $v[
                                                "areatotal"
                                            ]; ?> <small>M2</small>
                                        </li>
                                        <li style="margin-right: 10px;">
                                            <i class="fa fa-bed" style=" color: #77c720;"></i> 
                                            <?php echo $v["bedrooms"]; ?>
                                        </li>
                                        <li style="margin-right: 10px;">
                                            <i class="flaticon-bath" style="color:  #77c720;"></i> 
                                            <?php echo $v["bathrooms"]; ?>
                                        </li>
                                        <li>
                                            <i class="fa fa-car" style="color: #77c720;"></i> 
                                            <?php echo $v["garages"]; ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 not-is-mobile" id="sidebar" style="min-height: 2700px;">
            <div class="sidebar-area " style="position: absolute;
    top: 0px;
    width: 100%;
    height: 100%;">
                <div class="find-propertise-sidebar sticky2" style="position: -webkit-sticky;
	position: sticky;
	top: 0;">
                    <h3 style="font-size:16px;">Agendar visita</h3>
                    <div class="listed-keyword" id="graciascontacto" style="display:none; text-align:center;">
                        <i class="fa fa-thumbs-o-up" aria-hidden="true" style="font-size: 100px; color: #77c720;"></i>
						<h2 style="font-weight: 700;
							font-size: 25px;
							transition: all 0.35s ease-out; text-align:center">Trasciende Inmobiliaria</h2>
							<p> Agradece tu interés en nuestros servicios; en breve nos pondremos en contacto contigo.</p>
                    </div>
                    <div class="listed-keyword" id="formcontacto">
                    <img src=<?php echo $destacados["imagen"][0][
                        "path"
                    ]; ?> alt="" class="ImgTeGustoEstaPropiedad">
                        <p style="text-align:center; ">
                            <strong style="font-size: 17px; "> ¿Te gustó esta propiedad? </strong>
                        </p>
						 <form id="contactForm" name="contactForm">
                        <ul>
                            <li>
                                <div class="single-field">
                                    <div class="input-box">
                                        <input type="text" class="form-control" placeholder="Nombre y Apellido" name="name"
                                            id="nameE">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-field">
                                    <div class="input-box">
                                        <input type="text" class="form-control" placeholder="Celular"  name="phone" id="phoneE">
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="single-field">
                                    <div class="input-box">
                                        <input type="text" class="form-control" placeholder="Email"  name="email" id="emailE">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-field">
                                    <div class="input-box">
                                        <textarea name="messageE" class="form-control" >Hola, estoy interesado en esta propiedad con referencia <?php echo $destacados[
                                            "id"
                                        ]; ?>. Quisiera que me contacten para recibir mas información</textarea>
                                    </div>
                                </div>
                            </li>
                            <li>
                               	<div class="g-recaptcha" data-sitekey="6LcFdsgUAAAAABSFaKRwS-lw14o4BQ-wmy2yL8l0"></div>
								<div style="color:red;" id="reCaptchaError" ></div>
                            </li>
                            <li>
                                <div class="read-more">
                                        <button type="submit" class="btn btn-success" id="enviar">CONTACTAR </button>
                                  
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
<script>
function initMap() {
    // var uluru = {lat: 13.710655, lng: -89.214351};
    var uluru = {
        lat: <?php echo $destacados["lat"]; ?> ,
        lng : <?php echo $destacados["lng"]; ?>
    };
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 14,
        center: uluru
    });
    var map2 = new google.maps.Map(document.getElementById('mapm'), {
        zoom: 14,
        center: uluru
    });
  
	 <?php if ($destacados["typeMap"] == 1): ?>
    var marker = new google.maps.Marker({
        position: uluru,
        map: map
    });
	 <?php else: ?>
    var cityCircle = new google.maps.Circle({
        strokeColor: '#FF0000',
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: '#FF0000',
        fillOpacity: 0.35,
        map: map,
        center: uluru,
        radius: 300
    });
	 <?php endif; ?>
}
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHvNtbYw3JMfjFkqF7rSgDCVksva0snpA&callback=initMap">
</script>
<?php get_footer(); ?>

<script>

function functioForm() {
	$("#contactForm").validate({
		lang: 'es',
		errorClass: "my-error-class",
		validClass: "my-valid-class",
		rules: {
				nameE: {
					required: true,
				},
				phoneE: {
					required: true,
				},
				emailE: {
					required: true,
				}
		},
		submitHandler: function(form) {   
			console.log('llego al submit')
			var response = grecaptcha.getResponse();
			if(response.length == 0){
				console.log('verifica el captcha')
				$( '#reCaptchaError' ).html( '<p>Verifica el recaptchat</p>' );
			} else {
				console.log('llego al submit VERSION escritorio')
				 var URLactual = window.location.href
                 console.log(URLactual)
				jQuery.ajax({
					url: 'https://trasciendeinmobiliaria.com/email/email.php',
					type: 'POST',
					data: {
						 name: document.getElementById("nameE").value,
						phone: document.getElementById("phoneE").value,
						email: document.getElementById("emailE").value,
						message: document.getElementById("messageE").value,
						subject: 'Nuevo Mensaje de Agendar Visita',
                        url: URLactual,
                        urlIMG: <?php echo $destacados["imagen"][0]["path"]; ?>
					},
					success: function(msg) {
						document.getElementById("formcontacto").style.display = "none";
						document.getElementById("graciascontacto").style.display = "block";
						$('#ModalContact').modal('hide');
					},
                    error: function (jqXhr, textStatus, errorMessage) { // error callback 
                        console.log('ERORR: ' + errorMessage);
                    }
                })	
			}		
		}   
	}
);





}
function functioFormM() {
$("#contactFormM").validate({
		lang: 'es',
		errorClass: "my-error-class",
		validClass: "my-valid-class",
		rules: {
				nameM: {
					required: true,
				},
				phoneM: {
					required: true,
				},
				emailM: {
					required: true,
				}
		},
		submitHandler: function(form) {   
				console.log('llego al submit VERSION MOVIL Y enviado')
				 var URLactual = window.location.href
				jQuery.ajax({
					url: 'https://trasciendeinmobiliaria.com/email/email.php',
					type: 'POST',
					data: {
						name: document.getElementById("nameM").value,
						phone: document.getElementById("phoneM").value,
						email: document.getElementById("emailM").value,
						message: document.getElementById("messageM").value,
						subject: 'Nuevo Mensaje de Agendar Visita',
						url: URLactual,
                        urlIMG: <?php echo $destacados["imagen"][0]["path"]; ?>
					},
					success: function(msg) {
						document.getElementById("formcontactoMovil").style.display = "none";
						document.getElementById("graciascontactoM").style.display = "block";
						$('#ModalContact').modal('hide');
					}
				})	
		}   
	}
);




}


document.getElementById('enviar').onclick = functioForm;
document.getElementById('enviar').ontouchstart = functioForm;



document.getElementById('enviarM').onclick = functioFormM;
document.getElementById('enviarM').ontouchstart = functioFormM;


</script>