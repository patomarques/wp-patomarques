<?php
$portfolio = new WP_Query(
    array(
        'post_type' => 'portfolio',
        'orderby' => 'data_inicio',
        'order' => 'DESC',
    )
);
?>

<section id="section-portfolio" class="section-container">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <h3 class="title-section text-center mb-5">Portfólio</h3>
            </div>
        </div>

        <div class="row">

            <?php while ($portfolio->have_posts()):
                $portfolio->the_post(); ?>

                <div class="col-12 col-lg-4">

                    <div class="card mb-5  ">
                        <a href="<?php echo get_post_meta(get_the_ID(), 'link')[0]; ?>" class="card__box-header box-square-responsive border">
                            <img class="card__box-header__image" src="<?= get_the_post_thumbnail_url(get_the_ID()) ?>"
                                alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <h3 class="card-title text-center bold">
                                <?= the_title() ?>
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
                            <div class="d-block m-auto mt-5 mb-4 text-center hide">
                                <a href="#" class="button-border-effect m-auto">Ver mais</a>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>

        </div>
    </div>

</section>