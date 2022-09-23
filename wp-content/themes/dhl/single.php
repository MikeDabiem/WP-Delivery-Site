<?php get_header(); the_post(); ?>

<div style="min-height: 45vh; text-align: center; margin-top: 50px">
    <h2><?php the_title(); ?></h2>
    <div><?php the_post_thumbnail() ?></div>
    <p><?php the_content(); ?></p>
</div>

<?php get_footer(); ?>