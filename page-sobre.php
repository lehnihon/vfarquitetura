<?php
/**
 * The template for displaying all single posts.
 *
 * @package site
 */

get_header('outros'); ?>
<div id="content">
	<div class="secao-projetos container">
		<div class="row text-center titulo-page">
			<h1>A Empresa</h1>
			<p>Conheça a V&F Arquitetura e Interiores</p>
			<img class="seta" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/seta.png"?>" />
		</div>
	</div><!-- .container -->
	<div class="secao-sobre">
		<div class="sobre-vf container">
			<div class="row">
				<div class="col-md-6 sobre-right text-center">
					<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-arquitetura2.png"?>" />
				</div>
				<div class="col-md-6 sobre-left">
					<h1 class="text-center">V&F Arquitetura e Design de Interiores</h1><br>
					<p><strong>A V&F Arquitetura surgiu da união entre o arquiteto Renato Furlanis e a designer Vivian Furlanis.</strong></p>
					<p>Formados pela Universidade Anhembi Morumbi e Panamericana de Arte e Design, atuam no mercado de arquitetura e design de interiores, realizando projetos residenciais e comerciais.</p>
					<p>De perfil contemporâneo, procuram criar espaços confortáveis, sofisticados e sobretudo funcionais, predominando a harmonia e elegância, trabalhando sempre com a fantasia e sonho do cliente.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="secao-detalhes">
		<div class="container">
			<div class="row text-center comentario">
				<div class="col-md-12">
					<p>A V&F tem uma característica que está em todos os seus projetos:<br>
						a busca pela qualidade, estilo e bom gosto.
					</p>
					<h4><i>"Desenvolvemos nossos projetos nas fantasias e sonhos de cada cliente, aliando funcionalidade e bom gosto. 
						Nosso maior prazer é entregar um projeto e ver o sorriso no rosto de nossos clientes"</i></h4>
					<p><i>Renato Furlanis e Vivian Furlanis</i></p>
				</div>
			</div>
			<?php get_template_part( 'redessociais' ); ?>
		</div>
	</div>
</div><!-- #content -->
<?php get_footer(); ?>

