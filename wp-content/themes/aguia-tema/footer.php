<div class="section rodape">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<?php if ( dynamic_sidebar('rodape_widgets') ) : else : endif; ?>
				</div>
				<div class="col-md-4">
					<?php if ( dynamic_sidebar('rodape_widgets-2') ) : else : endif; ?>
				</div>
				<div class="col-md-4">
					<?php if ( dynamic_sidebar('rodape_widgets-3') ) : else : endif; ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 cop">
					<p>Águia Sul - Goiás | Desenvolvido por Luiz Augusto</p>
				</div>
			</div>
		</div>
	</div>
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery-3.2.1.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery-migrate-1.4.1.min.js"></script>
	<?php wp_footer(); ?>
</body>
</html>