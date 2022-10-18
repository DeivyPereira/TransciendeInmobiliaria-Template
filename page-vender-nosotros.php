<?php
/**
 * Template Name: Quieres Vender con Nosotros
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
                        <div class="media-body">
                            <h4 class="media-heading titulopaginainterna">¿Por qué trabajar con TRASCIENDE INMOBILIARIA?
                            </h4>
                            <p style="text-align: justify">
                                Nos enfocamos al 100% en la satisfacción de nuestros clientes, garantizando el éxito en
                                las ventas en un corto plazo y utilizamos una estrategia de maketing mix (Precio,
                                producto, plaza y promoción) distinta para cada inmueble.<br />

                                <h4 class="media-heading titulopaginainterna">¿Que Ofrecemos?</h4>
                                <div class="expandable">

                                    <p>
                                        <i class="fa fa-check vinetas"></i>Contamos con una gran base de datos de
                                        clientes que desean comprar
                                        propiedades.
                                        <br />

                                        <i class="fa fa-check vinetas"></i>Invertimos gran cantidad de recursos en
                                        Marketing y ventas
                                        <br />
                                        <i class="fa fa-check vinetas"></i>Publicamos los inmuebles
                                        en las principales
                                        páginas web inmobiliarias y
                                        periódicos del Perú y en las redes sociales como Facebook e Instagram
                                        garantizando su máxima exposición. <br />
                                        <i class="fa fa-check vinetas"></i>Publicitamos los inmuebles con carteles
                                        de
                                        venta ubicados en lugares
                                        estratégicos. <br />
                                        <i class="fa fa-check vinetas"></i>Brindamos asesoría financiera para
                                        compradores
                                        y vendedores. (Contamos con
                                        contactos en las principales entidades financieras del País, los cuales
                                        brindan
                                        tasas preferenciales para nuestros clientes). <br />
                                        <i class="fa fa-check vinetas"></i>Brindamos asesoría legal (Revisamos que
                                        los
                                        documentos de los inmuebles
                                        estén
                                        totalmente aptos para la venta del mismo y asesoramos en todo lo referente a
                                        los
                                        contratos de compra venta). <br />
                                        <i class="fa fa-check vinetas"></i>Gestionamos las llamadas de todos los
                                        clientes
                                        que pregunten por la
                                        propiedad. <br />

                                        <i class="fa fa-check vinetas"></i>Filtramos a los clientes potenciales que
                                        cuenten con dinero al contado o con
                                        el
                                        crédito aprobado. <br />
                                        <i class="fa fa-check vinetas"></i>Gestionamos las visitas de los clientes
                                        filtrados. <br />
                                        <i class="fa fa-check vinetas"></i>Aplicamos estrategias de venta para
                                        persuadir
                                        a los clientes interesados que
                                        la
                                        propiedad en venta es la mejor para ellos, de ser el caso. <br />
                                        <i class="fa fa-check vinetas"></i>Negociamos los precios de venta finales.
                                        <br />
                                        <i class="fa fa-check vinetas"></i>Imprimimos las copias literales y los
                                        Certificados de Registro inmobiliario
                                        del
                                        inmueble Gratis. <br />
                                        <i class="fa fa-check vinetas"></i>Valoramos y tasamos tu inmueble gratis.

                                </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 acurate wow fadeInRight is-mobile">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/vender.jpg" alt="" style="width:100%; margin-bottom:30px;">
            </div>
            <div style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight; padding:10px;
            border-radius:5px;"
            data-wow-delay="0.5s">
            <div class="main-conatct-form-area">
                <div class="main-contact-form" id="formcontacto">
                    <h2 style="font-weight: 700;
    font-size: 25px;
    transition: all 0.35s ease-out; text-align:center">Vende con Nosotros</h2>
                    <form id="contactForm" name="contactForm">
                        <fieldset>
                            <div class="col-md-6 col-xs-12 col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nombre y Apellido*" id="name" name="name">
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 col-sm-12">
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="Celular*" id="phone"  name="phone">
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 col-sm-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email*" id="email" name="email">
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 col-sm-12">
                                <div class="form-group">
                                    <select name="city" id="city">
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
                            <div class="col-md-6 col-xs-12 col-sm-12">
                                <div class="form-group">
                                    <select name="type" id="type">
                                        <option value="" selected="selected">Vender o alquilar</option>
                                        <option value="Vender">Vender</option>
                                        <option value="Alquilar">Alquilar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 col-sm-12">
                                <div class="form-group">
                                    <select name="category" id="category">
                                        <option value="" selected="selected">Tipo de Propiedad</option>
                                        <option value="Departamentos">Departamentos</option>
                                        <option value="Casas">Casas</option>
                                        <option value="Terrenos">Terrenos</option>
                                        <option value="Oficinas">Oficinas</option>
                                        <option value="Locales Comerciales">Locales Comerciales</option>
                                        <option value="Locales Industriales">Locales Industriales</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 col-xs-12 col-sm-12">
                                <div class="form-group">
                                    <p style="text-shadow: 2px 2px #00000038; font-size: 18px; font-weight: bold;">
                                        Describe tu inmueble</p>
                                    <small>Ingresa información acerca del o los inmuebles que tienes para vender o
                                        alquilar. Ejemplo: 3 dormitorios, 2 baños, 1 cochera etc..
                                    </small>
                                    <textarea style="width:100%" rows="8" id="message"></textarea>
                                </div>
                            </div>
							<div class="col-md-12 col-xs-12 col-sm-12">
								<div class="g-recaptcha" data-sitekey="6LcFdsgUAAAAABSFaKRwS-lw14o4BQ-wmy2yL8l0"></div>
								<div style="color:red;" id="reCaptchaError" ></div>
							</div>
                            <div class="col-md-6 col-xs-12 col-sm-12">
                                <div class="form-group">
                                    <button class="btn-send" type="submit" id="enviarF">Enviar Mensaje</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
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
    <div class="row wow fadeInUp padding-768"
        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;" data-wow-delay="0.4s">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 acurate wow fadeInLeft"
            style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft; display:none;"
            data-wow-delay="0.5s">
            <div class="service-feature-image">
                <div class="feature-image">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/bjehETtlsko" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 acurate wow fadeInRight padding-768"
            style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;" data-wow-delay="0.5s">
            <div class="service-content" style="padding-top: 12px;
    margin-left: 20px;">
                <div class="media">
                    <div class="media-body">


                        <h4 class="media-heading titulopaginainterna">Nuestros Colaboradores</h4>
                        <p style="text-align: justify">
                            Contamos con ingenieros, administradores, marketeros, abogados y financieros en nuestro
                            equipo de trabajo, todos experiencia en el rubro inmobiliario
                        </p>

                        <h4 class="media-heading titulopaginainterna">Experiencia</h4>

                        <p style="text-align: justify">
                            Contamos con mas de 10 años de experiencia, en ventas y marketing enfocadas al cliente
                        </p>
                    </div>
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
						city: document.getElementById("city").value,
						type: document.getElementById("type").value,
						category: document.getElementById("category").value,
						message: document.getElementById("message").value,
						subject: 'Nuevo mensaje de Vende con Nosotros',
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
document.getElementById('enviarF').onclick = functioForm;
document.getElementById('enviarF').ontouchstart = functioForm;
</script>
<script>
$(document).ready(function() {
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        $('div.expandable p').expander({
            slicePoint: 300, // si eliminamos por defecto es 100 caracteres
            expandText: '[...]', // por defecto es 'read more...'
            collapseTimer: 0, // tiempo de para cerrar la expanción si desea poner 0 para no cerrar
            userCollapseText: '[^]' // por defecto es 'read less...'
        });
    }
});
</script>