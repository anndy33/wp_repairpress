<?php
/**
 * Template Name: About us
 * @package _s
 */
get_header(); ?>
<div class="blog-header">
		<div class="page-title">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1><?php wp_title('', true,''); ?></h1>
						<!-- get the title and id  of current page -->
						<p><?php $value = get_field( "sub_title", get_option( 'page_for_posts' ) ); echo $value; ?></p>

					</div>
				</div>
			</div>
		</div>
		<!-- .entry-header -->
		<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
							<?php if(function_exists('bcn_display'))
							{
							bcn_display('');
							}?>
					</div>
				</div>
			</div>
		</div>
</div>
<article class="about-us" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="row">
			<main id="main" class="site-main" role="main">	
						<?php if ( have_posts() ) : ?>

						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>

						<?php
							/* Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'content', get_post_format('standard') );
						?>

						<?php endwhile; ?>

						<?php
						 
						 	page_nav();
						 
						 ?>

						<?php else : ?>

						<?php get_template_part( 'content', 'none' ); ?>

						<?php endif; ?>
			</main><!-- #main -->
		</div>
</article><!-- #post-## -->
<?php get_footer(); ?>

