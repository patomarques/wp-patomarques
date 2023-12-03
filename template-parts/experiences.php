<?php
//consultar experiences
// formatar dados
// executar loop abaixo
?>

<?php
$experience = new WP_Query(
    array(
        'post_type' => 'experiences',
        'orderby' => 'ordem',
        'order' => 'ASC',
    )
);
?>

<section id="section-experience" class="container cd-horizontal-timeline">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="title-section">Experiência</h3>
                <div class="content-experience">
                    Timeline.js com resumo dos anos, desde 2010 até 2023, com os principais trampos que passei.
                </div>

                <?php while ($experience->have_posts()):
                    $experience->the_post();
                    ?>

                    <?= the_title() ?>
                    <?php echo get_post_meta(get_the_ID(), 'data_inicio')[0]; ?>
                    <?php echo get_post_meta(get_the_ID(), 'data_fim')[0]; ?>

                <?php endwhile; ?>

            </div>
        </div>
    </div>

    <div class="timeline">
        <div class="events-wrapper">
            <div class="events">
                <ol>
                    <li><a href="#0" data-date="01/04/2011" class="selected">Corptech (2011)</a></li>
                    <li><a href="#0" data-date="01/06/2013">Freelancer (2013)</a></li>
                    <li><a href="#0" data-date="01/02/2015">Agências Publi (2015)</a></li>
                    <li><a href="#0" data-date="01/03/2017">Mar 2018</a></li>
                    <li><a href="#0" data-date="01/03/2018">June 2018</a></li>
                    <li><a href="#0" data-date="01/01/2019">Jan 2019</a></li>
                    <li><a href="#0" data-date="01/08/2019">Jan 2019</a></li>
                    <li><a href="#0" data-date="01/03/2023">Jan 2019</a></li>
                </ol>

                <span class="filling-line" aria-hidden="true"></span>
            </div> <!-- .events -->
        </div> <!-- .events-wrapper -->

        <ul class="cd-timeline-navigation">
            <li><a href="#0" class="prev inactive">Prev</a></li>
            <li><a href="#0" class="next">Next</a></li>
        </ul> <!-- .cd-timeline-navigation -->
    </div> <!-- .timeline -->

    <div class="events-content">
        <ol>
            <li class="selected" data-date="01/04/2011">
                <h2>An Introduction to Infosec</h2>
                <em>January, 2017</em>
                <p>
                    Back in January, 2017 I began my journey of studies into different areas of infosec to see if it was
                    a challenge I would enjoy and a future prospect for further learning through college.
                </p>
            </li>

            <li data-date="01/06/2013">
                <h2>Fanshawe College Cyber Security</h2>
                <em>September, 2017</em>
                <p>
                    In September, 2018 I enrolled into the Cyber Security course at Fanshawe College.
                </p><br>
                <p>Key courses include: </p>
            </li>

            <li data-date="01/03/2017">
                <h2>CTF</h2>
                <em>December, 2017</em>
                <p>
                    Participated in CTF.
                </p>
            </li>

            <li data-date="01/03/2018">
                <h2>Event title here</h2>
                <em>May 20th, 2014</em>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit
                    recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit
                    dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque
                    quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                </p>
            </li>

            <li data-date="09/07/2014">
                <h2>Event title here</h2>
                <em>July 9th, 2014</em>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit
                    recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit
                    dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque
                    quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                </p>
            </li>

            <li data-date="30/08/2014">
                <h2>Event title here</h2>
                <em>August 30th, 2014</em>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit
                    recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit
                    dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque
                    quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                </p>
            </li>

            <li data-date="15/09/2014">
                <h2>Event title here</h2>
                <em>September 15th, 2014</em>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit
                    recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit
                    dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque
                    quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                </p>
            </li>

            <li data-date="01/11/2014">
                <h2>Event title here</h2>
                <em>November 1st, 2014</em>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit
                    recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit
                    dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque
                    quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                </p>
            </li>

            <li data-date="10/12/2014">
                <h2>Event title here</h2>
                <em>December 10th, 2014</em>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit
                    recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit
                    dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque
                    quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                </p>
            </li>

            <li data-date="19/01/2015">
                <h2>Event title here</h2>
                <em>January 19th, 2015</em>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit
                    recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit
                    dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque
                    quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                </p>
            </li>

            <li data-date="03/03/2015">
                <h2>Event title here</h2>
                <em>March 3rd, 2015</em>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit
                    recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit
                    dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque
                    quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                </p>
            </li>
        </ol>
    </div> <!-- .events-content -->
</section>