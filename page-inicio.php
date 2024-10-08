<?php get_header(); ?>

<section id="section-home-intro" class="container-full content-centered container-home">
    <video class="container-home__bg-video-full" playsinline autoplay muted loop>
        <source src="<?php echo get_stylesheet_directory_uri() . "/img/nature.mp4"; ?>" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="content-centered__box-text">
        <h2 class="bg-fullscreen__title bold logo-text">
            < Pato Marques />
        </h2>
        <p class="h2  hide color-white">
            <span class="color-yellow">[</span> Desenvolvedor Web <span class="color-yellow">]</span>
        </p>

        <div class="words-effect hide">
            <div class="words-effect__container">


                <!-- <ul class="words-effect__container__list text-center">
                    <li class="words-effect__container__list__item"> <?= "< front-end />" ?></li>
                    <li class="words-effect__container__list__item"> back-end(){}</li>
                    <li class="words-effect__container__list__item"> [wordpress]</li>
                    <li class="words-effect__container__list__item"> {{ laravel }}</li>
                </ul> -->
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

<section id="section-about" class="section-container">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h3 class="content-about__title title-section pb-4 text-center">
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

                    <div class="content-about__subtitle text-justify pb-4">
                        <?php //echo apply_filters('get_the_post_excerpt', $pageAbout->post_excerpt); 
                        ?>
                        <p class="h1">Olá, me chamo Pato</p>
                        <p class="h4 pb-3">Recife, Brasil - 35 anos - Analista Desenvolvedor Web;</p>
                        <p class="h3 pb-3">Bacharel em sistemas de informação na UniNabuco (2012);</p>
                        <p class="h3 pb-3">Experiência na criação de sites, lojas online e aplicações web
                            <span class="h5">(desde 2010)</span>;
                        </p>
                        <p class="h3">Entusiasta no desenvolvimento com 
                            <a href="https://www.php.net/" class="link h3 bold" target="_blank">php,</a>
                            <a href="https://br.wordpress.org/" class="link h3 bold" target="_blank">wordpress,</a>
                            <a href="https://laravel.com/" class="link h3 bold" target="_blank">laravel</a>
                            e tecnologias de código aberto.
                        </p>
                    </div>

                    <ul class="list-unstyled list-inline list-tags">
                        <li class="list-inline-item list-tags__item">
                            <a href="<?= get_site_url() . '/category/frontend'?>" class="list-tags__item__link">#frontend</a>
                        </li>
                        <li class="list-inline-item list-tags__item">
                            <a href="<?= get_site_url() . '/category/'?>" class="list-tags__item__link">#backend</a>
                        </li>
                        <li class="list-inline-item list-tags__item">
                            <a href="<?= get_site_url() . '/category/'?>" class="list-tags__item__link">#ux/ui</a>
                        </li>
                        <li class="list-inline-item list-tags__item">
                            <a href="<?= get_site_url() . '/category/wordpress'?>" class="list-tags__item__link">#wordpress</a>
                        </li>
                        <li class="list-inline-item list-tags__item">
                            <a href="<?= get_site_url() . '/category/'?>" class="list-tags__item__link">#laravel</a>
                        </li>
                        <li class="list-inline-item list-tags__item">
                            <a href="<?= get_site_url() . '/category/'?>" class="list-tags__item__link">#linux</a>
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
                    <div class="row mt-5">
                        <div class="col-12 text-center">
                            <div class="d-block mt-4 mb-4">
                                <a href="/sobre" class="button-border-effect mt-3 mb-4">Continuar lendo...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php
$services = new WP_Query(
    array(
        "post_type" => "services",
        'orderby' => 'ordem',
        'order' => 'ASC',
        'posts_per_page' => -1,
    )
);
?>

<section class="section-container">
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h3 class="title-section">Serviços</h3>
            </div>
        </div>
        <div class="row content-services">

            <?php
            while ($services->have_posts()):
                $services->the_post(); ?>

                <div class="col-12 col-md-4">
                    <div class="content-services__item text-center p-5">
                        <div class="d-block m-auto text-center mb-1">
                            <img src="<?= the_post_thumbnail_url('medium') ?>" alt="<?= the_title() ?>"
                                class="img-fluid">
                        </div>
                        <h3 class="content-services__item__title text-center bold">
                            <?= the_title() ?>
                        </h3>
                        <h4 class="content-services__item__description">
                            <?= the_excerpt() ?>
                        </h4>
                    </div>
                </div>

            <?php endwhile; ?>
        </div>
        <div class="row mt-5">
            <div class="col-12 text-center">
                <a href="/servicos" class="button-border-effect">Saiba mais...</a>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/experiences'); ?>

<?php get_template_part('template-parts/tecnologies'); ?>

<?php get_template_part('template-parts/portfolio'); ?>

<?php get_template_part('template-parts/blog-recent-posts'); ?>

<?php get_footer(); ?>