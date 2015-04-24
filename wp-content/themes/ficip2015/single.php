<?php get_header(); ?>

<?php

if (in_category('secciones')) {

    include 'single-category-19.php';
} else {

?>
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
<?php
    get_template_part('single-sidebar');
} //cierre del else de categorias

?>



</div>

<?php get_footer(); ?>