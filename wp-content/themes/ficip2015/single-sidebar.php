<aside class="sidebar small">

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

    <ul class="search-menu">

        <li>
            <a href="<?php bloginfo('url'); ?>/?cat=19<?php echo thisYear() ?>&orderby=title" title="Buscar por película">
                <img src="<?php bloginfo('template_url'); ?>/images/btn-titulos-small.png" alt=""/>
            </a>
        </li>

        <li>
            <a href="<?php bloginfo('url'); ?>/?cat=19<?php echo thisYear() ?>" title="Buscar por seccion">
                <img src="<?php bloginfo('template_url'); ?>/images/btn-seccion-small.png" alt=""/>
            </a>
        </li>
        <li class="no-margin">
            <a href="<?php bloginfo('url'); ?>/?page_id=4931<?php echo thisYear() ?>&orderby=meta_value"
               title="Buscar por director">
                <img src="<?php bloginfo('template_url'); ?>/images/btn-director-small.png" alt=""/>
            </a>
        </li>
        <li>
            <a href="<?php bloginfo('url'); ?>/?cat=5<?php echo thisYear() ?>" title="Jurados del festival">
                <img src="<?php bloginfo('template_url'); ?>/images/btn-jurado-small.png" alt=""/>
            </a>
        </li>

        <li>
            <a href="<?php bloginfo('url'); ?>/inscripciones-2015/" title="Inscripción del festival">
                <img src="<?php bloginfo('template_url'); ?>/images/btn-inscripcion-small.png" alt=""/>
            </a>
        </li>
        <li class="no-margin">
            <a href="http://ficip2013.com.ar" title="Ediciones Anteriores" target="_blank">
                <img src="<?php bloginfo('template_url'); ?>/images/btn-anteriores-small.png" alt=""/>
            </a>
        </li>
    </ul>

</aside>
