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

<section id="contact" class="d-block">
    <?php get_template_part('template-parts/contact-notification'); ?>

    <div class="container flex-center">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <ul class="contact-social-icons d-flex">

                        <?php if ($contacts->have_posts()) {
                            while ($contacts->have_posts()):
                                $contacts->the_post(); ?>

                                <li class="content-contact__list-item list-inline-item">
                                    <a href="<?php echo get_post_meta(get_the_ID(), 'link', true) ?>" class="content-contact__link"
                                        target="_blank"
                                        title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
                                        <i class="<?= get_post_meta(get_the_ID(), 'icon_class', true) ?> icon-3d"></i>
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