<?php get_header(); ?>

<section id="section-home-intro" class="container-full content-centered container-home">
    <video class="container-home__bg-video-full" playsinline autoplay muted loop>
        <source src="<?php echo get_stylesheet_directory_uri() . "/img/nature.mp4"; ?>" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="content-centered__box-text">
        <h2 class="bg-fullscreen__title bold logo-text display-1">
            < Pato Marques />
        </h2>

        <div class="words-effect">
            <div class="words-effect__container">
                <p class="words-effect__container__text">
                    Desenvolvedor
                </p>

                <ul class="words-effect__container__list text-center">
                    <li class="words-effect__container__list__item">
                        < front-end />
                    </li>
                    <li class="words-effect__container__list__item">back-end(){}</li>
                    <li class="words-effect__container__list__item">[wordpress]</li>
                    <li class="words-effect__container__list__item">{{ laravel }}</li>
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

<section id="section-about" class="section-container">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-4">
                <div class="square mb-5">
                    <img class="square__image" src="<?= get_the_post_thumbnail_url($pageAbout); ?>">
                    <div class="losange"></div>
                </div>
            </div>
            <div class="col-12 col-md-8 col-lg-7 offset-lg-1">
                <div class="content-about">
                    <h3 class="content-about__title title-section pb-4 text-center">
                        <?php echo get_the_title($pageAbout); ?>
                    </h3>
                    <h4 class="content-about__subtitle text-justify">
                        <?php echo apply_filters('get_the_post_excerpt', $pageAbout->post_excerpt); ?>
                    </h4>

                    <div class="row mt-4 mb-4 fight-flags">
                        <div class="d-xs-none col-md-2"></div>
                        <?php while ($fightFlags->have_posts()) {
                            $fightFlags->the_post(); ?>

                            <div class="col-3 col-md-2">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" 
                                    alt="<?php echo get_the_title(); ?>"
                                    class="img-fluid">
                            </div>

                        <?php } ?>
                        <div class="d-xs-none col-md-2"></div>
                    </div>
                    <div class="row">
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
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h3 class="title-section mb-5">Serviços</h3>
            </div>
        </div>
        <div class="row content-services">

            <?php
            while ($services->have_posts()):
                $services->the_post(); ?>

                <div class="col-12 col-md-4 content-services__item text-center">
                    <div class="d-block m-auto text-center mb-3">
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

            <?php endwhile; ?>
        </div>
        <div class="row mt-5">
            <div class="col-12 text-center mt-5">
                <a href="/servicos" class="button-border-effect">Saiba mais...</a>
            </div>
        </div>
    </div>
</section>

<?php get_template_part( 'template-parts/experiences' ); ?>

<?php get_template_part( 'template-parts/tecnologies' ); ?>

<?php get_template_part( 'template-parts/portfolio' ); ?>

<?php get_template_part( 'template-parts/blog-recent-posts' ); ?>

<?php get_template_part( 'template-parts/contatos' ); ?>

<?php get_footer(); ?>