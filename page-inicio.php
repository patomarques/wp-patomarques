<?php get_header(); ?>

<section id="section-home-intro" class="container-full content-centered container-home">
    <video class="container-home__bg-video-full" playsinline autoplay muted loop>
        <source src="<?php echo get_stylesheet_directory_uri() . "/img/nature.mp4"; ?>" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="content-centered__box-text">
        <h2 class="bg-fullscreen__title bold logo-text mb-0">
            < Pato Marques />
        </h2>
        <div class="logo-subtitle color-white">
            Desenvolvimento Web
        </div>
        <div class="words-effect hide">
            <div class="words-effect__container hide">
                <ul class="words-effect__container__list text-center pl-5">
                    <li class="words-effect__container__list__item"> <?= "< front-end />" ?></li>
                    <li class="words-effect__container__list__item"> back-end(){}</li>
                    <li class="words-effect__container__list__item"><?php echo '<?= "wordpress" ?>' ?></li>
                    <li class="words-effect__container__list__item"> {{ laravel }}</li>
                </ul>
            </div>
        </div>

        <div class="content-btn-scroll mt-5">
            <a href="#section-about" class="btn-scroll-down" name="target">
                <i class="fa-solid fa-angles-down"></i>
            </a>
        </div>
    </div>
</section>

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
            <div class="col-12 col-lg-5">
                <div class="square mb-5 p-5">
                    <img class="square__image" src="<?= get_the_post_thumbnail_url($pageAbout); ?>">
                    <div class="losange"></div>
                </div>
            </div>
            <div class="col-12 col-lg-6 offset-lg-1">
                <div class="content-about text-justify">

                    <div class="content-about__subtitle text-justify pt-3 pb-4">
                        <?php 
                         $devYears = calculateYearsDiff();
                        ?>
                        <p class=" pb-3"><span class="fs-1">Olá, me chamo</span> <span class="bold display-5">Pato Marques</span></p>
                        <p class="h2 pb-3">Sou de <a class="fs-2 color-black link" target="_blank" href="https://www.google.com/maps/place/Recife+-+PE/@-8.0419955,-35.0202499,12z/data=!3m1!4b1!4m6!3m5!1s0x7ab196f88c446e5:0x3c9ef52922447fd4!8m2!3d-8.0577401!4d-34.8829629!16zL20vMGhkenQ?entry=ttu&g_ep=EgoyMDI1MDUwNy4wIKXMDSoASAFQAw%3D%3D">Recife</a>, Desenvolvedor web, Graduado em Sistemas de Informação </p>
                        <p class="h2 pb-3">+<?= $devYears ?> anos trabalhando com sites, lojas online e aplicações web
                            <span class="h5 hide">(desde 2010)</span>;
                        </p>
                        <p class="h2">Desenvolvedor
                            <a href="https://www.php.net/" class="link h2 bold" target="_blank">php,</a>
                            <a href="https://br.wordpress.org/" class="link h2 bold" target="_blank">wordpress,</a>
                            <a href="https://laravel.com/" class="link h2 bold" target="_blank">laravel</a>
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

<?php get_template_part('template-parts/services'); ?>

<?php get_template_part('template-parts/experiences'); ?>

<?php get_template_part('template-parts/tecnologies'); ?>

<?php get_template_part('template-parts/portfolio'); ?>

<? //php get_template_part('template-parts/blog-recent-posts'); 
?>

<?php get_template_part('template-parts/contatos'); ?>

<?php get_footer(); ?>