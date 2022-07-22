<?php
/**
 * Template Name: Single
 *
 * @package WordPress
 */
get_header(); ?>
  <?php if (have_posts()) : ?><?php while (have_posts()) : the_post();  ?>
    <div class="page-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header-page">
                            <h1><?php the_title(); ?></h1>
                            <ul>
                                <li> <a href="<?php echo get_option('home'); ?>">Inicio</a> </li>
                                <li><?php the_title(); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-two-page-area">
          <div class="container">
            <div class="row">
               <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                  <div class="single-blog-page">
                    <div class="blog-featured-image">
					 </div>
                    <h3><?php the_title(); ?></h3>
                    <div class="single-blog-content">
                         <?php the_content(); ?>
                    </div>
					<ul>
					
                      <li><span>Por</span> <?php the_author() ?></li>
                      <li><span> - Fecha</span> <?php the_date(); ?> </li>
                    </ul>
                    <div class="row content-info">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="blog-content-tag">
						<ul>
                            <li> <span>Etiquetas: </span> </li>
                            <?php the_tags(); ?>
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right">
                        <div class="blog-content-share-social-icons">
                          <ul>
                            <li> <span>Compartir: </span> </li>
                            <li><a href="http://twitter.com/intent/tweet?text=<?php the_title() ." ". the_permalink();?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>&t=<?php the_title();?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        
                          </ul>
                        </div>
                      </div>
                    </div>
                    
                  </div>
               </div>
		   </div>
	   </div>
   </div>
<?php endwhile; ?>

<?php endif; ?>
<?php get_footer(); ?>