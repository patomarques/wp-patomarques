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

        <div class="words-effect">
            <div class="words-effect__dev logo-subtitle color-white">
                Desenvolvimento Web
            </div>
            <div class="words-effect__container pb-5 hide">
                <ul class="words-effect__container__list text-center pl-5">
                    <li class="words-effect__container__list__item"> <?= "< front-end />" ?></li>
                    <li class="words-effect__container__list__item"> back-end(){}</li>
                    <li class="words-effect__container__list__item"><?php echo '<?= "wordpress" ?>' ?></li>
                    <li class="words-effect__container__list__item"> {{ laravel }}</li>
                </ul>
            </div>
        </div>

        <div class="content-btn-scroll mt-5 pt-5">
            <a href="#section-about" class="btn-scroll-down" name="target">
                <i class="fa-solid fa-angles-down"></i>
            </a>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/about'); ?>

<?php get_template_part('template-parts/services'); ?>

<?php get_template_part('template-parts/experiences'); ?>

<?php get_template_part('template-parts/tecnologies'); ?>

<?php get_template_part('template-parts/portfolio'); ?>

<? //php get_template_part('template-parts/blog-recent-posts'); ?>

<?php get_template_part('template-parts/contatos'); ?>

<?php get_footer(); ?>