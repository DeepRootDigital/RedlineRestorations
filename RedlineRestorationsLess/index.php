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
							'post_type' => 'theteam',
							'showposts' => '10'
							);

						$blogPosts = new WP_Query($args);

						while ($blogPosts->have_posts()) : $blogPosts->the_post();
						?>
						<li id="<?php echo get_post_meta(get_the_ID(), 'uniqueid', true) ?>"><div class="aboutus-panel-individual">
							<?php the_post_thumbnail(); ?>
							<h4><span><?php echo get_post_meta(get_the_ID(), 'firstname', true) ?></span> <?php echo get_post_meta(get_the_ID(), 'lastname', true) ?></h4>
						</div></li>
					<?php endwhile; ?>
				</ul>
			</div>
			<?php 
			$args=array(
				'post_type' => 'theteam',
				'showposts' => '10'
				);

			$blogPosts = new WP_Query($args);

			while ($blogPosts->have_posts()) : $blogPosts->the_post();
			?>
			<div class="aboutus-individual-frame <?php echo get_post_meta(get_the_ID(), 'uniqueid', true) ?>">
				<div class="aboutus-individual-frame-text">
					<div class="aboutus-individual-frame-text-first">
						<h3><span><?php echo get_post_meta(get_the_ID(), 'firstname', true) ?></span> <?php echo get_post_meta(get_the_ID(), 'lastname', true) ?></h3>
						<img src="<?php echo get_template_directory_uri(); ?>/images/close-button.png" />
						<p>Close</p>
					</div>
					<div class="aboutus-individual-frame-text-second">
						<h4><span>Age :</span> <?php echo get_post_meta(get_the_ID(), 'age', true) ?></h4>
					</div>
					<div class="aboutus-individual-frame-text-third">
						<h4><span>Hometown :</span> <?php echo get_post_meta(get_the_ID(), 'hometown', true) ?></h4>
					</div>
					<div class="aboutus-individual-frame-text-fourth">
						<h4><span>Position / Exp. :</span> <?php echo get_post_meta(get_the_ID(), 'position', true) ?> / <?php echo get_post_meta(get_the_ID(), 'experience', true) ?> yrs</h4>
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
		<?php endwhile; ?>
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
		<div class="one-big-page service-page">
			<div class="one-big-page-panel" id="scroll">
				<div class="homepage panel one">
					<div class="panel-one-slide-wrapper">
						<?php 
						$args=array(
							'post_type' => 'mainpageslider'
							);

						$blogPosts = new WP_Query($args);

						while ($blogPosts->have_posts()) : $blogPosts->the_post();
						?>
						<div class="panel-one-slider first">
							<h4><?php echo get_post_meta(get_the_ID(), 'caryear', true) ?></h4>
							<h5><?php echo get_post_meta(get_the_ID(), 'carmaker', true) ?><br />
								<?php echo get_post_meta(get_the_ID(), 'carmodel', true) ?>
							</h5>
							<div class="panel-slider-lines">
								<div class="panel-slider-lines-inner">
								</div>
							</div>
							<?php autoc_get_img('sliderfeaturedimage'); ?>						
						</div>
					<?php endwhile; ?>
				</div>
				<div class="panel-textbar">
					<img src="<?php echo get_template_directory_uri(); ?>/images/cross-flags.png" />
				</div>
				<div class="down-arrow-hover slider-arrow">
					<h6>The Process</h6>
					<img src="<?php echo get_template_directory_uri(); ?>/images/down-arrow.png" class="bottom-button" />
				</div>
			</div>
			<?php 
			$args=array(
				'post_type' => 'mainpage'
				);

			$blogPosts = new WP_Query($args);

			while ($blogPosts->have_posts()) : $blogPosts->the_post();
			?>
			<div class="homepage panel two">
				<?php autoc_get_img('processimage'); ?>
				<div class="panel-textbar-horizontal">
					<h2><span>The<br /></span>Process</h2>
					<h4><?php echo get_post_meta(get_the_ID(), 'processtext', true) ?></h4>
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
				<?php autoc_get_img('whoweareimage'); ?>
				<div class="panel-textbar-wide">
					<img src="<?php echo get_template_directory_uri(); ?>/images/cross-flags.png" />
					<h4>Who we are</h4>
					<div class="bot-panel-slider-lines">
						<div class="bot-panel-slider-lines-inner">
						</div>
					</div>
					<p><?php echo get_post_meta(get_the_ID(), 'whowearetext', true) ?></p>
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
		<?php endwhile; ?>
	</div>
</div>
		<!--
			HOME PAGE
		-->
		<div class="one-big-page process-page">
			<div class="one-big-page-panel" id="scroll">
				<div class="homepage panel one">
					<div class="panel-one-slide-wrapper">
						<?php 
						$args=array(
							'post_type' => 'mainpageslider'
							);

						$blogPosts = new WP_Query($args);

						while ($blogPosts->have_posts()) : $blogPosts->the_post();
						?>
						<div class="panel-one-slider first">
							<h4><?php echo get_post_meta(get_the_ID(), 'caryear', true) ?></h4>
							<h5><?php echo get_post_meta(get_the_ID(), 'carmaker', true) ?><br />
								<?php echo get_post_meta(get_the_ID(), 'carmodel', true) ?>
							</h5>
							<div class="panel-slider-lines">
								<div class="panel-slider-lines-inner">
								</div>
							</div>
							<?php autoc_get_img('sliderfeaturedimage'); ?>						
						</div>
					<?php endwhile; ?>
				</div>
				<div class="panel-textbar">
					<img src="<?php echo get_template_directory_uri(); ?>/images/cross-flags.png" />
				</div>
				<div class="down-arrow-hover slider-arrow">
					<h6>The Process</h6>
					<img src="<?php echo get_template_directory_uri(); ?>/images/down-arrow.png" class="bottom-button" />
				</div>
			</div>
			<?php 
			$args=array(
				'post_type' => 'mainpage'
				);

			$blogPosts = new WP_Query($args);

			while ($blogPosts->have_posts()) : $blogPosts->the_post();
			?>
			<div class="homepage panel two">
				<?php autoc_get_img('processimage'); ?>
				<div class="panel-textbar-horizontal">
					<h2><span>The<br /></span>Process</h2>
					<h4><?php echo get_post_meta(get_the_ID(), 'processtext', true) ?></h4>
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
				<?php autoc_get_img('whoweareimage'); ?>
				<div class="panel-textbar-wide">
					<img src="<?php echo get_template_directory_uri(); ?>/images/cross-flags.png" />
					<h4>Who we are</h4>
					<div class="bot-panel-slider-lines">
						<div class="bot-panel-slider-lines-inner">
						</div>
					</div>
					<p><?php echo get_post_meta(get_the_ID(), 'whowearetext', true) ?></p>
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
		<?php endwhile; ?>
	</div>
</div>
		<!--
			Restorations Page
		-->
		<div class="one-big-page restorations-page">
			<div class="one-big-page-panel" id="scroll">
				<div class="restorations panel one">
					<img src="<?php echo get_template_directory_uri(); ?>/images/restorationstopimage.png" />
					<div class="restorations-panel-textbar">
						<img src="<?php echo get_template_directory_uri(); ?>/images/cross-flags.png" />
						<div class="restorations-outer-lines">
							<div class="restorations-inner-lines">
								<h2>Restorations</h2>
							</div>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
					<div class="down-arrow-hover">
						<h6>Latest Restoration</h6>
						<img src="<?php echo get_template_directory_uri(); ?>/images/down-arrow.png" class="bottom-button" />
					</div>
				</div>
				<div class="restorations panel two">
					<div class="restorations-panel-wide">
						<h2><span>Latest</span> Restorations</h2>
					</div>
					<!-- Restorations Individual Pages -->
					<?php 
						$args=array(
						'post_type' => 'restorations'
						);

						$blogPosts = new WP_Query($args);

						while ($blogPosts->have_posts()) : $blogPosts->the_post();
					?>
					<div class="restorations-individual-frame <?php echo get_post_meta(get_the_ID(), 'uniqueid', true) ?>">
						<div class="restorations-individual-frame-text">
							<div class="restorations-individual-frame-text-first">
								<h3><span><?php echo get_post_meta(get_the_ID(), 'modelyear', true) ?></span> <?php echo get_post_meta(get_the_ID(), 'cartype', true) ?></h3>
								<h3><?php echo get_post_meta(get_the_ID(), 'carmodel', true) ?></h3>
							</div>
							<div class="restorations-individual-frame-text-second">
								<h4><span>Duration :</span> <?php echo get_post_meta(get_the_ID(), 'durationtime', true) ?> months</h4>
							</div>
							<div class="restorations-individual-frame-text-third">
								<h4><span>Extras :</span> <?php echo get_post_meta(get_the_ID(), 'extras', true) ?></h4>
							</div>
							<div class="restorations-individual-frame-text-fourth">
								<h4><span>Service :</span> <?php echo get_post_meta(get_the_ID(), 'serviceone', true) ?></h4>
							</div>
							<div class="restorations-individual-frame-text-fifth">
								<h4><span>Service :</span> <?php echo get_post_meta(get_the_ID(), 'servicetwo', true) ?></h4>
							</div>
							<div class="restorations-individual-frame-text-sixth">
								<h4><span>Service :</span> <?php echo get_post_meta(get_the_ID(), 'servicethree', true) ?></h4>
							</div>
							<div class="restorations-individual-frame-text-seventh">
								<h4><span>Service :</span> <?php echo get_post_meta(get_the_ID(), 'servicefour', true) ?></h4>
							</div>
							<div class="restorations-individual-frame-text-eighth">
								<?php the_content(); ?>
							</div>
						</div>
						<div class="restorations-individual-frame-images">
							<?php autoc_get_img('largeimage'); ?>
							<div class="restorations-slider-left">
							</div>
							<div class="restorations-slider-right">
							</div>
						</div>
					</div>
					<?php endwhile; ?>
					<div class="up-arrow-hover">
						<h6>Restorations</h6>
						<img src="<?php echo get_template_directory_uri(); ?>/images/up-arrow.png" class="top-button" />
					</div>
					<div class="down-arrow-hover restorationshover">
						<h6>Other Restorations</h6>
						<img src="<?php echo get_template_directory_uri(); ?>/images/down-arrow.png" class="bottom-button" />
					</div>
				</div>
				<div class="restorations panel three">
					<div class="restorations-panel-wide">
						<h2><span>Other</span> Restorations</h2>
					</div>
					<div class="restorations-other-panel-nav">
					</div>
					<div class="restorations-other-panel">
						<ul>
							<?php 
								$args=array(
								'post_type' => 'restorations'
								);

								$blogPosts = new WP_Query($args);

								while ($blogPosts->have_posts()) : $blogPosts->the_post();
							?>
							<li id="<?php echo get_post_meta(get_the_ID(), 'uniqueid', true) ?>">
								<?php echo get_the_post_thumbnail(); ?>
								<h4><span><?php echo get_post_meta(get_the_ID(), 'cartype', true) ?></span></h4>
								<div class="restorations-grid-overlay">
									<h3><?php echo get_post_meta(get_the_ID(), 'modelyear', true) ?></h3>
									<h4><?php echo get_post_meta(get_the_ID(), 'cartype', true) ?></h4>
									<h5><?php echo get_post_meta(get_the_ID(), 'carmodel', true) ?></h5>
								</div>
							</li>
							<?php endwhile; ?>
							<!-- <li>
								<img src="<?php echo get_template_directory_uri(); ?>/images/restorations_astonmartin.png" />
								<h4><span>Aston</span> Martin</h4>
							</li>
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/images/restorations_benz.png" />
								<h4><span>Mercedez</span> Benz</h4>
							</li>
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/images/restorations_bmw.png" />
								<h4><span>BMW</span></h4>
							</li>
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/images/restorations_porsche.png" />
								<h4><span>Porsche</span></h4>
							</li>
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/images/restorations_maserati.png" />
								<h4><span>Maserati</span></h4>
							</li>
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/images/restorations_benz2.png" />
								<h4><span>Mercedez</span> Benz</h4>
							</li>
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/images/restorations_astonmartin2.png" />
								<h4><span>Aston</span> Martin</h4>
							</li>
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/images/restorations_ferrari2.png" />
								<h4><span>Ferrari</span></h4>
							</li>
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/images/restorations_bmw2.png" />
								<h4><span>BMW</span></h4>
							</li>
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/images/restorations_porsche2.png" />
								<h4><span>Porsche</span></h4>
							</li>
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/images/restorations_maserati2.png" />
								<h4><span>Maserati</span></h4>
							</li> -->
						</ul>
					</div>
					<div class="up-arrow-hover">
						<h6>Up</h6>
						<img src="<?php echo get_template_directory_uri(); ?>/images/up-arrow.png" class="top-button" />
					</div>
					<div class="down-arrow-footer restorationshover">
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
				<?php $counter = 0;
				$wp_query->query('showposts=6&order=DESC' . '&paged=' . $paged);
				while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
				<?php $counter += 1; ?>

				<?php if ($counter === 1){ ?>	
				<div class="blogpage panel two">
					<div class="blog-panel">
						<div class="blog-panel-summary">
							<div class="blog-summary-preview">
								<p>
									<?php
									$excerpt = substr(get_the_excerpt(),0,79);
									echo $excerpt."..."; ?>
								</p>
								<a href="<?php the_permalink(); ?>" target="_blank">Read <span>More</span></a>
							</div>
							<div class="blog-panel-summary-textbox">
								<div class="blog-summary-title-outerlines">
									<div class="blog-summary-title-innerlines">
										<h4><?php the_title(); ?></h4>
									</div>
								</div>
							</div>
							<?php the_post_thumbnail(); ?>
						</div>
						<?php } ?>
						<?php if ($counter === 2){ ?>
						<div class="blog-panel-summary">
							<div class="blog-summary-preview">
								<p>
									<?php
									$excerpt = substr(get_the_excerpt(),0,79);
									echo $excerpt."..."; ?>
								</p>
								<a href="<?php the_permalink(); ?>" target="_blank">Read <span>More</span></a>
							</div>
							<div class="blog-panel-summary-textbox">
								<div class="blog-summary-title-outerlines">
									<div class="blog-summary-title-innerlines">
										<h4><?php the_title(); ?></h4>
									</div>
								</div>
							</div>
							<?php the_post_thumbnail(); ?>
						</div>
						<?php } ?>
						<?php if ($counter === 3) { ?>
						<div class="blog-panel-summary">
							<div class="blog-summary-preview">
								<p>
									<?php
									$excerpt = substr(get_the_excerpt(),0,79);
									echo $excerpt."..."; ?>
								</p>
								<a href="<?php the_permalink(); ?>" target="_blank">Read <span>More</span></a>
							</div>
							<div class="blog-panel-summary-textbox">
								<div class="blog-summary-title-outerlines">
									<div class="blog-summary-title-innerlines">
										<h4><?php the_title(); ?></h4>
									</div>
								</div>
							</div>
							<?php the_post_thumbnail(); ?>
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
				<?php } ?>
				<?php if ($counter === 4) { ?>
				<div class="blogpage panel three">
					<div class="blog-panel">
						<div class="blog-panel-summary">
							<div class="blog-summary-preview">
								<p>
									<?php
									$excerpt = substr(get_the_excerpt(),0,79);
									echo $excerpt."..."; ?>
								</p>
								<a href="<?php the_permalink(); ?>" target="_blank">Read <span>More</span></a>
							</div>
							<div class="blog-panel-summary-textbox">
								<div class="blog-summary-title-outerlines">
									<div class="blog-summary-title-innerlines">
										<h4><?php the_title(); ?></h4>
									</div>
								</div>
							</div>
							<?php the_post_thumbnail(); ?>
						</div>
						<?php } ?>
						<?php if ($counter === 5) { ?>
						<div class="blog-panel-summary">
							<div class="blog-summary-preview">
								<p>
									<?php
									$excerpt = substr(get_the_excerpt(),0,79);
									echo $excerpt."..."; ?>
								</p>
								<a href="<?php the_permalink(); ?>" target="_blank">Read <span>More</span></a>
							</div>
							<div class="blog-panel-summary-textbox">
								<div class="blog-summary-title-outerlines">
									<div class="blog-summary-title-innerlines">
										<h4><?php the_title(); ?></h4>
									</div>
								</div>
							</div>
							<?php the_post_thumbnail(); ?>
						</div>
						<?php } ?>
						<?php if ($counter === 6) { ?>
						<div class="blog-panel-summary">
							<div class="blog-summary-preview">
								<p>
									<?php
									$excerpt = substr(get_the_excerpt(),0,79);
									echo $excerpt."..."; ?>
								</p>
								<a href="<?php the_permalink(); ?>" target="_blank">Read <span>More</span></a>
							</div>
							<div class="blog-panel-summary-textbox">
								<div class="blog-summary-title-outerlines">
									<div class="blog-summary-title-innerlines">
										<h4><?php the_title(); ?></h4>
									</div>
								</div>
							</div>
							<?php the_post_thumbnail(); ?>
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
				<?php } ?>
			<?php endwhile; ?>
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