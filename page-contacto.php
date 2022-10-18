<?php
/**
 * Template Name: Pagina de Contacto
 *
 * @package WordPress
 */
get_header(); ?>
<div class="main-conatct-form-area">
    <div class="container" style="padding: 20px;
    background: #F5F5F5;
    border-radius: 5px;">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="page-sidebar-area">
                    <div class="single-sidebar">
                        <h3>Contacto</h3>
                        <nav>
                            <ul style="display: block;">
                                <li style="display: block;"><i class="fa fa-map-marker" aria-hidden="true"></i>Calle, Abutardas Distrito Santa
                                    Anita
                                    Lima</li>
                                <li style="display: block;"><i class="fa fa-envelope-o"
                                        aria-hidden="true"></i><a style="color:black;" target="_blank"
                                        href="mailto:contacto@trasciendeinmobiliaria.com">contacto@trasciendeinmobiliaria.com</a></li>
                                <li style="display: block;"><i class="fa fa-phone" aria-hidden="true"></i>(+51) 991 892 097</li>
                                <li style="display: block;"><i class="fa fa-facebook" aria-hidden="true"></i><a style="color:black;" target="_blank"
                                        href="https://facebook.com/trasciendeinmobiliariaperu/">Facebook</a></li>
                                <li style="display: block;"><i class="fa fa-instagram" aria-hidden="true"></i><a style="color:black;" target="_blank"
                                        href="https://www.instagram.com/trasciendeinmobiliariaperu/?hl=es-la">Instagram</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="main-contact-form" id="formcontacto">
                    <h3>Enviar mensaje</h3>
                    <form  id="contactForm" name="contactForm" >
                        <fieldset>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nombre y apellido*" id="name" name="name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email*" id="email" name="email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Celular*" id="phone" name="phone">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea cols="40" rows="10" class="textarea form-control"
                                        placeholder="Tu Mensaje" id="message"></textarea>
                                </div>
                            </div>
							<div class="col-md-12 col-xs-12 col-sm-12">
								<div class="g-recaptcha" data-sitekey="6LcFdsgUAAAAABSFaKRwS-lw14o4BQ-wmy2yL8l0"></div>
								<div style="color:red;" id="reCaptchaError" ></div>
							</div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button class="btn-send" type="submit" id="enviarF">Enviar</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
					</div>
					<div class="row" id="graciascontacto" style="display:none; text-align:center;">
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
<?php get_footer(); ?>
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
							message: document.getElementById("message").value,
							subject: 'Nuevo mensaje de Contáctenos',
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