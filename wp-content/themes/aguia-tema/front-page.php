<?php get_header(); ?>

 <!-- início de Clientes -->
 <div class="section">
 	<div class="container parceiros">
 		<div class="row">	
 						<?php 
			$sections = new WP_Query(
				array(
					'post_type' => 'clientes',
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
				<h1>Clientes</h1>
				<div class="slider-area">
					<div class="owl-carousel owl-theme">
							<?php if ($sections->have_posts()): ?>
								<?php while ($sections->have_posts()) : $sections->the_post(); ?>
								<div class="item">
									<img alt="thumb image" class="wp-post-image" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:100%; height:auto;">
								</div>
								<?php endwhile; ?>
							<?php endif; ?>
						<?php wp_reset_query(); ?>
					</div>
				</div>
 		</div>
 	</div>
 </div>

<?php get_footer(); ?>