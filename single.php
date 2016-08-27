<?php
/**
 * The template for displaying all single posts.
 *
 * @package _s
 */

get_header(); ?>
	<div class="blog-header">
		<div class="page-title">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Single Blog Post</h1>
						<!-- <?php wp_title('', true,''); ?> -->
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
	<div id="primary" class="content-area">
	<div class="container">
		<div class="row">
				<div class="col-md-9">
					<main id="main" class="site-main" role="main">
						
						<?php while ( have_posts() ) : the_post(); ?>

						<?php
							/* Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'content', get_post_format() );
						?>
						<?php _s_post_nav(); ?>
						<?php
							// If comments are open or we have at least one comment, load up the comment template
							if ( comments_open() || get_comments_number() ) :
							comments_template();
							endif;
						?>
						<?php endwhile; ?>

					</main><!-- #main -->
				</div>
				<div class="col-md-3">
					<div class="sidebar">
						<?php get_sidebar(); ?>
					</div>
				</div>
			
		</div>
	</div>	
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
