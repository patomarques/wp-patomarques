<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Bootscore
 */

get_header();
?>
<div id="content" class="site-content <?= bootscore_container_class(); ?> py-5 mt-5">
  <div id="primary" class="content-area">

    <main id="main" class="site-main">

      <section class="error-404 not-found">
        <div class="page-404 text-center mt-5 mb-5">

          <h1 class="ff-secondary mb-3 error-404-text">404</h1>
          <p class="display-3 mt-4 ff-secondary mb-5"><?php esc_html_e('Page not found.', 'bootscore'); ?></p>

          <div class="mt-5">
            <a class="btn fs-3 color-black bold" href="<?= esc_url(home_url()); ?>" role="button">
              <?php esc_html_e('Back Home &raquo;', 'bootscore'); ?>
            </a>
          </div>
        </div>
      </section>

    </main>

  </div><!-- #primary -->
</div><!-- #content -->

<?php
get_footer();
