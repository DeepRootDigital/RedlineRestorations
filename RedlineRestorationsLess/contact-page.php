<?php 
$args=array(
	'post_type' => 'contactus'
	);

$blogPosts = new WP_Query($args);

while ($blogPosts->have_posts()) : $blogPosts->the_post();
?>
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
<?php endwhile; ?>