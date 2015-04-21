<?php get_header(); ?>

<div class="row">

<section id="page" class="small-9 columns  directores">

	<?php get_search_form(); ?> 


<?php

// The Loop
if (have_posts()) :
	while (have_posts()) : the_post();  ?>
			 <article style="margin-bottom:2em;" class="row">
				<figure class="small-4 columns left">
					<img src="<?php the_field('afiche_de_la_pelicula'); ?>" alt="" />
				</figure>
				<div class="small-8 columns">
				<a  href="<?php the_permalink(); ?>" title="<?php the_title() ?>"><h2><?php the_title(); ?></h2></a>
				<p><?php the_field('sinopsis_de_la_pelicula'); ?></p>
				</div>
			</article>
		<?php
		endwhile; endif;
		?>
<div class="nav-previous alignleft"><?php next_posts_link( 'Ver mas' ); ?></div>
<div class="nav-next alignright"><?php previous_posts_link( 'Anteriores' ); ?></div>


</section>





<?php get_sidebar(); ?>



</div>

<?php get_footer(); ?>