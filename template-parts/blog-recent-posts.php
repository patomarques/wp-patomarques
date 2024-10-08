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

<section id="section-blog" class="content-main ">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="title-section bold mb-5">Blog</h3>
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
                    <p class="content-blog__post__description text-justify">
                        <?= get_the_content($post->ID) ?>
                    </p>

                    <a href="<?php echo get_permalink($post->ID); ?>" class="content-blog__post__button btn btn-dark mt-3">
                        Ler mais...
                    </a>
                </div>

            </div>

        <?php } ?>

    </div>
</section>