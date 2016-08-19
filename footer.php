<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package _s
 */
?>
	</div><!-- #content -->
	
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="float-footer">
			<div class="container">
				<div class="ft-item">
					<div class="ft-left">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<?php thachpham_logo_ft(); ?>
						</a>
						<p class="ft-des">
							<?php 
								global $tp_options;
								echo  $tp_options['ft-description'] ;
							?>
						</p>
						<p class="ft-social">
							<?php 
								global $tp_options;
								echo  $tp_options['ft-social'] ;
							?>
						</p>
					</div>
					<div class="menu-footer">
						<span>Navigation</span>
						<?php wp_nav_menu( array( 'theme_location' => 'menu-footer' ) ); ?>
					</div>
					<div class="services-ft">
						<span>Services</span>
						<?php wp_nav_menu( array( 'theme_location' => 'menu-sevice-footer' ) ); ?>

					</div>
					<div class="contact-ft">
						<span>Contact Infor</span>
						<div class="ct-ft-item">
							<p>
							<?php 
								global $tp_options;
								echo  $tp_options['location'] ;
							?>
							</p>
							<p>
								<?php 
									global $tp_options;
									echo  $tp_options['phone'] ;
								?>
							</p>
							<p>
								<?php 
									global $tp_options;
									echo  $tp_options['mail'] ;
								?>
							</p>
							<p>
								<?php 
									global $tp_options;
									echo  $tp_options['www'] ;
								?>
							</p>
						</div>						
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="ft-below">
					<div class="left-below-ft">
						<?php 
								global $tp_options;
								echo  $tp_options['left-bl-ft'] ;
						?>
					</div>
					<div class="middle-bl-ft">
						<?php 
								global $tp_options;
								echo  $tp_options['middle-bl-ft'] ;
							?>
					</div>
					<div class="copyright">
						<?php 
								global $tp_options;
								echo  $tp_options['copyright-ft'] ;
							?>
					</div>
				</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
	 $('.carousel.carousel-slider').carousel({full_width: true});
	  //js for accordion
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function(){
            this.classList.toggle("active");
            this.nextElementSibling.classList.toggle("show");
      }
    }
</script>
</body>
</html>
