<?php
$portfolio = new WP_Query(
    array(
        'post_type' => 'portfolio',
        'orderby' => 'data_inicio',
        'order' => 'ASC',
    )
);
?>

<section id="section-portfolio" class="section-container">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <h3 class="title-section bold text-center mb-5">Portfolio</h3>
            </div>
        </div>

        <div class="row">

            <?php while ($portfolio->have_posts()):
                $portfolio->the_post();
                ?>

                <div class="col-12 col-md-4">

                    <div class="card">
                        <a href="" class="card__box-header box-square-responsive">
                            <img class="card__box-header__image" src="<?= get_the_post_thumbnail_url(get_the_ID()) ?>"
                                alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <h3 class="card-title text-center bold"> 
                                <?= the_title() ?>
                            </h3>
                            <h5 class="card-subtitle text-center">
                                (<?php echo get_post_meta(get_the_ID(), 'data_inicio')[0]; ?>)  
                            </h5>
                            <p class="card-text mt-3">
                                <?= get_the_excerpt(get_the_ID()) ?>
                            </p>
                            <div class="d-block m-auto mt-5 mb-4 text-center">
                                <a href="#" class="button-border-effect m-auto">Ver mais</a>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>

        </div>
    </div>

</section>