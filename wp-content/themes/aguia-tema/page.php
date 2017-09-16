<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<div class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<h1><?php the_title(); ?></h1><hr>
					<?php the_content(); ?>					
				</div>
			</div>
		</div>
	</div>


<?php endwhile; ?>

<?php get_footer(); ?>