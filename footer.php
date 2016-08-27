<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package _s
 */
global $tp_options;
?>
	</div><!-- #content -->
	
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="float-footer">
			<div class="container">
				<div class="row">
					<div class="ft-item">
						<div class="col-md-5 col-sm-6 col-xs-12">
							<div class="ft-left">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
										<?php thachpham_logo_ft(); ?>
									</a>
									<p class="ft-des">
										<?php 
											echo  $tp_options['ft-description'] ;
										?>
									</p>
									<p class="ft-social">
										<?php 
											echo  $tp_options['ft-social'] ;
										?>
									</p>
								</div>
						</div>
						<div class="col-md-2 col-sm-6 col-xs-12">
							<div class="menu-footer">
								<span>Navigation</span>
								<?php wp_nav_menu( array( 'theme_location' => 'menu-footer' ) ); ?>
							</div>
						</div>
						<div class="col-md-2 col-sm-6 col-xs-12">
							<div class="services-ft">
								<span>Services</span>
								<?php wp_nav_menu( array( 'theme_location' => 'menu-sevice-footer' ) ); ?>

							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="contact-ft">
								<span>
									<?php 
										echo $tp_options['contact-title'] ;
									?>
								</span>
								<div class="ct-ft-item">
									<p>
									<?php
										echo  $tp_options['location'] ;
									?>
									</p>
									<p>
										<?php 
											echo  $tp_options['phone'] ;
										?>
									</p>
									<p>
										<?php 
											echo  $tp_options['mail'] ;
										?>
									</p>
									<p>
										<?php 
											echo  $tp_options['www'] ;
										?>
									</p>
								</div>						
							</div>
						</div>
					</div>
				</div>				
			</div>
		</div>
		<div class="container">
			<div class="ft-below">
					<div class="left-below-ft">
						<?php 
								echo  $tp_options['left-bl-ft'] ;
						?>
					</div>
					<div class="middle-bl-ft">
						<?php 
								echo  $tp_options['middle-bl-ft'] ;
							?>
					</div>
					<div class="copyright">
						<?php 								
								echo  $tp_options['copyright-ft'] ;
							?>
					</div>
				</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
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
<script>
	 $(document).ready(function() {
	 // js for testimonials carousel
      var owl = $("#owl-demo");
      owl.owlCarousel({
        	  items : 1, //10 items above 1000px browser width
	          itemsDesktop : [1000,1], //5 items between 1000px and 901px
	          itemsDesktopSmall : [900,1], // betweem 900px and 601px
	          itemsTablet: [600,1], //2 items between 600 and 0
	          itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
	      }); 
	      // Custom Navigation Events
	      $(".next").click(function(){
	        owl.trigger('owl.next');
	      })
	      $(".prev").click(function(){
	        owl.trigger('owl.prev');
	      })
    });

</script>
<script>
//js for counter 
	$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 8000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
</script>
<script>
		//js for disable map scrolling
		// Disable scroll zooming and bind back the click event
		var onMapMouseleaveHandler = function (event) {
		var that = $(this);

		that.on('click', onMapClickHandler);
		that.off('mouseleave', onMapMouseleaveHandler);
		that.find('iframe').css("pointer-events", "none");
		}

		var onMapClickHandler = function (event) {
		var that = $(this);

		// Disable the click handler until the user leaves the map area
		that.off('click', onMapClickHandler);

		// Enable scrolling zoom
		that.find('iframe').css("pointer-events", "auto");

		// Handle the mouse leave event
		that.on('mouseleave', onMapMouseleaveHandler);
		}

		// Enable map zooming with mouse scroll when the user clicks the map
		$('#map').on('click', onMapClickHandler);
		$('.ct-map').on('click', onMapClickHandler);
</script>
</body>
</html>
