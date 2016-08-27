<?php
/**
 * Template Name: Home
 * @package _s
 */
get_header(); ?>
	<!--slider here-->
	
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
		</ol>

	  <!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
		<?php echo do_shortcode('[shortcode_carousel_active
			image="http://foundation.formigo.co.uk/files/9913/8738/4734/F5-Slider-Image-2.jpg" 
			title="Repair your damaged phone." 
			sub-title="Cheap and Fast." 
			content="We offer free postage with all mobile phone & tablet repairs. Saving you time and money. Just print the label and send." 
			button-1="Request a quote" button-2="Get in touch"]'); 
		?>
		<?php echo do_shortcode('[shortcode_carousel 
			image="https://www.metaslider.com/wp-content/uploads/2014/11/mountains1.jpg" 
			title="Repair your damaged phone." 
			sub-title="Cheap and Fast." 
			content="We offer free postage with all mobile phone & tablet repairs. Saving you time and money. Just print the label and send." 
			button-1="Request a quote" button-2="Get in touch"]'); 
		?>
		<?php echo do_shortcode('[shortcode_carousel 
			image="http://www.jssor.com/img/home/04.jpg" 
			title="Repair your damaged phone." 
			sub-title="Cheap and Fast." 
			content="We offer free postage with all mobile phone & tablet repairs. Saving you time and money. Just print the label and send." 
			button-1="Request a quote" button-2="Get in touch"]'); 
		?>
		<?php echo do_shortcode('[shortcode_carousel 
			image="http://wowslider.com/sliders/demo-5/data/images/sur.jpg" 
			title="Repair your damaged phone." 
			sub-title="Cheap and Fast." 
			content="We offer free postage with all mobile phone & tablet repairs. Saving you time and money. Just print the label and send." 
			button-1="Request a quote" button-2="Get in touch"]'); 
		?>
		</div>
		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<i class="fa fa-caret-left" aria-hidden="true"></i>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<i class="fa fa-caret-right" aria-hidden="true"></i>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<div id="banners">
		<div class="container">
			<div class="row">
				<?php echo do_shortcode('[shortcode_banner title="No fix,No fee" content="Lorem ipsum dolor sit" logo="money" ]') ?>
				<?php echo do_shortcode('[shortcode_banner title="6 months warrenty" content="Lorem ipsum dolor sit" logo="calendar-o" ]') ?>
				<?php echo do_shortcode('[shortcode_banner title="Expert repair staff" content="Lorem ipsum dolor sit" logo="users" ]') ?>
				<?php echo do_shortcode('[shortcode_banner title="we are fast" content="Lorem ipsum dolor sit" logo="tachometer" ]') ?>
			</div>
		</div>
	</div>
	<div id="first-row">
		<div class="container">
			<div class="row">
				<?php echo do_shortcode('[shortcode_firstrow image="https://thumbs.dreamstime.com/x/repair-adjustment-electronic-device-38949031.jpg" title="Water damage repair" content="We offer free postage with all mobile phone & tablet repairs. Saving time and money. Just print the label and send."]') ?>
				<?php echo do_shortcode('[shortcode_firstrow image="https://demo.proteusthemes.com/repairpress/wp-content/uploads/sites/27/2015/09/blog-8.jpg" title="Water damage repair" content="We offer free postage with all mobile phone & tablet repairs. Saving time and money. Just print the label and send."]') ?>
				<?php echo do_shortcode('[shortcode_firstrow image="https://demo.proteusthemes.com/repairpress/wp-content/uploads/sites/27/2015/09/blog-41.jpg" title="Water damage repair" content="We offer free postage with all mobile phone & tablet repairs. Saving time and money. Just print the label and send."]') ?>
				<div class="col-md-3 col-sm-3 col-sx-6">
					<div class="ft-row-last">
						<ul>
							<?php echo do_shortcode('[shortcode_lastrow logo-name="laptop" content="MAC & pc repair" ]') ?>
							<?php echo do_shortcode('[shortcode_lastrow logo-name="tablet" content="tablet & ipad repair" ]') ?>
							<?php echo do_shortcode('[shortcode_lastrow logo-name="gamepad" content="game systems repair" ]') ?>
							<?php echo do_shortcode('[shortcode_lastrow logo-name="television" content="LCD tv repair" ]') ?>
							<?php echo do_shortcode('[shortcode_lastrow logo-name="music" content="mp3 & MP4 Repairsr" ]') ?>
							<?php echo do_shortcode('[shortcode_lastrow logo-name="ellipsis-v" content="MAC & pc repair" ]') ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="second-row">
		<div class="container">
			<div class="row">
				<div class="sd-row-title">
					<span>Easy way to get your phone repaired</span>
				</div>
				<?php echo do_shortcode('[shortcode_secondrow logo-name="mobile" title="borken divice" content="If your device breaks, dont panic. We offer a huge range of mobile phone & tablet repair services." no="01"]') ?>
				<?php echo do_shortcode('[shortcode_secondrow logo-name="envelope" title="SEND IT TO US" content="We offer free postage with all mobile phone & tablet repairs. Saving you time and money" no="02"]') ?>
				<?php echo do_shortcode('[shortcode_secondrow logo-name="wrench" title="QUICK FIX" content="Our trained technicians will repair your mobile phone or tablet device quickly & efficiently" no="03"]') ?>
				<?php echo do_shortcode('[shortcode_secondrow logo-name="reply" title="FAST RETURN" content="Choose the delivery method that matches your requirements. We will make sure your" no="04"]') ?>
			</div>
		</div>
	</div>
	<div id="third-row">
		<div class="container">
			<div class="row">
			<?php echo do_shortcode('[shortcode_thirdrow logo-name="android" title="Android Lolipop" content="Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura."]'); ?>
			<?php echo do_shortcode('[shortcode_thirdrow logo-name="apple" title="Apple iOS 8.0" content="Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura."]'); ?>
			<?php echo do_shortcode('[shortcode_thirdrow logo-name="windows" title="Windows Phone 10" content="Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura."]'); ?>
			<?php echo do_shortcode('[shortcode_thirdrow logo-name="mobile" title="China Express" content="Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura."]'); ?>
			<?php echo do_shortcode('[shortcode_thirdrow logo-name="camera-retro" title="iCamera OS" content="Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura."]'); ?>
			<?php echo do_shortcode('[shortcode_thirdrow logo-name="desktop" title="Desktop Systems" content="Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura."]'); ?>
				
			</div>
		</div>
	</div>
	<div id="sell">
		<div class="container">
			<div class="row">
			<?php echo do_shortcode('[shortcode_sell title="Do you want to sell your mobile phone" content="We can sell your cell phone device in the matter of days for just 10% fee" button-title="GET A FREE ESTIMATION"]'); ?>
			</div>
		</div>
	</div>
	<div id="latest-new">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="new-title">
						<span>Latest news</span>
						<button class="hvr-bounce-to-right">more posts</button>
					</div>
				</div>				
				<?php
					$args = array( 'numberposts' => '2' );
					$recent_posts = wp_get_recent_posts( $args );	
					foreach( $recent_posts as $recent ){
						echo '<div class="col-md-6 col-sm-12 col-xs-12">';
							echo '<div class="new-item">';
								echo do_shortcode('[shortcode_latestnew image="https://thumbs.dreamstime.com/x/repair-adjustment-electronic-device-38949031.jpg"]');
								echo '<div class="new-it-heading">';
									echo '<h2><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </h2> ';
									echo'<span>';
										echo date( 'F j,Y', strtotime( $recent['post_date'] ) );
									echo '</span>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
						}
					wp_reset_query();
				?>
			</div>
		</div>
	</div>
	<div id="aboutus">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="ab-title-left">
						<span>A little something about us</span>
					</div>
					<div class="ab-item-left">
						<?php echo do_shortcode('[shortcode_aboutus 
							image="https://qbp.com/files/article_images/15_May_ChangeTheOil_thumb.jpg"
							image-1="http://www.manjushreeindia.com/images/abt.jpg"
							content="Duis malesuada metus orci, id pulvinar lectus vehicula in. In hendrerit facilisis ex eget aliquet. Nam id congue dolor. Donec feugiat hendrerit lorem. Donec sagittis massa vitae nulla feugiat vulputate. Sed pulvinar ipsum ac tempor viverra. Nulla facilisi. Integer pulvinar at libero eu semper. Mauris accumsan elit a est tincidunt mattis.<br>
									žDuis malesuada metus orci, id pulvinar lectus vehicula in. In hendrerit facilisis ex eget aliquet.
								 	Nam id congue dolor. Donec feugiat hendrerit lorem. Sed pulvinar ipsum ac tempor viverra. Nulla facilisi.
									Integer pulvinar at libero eu semper."]');
						 ?>		
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="ab-title-right">
						<span>FAQ</span>
						<button class="hvr-radial-out">Read more</button>
					</div>
					<div class="accordion-item">
					<?php echo do_shortcode('[shortcode_accordion 
						title="HOW TO MAKE TEXT BIGGER ON THE IPHONE?" 
						content="Duis malesuada metus orci, id pulvinar lectus vehicula in. In hendrerit facilisis ex eget aliquet.
							 Nam id congue dolor. Donec feugiat hendrerit lorem. Donec sagittis massa vitae nulla feugiat vulputate. 
							 Sed pulvinar ipsum ac tempor viverra. Nulla facilisi. Integer pulvinar at libero eu semper. 
							 Mauris accumsan elit a est tincidunt mattis."]');
					 ?>
					 	<?php echo do_shortcode('[shortcode_accordion 
					 		title="RECOVER DELETED PHOTOS AND VIDEOS ON SONY XPERIA?" 
					 		content="Duis malesuada metus orci, id pulvinar lectus vehicula in. In hendrerit facilisis ex eget aliquet.
							 Nam id congue dolor. Donec feugiat hendrerit lorem. Donec sagittis massa vitae nulla feugiat vulputate. 
							 Sed pulvinar ipsum ac tempor viverra. Nulla facilisi. Integer pulvinar at libero eu semper. 
							 Mauris accumsan elit a est tincidunt mattis."]');
					 ?>
					 	<?php echo do_shortcode('[shortcode_accordion 
					 		title="HOW TO SCREENSHOT ON HTC SMARTPHONE??" content="Duis malesuada metus orci, id pulvinar lectus vehicula in. In hendrerit facilisis ex eget aliquet.
							 Nam id congue dolor. Donec feugiat hendrerit lorem. Donec sagittis massa vitae nulla feugiat vulputate. 
							 Sed pulvinar ipsum ac tempor viverra. Nulla facilisi. Integer pulvinar at libero eu semper. 
							 Mauris accumsan elit a est tincidunt mattis."]');
					 ?>
					 	<?php echo do_shortcode('[shortcode_accordion 
					 		title="THE DIFFERENCE BETWEEN A CRACKED SCREEN & BROKEN LCD..." 
					 		content="Duis malesuada metus orci, id pulvinar lectus vehicula in. In hendrerit facilisis ex eget aliquet.
							 Nam id congue dolor. Donec feugiat hendrerit lorem. Donec sagittis massa vitae nulla feugiat vulputate. 
							 Sed pulvinar ipsum ac tempor viverra. Nulla facilisi. Integer pulvinar at libero eu semper. 
							 Mauris accumsan elit a est tincidunt mattis."]');
					 ?>
					 	<?php echo do_shortcode('[shortcode_accordion 
					 		title="HOW TO SOLVE SONY XPERIA OVER HEATING PROBLEMS" 
					 		content="Duis malesuada metus orci, id pulvinar lectus vehicula in. In hendrerit facilisis ex eget aliquet.
							 Nam id congue dolor. Donec feugiat hendrerit lorem. Donec sagittis massa vitae nulla feugiat vulputate. 
							 Sed pulvinar ipsum ac tempor viverra. Nulla facilisi. Integer pulvinar at libero eu semper. 
							 Mauris accumsan elit a est tincidunt mattis."]');
					 ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="map">
		 <iframe style="pointer-events: none;" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14896.6360948438!2d105.834901!3d21.02632215!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1468894804589" width="100%" height="480" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<div id="gallery-it">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="galley-title">
						<span>Gallery before-after</span>
					</div>
				</div>
				<?php echo do_shortcode('[shortcode_gallery 
					image="https://www.wonderplugin.com/wp-content/uploads/2013/12/Waves_1024.jpg"
					image-1="https://qbp.com/files/article_images/15_May_ChangeTheOil_thumb.jpg"
					title="Water damage repair"]');
				 ?>
				 <?php echo do_shortcode('[shortcode_gallery 
					image="http://lh3.googleusercontent.com/-9_U_5izebkY/UlWhXHyio4I/AAAAAAAAtT8/1IFy7FxbqxM/s0/zero-dean-photography-feather-rain-kisses.jpg"
					image-1="https://qbp.com/files/article_images/15_May_ChangeTheOil_thumb.jpg"
					title="Broken screen repair"]');
				 ?>
				 <?php echo do_shortcode('[shortcode_gallery 
					image="http://lh3.googleusercontent.com/-9_U_5izebkY/UlWhXHyio4I/AAAAAAAAtT8/1IFy7FxbqxM/s0/zero-dean-photography-feather-rain-kisses.jpg"
					image-1="https://qbp.com/files/article_images/15_May_ChangeTheOil_thumb.jpg"
					title="external case repair"]');
				 ?>
				 <?php echo do_shortcode('[shortcode_gallery 
					image="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcT_nxll02PinRziZJDIO2y1t9Gcp5s-yyjZJAirWPaussU3UZxX"
					image-1="https://qbp.com/files/article_images/15_May_ChangeTheOil_thumb.jpg"
					title="Broken screen repair"]');
				 ?>	
			</div>
		</div>
	</div>
	<div id="testimonial">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="test-heading">
						<span>Testimonials</span>
						<div class="customNavigation">
							<a class="btn prev"><i class="fa fa-caret-left" aria-hidden="true"></i></a>
							<a class="btn next"><i class="fa fa-caret-right" aria-hidden="true"></i></i></a>	
	    				</div>
    				</div>
	    			<div id="owl-demo">
						<div class="item">
							<?php echo do_shortcode('[shortcode_testimonial 
										content="But I must explain to you how all this mistakn idea of denouncing pleasure and praising pain was born and 
											I will give you a complete of the system, and expound the actual teaings of the great explorer idea to be on 
											the top of the mobile industry." 
										author="Joseph Jimenez"]');
							 ?>
						</div>
						<div class="item">
							<?php echo do_shortcode('[shortcode_testimonial 
										content="But I must explain to you how all this mistakn idea of denouncing pleasure and praising pain was born and 
											I will give you a complete of the system, and expound the actual teaings of the great explorer idea to be on 
											the top of the mobile industry." 
										author="Joseph Jimenez"]');
							 ?>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>
	<div id="partner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="partner-title">
						<span>Our respected partners</span>
					</div>
				</div>
				<div class="col-md-12">
					<div class="partner-it">
						<?php echo do_shortcode('[shortcode_partner image="http://pull1.thelogosmith.netdna-cdn.com/wp-content/uploads/2013/12/MoleseyCo-Fashion-Brand-Logo-Design-by-The-Logo-Smith.jpg"]'); ?>
						<?php echo do_shortcode('[shortcode_partner image="https://s-media-cache-ak0.pinimg.com/736x/a0/9c/ca/a09cca343eed409ac3f13c0248b3e878.jpg"]'); ?>
						<?php echo do_shortcode('[shortcode_partner image="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRxOHzMcAn1aKfB9AKMr7zgMP116oodUzfutCCZQn4FSwIeBmwm"]'); ?>
						<?php echo do_shortcode('[shortcode_partner image="http://pull1.thelogosmith.netdna-cdn.com/wp-content/uploads/2013/12/MoleseyCo-Fashion-Brand-Logo-Design-by-The-Logo-Smith.jpg"]'); ?>
						<?php echo do_shortcode('[shortcode_partner image="http://pull1.thelogosmith.netdna-cdn.com/wp-content/uploads/2013/12/MoleseyCo-Fashion-Brand-Logo-Design-by-The-Logo-Smith.jpg"]'); ?>	
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="counter">
		<div class="container">
			<div class="row">
				<?php echo do_shortcode('[shortcode_counter number="5784" content="Repaired glasses"]'); ?>
				<?php echo do_shortcode('[shortcode_counter number="1536" content="Water Damaged Repairs"]'); ?>
				<?php echo do_shortcode('[shortcode_counter number="5784" content="Unlocked Phones"]'); ?>
				<?php echo do_shortcode('[shortcode_counter number="5784" content="Happy Customers"]'); ?>

			</div>
		</div>
	</div>
<?php get_footer(); ?>