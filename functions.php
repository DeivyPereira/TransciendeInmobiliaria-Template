<?php
add_action( 'wp_enqueue_scripts', 'inputtitle_submit_scripts' );
add_action( 'wp_ajax_ajax-inputtitleSubmit', 'myajax_inputtitleSubmit_func' );
add_action( 'wp_ajax_nopriv_ajax-inputtitleSubmit', 'myajax_inputtitleSubmit_func' );
function inputtitle_submit_scripts() {
  //  wp_enqueue_script( 'inputtitle_submit', get_template_directory_uri() . '/assets/js/call.js', array( 'jquery' ) );
    wp_localize_script( 'inputtitle_submit', 'PT_Ajax', array(
            'ajaxurl'   => admin_url( 'admin-ajax.php' ),
            'nextNonce' => wp_create_nonce( 'myajax-next-nonce' )
        )
    );
}
function myajax_inputtitleSubmit_func() {
    // check nonce
    $nonce = $_POST['nextNonce'];
    if ( ! wp_verify_nonce( $nonce, 'myajax-next-nonce' ) ) {
        die ( 'Busted!' );
    }
    $name = ($_POST['doc']);
    $phone = ($_POST['phone']);
    $email = ($_POST['email']);

    $email_title = "Llamame Venetronics -". $_POST['phone'];

    $email_message = "Doc: ".$name."\n </br>";
    $email_message .= "Telf: <a href='tel:".$phone." > ". $phone. "</a> \n </br>";
    $email_message .= "Correo: ".$email."\n </br>";


    $to = 'deivyp@gmail.com';
    $headers = array('Content-Type: text/html; charset=UTF-8');

    $result = wp_mail( $to, $email_title, $email_message, $headers );

    if($result):
        echo json_encode( array('success' => true) );
    else:

        $headers = 'From: '.$to."\r\n".
            'Reply-To: '.$to."\r\n" .
            'X-Mailer: PHP/' . phpversion();

        @mail("deivyp@gmail.com", "Problem Sending Email With Postmark", $email_message, $headers);
    endif;
    // IMPORTANT: don't forget to "exit"
    exit;
}


/** Habilitación de Imagen Destacada */
if (function_exists('add_theme_support'))
    add_theme_support('post-thumbnails');

// Registro del menú de WordPress

add_theme_support('nav-menus');

if (function_exists('register_nav_menus')) {
    register_nav_menus(
        array(
            'main' => 'Main'
        )
    );
}

//  Main Sidebar
if (function_exists('register_sidebar'))
    register_sidebar(array(
        'name' => 'Main Sidebar',
        'before_widget' => '<hr>',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

/** Funcion para traer Imagen destacada **/
function get_post_imagen_url($post_id)
{
    $post_thumbnail_id = get_post_thumbnail_id($post_id);
    $url = wp_get_attachment_url($post_thumbnail_id);
	if(empty($url)){
		return "http://didicolin.site/html/statepress/statepress-default/images/blog/1.jpg";
	}else{
		
		return $url;
	}	
}


/** Informacion de Categoria **/
function get_category_info($post_id, $slug = "title")
{
    $val = "";
    $categories = get_the_category($post_id);
    $category_link = get_category_link($categories[0]->cat_ID);
    if ($slug == "title"):
        $val = $categories[0]->name;
    endif;
    if ($slug == "url"):
        $val = $category_link;
    endif;
    return $val;
}



function pagination_numeric_posts_nav()
{

    if (is_singular())
        return;

    global $wp_query;

    /** Stop execution if there's only 1 page */
    if ($wp_query->max_num_pages <= 1)
        return;

    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
    $max = intval($wp_query->max_num_pages);

    /** Add current page to the array */
    if ($paged >= 1)
        $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ($paged >= 3) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if (($paged + 2) <= $max) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '
	<section class="section--teal section--catalogue">
		<div class="container">
			<div class="row">
				<ul class="accreditations">' . "\n";

    /** Previous Post Link */
    if (get_previous_posts_link())
        printf('<li class="button button--white">%s</li>' . "\n", get_previous_posts_link());

    /** Link to first page, plus ellipses if necessary */
    if (!in_array(1, $links)) {
        $class = 1 == $paged ? ' class="class="button  button--white""' : '';

        printf('<li%s class="button button--white"><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');

        if (!in_array(2, $links))
            echo '<li class="button button--white">…</li>';
    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort($links);
    foreach ((array)$links as $link) {
        $class = $paged == $link ? ' class="button  button--white activenav"' : '';
        printf('<li%s class="button button--white"><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)), $link);
    }

    /** Link to last page, plus ellipses if necessary */
    if (!in_array($max, $links)) {
        if (!in_array($max - 1, $links))
            echo '<li class="button button--white">…</li>' . "\n";

        $class = $paged == $max ? ' class="button  button--white activenav"' : '';
        printf('<li%s class="button button--white"><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($max)), $max);
    }

    /** Next Post Link */
    if (get_next_posts_link())
        printf('<li class="button button--white">%s</li>' . "\n", get_next_posts_link());

    echo '</ul></div></div></section>' . "\n";

}
 add_action( 'plugins_loaded', 'function_name' );

function custom_excerpt_length( $length ) {
     return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

//Adding the Open Graph in the Language Attributes
function add_opengraph_doctype( $output ) {
        return $output . ' xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"';
    }
add_filter('language_attributes', 'add_opengraph_doctype');
 
//Lets add Open Graph Meta Info
 
function insert_fb_in_head() {
    global $post;
    if ( !is_singular()) //if it is not a post or a page
        return;
        echo '<meta property="fb:admins" content="YOUR USER ID"/>';
        echo '<meta property="og:title" content="' . get_the_title() . '"/>';
        echo '<meta property="og:type" content="article"/>';
        echo '<meta property="og:url" content="' . get_permalink() . '"/>';
        echo '<meta property="og:site_name" content="Your Site NAME Goes HERE"/>';
    if(!has_post_thumbnail( $post->ID )) { //the post does not have featured image, use a default image
        $default_image="https://trasciendeinmobiliaria.com/wp-content/uploads/2019/09/logo.jpg"; //replace this with a default image on your server or an image in your media library
        echo '<meta property="og:image" content="' . $default_image . '"/>';
    }
    else{
        $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
        echo '<meta property="og:image" content="' . esc_attr( $thumbnail_src[0] ) . '"/>';
    }
    echo "
";
}
add_action( 'wp_head', 'insert_fb_in_head', 5 );

?>