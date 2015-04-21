<?php get_header(); ?>

<div class="row">

<section id="page" class="small-9 columns infinite-scroll">

	<?php get_search_form(); ?>


<?php

// The Loop
if (have_posts()) :
	while (have_posts()) : the_post();  ?>
			<article>
				<a href="<?php the_permalink(); ?>" title="<?php the_title() ?>"><h2><?php the_title(); ?></h2></a>
				<?php the_excerpt(); ?>
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