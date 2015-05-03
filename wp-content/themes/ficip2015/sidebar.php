<aside class="sidebar">

    <ul class="programing">
        <li><img src="<?php bloginfo('template_url'); ?>/images/programacion-title.jpg" alt="programacion"/>
            <?php
                $cantidadOpinion = 10;
                $articulosOpinion = new WP_Query();
                $articulosOpinion->query('showposts=' . $cantidadOpinion . '&cat=8'.thisYear().'&order=ASC');
                while ($articulosOpinion->have_posts()) :
                $articulosOpinion->the_post();
            ?>
        <li>
            <a href="<?php the_permalink(); ?>" title="Ir al artículo <?php the_title(); ?>">
                <?php the_title(); ?>
            </a>
        </li>

        <?php endwhile; ?>

    </ul>

</aside>
