<?php get_header(); ?>
<div class="td-category-header td-container-wrap">
    <div class=td-container>
        <div class=td-category-title-holder>
            <h1 class="entry-title td-page-title"><?php esc_html( get_post_format_string( get_post_format() ) ); ?></h1>
        </div>
    </div>
</div>
<div class="td-main-content-wrap td-container-wrap">
    <div class=td-container>
        <div class=td-pb-row>
            <div class="td-pb-span12 td-main-content">
                <div class=td-ss-main-content>

                    <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
                        <div class="td_module_19 td_module_wrap td-animation-stack">
                            <div class=meta-info-container>
                                <div class=td-module-image>
                                    <div class=td-module-thumb><a
                                            href="<?php the_permalink(); ?>"
                                            rel="bookmark" title="<?php the_title(); ?>"><img
                                                width=534 height=462 class=entry-thumb src="<?php echo get_post_imagen_url($id); ?>" alt=""
                                                title="<?php the_title(); ?>"/></a></div>
                                    <a href="<?php echo esc_url(get_category_info($id, 'url')); ?>" class=td-post-category><?php echo get_category_info($id, 'title') ?></a></div>
                                <div class=td-item-details>
                                    <div class=td-module-meta-info>
                                        <h3 class="entry-title td-module-title"><a
                                                href="<?php the_permalink(); ?>"
                                                rel=bookmark title="<?php the_title(); ?>"><?php the_title(); ?></a></h3> <span
                                            class=td-post-author-name><?php the_author() ?> <span>-</span> </span> <span class=td-post-date><time
                                                class="entry-date updated td-module-date"
                                                datetime="<?php the_time(); ?>"><?php the_time('F j, Y') ?>
                                            </time></span>

                                        <div class=td-module-comments><a
                                                href="<?php the_permalink(); ?>#respond">0</a>
                                        </div>
                                    </div>
                                    <div class=td-excerpt>
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <div class=td-read-more>
                                        <a href="<?php the_permalink(); ?>">Leer más
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                        <?php if (function_exists("pagination")) {
                            pagination($additional_loop->max_num_pages);
                        } ?>
                    <?php  else: ?>
                        <div class="entry"><?php _e('Lo sentimos, no hay resultados con este término de búsqueda.'); ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php  get_sidebar()?>

<?php get_footer(); ?>
