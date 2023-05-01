<?php get_header();?>

/**
 * Template Name: No Title
 */

<?php
    if (have_posts()):
        while(have_posts()): the_post();
?>
    <p><?php the_content(); ?></p>

    <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer();?>