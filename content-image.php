<?php
/**
 * @package _s
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<!--this class help image is displayed-->
					<?php if ( 'post' == get_post_type() ) : ?>
							<!-- display thumbnail -->
						<div class="entry-thumbnail">
							<?php ngothuong_thumbnail('large');  ?>
						</div>
						<header class="entry-header">
							<!-- display entry meta -->
						<div class="entry-meta">
							<?php ngothuong_entry_meta(); ?>
						</div><!-- .entry-meta -->
						<img src="<?php echo get_template_directory_uri(); ?> /images/line.png" alt="" width="95%">
						<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
						</header><!-- .entry-header -->	
					<?php endif; ?>
					<div class="entry-content">
						<?php ngothuong_entry_content(); ?>
					</div><!-- .entry-content -->				
</article><!-- #post-## -->