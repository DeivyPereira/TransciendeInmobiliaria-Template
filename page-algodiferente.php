<?php
/**
 * Template Name: Algo Diferente
 *
 * @package WordPress
 */
get_header(); ?>
<div class="services-area" style="background-color: #cdcdcd3d; padding-top:10px;">
    <div class="container" style=" background-color:white; border-radius:5px;">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 acurate wow fadeInLeft"
                style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft; padding:10px;"
                data-wow-delay="0.5s">
                <div class="service-content">
                    <div class="media">
                        <h4 class="media-heading titulopaginainterna">¿CUÁL ES EL INMUEBLE QUE ESTÁS BUSCANDO?
                            </h4>
                            <p style="text-align: justify; margin:10px">
                                ¿No tienes tiempo para buscar tu inmueble deseado?. TRASCIENDE INMOBILIARIA encontrará
                                el
                                inmueble que necesitas gratis. Déjanos saber tu requerimiento y nos pondremos en
                                contacto
                                contigo mostrándote varias opciones ideales para ti. ¡La Búsqueda es Gratuita!
                            </p>

                            <div class=" is-mobile">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/diferente.jpg" alt=""
                                    style="width:100%; margin-bottom:30px;">
                            </div>
                            <div class="main-conatct-form-area" id="formcontacto">
                                <div class="main-contact-form">
                                    <form style="background: #F5F5F5;
    padding: 10px;
    border-radius: 5px;" id="contactForm" name="contactForm">
                                        <fieldset>
                                        <div class="col-md-6 col-xs-12 col-sm-12">
                                                <p><strong>Tipo de Operación:</strong></p>
                                                <div class="form-group">
                                                    <select name="type" id="type">
                                                        <option value="Quiero Comprar" selected>Quiero Comprar</option>
                                                        <option value="Quiero Alquilar">Quiero Alquilar</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xs-12 col-sm-12">
                                                <div class="form-group">
                                                    <p><strong>Tipo de Inmueble:</strong></p>
                                                    <select name="Departamentos" id="category">
                                                        <option value="Departamentos" selected>
                                                            Departamento</option>
                                                        <option value="Casas"> Casa</option>
                                                        <option value="Terrenos"> Terreno</option>
                                                        <option value="Oficinas"> Oficina</option>
                                                        <option value="Locales Comerciales"> Local Comercial
                                                        </option>
                                                        <option value="Locales Industriales"> Local Industrial
                                                        </option>
                                                        <option value="Hoteles">Hoteles
                                                        </option>
                                                        <option value="Habitación">Habitación
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xs-12 col-sm-12">
                                                <div class="form-group">
                                                    <select name="city[]" multiple="multiple" class="3col active" id="city">
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
                                                        <option value="San Juan de Lurigancho">San Juan de Lurigancho
                                                        </option>
                                                        <option value="San Juan de Miraflores">San Juan de Miraflores
                                                        </option>
                                                        <option value="San Luis">San Luis</option>
                                                        <option value="San Martín de Porres">San Martín de Porres
                                                        </option>
                                                        <option value="San Miguel">San Miguel</option>
                                                        <option value="Santa Anita">Santa Anita</option>
                                                        <option value="Santa María del Mar">Santa María del Mar</option>
                                                        <option value="Santa Rosa"> Santa Rosa</option>
                                                        <option value="Santiago de Surco">Santiago de Surco</option>
                                                        <option value="Surquillo">Surquillo</option>
                                                        <option value="Villa El Salvador">Villa El Salvador</option>
                                                        <option value="Villa María del Triunfo">Villa María del Triunfo
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-xs-12 col-sm-12 ">
                                                <div class="input-box" style="text-align: center;">

                                                    <p style="display:inline-block; float:left; margin-right: 20px;">
                                                        <strong>Tipo de Moneda:</strong>
                                                    </p>
                                                    <label class="radio-label-vertical"
                                                        style="float: left; padding: 0px; padding-right: 20px;">
                                                        <input type="radio" name="money" value="Dolares"
                                                            style="float: right; position: static; height: 20px; margin-right: 0px;  margin-left: 10px;">Dolares</label>
                                                    <label class="radio-label-vertical"
                                                        style="float: left;   padding: 0px;">
                                                        <input type="radio" name="money" value="Soles"
                                                            style="float: right; position: static; height:  20px; margin-right: 0px;  margin-left: 20px;">Soles</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xs-12 col-sm-12 ">
                                                <p><strong>Area (m2):</strong></p>
                                                <div class="form-group">
                                                    <div class="input-box">
                                                        <input type="number" class="form-control" placeholder="Area Min" min="0"
                                                            id="minarea" style="display:inline-block; width:42%" >
                                                        <input type="number" class="form-control" placeholder="Area Max" min="0"
                                                            id="maxarea" style="display:inline-block; width:42%">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-xs-12 col-sm-12 ">
                                                <p><strong>Precio:</strong></p>
                                                <div class="form-group">
                                                    <div class="input-box">
                                                        <input type="number" class="form-control" placeholder="Precio Min" min="0"
                                                            id="minprecio" style="display:inline-block; width:42%">
                                                        <input type="number" class="form-control" placeholder="Precio Max" min="0"
                                                            id="maxprecio" style="display:inline-block; width:42%">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xs-12 col-sm-12">
                                                <div class="form-group">
                                                    <select name="dormitorios" id="dormitorios">
                                                        <option value="" selected="selected">Dormitorios</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xs-12 col-sm-12">
                                                <div class="form-group">
                                                    <select name="banos" id="banos">
                                                        <option value="" selected="selected">Baños</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xs-12 col-sm-12">
                                                <div class="form-group">
                                                    <select name="cocheras" id="cocheras">
                                                        <option value="" selected="selected">Cocheras</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-xs-12 col-sm-12">
                                                <div class="form-group">
                                                    <p
                                                        style="text-shadow: 2px 2px #00000038; font-size: 18px; font-weight: bold;">
                                                        Describe tu inmueble</p>
                                                    <small>Ingresa información acerca del o los inmuebles que quieres
                                                        para comprar o alquilar. Ejemplo: 1er Piso, frente a parque,
                                                        acepta mascota, ingreso para discapacitados, etc.
                                                    </small>
                                                    <textarea style="width:100%" rows="8" id="message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-xs-12 col-sm-12">
                                                <p
                                                    style="text-shadow: 2px 2px #00000038; font-size: 18px; font-weight: bold;">
                                                    CONTÁCTAME</p>
                                            </div>
                                            <div class="col-md-6 col-xs-12 col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="name" name="name"
                                                        placeholder="Nombre y Apellido*" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xs-12 col-sm-12">
                                                <div class="form-group">
                                                    <input type="phone" class="form-control" placeholder="Celular*" id="phone" name="phone"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xs-12 col-sm-12">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" placeholder="Email*" id="email" name="email"
                                                        required>
                                                </div>
                                            </div>
											<div class="col-md-12 col-xs-12 col-sm-12">
												<div class="g-recaptcha" data-sitekey="6LcFdsgUAAAAABSFaKRwS-lw14o4BQ-wmy2yL8l0"></div>
												<div style="color:red;" id="reCaptchaError" ></div>
											</div>
                                            <div class="col-md-12 col-xs-12 col-sm-12">
                                                <div class="form-group">
                                                    <button class="btn-send" type="submit" id="enviarF">Enviar Mensaje</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
							 <div class="main-contact-form" id="graciascontacto" style="display:none; text-align: center; ">
				<i class="fa fa-thumbs-o-up" aria-hidden="true" style="font-size: 100px; color: #77c720;"></i>
                    <h3 style="font-weight: 700;
							font-size: 25px;
							transition: all 0.35s ease-out; text-align:center">Trasciende Inmobiliaria</h3>
							<p> Agradece tu interés en nuestros servicios; en breve nos pondremos en contacto contigo.</p>
                </div>
                        </div>
                    </div>
                </div>
            </div>
            
    </div>
</div>
</div>
<?php get_footer(); ?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/jquery.multiselect.css">
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.multiselect.js"></script>
<script>
$(document).ready(function() {
    $('select[multiple].active.3col').multiselect({
        placeholder: 'Seleccione los  distritos de su interes',
        search: true,
        searchOptions: {
            'default': 'Escriba la ubicación de preferencia'
        },
        maxWidth: 250
    });

    $('#minarea').change(function(){
		$('#maxarea').prop('min',this.value)
    });
    $('#minprecio').change(function(){
		$('#maxprecio').prop('min',this.value)
	});
});
</script>
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
					url: 'https://trasciendeinmobiliaria.com/mail/mail.php',
					type: 'POST',
					data: {
						 name: document.getElementById("name").value,
						phone: document.getElementById("phone").value,
						email: document.getElementById("email").value,
						city: document.getElementById("city").value,
						type: document.getElementById("type").value,
						category: document.getElementById("category").value,
						maxarea: document.getElementById("maxarea").value,
						minarea: document.getElementById("minarea").value,
						maxprecio: document.getElementById("maxprecio").value,
						minprecio: document.getElementById("minprecio").value,
						dormitorios: document.getElementById("dormitorios").value,
						banos: document.getElementById("banos").value,
						cocheras: document.getElementById("cocheras").value,
						money: $('input[name="money"]:checked').val(),
						message: document.getElementById("message").value,
						subject: 'Nuevo mensaje de Busco Algo Diferente',
						url: URLactual
					},
					success: function(msg) {
						document.getElementById("formcontacto").style.display = "none";
						document.getElementById("graciascontacto").style.display = "block";
					}
				})
			}		
		}   
	}
);
}
document.getElementById('enviarF').onclick= functioForm;
document.getElementById('enviarF').ontouchstart= functioForm;
</script>