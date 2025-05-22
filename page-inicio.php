<?php get_header(); ?>

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

<section id="section-about" class="section-container mt-5">
    <div class="container mt-3">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h3 class="content-about__title title-section pb-4 text-center">
                    <?php echo get_the_title($pageAbout); ?>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-5">
                <div class="square mb-5">
                    <img class="square__image" src="<?= get_the_post_thumbnail_url($pageAbout); ?>">
                    <div class="losange"></div>
                </div>
            </div>
            <div class="col-12 col-lg-6 offset-lg-1">
                <div class="content-about">

                    <div class="content-about__subtitle text-justify pt-3 pb-4">
                        <?php //echo apply_filters('get_the_post_excerpt', $pageAbout->post_excerpt); 
                        ?>
                        <p class="display-6 pb-3">Olá, me chamo <span class="display-5 bold">Pato Marques</span></p>
                        <p class="fs-2 pb-3">Sou Desenvolvedor web, de Recife/PE, graduado em Sistemas de Informação; </p>
                        <p class="fs-2 pb-3">+14 anos trabalhando com sites, lojas online e aplicações web
                            <span class="h5 hide">(desde 2010)</span>;
                        </p>
                        <p class="fs-2">Desenvolvedor
                            <a href="https://www.php.net/" class="link fs-2 bold" target="_blank">php,</a>
                            <a href="https://br.wordpress.org/" class="link fs-2 bold" target="_blank">wordpress,</a>
                            <a href="https://laravel.com/" class="link fs-2 bold" target="_blank">laravel</a>
                            e entusiasta em tecnologias de código aberto.
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
                        <?php while ($fightFlags->have_posts()) {
                            $fightFlags->the_post(); ?>

                            <div class="col p-4">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>"
                                    alt="<?php echo get_the_title(); ?>"
                                    class="img-fluid">
                            </div>

                        <?php } ?>

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

<?php get_template_part('template-parts/services'); ?>

<?php get_template_part('template-parts/experiences'); ?>

<?php get_template_part('template-parts/tecnologies'); ?>

<?php get_template_part('template-parts/portfolio'); ?>

<? //php get_template_part('template-parts/blog-recent-posts'); ?>

<?php get_template_part('template-parts/contatos'); ?>

<?php get_footer(); ?>