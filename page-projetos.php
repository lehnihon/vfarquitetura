<?php
/**
 * The template for displaying all single posts.
 *
 * @package site
 */

get_header('outros'); ?>
<div id="content">
	<div class="container secao-projetos">
		<div class="row text-center titulo-page">
			<h1>Projetos</h1>
			<p>Conheça nossos projetos</p>
			<img class="seta" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/seta.png"?>" />
		</div>
		<?php 
		$args = array(
		    'orderby' => 'post_date',
		    'order' => 'DESC');
		$query = new WP_Query( $args ); 
		$i = 0;
		?>	

		<?php if ( $query->have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<?php if ($i % 3 == 0): ?>
				<div class="row projetos">
				<?php endif ?>
					<div class="col-md-4">
						<?php

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content' );
						?>
					</div>
					<?php $i++; ?>
				<?php if ($i % 3 == 0): ?>
				</div><!-- .row -->
				<?php endif ?>
			<?php endwhile; ?>
			
		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

	</div><!-- .container -->
</div><!-- #content -->

<?php get_footer(); ?>

