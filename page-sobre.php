<?php get_header(); ?>

<section id="page-sobre" class="container">
    <div class="row text-center">
        <div class="col-12 h2 title title-section"><?= get_the_title() ?></div>
    </div>
    <div class="row">
        <div class="col-12">
            <?php echo get_the_post_thumbnail(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
