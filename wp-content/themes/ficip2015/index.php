<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ficip 2015
 * @subpackage Ficip 2015
 * @since Ficip 2015
 */


get_header();
?>

    <div class="main clearfix">

        <?php
        $sec = new WP_Query();
        $sec->query('cat=6'.thisYear());
        ?>

        <section class="carousel">
            <ul class="slider">
                <?php
                while ($sec->have_posts()) : $sec->the_post();
                    ?>
                    <li>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ?>"
                                 title="<?php the_title(); ?>"/>
                        </a>
                    </li>
                <?php endwhile; ?>
            </ul>
        </section>
        <section class="main-body clearfix">
            <div class="menu-container">
                <ul class="search-menu">

                    <li>
                        <a href="<?php bloginfo('url'); ?>/?cat=19&orderby=title<?php echo thisYear() ?>" title="Buscar por película">
                            <img src="<?php bloginfo('template_url'); ?>/images/btn-titulos.png" alt=""/>
                        </a>
                    </li>

                    <li>
                        <a href="<?php bloginfo('url'); ?>/?cat=19<?php echo thisYear() ?>" title="Buscar por seccion">
                            <img src="<?php bloginfo('template_url'); ?>/images/btn-seccion.png" alt=""/>
                        </a>
                    </li>
                    <li class="no-margin">
                        <a href="<?php bloginfo('url'); ?>/?page_id=4931<?php echo thisYear() ?>&orderby=meta_value"
                           title="Buscar por director">
                            <img src="<?php bloginfo('template_url'); ?>/images/btn-director.png" alt=""/>
                        </a>
                    </li>
                    <li>
                        <a href="<?php bloginfo('url'); ?>/?cat=5<?php echo thisYear() ?>" title="Jurados del festival">
                            <img src="<?php bloginfo('template_url'); ?>/images/btn-jurado.png" alt=""/>
                        </a>
                    </li>

                    <li>
                        <a href="<?php bloginfo('url'); ?>/inscripciones-2015/" title="Inscripción del festival">
                            <img src="<?php bloginfo('template_url'); ?>/images/btn-inscripcion.png" alt=""/>
                        </a>
                    </li>
                    <li class="no-margin">
                        <a href="http://ficip2013.com.ar" title="Ediciones Anteriores" target="_blank">
                            <img src="<?php bloginfo('template_url'); ?>/images/btn-anteriores.png" alt=""/>
                        </a>
                    </li>
                </ul>
            </div>
            <?php get_sidebar(); ?>
        </section>


        <section class="main-footer">
            <?php
                //$conferencias = new WP_Query();
                query_posts('cat=15,6'.thisYear().'&order=DESC');
                while (have_posts()) : the_post();
            ?>
                <article class="notice">
                    <?php the_category(); ?>
                    <?php the_field('_fecha'); ?>

                    <a class="title" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <h4><?php the_title(); ?></h4>
                    </a>
                    <?php the_excerpt(); ?>
                </article>
            <?php endwhile; ?>
        </section>
    </div>
<?php get_footer(); ?>