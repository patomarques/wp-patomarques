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


    array_push($experiencesFormatted, array(
        'title' => get_the_title(),
        'start_date' => $startDate,
        'end_date' => $endDate,
        'year' => $year,
        'description' => get_the_content(),
        'excerpt' => get_the_excerpt(),
    )
    );

endwhile;

wp_reset_postdata();

?>

<section id="section-experience" class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="title-section">Experiência</h3>
                <div class="content-experience">
                    Timeline.js com resumo dos anos, desde 2010 até agora, com os principais trampos que passei.
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid bg-dark pt-5 pb-5">
    <div class="">
        <div class="cd-horizontal-timeline">
            <div class="timeline">
                <div class="events-wrapper">
                    <div class="events">
                        <ol id="timeline-years" class="list-unstyled">

                            <?php
                            $count = 0;
                            foreach ($experiencesFormatted as $e) { ?>

                                <li>
                                    <a href="#0" data-date="<?= $e['start_date'] ?>"
                                        class="<?php if ($count == 0) {
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
                <ol id="timeline-descriptions">

                    <?php
                    $index = 0;
                    foreach ($experiencesFormatted as $e) { ?>

                        <li data-date="<?= $e['start_date'] ?>" class="<?php if ($index == 0) {
                              echo "selected";
                          } ?>">
                            <h2>
                                <?= $e['title'] ?>
                            </h2>
                            <em>
                                <?= $e['start_date'] ?> -
                                <?= $e['end_date'] ?>
                            </em>
                            <p>
                                <?= $e['excerpt'] ?>
                            </p>
                        </li>

                        <?php $index++; ?>
                    <?php } ?>

                </ol>
            </div>
        </div>
    </div>
</section>