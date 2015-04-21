<?php get_header(); ?>

<div class="row">


<section id="single"  class="small-9 columns">

<?php

// The Loop
if (have_posts()) :
	while (have_posts()) : the_post();  ?>
			<article class="row">
				<div class="small-7 columns left">
				<figure>
				<?php $afiche = get_field('afiche_de_la_pelicula');
						if($afiche!='') {
							echo '<img src="';
							the_field('afiche_de_la_pelicula');
							echo '" alt="';
							the_field('titulo_de_la_pelicula');
							echo '" />';
						}
						else {
							the_post_thumbnail('page-thumbnail');
						}
						?>
					
				</figure>
					<!-- AddThis Button BEGIN -->
						<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
						<a class="addthis_button_preferred_1"></a>
						<a class="addthis_button_preferred_2"></a>
						<a class="addthis_button_preferred_3"></a>
						<a class="addthis_button_preferred_4"></a>
						<a class="addthis_button_compact"></a>
						<a class="addthis_counter addthis_bubble_style"></a>
						</div>
						<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
						<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4f1424da788a532a"></script>
						<!-- AddThis Button END -->
						<?php $video = get_field('embed_video');
						if($video !=""){ 
						echo '<iframe width="100%" height="315" src="//www.youtube.com/embed/'.$video.'" frameborder="0" allowfullscreen></iframe>';
			        } ?> </div>
				<h1 class="small-5 columns" ><?php the_title(); ?></h1>
				<div class="small-5 columns right " >
					<?php the_content(); ?>
					<div class="sinopsis">
					<?php
					$getcat = get_field('sinopsis_de_la_pelicula');
					if($getcat!=''){
					echo '<h2>SINOPSIS</h2>';
					} ?>
					<?php the_field('sinopsis_de_la_pelicula'); ?>
					</div>
					<div class="row director">
							<div class="small-6 columns">
								<?php
								$getcatdir = get_field('nombre_del_director_de_la_pelicula');
								?>

								<?php
								if($getcatdir!=''){
									echo '<span>DIRECTOR/A</span>';
								} ?>

								<h2><?php the_field('nombre_del_director_de_la_pelicula'); ?></h2>


							</div>
							<figure class="small-6 columns right">
								<img src="<?php the_field('foto_del_director_de_la_pelicula'); ?>" alt="<?php the_field('nombre_del_director_de_la_pelicula'); ?>" />
							</figure>
							<div class="small-12 columns">
								<?php the_field('biografia_del_director_de_la_pelicula'); ?>
							</div>

					</div>
					</div>
			</article>
		<?php
		endwhile; endif;
		?>
		<ul class="buscador row">
			<li   class="small-3 columns"><h2>buscador</h2>
				<span>Ficip 2014</span>
			</li>

			<li   class="small-3 columns"><a href="<?php bloginfo('url'); ?>/?page_id=4931" title="Buscar por director"><figure>
				<img src="<?php bloginfo('template_url'); ?>/images/buscador-director.png" alt="Buscar por director" />
				<figcaption>PELÍCULAS POR DIRECTOR</figcaption></a>
			</li>

			<li  class="small-3 columns"><a href="<?php bloginfo('url'); ?>/?cat=19" title="Buscar por película"><figure>
				<img src="<?php bloginfo('template_url'); ?>/images/buscador-pelicula.png" alt=""  />
				<figcaption>PELÍCULAS POR TÍTULO</figcaption></a>
			</li>

			<li class="small-3 columns"><a href="<?php bloginfo('url'); ?>/?s=seccion" title="Buscar por seccion"><figure>
				<img src="<?php bloginfo('template_url'); ?>/images/buscador-seccion.png" alt=""   />
				<figcaption>PELÍCULAS POR SECCIÓN</figcaption></a>
			</li>
		</ul>

</section>






<?php get_sidebar(); ?>



</div>

<?php get_footer(); ?>