<?php get_header(); ?>

    <div class="main clearfix">

        <section class="single-body clearfix">

            <?php get_search_form(); ?>


            <?php

            // The Loop
            if (have_posts()) :
                while (have_posts()) : the_post();  ?>
                    <article>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title() ?>"><h2><?php the_title(); ?></h2>
                        </a>
                        <?php the_excerpt(); ?>
                    </article>
                <?php
                endwhile; endif;
            ?>
            <div class="nav-previous alignleft"><?php next_posts_link('Ver mas'); ?></div>
            <div class="nav-next alignright"><?php previous_posts_link('Anteriores'); ?></div>


        </section>





        <?php get_template_part('single-sidebar'); ?>


    </div>

<?php get_footer(); ?>