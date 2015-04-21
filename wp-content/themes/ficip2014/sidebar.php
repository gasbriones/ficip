<aside class="small-3 columns right sidebar">

	<ul class="programacion">
		<div style="background-color:#005f6b;height:22px;display:block;"></div>
		<li><img src="<?php bloginfo('template_url'); ?>/images/programacion-mayo.png" alt="programacion"/>
	<?php
			$cantidadOpinion = 10;
			$articulosOpinion = new WP_Query();
			$articulosOpinion->query('showposts=' . $cantidadOpinion . '&cat=8');
			while ($articulosOpinion->have_posts()) : $articulosOpinion->the_post();
	?>

	<li>

   <a 	href="<?php the_permalink(); ?>" title="Ir al artículo <?php the_title(); ?>">
		<?php the_title(); ?>
	</a>


	</li>
 
	<?php endwhile; ?>

	</ul>

	<ul class="banners">
			<li><a href="<?php bloginfo('url'); ?>/inscripciones-2015/" title="Inscripción del festival" ><img src="<?php bloginfo('template_url'); ?>/images/inscripcion-2015.png" alt="Inscripción" /></a></li>
			<li><a href="<?php bloginfo('url'); ?>/?cat=5" title="Jurados del festival" ><img src="<?php bloginfo('template_url'); ?>/images/jurados.png" alt="Jurados" /></a></li>
			<li><a href="<?php bloginfo('url'); ?>/?page_id=140" title="Prensa, material y acreditaciones" ><img src="<?php bloginfo('template_url'); ?>/images/prensa.png" alt="Prensa" /></a></li>
			<li><a href="http://ficip2013.com.ar" title="Ediciones Anteriores" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/ediciones-anteriores.png" alt="Ediciones Anteriores" /></a></li>
	</ul>



</aside>
