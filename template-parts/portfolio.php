<?php
$portfolio = new WP_Query(
    array(
        'post_type' => 'portfolio',
        'orderby' => 'data_inicio',
        'order' => 'DESC',
    )
);
?>

<section id="portfolio" class="section-container pb-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="title-section text-center">Portfólio</h3>
            </div>
        </div>

        <div class="row">

            <?php while ($portfolio->have_posts()):
                $portfolio->the_post(); ?>

                <div class="col-12 col-lg-4">

                    <div class="card mb-5 pb-5">
                        <a href="<?php echo get_post_meta(get_the_ID(), 'link')[0]; ?>" class="card__box-header box-square-responsive border">
                            <img class="card__box-header__image" src="<?= get_the_post_thumbnail_url(get_the_ID()) ?>"
                                alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <h3 class="card-title text-center bold">
                                <a href="<?php echo get_post_meta(get_the_ID(), 'link')[0]; ?>" target="_blank" class="h3 bold">
                                    <?= the_title() ?> 
                                </a>
                                <small class="h5">(<?php echo get_post_meta(get_the_ID(), 'data_inicio')[0]; ?>)</small>
                            </h3>
                            <!-- <ul class="list-unstyled list-inline list-tags">
                                <li class="list-inline-item list-tags__item">
                                    <a href="http://pato.local/category/site" class="list-tags__item__link">#site</a>
                                </li>
                            </ul> -->
                            <p class="h4 card-text mt-3 text-justify">
                                <?= get_the_excerpt(get_the_ID()) ?>
                            </p>
                            <div class="d-block m-auto mt-1 mb-4 text-center">
                                <a href="<?php echo get_post_meta(get_the_ID(), 'link')[0]; ?>" class="button-border-effect m-auto">Ver site</a>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>

        </div>
    </div>

</section>