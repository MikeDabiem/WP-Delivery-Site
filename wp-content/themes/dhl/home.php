<?php
    get_header();
    ?><div class="wrapper"><?php
    if( have_posts() ) :
        while( have_posts() ) : the_post(); ?>
            <div class="services-item services-item-1">
                <?php if(has_post_thumbnail()) : ?>
                    <div class="services-thumb">
                        <?php the_post_thumbnail('postimage'); ?>
                    </div>
                <?php endif; ?>
                <div class="services-name">
                    <h3><?php the_title() ?></h3>
                </div>
                <div class="services-body">
                    <p><?php the_excerpt() ?></p>
                </div>
                <div>
                    <a href="<?php the_permalink() ?>" class="services-link">Read More <i class="fas fa-caret-right"></i></a>
                </div>
            </div>
        <?php endwhile;
    endif;
    ?></div><?php
    get_footer();