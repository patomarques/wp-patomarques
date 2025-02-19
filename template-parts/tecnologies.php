<?php
$technologies = new WP_Query(
    array(
        'post_type' => 'technologies',
        'orderby' => 'ordem',
        'order' => 'ASC',
        'posts_per_page' => -1,
    )
);

$technologiesFormatted = [];

while ($technologies->have_posts()):
    $technologies->the_post();

    $techType = get_post_meta(get_the_ID(), 'tech_type')[0];
    $skillPercent = get_post_meta(get_the_ID(), 'skill_percent')[0];

    $techData = [
        "name" => get_the_title(),
        "percents" => $skillPercent,
        "type" => $techType
    ];

    if (!array_key_exists($techType, $technologiesFormatted)) {
        $technologiesFormatted[$techType] = [];
    }

    array_push($technologiesFormatted[$techType], $techData);

endwhile;

$skills = array(
    'languages' => 'Linguagens',
    'frameworks' => 'Frameworks',
    'technologies' => 'Tecnologias',
);
?>

<section id="skills" class="section-container">
    <div class="container">
        <div class="row mb-5 text-center">
            <div class="col-12 pb-3">
                <h3 class="content-skills__title title-section mb-3">Habilidades</h3>
                <!-- <h4 class="content-skills_description">Essas foram as tecnologias que trabalhei nos ultimos anos 13
                    anos.</h4> -->
            </div>
        </div>
        <div class="row content-skills">

            <?php foreach ($technologiesFormatted as $key => $techs) { ?>

                <div class="col-12 col-md-6 col-lg-4">
                    <h4 class="content-skills__subtitle bold pb-3">
                        <?= $skills[$key] ?>
                    </h4>

                    <?php for ($index = 0; $index < count($techs); $index++) { ?>

                        <div class="content-skills_item mb-3">
                            <div class="content-skills_list_item mb-2">
                                <div class="content-skills progress-bar"></div>
                                <span class="content-skills__legends h4 d-block">
                                    <?= $techs[$index]["name"] ?>
                                </span>

                                <div class="progress">
                                    <div class="progress-bar bg-dark bold progress-bar-striped  progress-bar-animated"
                                        role="progressbar" style="width: <?= $techs[$index]['percents'] ?>%;"
                                        aria-valuenow="<?= $techs[$index]['percents'] ?>" aria-valuemin="0" aria-valuemax="100">
                                        <?= $techs[$index]['percents'] ?>%
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php } ?>

                </div>

            <?php } ?>

        </div>
    </div>
</section>
