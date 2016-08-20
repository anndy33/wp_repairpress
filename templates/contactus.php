<?php
/**
 * Template Name: Contact us
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
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="contact-infor">
					<div class="ct-title">
						<?php 
							echo  $tp_options['contact-title'] ;
						?>
					</div>
					<div class="ct-infor-item">
						<p>
						<?php 
							echo  $tp_options['location'] ;
						?>
						<img src="<?php echo get_template_directory_uri(); ?> /images/ct-line.png" alt="">
						</p>
						<p>
							<?php 
								echo  $tp_options['phone'] ;
							?>
							<img src="<?php echo get_template_directory_uri(); ?> /images/ct-line.png" alt="">
						</p>
						<p>
							<?php 
								echo  $tp_options['mail'] ;
							?>
							<img src="<?php echo get_template_directory_uri(); ?> /images/ct-line.png" alt="">
						</p>
						<p>
							<?php 
								echo  $tp_options['www'] ;
							?>
						</p>
					</div>
				</div>
				<div class="opening-time">
					<div class="open-title">
						
					</div>

				</div>
		</div>
	</div>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', '_s' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', '_s' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>

