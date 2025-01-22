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

<section id="section-contact" class="mt-5 d-block pt-5 pb-5">
    <div class="container">
        <div class="row d-none">
            <div class="col-12 text-center">
                <h3 class="title-section bold mt-5 mb-5">Contatos</h3>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div class="content-contact text-center">
                    <ul class="content-contact__list list-inline">

                        <?php if ($contacts->have_posts()) {
                            while ($contacts->have_posts()):
                                $contacts->the_post(); ?>

                                <li class="content-contact__list-item list-inline-item m-3">
                                    <a href="<?php echo get_post_meta(get_the_ID(), 'link', true) ?>" class="content-contact__link"
                                        target="_blank"
                                        title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
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