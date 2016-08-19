<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package _s
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', '_s' ); ?></a>
	<div id="header-top">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="header-left-top">
						<?php 
							global $tp_options;
							echo  $tp_options['header-top-left'] ;
						?>
					</div>
				</div>
				<div class="col-md-6">
					<div class="header-right-top">
						<?php wp_nav_menu( array( 'theme_location' => 'top-menu-right' ) ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="header-middle">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="site-branding">
						<h1 class="site-title">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<?php thachpham_logo(); ?>
								</a>
						</h1>	
					</div><!-- .site-branding -->
				</div>
				<div class="col-md-9">
					<div class="header-infor">
						<div class="hd-item">
							<div class="hd-it-title">
								<i class="fa fa-headphones" aria-hidden="true"></i>
								<h3>Live have</h3>
							</div>
							<span>
								<?php 
									global $tp_options;
									echo  $tp_options['live-help'] ;
								?>
							</span>
						</div>
						<div class="hd-item">
							<div class="hd-it-title">
								<i class="fa fa-headphones" aria-hidden="true"></i>
								<h3>Opening time</h3>
							</div>
							<span>
								<?php 
									global $tp_options;
									echo  $tp_options['open-time'] ;
								?>
							</span>
						</div>
						<div class="hd-item last">
							<div class="hd-it-title">
								<i class="fa fa-headphones" aria-hidden="true"></i>
								<h3>Email Us</h3>
							</div>
							<span>
								<?php 
									global $tp_options;
									echo  $tp_options['email'] ;
								?>
							</span>
						</div>
						<div class="hd-button">
							<button>Request a  quote</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="row">
			<div class="col-md-12">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', '_s' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					<div class="hd-social">
						<i class="fa fa-facebook-square" aria-hidden="true"></i>
						<i class="fa fa-linkedin-square" aria-hidden="true"></i>
						<i class="fa fa-twitter-square" aria-hidden="true"></i>
						<i class="fa fa-youtube-square" aria-hidden="true"></i>
					</div>
				</nav><!-- #site-navigation -->
			</div>	
			</div>
		</div>		
	</header><!-- #masthead -->
</div>       
<!-- start the content -->
<div id="content" class="site-content">
		