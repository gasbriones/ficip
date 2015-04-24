<?php get_header(); ?>

    <div class="main clearfix">

        <section class="single-body clearfix">
            <?php

            // The Loop
            if (have_posts()) :
                while (have_posts()) : the_post();  ?>
                    <article>
                        <figure>
                            <?php the_post_thumbnail('page-thumbnail'); ?>
                        </figure>
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    </article>
                <?php
                endwhile; endif;
            ?>
        </section>

        <?php get_template_part('single-sidebar'); ?>

    </div>

<?php get_footer(); ?>