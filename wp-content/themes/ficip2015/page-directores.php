<?php

/*

Template Name: directores

*/

get_header();

?>

    <div class="main clearfix">

        <section class="single-body clearfix">

            <?php get_search_form(); ?>
            <?php

            // The Loop
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args1 = array(
                'cat' => 19,
                'posts_per_page' => 10,
                'paged' => $paged,
                'meta_query' => array(
                    array(
                        'key' => 'nombre_del_director_de_la_pelicula'
                    )),
                'tag' => thisYear(),
                'orderby' => 'meta_value' // Sort by this meta ke
            );

            $query1 = new WP_Query($args1);
            if ($query1->have_posts()) :
                while ($query1->have_posts()) : $query1->the_post();  ?>
                    <article style="margin-bottom:2em;" class="row film-list">
                        <figure class="small-4 columns left ">
                            <img src="<?php the_field('foto_del_director_de_la_pelicula'); ?>" alt=""/>
                        </figure>
                        <div class="small-8 columns">
                            <a href="<?php the_permalink(); ?>"
                               title="<?php the_field('nombre_del_director_de_la_pelicula'); ?>">
                                <h2> <?php the_field('nombre_del_director_de_la_pelicula'); ?></h2></a>

                            <p><?php the_field('biografia_del_director_de_la_pelicula'); ?></p>
                        </div>
                    </article>
                <?php
                endwhile; endif;
            ?>

            <div class="nav-previous alignleft"><?php next_posts_link('Ver mas', $query1->max_num_pages); ?></div>
            <div class="nav-next alignright"><?php previous_posts_link('Anteriores'); ?></div>

        </section>





        <?php get_template_part('single-sidebar'); ?>


    </div>

<?php get_footer(); ?>