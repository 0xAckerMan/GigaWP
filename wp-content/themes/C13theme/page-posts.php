<?php get_header(); 

/**
 * Template Name: Page View Post With WPQuery
*/
?>

<!-- Getting Posts -->

<?php 
    $blogs = new WP_Query('type=post');

    if($blogs -> have_posts()):
        while($blog->have_posts()):$blogs->the_post();?>
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>;
    <?php
    endwhile;
endif;
wp_reset_postdata();
?>

<?php get_footer();?>