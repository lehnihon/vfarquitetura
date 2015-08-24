<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package site
 */

get_header(); ?>

<div id="content">
	<div class="secao-projetos container">
		<div class="row text-center titulo-page">
			<h1>Arquitetura e Design de Interiores</h1>
			<p>Conheça nossos projetos</p>
			<img class="seta" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/seta.png"?>" />
		</div>
		<div class="row">
			<?php 
			$args = array(
			    'orderby' => 'rand',
			    'posts_per_page' => 3
			    );
			$query = new WP_Query( $args ); 
			?>	

			<?php if ( $query->have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<div class="col-md-4">
						<?php

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content');
						?>
					</div>
				<?php endwhile; ?>


			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>
		</div><!-- .row -->
	</div><!-- .container -->
	<div class="secao-sobre">
		<div class="sobre-vf container">
			<div class="row">
				<div class="col-md-6 sobre-right text-center">
					<img style="display:none" class="fade-effect-a" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-arquitetura2.png"?>" />
				</div>
				<div class="col-md-6 sobre-left">
					<h1 style="display:none" class="text-center fade-effect-b">V&F Arquitetura e Design de Interiores</h1><br>
					<p style="display:none" class="fade-effect-c"><strong>A V&F Arquitetura surgiu da união entre o arquiteto Renato Furlanis e a designer Vivian Furlanis.</strong></p>
					<p style="display:none" class="fade-effect-d">Formados pela Universidade Anhembi Morumbi e Panamericana de Arte e Design, atuam no mercado de arquitetura e design de interiores, realizando projetos residenciais e comerciais.</p>
					<p style="display:none" class="fade-effect-e">De perfil contemporâneo, procuram criar espaços confortáveis, sofisticados e sobretudo funcionais, predominando a harmonia e elegância, trabalhando sempre com a fantasia e sonho do cliente.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="secao-detalhes">
		<div class="container">
			<?php get_template_part( 'redessociais' ); ?>
		</div>
	</div>
</div><!-- #content -->

<?php get_footer(); ?>
