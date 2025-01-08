
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
                <h3 class="title-section">Serviços</h3>
            </div>
        </div>
        <div class="row content-services pb-5">

            <?php
            while ($services->have_posts()):
                $services->the_post(); ?>

                <div class="col-12 col-md-4 content-services__item">
                    <a href="#" class="content-services__item__box text-center">
                        <div class="d-block m-auto text-center mb-1">
                            <img src="<?= the_post_thumbnail_url('medium') ?>" alt="<?= the_title() ?>"
                                class="img-fluid">
                        </div>
                        <h3 class="content-services__item__title text-center bold">
                            <?= the_title() ?>
                        </h3>
                        <h4 class="content-services__item__description">
                            <?= the_excerpt() ?>
                        </h4>
                    </a>
                </div>

            <?php endwhile; ?>
        </div>
        <div class="row mt-5">
            <div class="col-12 text-center">
                <a href="/servicos" class="button-border-effect">Saiba mais...</a>
            </div>
        </div>
    </div>
</section>
