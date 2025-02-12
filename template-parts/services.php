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
                <h3 class="title-section mb-4">Serviços</h3>
            </div>
        </div>
        <div class="row content-services pb-5">

            <?php
            while ($services->have_posts()):
                $services->the_post(); ?>

                <div class="col-12 col-md-4 content-services__item">
                    <a href="#" class="content-services__item__box text-center">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/' .  get_post_meta(get_the_ID(), 'svg_icon_url')[0]; ?>" alt="" class="img-fluid content-services__item__box__icon content-services__item__box__icon--gold d-block m-auto text-center mb-4
                        ">
                        <h3 class="content-services__item__box__title text-center bold h2">
                            <?= the_title() ?>
                        </h3>
                        <h4 class="content-services__item__box__description">
                            <?= the_excerpt() ?>
                        </h4>
                    </a>
                </div>

            <?php endwhile; ?>
        </div>
        <div class="row mt-5 hide">
            <div class="col-12 text-center">
                <a href="/servicos" class="button-border-effect">Saiba mais...</a>
            </div>
        </div>
    </div>
</section>