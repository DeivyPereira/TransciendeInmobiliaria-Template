<?php

get_header(); ?>
<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
    <div id="wrapper-content" class="clearfix ">
        
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