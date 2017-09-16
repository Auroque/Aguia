<?php get_header(); ?>

<?php 
	$sections = new WP_Query(
		array(
			'post_type' => 'slider',
			'ignore_sticky_posts' => true,
			'showposts' => -1,
			'orderby' => array(
        		'date'          => 'DESC',
        		'comment_count' => 'DESC',
   				),
			'order' => 'ASC'
			)
	);
	?>
	<?php if ($sections->have_posts()): ?>
		<?php while ($sections->have_posts()) : $sections->the_post(); ?>
		<div class="section" id="slider">
			<div class="container">
				<div class="row">
					<div class="texto-slider">
						<h3><?php the_title(); ?></h3>						
					</div>
				</div>
			</div>
			<div class="container-img">
				<img alt="thumb image" class="wp-post-image" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:100%; height:auto;" />				
			</div>
		</div>
		<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>

 <!-- início de Principais Produtos -->
 <div class="section">
 	<div class="container principais-produtos">
 		<div class="row">	
 			<?php 
			$sections = new WP_Query(
				array(
					'post_type' => 'principais_produtos',
					'ignore_sticky_posts' => true,
					'showposts' => -1,
					'orderby' => array(
        				'date'          => 'DESC',
        				'comment_count' => 'DESC',
   					 ),
					'order' => 'ASC'
					)
			);
			?>
			<h1>Principais Produtos</h1>
			<?php if ($sections->have_posts()): ?>
				<?php while ($sections->have_posts()) : $sections->the_post(); ?>
				<div class="col-md-3 altura">
					<div class="cont-img">
						<img alt="thumb image" class="wp-post-image" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:100%; height:auto;" />
					</div>
					<h3><?php the_title(); ?></h3>
				</div>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_query(); ?>
 		</div>
 	</div>
 </div>

<?php get_footer(); ?>