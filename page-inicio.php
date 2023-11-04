<section class="container-full content-centered mb-8">
    <div class="content-centered__box-text">
        <h2 class="bg-fullscreen__title bold logo-text display-1">
            < Pato Marques />
        </h2>
        <h3 class="bg-fullscreen__subtitle">Desenvolvedor WEB | Wordpress | Laravel | Front-end | Back-end
        </h3>

        <div class="content-btn-scroll">
            <a href="" class="btn-scroll-down">
                <i class="fa-solid fa-angles-down"></i>
            </a>
        </div>
    </div>

</section>

<?php get_header(); ?>

<section id="section-about" class="container-full content-main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content-about">
                    <h3 class="content-about__title title-section">Sobre</h3>
                    <h4 class="content-about__subtitle">Desde 2010 atuando no desenvolvimento de
                        sistemas web, sites e lojas online.</h4>
                    <h5 class="content-about__description">Recife, 34 anos, Sistemas de Informação, Desenvolvedor Web.
                    </h5>
                    <h5 class="content-about__text">Bike, Veganismo Popular, Anti-fascismo,
                        Anti-Racismo, LGBTQIA+, Direitos Humanos e Animais.</h5>
                    </h5>
                    <p class="hide">Planejamento, modelagem banco de dados, criação, prototipação, desenvolvimento e
                        testes.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="section-skills" class="container-full content-main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content-skills">
                    <h3 class="content-skills__title title-section bold">Tecnologias</h3>
                    <h4 class="content-skills_description">Essas foram as tecnologias que trabalhei nos ultimos anos.
                    </h4>

                    <?php
                    $tecnologies = ['html5', 'css3', 'javascript', 'sql', 'git', 'vue', 'react', 'nodeJS', 'responsive design', 'php', 'wordpress', 'laravel'];
                    ?>

                    <ul class="content-skills_list list-inline">

                        <?php for ($i = 0; $i < count($tecnologies); $i++) { ?>

                            <li class="content-skills_list_item list-inline-item">
                                <div class="content-skills progress-bar"></div>
                                <?= $tecnologies[$i] ?>
                            </li>

                        <?php } ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="section-experience" class="container-full content-main">
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

<section id="section-portfolio" class="container-full content-main">
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

<section id="section-blog" class="container-full content-main">
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

<section id="section-contact" class="container-full content-main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="title-section bold">Contato</h3>
            </div>
        </div>
        <div class="row">
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
                                        <i class="<?= get_post_meta(get_the_ID(), 'icon_class', true) ?> fa-3x"></i>
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