<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 *
 * @version 5.3.0
 */

?>
<?php get_template_part( 'template-parts/contatos' ); ?>

<footer class="p-4">
  <div class="text-center">
    <div class="<?= bootscore_container_class(); ?>">
      <small class="bootscore-copyright ">
        <a href="/" class="">
          <?php bloginfo('name'); ?>
        </a>
        <span class="black-flag ">&#127988</span>&nbsp;
        <?= date('Y'); ?>
      </small>
    </div>
  </div>

</footer>

<a href="#" class="btn btn-default shadow top-button position-fixed zi-1020"><i class="fa-solid fa-chevron-up"></i><span
    class="visually-hidden-focusable">To top</span></a>

</div>  

<?php wp_footer(); ?>

</body>

</html>