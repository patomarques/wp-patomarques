<?php get_header(); ?>

<section id="section-home-intro" class="container-full content-centered">
    <div class="content-centered__box-text">
        <h2 class="bg-fullscreen__title bold logo-text display-1">
            < Pato Marques />
        </h2>
        <h3 class="bg-fullscreen__subtitle">Desenvolvedor WEB | Wordpress | Laravel | Front-end | Back-end
        </h3>

        <div class="content-btn-scroll">
            <a href="#masthead" class="btn-scroll-down">
                <i class="fa-solid fa-angles-down"></i>
            </a>
        </div>
    </div>

</section>


<?php
$pageAbout = get_page_by_path('sobre');
?>

<section id="section-about" class="container">
    <div class="row">
        <div class="col-12 col-sm-8 col-md-8">
            <div class="content-about">
                <h3 class="content-about__title title-section">
                    <?php echo get_the_title($pageAbout); ?>
                </h3>
                <h4 class="content-about__subtitle text-justify">
                    <?php echo apply_filters('get_the_content', $pageAbout->post_content); ?>
                </h4>
                <a href="/sobre" class="btn btn-secondary">Continuar lendo...</a>
            </div>
        </div>
        <div class="col-12 col-sm-4 col-md-3 offset-md-1">
            <?php echo get_the_post_thumbnail($pageAbout); ?>
        </div>
    </div>
</section>

<?php
$technologies = new WP_Query(
    array(
        'post_type' => 'technologies',
        'orderby' => 'ordem',
        'order' => 'ASC',
    )
);
?>

<section id="section-skills" class="content-main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content-skills">
                    <h3 class="content-skills__title title-section bold">Tecnologias</h3>
                    <h4 class="content-skills_description">Essas foram as tecnologias que trabalhei nos ultimos anos.
                    </h4>

                    <ul class="content-skills_list list-inline">

                        <?php while ($technologies->have_posts()):
                            $technologies->the_post();
                            ?>

                            <li class="content-skills_list_item list-inline-item">
                                <div class="content-skills progress-bar"></div>
                                <?= the_title() ?>
                                <?php echo get_post_meta(get_the_ID(), 'skill_percent')[0]; ?>
                                <?php echo get_post_meta(get_the_ID(), 'tech_type')[0]; ?>
                            </li>

                        <?php endwhile; ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="section-experience" class="content-main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="title-section">Experiência</h3>
                <div class="content-experience">
                    Timeline.js com resumo dos anos, desde 2010 até 2023, com os principais trampos que passei.
                </div>
            </div>
        </div>
    </div>
</section>

<section id="section-portfolio" class="content-main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="title-section bold">Portfolio</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4">
                Lula Cortes
            </div>
            <div class="col-12 col-md-4">
                Eve Queiroz
            </div>
            <div class="col-12 col-md-4">
                Bia Ritzzz
            </div>
        </div>
    </div>

</section>

<?php
$args = array(
    'numberposts' => 4,
    'orderby' => 'date',
    'order' => 'DESC',
    'post_type' => 'post',
    'suppress_filters' => true,
);

$get_posts = new WP_Query();
$posts = get_posts($args);
?>

<section id="section-blog" class="content-main">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="title-section bold">Blog</h3>
            </div>
        </div>
    </div>
    <div class="content-blog">

        <?php foreach ($posts as $post) { ?>
            <div class="content-blog__post">
                <div class="content-blog__post__image box-square">
                    <?php
                    if (!empty(get_the_post_thumbnail($post->ID, 'medium'))) {
                        echo get_the_post_thumbnail($post->ID, 'medium');
                    } else {
                        echo '<i class="fa-solid fa-images"></i>';
                    }
                    ?>

                    <div class="content-blog__post__categories">

                        <ul class="content-blog__post__categories-list list-inline">

                            <?php
                            $categories = get_categories($post->ID);
                            foreach ($categories as $category) { ?>

                                <li class="content-blog__post__categories-list__item list-inline-item m-0">
                                    <a href="#" class="content-blog__post__categories__link">
                                        <?php echo $category->name; ?>
                                    </a>
                                </li>

                            <?php } ?>

                        </ul>
                    </div>

                </div>
                <div class="content-blog__post__box p-3 text-center">
                    <h3 class="content-blog__post__title">
                        <a href="<?php echo get_permalink($post->ID); ?>" class="content-blog__post__link">
                            <?= $post->post_title ?>
                        </a>
                    </h3>
                    <h5 class="content-blog__post__subtitle text-center">
                        Publicado em
                        <?= the_time('j \d\e F \d\e Y', $post->post_date) ?>
                    </h5>

                    <a href="<?php echo get_permalink($post->ID); ?>" class="content-blog__post__button">
                        Ler mais...
                    </a>
                </div>

            </div>

        <?php } ?>

    </div>
</section>

<?php
$args = array(
    'post_type' => 'contatos',
    'public' => true,
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'ASC'
);

$contacts = new WP_Query($args);
?>

<section id="section-contact" class="bg-black pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="title-section bold color-white">Contato</h3>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <div class="content-contact text-center">
                    <ul class="content-contact__list list-inline">

                        <?php if ($contacts->have_posts()) {
                            while ($contacts->have_posts()):
                                $contacts->the_post(); ?>

                                <li class="content-contact__list-item list-inline-item m-3">
                                    <a href="<?= get_post_meta(get_the_ID(), 'link', true) ?>" class="content-contact__link"
                                        title="<?php the_title();
                                        echo " " . get_the_content(); ?>" alt="<?php the_title(); ?>">
                                        <i class="color-white <?= get_post_meta(get_the_ID(), 'icon_class', true) ?> fa-3x"></i>
                                    </a>
                                </li>

                                <?php
                            endwhile;
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>