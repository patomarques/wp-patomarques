<?php
$pageAbout = get_page_by_path('sobre');

$fightFlags = new WP_Query(
    array(
        'post_type' => 'fight-flags',
        'orderby' => 'ordem',
        'order' => 'ASC',
    )
);

?>

<section id="about" class="section-container">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="content-about__title title-section text-center">
                    <?php echo get_the_title($pageAbout); ?>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="square mb-5">
                    <img class="square__image" src="<?= get_the_post_thumbnail_url($pageAbout); ?>">
                    <div class="losange"></div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-7 offset-lg-1">
                <div class="content-about">

                    <div class="content-about__subtitle text-justify pt-3 pb-4">
                        <?php //echo apply_filters('get_the_post_excerpt', $pageAbout->post_excerpt); 
                        ?>
                        <p class="h1">Pato Marques</p>
                        <p class="h3 pb-3">Recife, Desenvolvedor web, Sistemas de Informação </p>
                        <p class="h3 pb-3">+13 anos trampando com sites, lojas online e aplicações web
                            <span class="h5 hide">(desde 2010)</span>;
                        </p>
                        <p class="h3">Desenvolvedor
                            <a href="https://www.php.net/" class="link h3 bold" target="_blank">php,</a>
                            <a href="https://br.wordpress.org/" class="link h3 bold" target="_blank">wordpress,</a>
                            <a href="https://laravel.com/" class="link h3 bold" target="_blank">laravel</a>
                            e tecnologias de código aberto.
                        </p>

                        <div class="pt-3">
                            <?php get_template_part('template-parts/technologies-icons'); ?>
                        </div>

                    </div>

                    <ul class="list-unstyled list-inline list-tags d-none">
                        <li class="list-inline-item list-tags__item">
                            <a href="<?= get_site_url() . '/category/frontend' ?>" class="list-tags__item__link">#frontend</a>
                        </li>
                        <li class="list-inline-item list-tags__item">
                            <a href="<?= get_site_url() . '/category/backend' ?>" class="list-tags__item__link">#backend</a>
                        </li>
                        <li class="list-inline-item list-tags__item">
                            <a href="<?= get_site_url() . '/category/ux/ui' ?>" class="list-tags__item__link">#ux/ui</a>
                        </li>
                        <li class="list-inline-item list-tags__item">
                            <a href="<?= get_site_url() . '/category/wordpress' ?>" class="list-tags__item__link">#wordpress</a>
                        </li>
                        <li class="list-inline-item list-tags__item">
                            <a href="<?= get_site_url() . '/category/wordpress' ?>" class="list-tags__item__link">#laravel</a>
                        </li>
                        <li class="list-inline-item list-tags__item">
                            <a href="<?= get_site_url() . '/category/linux' ?>" class="list-tags__item__link">#linux</a>
                        </li>
                    </ul>

                    <div class="row mt-3 mb-3 fight-flags d-none">
                        <!-- <div class="d-xs-none col-md-2"></div> -->
                        <?php while ($fightFlags->have_posts()) {
                            $fightFlags->the_post(); ?>

                            <div class="col p-4">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>"
                                    alt="<?php echo get_the_title(); ?>"
                                    class="img-fluid">
                            </div>

                        <?php } ?>
                        <!-- <div class="d-xs-none col-md-2"></div> -->

                    </div>

                </div>
            </div>

        </div>
        <div class="row mt-5 hide">
            <div class="col-12 text-center">
                <div class="d-block mt-4 mb-4">
                    <a href="/sobre" class="button-border-effect mt-3 mb-4">Continuar lendo...</a>
                </div>
            </div>
        </div>
    </div>
</section>