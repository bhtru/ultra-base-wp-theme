<?php
/**
 * 404 template
 *
 * @package Steady_Commerce
 */

get_header(); ?>

<main id="main" class="site-main">
    <section class="error-404 not-found">
        <header class="page-header">
            <h1 class="page-title"><?php esc_html_e('404 - Page Not Found', 'steady-commerce'); ?></h1>
        </header>
        <div class="page-content">
            <p><?php esc_html_e('The page you are looking for does not exist.', 'steady-commerce'); ?></p>
        </div>
    </section>
</main>

<?php get_footer(); ?>