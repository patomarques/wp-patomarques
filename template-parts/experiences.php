<?php
$experiencesFormatted = array();
$args = array(
    'post_type' => 'experiences',
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC'
);

$experiences = new WP_Query($args);

while ($experiences->have_posts()):
    $experiences->the_post();

    $startDate = get_post_field('data_inicio', get_the_ID());
    $endDate = get_post_field('data_fim', get_the_ID());
    $year = explode("/", $startDate)[2];


    array_push(
        $experiencesFormatted,
        array(
            'title' => get_the_title(),
            'start_date' => $startDate,
            'end_date' => $endDate,
            'year' => $year,
            'description' => get_the_content(),
            'excerpt' => get_the_excerpt(),
            'cargo' => get_post_field('cargo', get_the_ID()),
            'techs' => get_post_field('tecnologias', get_the_ID()),
        )
    );

endwhile;

wp_reset_postdata();

?>

<section id="section-experience" class="section-container bg-dark">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 pb-5">
                <h3 class="title-section">Experiência</h3>
                <div class="content-experience">
                    <h4 class="content-experience__description">Linha do tempo com resumo dos principais trampos que
                        passeis desde 2010 até agora...</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="cd-horizontal-timeline">
        <div class="timeline">
            <div class="events-wrapper">
                <div class="events">
                    <ol id="timeline-years" class="list-unstyled">

                        <?php
                        $count = 0;
                        foreach ($experiencesFormatted as $e) { ?>

                            <li>
                                <a href="#0" data-date="<?= $e['start_date'] ?>" class="<?php if ($count == 0) {
                                      echo "selected";
                                  } ?>">
                                    <?= $e['year'] ?>
                                </a>
                            </li>
                            <?php $count++; ?>
                        <?php } ?>
                    </ol>

                    <span class="filling-line" aria-hidden="true"></span>
                </div>
            </div>

            <ul id="timeline-navigation" class="cd-timeline-navigation list-unstyled">
                <li><a href="#0" class="prev inactive">Prev</a></li>
                <li><a href="#0" class="next">Next</a></li>
            </ul>
        </div>

        <div class="events-content">
            <ol id="timeline-info" class="timeline-info">

                <?php
                $index = 0;
                foreach ($experiencesFormatted as $e) { ?>

                    <li data-date="<?= $e['start_date'] ?>" class="<?php if ($index == 0) {
                          echo "selected";
                      } ?>">
                        <h3 class="timeline-info__title pb-2">
                            <span class="bold">
                                <?= $e['cargo'] ?>
                            </span>
                            <span class="timeline-info__title__company">
                                na
                                <span class="italic">
                                    <?= $e['title'] ?>
                                </span>
                            </span>
                        </h3>

                        <h4 class="timeline-info__date pr-2 italic pb-4">
                            <i class="fa-regular fa-calendar-days pr-1"></i>
                            <?= formatDateToMMYY($e['start_date']) ?> à
                            <?= formatDateToMMYY($e['end_date']) ?>
                        </h4>
                        <h4 class="timeline-info__description pb-3 text-justify">
                            <?= $e['excerpt'] ?>
                        </h4>
                        <h5 class="timeline-info__techs">
                            <span class="bold">Tecnologias: </span>
                            <?= $e['techs'] ?>
                        </h5>
                    </li>

                    <?php $index++; ?>
                <?php } ?>

            </ol>
        </div>
    </div>
</section>