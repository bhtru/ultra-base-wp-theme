<?php
/**
 * Main template file
 *
 * @package Steady_Commerce
 */

get_header(); ?>

<main id="main" class="site-main">
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            the_content();
        endwhile;
    else :
        echo '<p>' . __('Nothing found', 'steady-commerce') . '</p>';
    endif;
    ?>
</main>

<?php get_footer(); ?>