<?php
$ppc = $_GET['id'];

$text = rawurlencode("https://trasciendeinmobiliaria.com/inmueble/?id=".$ppc);
?>
<div class="sidebar-area sticky">
    <div class="find-propertise-sidebar">
        <h3 style="font-size:16px;">Agendar visita</h3>
        <div class="listed-keyword">

            <p style="text-align:justify; ">
                <strong style="margin-left: 25px;"> Te gusto esta propiedad? <br/></strong><br/>
				No dudes en ponerte en contacto con nosotros para darte mas información
            </p>
            <ul>
                <li>
                    <div class="single-field">
                        <div class="input-box">
                            <input type="text" class="form-control" placeholder="Email">
                        </div>
                    </div>
                </li>
                <li>
                    <div class="single-field">
                        <div class="input-box">
                            <input type="text" class="form-control" placeholder="Nombre y Apellido">
                        </div>
                    </div>
                </li>
                <li>
                    <div class="single-field">
                        <div class="input-box">
                            <input type="text" class="form-control" placeholder="Telefono">
                        </div>
                    </div>
                </li>

                <li>
                    <input type="checkbox" value="politica" id="cboxSMS" checked>
                    <small>Acepto políticas y términos .</small>
                </li>
                <li>
                    <div class="read-more">
                        <a href="https://api.whatsapp.com/send?phone=51991892097&text=Hola me Interesa esta propiedad: <?php echo $text; ?>" target="_blank">
                            <button type="button" class="btn btn-success">CONTACTAR </button></a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>