<?php

get_header(); ?>
<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
    <div id="wrapper-content" class="clearfix ">
        <section class="page-title page-title-background" style="padding-top:178px;padding-bottom:178px">
            <div class="page-title-background page-title-parallax"
                 style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/uploads/2016/12/bg-404.jpg)"
                 data-stellar-background-ratio="0.5"></div>
            <div class="vc_row-background-overlay" style="background-color: rgba(0,0,0,0.68)"></div>
            <div class="container">
                <div class="page-title-inner">
                    <div class="page-title-main-info"><h1><?php the_title(); ?></h1></div>
                    <ul class="breadcrumbs">
                        <li><a href="<?php echo get_option('home'); ?>" class="home">Inicio</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <div id="primary-content" class="pd-top-100 pd-bottom-100 single-blog-wrap">
            <div class="container clearfix">
                <div class="single-blog-inner">
                    <article id="post-296"
                             class="post-single clearfix post-296 post type-post status-publish format-gallery hentry category-apartment category-real-estates category-uncategorized tag-building tag-construction post_format-post-format-gallery">
                        <div class="entry-content-wrap">
                            <div class="entry-content clearfix">
                                <div class="vc_row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper"><p><?php the_content(); ?></p></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; ?>

<?php endif; ?>
<?php get_footer(); ?>