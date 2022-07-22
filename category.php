<?php get_header(); ?>
    <div class="page-header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="header-page">
                        <h1>Blog - Trasciende Inmobiliaria</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home-page-blog-area">
        <div class="container">
            <div class="row">
                <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="single-blog">
                            
                                <a href="<?php the_permalink(); ?>"><div class="blog-image">
							<img src="<?php echo get_post_imagen_url($id); ?>" alt="image" width="300" height="200" style="min-width:300px; min-height:200px; max-width:300px; max-height:200px;">
						
                            </div></a>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p class="blog-info">
                               
                                   Por: <?php the_author() ?> - <?php the_date(); ?> 
                            </p>
                            <p class="blog-info" style="text-align: justify"><?php echo get_the_excerpt(); ?>.</p>
                            <a href="<?php the_permalink(); ?>">Leer más<i class="fa fa-angle-right" aria-hidden="true"></i></a>
							<p ></p>
                        </div>
                    </div>
                    <?php endwhile; ?>
            </div>
            <?php if (function_exists("pagination")) {
                            pagination($additional_loop->max_num_pages);
                        } ?>
                <?php  else: ?>
                    <div class="entry">
                        <?php _e('Lo sentimos, no hay resultados con este término de búsqueda.'); ?>
                    </div>
                    <?php endif; ?>
        </div>
    </div>
    <?php get_footer(); ?>