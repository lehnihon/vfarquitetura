<?php
/**
 * The template for displaying all single posts.
 *
 * @package site
 */

get_header('outros'); ?>
<div id="content">
	<div class="container secao-projetos detalhes-projeto">
		<div class="row text-center titulo-page">
			<h1>Projetos</h1>
			<p>Conheça nossos projetos</p>
			<img class="seta" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/seta.png"?>" />
		</div>
		<div class="row">

			<?php while ( have_posts() ) : the_post(); ?>
					<?php

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'single' );
					?>
			<?php endwhile; ?>

		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #content -->

<?php get_footer(); ?>
