<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package site
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo dirname( get_bloginfo('stylesheet_url')) ?>/js/script-arquitetura.js"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="header" class="home">
		<div class="container">
			<nav id="menu-principal" class="row">
		    	<span class="col-md-4"><a href="<?php echo esc_url( home_url( '/' )); ?>"><img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-arquitetura.png"; ?>"/></a></span>
				<ul class="col-md-5 col-md-offset-3">
					<li><a href="<?php echo esc_url( home_url( '/' )); ?>">Início</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ))."sobre/"; ?>">A Empresa</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ))."projetos/"; ?>">Projetos</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ))."contato/"; ?>">Contato</a></li>
				</ul>
			</nav>
		</div><!-- .container -->
	</header><!-- #masthead -->

