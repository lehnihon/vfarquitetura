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
			<h1>Contato</h1>
			<p>Entre em contato com a V&F Arquitetura e Interiores</p>
			<img class="seta" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/seta.png"?>" />
		</div>
	</div><!-- .container -->
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				Form
			</div>
			<div class="col-md-6">
				<h3>Telefone</h3>
				<p>(11)9-8693-3883</p>
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

