<?php get_header(); ?>
<div class="content-panel">
	<div class="viewport-center">
		<div class="content-panel-area">
		<!--
			ABOUT US PAGE
		-->
		<?php 
			$args=array(
				'post_type' => 'aboutus'
			);

			$blogPosts = new WP_Query($args);

			while ($blogPosts->have_posts()) : $blogPosts->the_post();
		?>
		<div class="one-big-page aboutus-page">
			<div class="one-big-page-panel">
				<div class="aboutuspage panel one">
					<div class="panel-textbar-left">
						<img src="<?php echo get_template_directory_uri(); ?>/images/cross-flags.png" />
						<h5>About Us</h5>
						<div class="aboutus-panel-slider-lines">
							<div class="aboutus-panel-slider-lines-inner">
							</div>
						</div>
						<?php the_content(); ?>
					</div>
					<img src="<?php echo get_template_directory_uri(); ?>/images/aboutus-car.png" class="aboutus-slide-image" />
					<div class="down-arrow-hover">
						<h6>More</h6>
						<img src="<?php echo get_template_directory_uri(); ?>/images/down-arrow.png" class="bottom-button" />
					</div>
				</div>
				<div class="aboutuspage panel two">
					<div class="aboutus-panel-wide">
						<h2><span>Meet the</span> Team</h2>
					</div>
					<div class="aboutus-panel-people">
						<ul>
						<?php endwhile; ?>
							<?php 
								$args=array(
									'post_type' => 'theteam'
								);

								$blogPosts = new WP_Query($args);

								while ($blogPosts->have_posts()) : $blogPosts->the_post();
							?>
							<li><div class="aboutus-panel-individual">
								<?php the_post_thumbnail(); ?>
								<h4><span><?php echo get_post_meta(get_the_ID(), 'firstname', true) ?></span> <?php echo get_post_meta(get_the_ID(), 'lastname', true) ?></h4>
							</div></li>
							<?php endwhile; ?>
						</ul>
					</div>
					<div class="aboutus-individual-frame">
							<div class="aboutus-individual-frame-text">
								<div class="aboutus-individual-frame-text-first">
									<h3><span>Sean</span> Farias</h3>
									<img src="<?php echo get_template_directory_uri(); ?>/images/close-button.png" />
									<p>Close</p>
								</div>
								<div class="aboutus-individual-frame-text-second">
									<h4><span>Age :</span> 28</h4>
								</div>
								<div class="aboutus-individual-frame-text-third">
									<h4><span>Hometown :</span> connecticut</h4>
								</div>
								<div class="aboutus-individual-frame-text-fourth">
									<h4><span>Position / Exp. :</span> Painter / 5 yrs</h4>
								</div>
								<div class="aboutus-individual-frame-text-fifth">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
									<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
								</div>
							</div>
							<img src="<?php echo get_template_directory_uri(); ?>/images/temp/seanfarias-full.png" />
							<div class="aboutus-individual-frame-overlay">
							</div>
					</div>
					<div class="up-arrow-hover">
						<h6>Up</h6>
						<img src="<?php echo get_template_directory_uri(); ?>/images/up-arrow.png" class="top-button" />
					</div>
					<div class="down-arrow-footer">
						<h6>Get<span>Social</span></h6>
						<img src="<?php echo get_template_directory_uri(); ?>/images/down-arrow.png" class="bottom-button" />
					</div>
				</div>
			</div>
		</div>
		<!--
			HOME PAGE
		-->
		<div class="one-big-page process-page">
			<div class="one-big-page-panel" id="scroll">
				<div class="homepage panel one">
					<div class="panel-one-slide-wrapper">
						<div class="panel-one-slider first">
							<h4>1964</h4>
							<h5>Aston Martin<br />
								DB5
							</h5>
							<div class="panel-slider-lines">
								<div class="panel-slider-lines-inner">
								</div>
							</div>
							<img src="<?php echo get_template_directory_uri(); ?>/images/slide1-car.png" class="slide-image" />						
						</div>
						<div class="panel-one-slider second">
							<h4>1964</h4>
							<h5>Aston Martin<br />
								DB5
							</h5>
							<div class="panel-slider-lines">
								<div class="panel-slider-lines-inner">
								</div>
							</div>
							<img src="<?php echo get_template_directory_uri(); ?>/images/slide1-car.png" class="slide-image" />
						</div>
						<div class="panel-one-slider third">
							<h4>1964</h4>
							<h5>Aston Martin<br />
								DB5
							</h5>
							<div class="panel-slider-lines">
								<div class="panel-slider-lines-inner">
								</div>
							</div>
							<img src="<?php echo get_template_directory_uri(); ?>/images/slide1-car.png" class="slide-image" />						
						</div>
					</div>
					<div class="panel-textbar">
						<img src="<?php echo get_template_directory_uri(); ?>/images/cross-flags.png" />
					</div>
					<div class="down-arrow-hover slider-arrow">
						<h6>The Process</h6>
						<img src="<?php echo get_template_directory_uri(); ?>/images/down-arrow.png" class="bottom-button" />
					</div>
				</div>
				<div class="homepage panel two">
					<img src="<?php echo get_template_directory_uri(); ?>/images/panel2-car.png" class="slide-image-horizontal" />
					<div class="panel-textbar-horizontal">
						<h2><span>The<br /></span>Process</h2>
						<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h4>
					</div>
					<div class="up-arrow-hover">
						<h6>Home</h6>
						<img src="<?php echo get_template_directory_uri(); ?>/images/up-arrow.png" class="top-button" />
					</div>
					<div class="down-arrow-hover">
						<h6>Who we are</h6>
						<img src="<?php echo get_template_directory_uri(); ?>/images/down-arrow.png" class="bottom-button" />
					</div>
				</div>
				<div class="homepage panel three">
					<img src="<?php echo get_template_directory_uri(); ?>/images/panel3-car.png" class="slide-image-wide" />
					<div class="panel-textbar-wide">
						<img src="<?php echo get_template_directory_uri(); ?>/images/cross-flags.png" />
						<h4>Who we are</h4>
						<div class="bot-panel-slider-lines">
							<div class="bot-panel-slider-lines-inner">
							</div>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						<h6>Learn <span>more</span></h6>
						<div class="bot-panel-slider-lines-small">
							<div class="bot-panel-slider-lines-inner-small">
							</div>
						</div>
					</div>
					<div class="up-arrow-hover">
						<h6>The Process</h6>
						<img src="<?php echo get_template_directory_uri(); ?>/images/up-arrow.png" class="top-button" />
					</div>
					<div class="down-arrow-footer">
						<h6>Get<span>Social</span></h6>
						<img src="<?php echo get_template_directory_uri(); ?>/images/down-arrow.png" class="bottom-button" />
					</div>
				</div>
			</div>
		</div>
		<!--
			BLOG PAGE
		-->
		<div class="one-big-page blog-page">
			<div class="one-big-page-panel">
				<div class="blogpage panel one">
					<div class="blog-textbar-top">
						<img src="<?php echo get_template_directory_uri(); ?>/images/cross-flags.png" />
						<h4>Blog</h4>
						<div class="blog-panel-lines">
							<div class="blog-panel-lines-inner">
							</div>
						</div>
					</div>
					<img src="<?php echo get_template_directory_uri(); ?>/images/blog-top-car.png" class="blog-top-panel-image" />
					<div class="down-arrow-hover">
						<h6>Blogs</h6>
						<img src="<?php echo get_template_directory_uri(); ?>/images/down-arrow.png" class="bottom-button" />
					</div>
				</div>
				<div class="blogpage panel two">
					<div class="blog-panel">
						<div class="blog-panel-summary">
							<div class="blog-summary-preview">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
								<a href="http://localhost/wordpress/?p=343" target="_blank">Read <span>More</span></a>
							</div>
							<div class="blog-panel-summary-textbox">
								<div class="blog-summary-title-outerlines">
									<div class="blog-summary-title-innerlines">
										<h4>Title of this first blog post</h4>
									</div>
								</div>
							</div>
							<img src="<?php echo get_template_directory_uri(); ?>/images/blog-slide-middle-left.png" class="blog-summary-image" />
						</div>
						<div class="blog-panel-summary">
							<div class="blog-summary-preview">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
								<a href="http://localhost/wordpress/?p=343" target="_blank">Read <span>More</span></a>
							</div>
							<div class="blog-panel-summary-textbox">
								<div class="blog-summary-title-outerlines">
									<div class="blog-summary-title-innerlines">
										<h4>Title of another blog post</h4>
									</div>
								</div>
							</div>

							<img src="<?php echo get_template_directory_uri(); ?>/images/blog-slide-middle-middle.png" class="blog-summary-image" />
						</div>
						<div class="blog-panel-summary">
							<div class="blog-summary-preview">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
								<a href="http://localhost/wordpress/?p=343" target="_blank">Read <span>More</span></a>
							</div>
							<div class="blog-panel-summary-textbox">
								<div class="blog-summary-title-outerlines">
									<div class="blog-summary-title-innerlines">
										<h4>This is a three line long blog post to show title length</h4>
									</div>
								</div>
							</div>

							<img src="<?php echo get_template_directory_uri(); ?>/images/blog-slide-middle-right.png" class="blog-summary-image" />
						</div>
					</div>


					<div class="up-arrow-hover">
						<h6>Top</h6>
						<img src="<?php echo get_template_directory_uri(); ?>/images/up-arrow.png" class="top-button" />
					</div>
					<div class="down-arrow-hover">
						<h6>Blogs</h6>
						<img src="<?php echo get_template_directory_uri(); ?>/images/down-arrow.png" class="bottom-button" />
					</div>
				</div>
				<div class="blogpage panel three">
					<div class="blog-panel">
						<div class="blog-panel-summary">
							<div class="blog-summary-preview">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
								<a href="http://localhost/wordpress/?p=343" target="_blank">Read <span>More</span></a>
							</div>
							<div class="blog-panel-summary-textbox">
								<div class="blog-summary-title-outerlines">
									<div class="blog-summary-title-innerlines">
										<h4>Title of this first blog post</h4>
									</div>
								</div>
							</div>
							<img src="<?php echo get_template_directory_uri(); ?>/images/blog-slide-bottom-left.png" class="blog-summary-image" />
						</div>
						<div class="blog-panel-summary">
							<div class="blog-summary-preview">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
								<a href="http://localhost/wordpress/?p=343" target="_blank">Read <span>More</span></a>
							</div>
							<div class="blog-panel-summary-textbox">
								<div class="blog-summary-title-outerlines">
									<div class="blog-summary-title-innerlines">
										<h4>Blog Post with Default Image for Display</h4>
									</div>
								</div>
							</div>
							<img src="<?php echo get_template_directory_uri(); ?>/images/blog-slide-bottom-middle.png" class="blog-summary-image" />
						</div>
						<div class="blog-panel-summary">
							<div class="blog-summary-preview">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
								<a href="http://localhost/wordpress/?p=343" target="_blank">Read <span>More</span></a>
							</div>
							<div class="blog-panel-summary-textbox">
								<div class="blog-summary-title-outerlines">
									<div class="blog-summary-title-innerlines">
										<h4>This is a blog post</h4>
									</div>
								</div>
							</div>
							<img src="<?php echo get_template_directory_uri(); ?>/images/blog-slide-bottom-right.png" class="blog-summary-image" />
						</div>
					</div>
					<div class="up-arrow-hover">
						<h6>Home</h6>
						<img src="<?php echo get_template_directory_uri(); ?>/images/up-arrow.png" class="top-button" />
					</div>
					<div class="down-arrow-footer">
						<h6>Get<span>Social</span></h6>
						<img src="<?php echo get_template_directory_uri(); ?>/images/down-arrow.png" class="bottom-button" />
					</div>
				</div>
			</div>
		</div>
		<!--
			CONTACT US PAGE
		-->
		<?php 
			$args=array(
				'post_type' => 'contactus'
			);

			$blogPosts = new WP_Query($args);

			while ($blogPosts->have_posts()) : $blogPosts->the_post();
		?>
		<div class="one-big-page contactus-page">
			<div class="one-big-page-panel">
				<div class="contactpage panel one">
					<div class="contactus-textpanel">
						<img src="<?php echo get_template_directory_uri(); ?>/images/cross-flags.png" />
						<h4>Contact Us</h4>
						<div class="contact-panel-lines">
							<div class="contact-panel-lines-inner">
							</div>
						</div>
						<?php the_content(); ?>
						<div class="contact-info">
							<div class="contact-hours">
								<h5>M - S</h5>
								<h6><?php echo get_post_meta(get_the_ID(), 'monsathr', true) ?></h6>
								<h5>S u n</h5>
								<h6><?php echo get_post_meta(get_the_ID(), 'sunhr', true) ?></h6>
							</div>
							<div class="contact-phone">
								<h5>P</h5>
								<h6><?php echo get_post_meta(get_the_ID(), 'phonenumber', true) ?></h6>
								<h5>F</h5>
								<h6><?php echo get_post_meta(get_the_ID(), 'faxnumber', true) ?></h6>
							</div>
							<div class="contact-address">
								<h6><span><?php echo get_post_meta(get_the_ID(), 'streetaddy', true) ?></span></h6>
								<h6><?php echo get_post_meta(get_the_ID(), 'restofaddy', true) ?></h6>
							</div>
						</div>
						<div class="contactus-socialicons">
							<ul>
								<li><a href="#"><div class="contactus-facebook"></div></a></li>
								<li><a href="#"><div class="contactus-twitter"></div></a></li>
								<li><a href="#"><div class="contactus-pinterest"></div></a></li>
								<li><a href="#"><div class="contactus-youtube"></div></a></li>
								<li><a href="#"><div class="contactus-instagram"></div></a></li>
							</ul>
						</div>
					</div>
					<img src="<?php echo get_template_directory_uri(); ?>/images/contactus-car.png" class="contactus-slide-image" />
					<div class="down-arrow-hover">
						<h6>Contact</h6>
						<img src="<?php echo get_template_directory_uri(); ?>/images/down-arrow.png" class="bottom-button" />
					</div>
				</div>
				<div class="contactpage panel two">
					<div class="contactus-contact-panel">
						<form method="POST" action="<?php echo get_template_directory_uri(); ?>/mailformprocess.php">
							<!-- Use HTML5 validation through required as first layer -->
							<h4>Name</h4>
							<input name="name" placeholder="name*" type="text" required><br />
							<h4>Email</h4>
							<input name="email" placeholder="email*" type="email" required>
							<h4>Message</h4>
							<textarea placeholder="message*" name="message" required></textarea>
							<input type="submit">
						</form>
					</div>
					<div id="google-map">
					</div>
					<div class="up-arrow-hover">
						<h6>Home</h6>
						<img src="<?php echo get_template_directory_uri(); ?>/images/up-arrow.png" class="top-button" />
					</div>
					<div class="down-arrow-footer">
						<h6>Get<span>Social</span></h6>
						<img src="<?php echo get_template_directory_uri(); ?>/images/down-arrow.png" class="bottom-button" />
					</div>
				</div>
			</div>
		</div>
		<?php endwhile; ?>


	</div>

</div>
<div class="left-gutter">
	<div class="left-button"></div>
</div>
<div class="right-gutter">
	<div class="right-button"></div>		
</div>
</div>
<?php get_footer(); ?>