<?php get_header(); ?>

<div class="row">

<?php get_sidebar(); ?>


	<section class="small-9 columns">

		<div class="row destacadas">

					<?php

								$cantidad = 1;
								$articulos = new WP_Query();
								$articulos->query('showposts=' . $cantidad . '&cat=6');
								while ($articulos->have_posts()) : $articulos->the_post();
					?>
				  	<article  class="small-8 columns left">

						<figure>
							<?php the_post_thumbnail('destacada-thumbnail'); ?>
							<a href="<?php the_permalink(); ?>"  title="<?php the_title(); ?>">
								<figcaption>
									<h1><?php the_title(); ?></h1>
									<!-- span>< //?php the_excerpt(); ?></span -->
								</figcaption>
							</a>
						</figure>


					</article>


				<?php endwhile; ?>



				<?php

						$sec = new WP_Query();
						$sec->query('showposts=2&offset=1&cat=6');

						while ($sec->have_posts()) : $sec->the_post();

					?>
					<article class="small-4 columns sec left">
						<figure>
							<?php the_post_thumbnail('noticias-thumbnail'); ?>
							<a href="<?php the_permalink(); ?>"  title="<?php the_title(); ?>">
								<figcaption>
									<?php the_title(); ?>
								</figcaption>
							</a>
						</figure>

					</article>

					<?php endwhile; ?>

				</div>
	</section>

	<div class="small-9 columns buscador">

		<ul class="buscador row">
			<li   class="small-3 columns"><h2>buscador</h2>
				<span>Ficip 2014</span>
			</li>

			<li   class="small-3 columns"><a href="<?php bloginfo('url'); ?>/?page_id=4931&orderby=meta_value" title="Buscar por director"><figure>
				<img src="<?php bloginfo('template_url'); ?>/images/buscador-director.png" alt="Buscar por director" />
				<figcaption>PELÍCULAS POR DIRECTOR</figcaption></a>
			</li>

			<li  class="small-3 columns"><a href="<?php bloginfo('url'); ?>/?cat=19&orderby=title" title="Buscar por película"><figure>
				<img src="<?php bloginfo('template_url'); ?>/images/buscador-pelicula.png" alt=""  />
				<figcaption>PELÍCULAS POR TÍTULO</figcaption></a>
			</li>

			<li class="small-3 columns"><a href="<?php bloginfo('url'); ?>/?cat=19" title="Buscar por seccion"><figure>
				<img src="<?php bloginfo('template_url'); ?>/images/buscador-seccion.png" alt=""   />
				<figcaption>PELÍCULAS POR SECCIÓN</figcaption></a>
			</li>
		</ul>

	</div>





	<section class="small-9 columns left conferencias">

		<div class="row">

		<h1>Conferencias 2014</h1>


		<?php
						$conferencias = new WP_Query();
						$conferencias->query('showposts=2&cat=15');

						while ($conferencias->have_posts()) : $conferencias->the_post();
		?>
					<article class="small-6 columns" >

								<span><?php the_field('_fecha'); ?></span>
								<a href="<?php the_permalink(); ?>"  title="<?php the_title(); ?>">
									<h2><?php the_title(); ?></h2>
								</a>

								<?php the_excerpt(); ?>


					</article>

					<?php endwhile; ?>



			</div>

		<a href="<?php bloginfo('url'); ?>/?cat=15" class="all_conf" title="Ver todas las conferencias y actividades especiales">Ver todas las conferencias y actividades especiales 2014</a>

	</section>

</div>

<?php get_footer(); ?>