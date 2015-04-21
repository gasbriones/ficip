<?php get_header(); ?>

<div class="row">

<section id="page" class="small-9 columns">
<?php

// The Loop
if (have_posts()) :
	while (have_posts()) : the_post();  ?>
			<article>
				<figure>
				<?php	the_post_thumbnail('page-thumbnail'); ?>
				</figure>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</article>
		<?php
		endwhile; endif;
		?>
</section>



 

<?php get_sidebar(); ?>

 

</div>

<?php get_footer(); ?>