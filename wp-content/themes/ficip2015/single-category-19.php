<?php get_header(); ?>

    <div class="main clearfix">
        <section class="single-body clearfix">
            <?php
            // The Loop
            if (have_posts()) :
                while (have_posts()) : the_post();  ?>
                    <article class="row the-film">
                        <h1 class="title"><?php the_title(); ?></h1>
                        <div class="film-head">
                            <figure class="film-poster">
                                <?php $afiche = get_field('afiche_de_la_pelicula');
                                if ($afiche != '') {
                                    echo '<img src="';
                                    the_field('afiche_de_la_pelicula');
                                    echo '" alt="';
                                    the_field('titulo_de_la_pelicula');
                                    echo '" />';
                                } else {
                                    the_post_thumbnail('page-thumbnail');
                                }
                                ?>

                            </figure>
                            <article class="film-items">
                                <?php the_content(); ?>
                            </article>

                            <!-- AddThis Button BEGIN -->
                            <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
                                <a class="addthis_button_preferred_1"></a>
                                <a class="addthis_button_preferred_2"></a>
                                <a class="addthis_button_preferred_3"></a>
                                <a class="addthis_button_preferred_4"></a>
                                <a class="addthis_button_compact"></a>
                                <a class="addthis_counter addthis_bubble_style"></a>
                            </div>
                            <script
                                type="text/javascript">var addthis_config = {"data_track_addressbar": true};</script>
                            <script type="text/javascript"
                                    src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4f1424da788a532a"></script>
                            <!-- AddThis Button END -->
                            </div>


                        <div class="film-body">

                            <div class="sinopsis">
                                <?php
                                $getcat = get_field('sinopsis_de_la_pelicula');
                                if ($getcat != '') {
                                    echo '<h2>SINOPSIS</h2>';
                                } ?>
                                <?php the_field('sinopsis_de_la_pelicula'); ?>
                            </div>
                            <div class="director">
                                <div class="">
                                    <?php
                                    $getcatdir = get_field('nombre_del_director_de_la_pelicula');
                                    ?>

                                    <?php
                                    if ($getcatdir != '') {
                                        echo '<span>DIRECTOR/A</span>';
                                    } ?>

                                    <h2><?php the_field('nombre_del_director_de_la_pelicula'); ?></h2>


                                </div>
                                <figure class="director">
                                    <img src="<?php the_field('foto_del_director_de_la_pelicula'); ?>"
                                         alt="<?php the_field('nombre_del_director_de_la_pelicula'); ?>"/>
                                </figure>
                                <div>
                                    <?php the_field('biografia_del_director_de_la_pelicula'); ?>
                                </div>
                            </div>
                            <div class="trailer">
                                <?php $video = get_field('embed_video');
                                if ($video != "") {
                                    echo "<h2>TRAILER</h2>";
                                    echo '<iframe width="100%" height="315" src="'. $video . '" frameborder="0" allowfullscreen></iframe>';
                                } ?>
                            </div>
                        </div>
                    </article>
                <?php
                endwhile; endif;
            ?>
            <ul class="buscador row">
                <li><h2>buscador</h2>
                    <span>Ficip 2015</span>
                </li>

                <li><a href="<?php bloginfo('url'); ?>/?page_id=4931" title="Buscar por director">
                            PELÍCULAS POR DIRECTOR</a>
                </li>

                <li><a href="<?php bloginfo('url'); ?>/?cat=19<?php echo thisYear() ?>" title="Buscar por película">
                    PELÍCULAS POR TÍTULO
                        </a>
                </li>

                <li><a href="<?php bloginfo('url'); ?>/?s=seccion<?php echo thisYear() ?>" title="Buscar por seccion">
                    PELÍCULAS POR SECCIÓN
                    </a>
                </li>
            </ul>

        </section>
        <?php get_template_part('single-sidebar'); ?>

    </div>


<?php get_footer(); ?>