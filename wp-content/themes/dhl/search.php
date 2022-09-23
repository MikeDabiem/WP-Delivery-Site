<?php

get_header();

?>
<div class="wrapper" style="min-height: 50vh;">
<?php
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post(); ?>
        <a href="<?php the_permalink() ?>" class="services-link">
            <div class="services-item services-item-1" style="display: flex;">
                <?php if(has_post_thumbnail()) : ?>
                    <div class="services-thumb">
                        <?php the_post_thumbnail('postimage'); ?>
                    </div>
                <?php endif; ?>
                <div style="margin-left: 10px;">
                    <div class="services-name">
                        <h3><?php the_title() ?></h3>
                    </div>
                    <div class="services-body">
                        <p><?php the_excerpt() ?></p>
                    </div>
                </div>
            </div>
        </a>
            <?php }
} else {
    ?> <h2>Not found</h2> <?php
}
?></div><?php

get_footer();
