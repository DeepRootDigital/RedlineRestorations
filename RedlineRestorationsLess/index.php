<?php get_header(); ?>
<?php $pagesite=$_REQUEST['page']; ?>
<div class="content-panel">
	<div class="viewport-center">
		<div class="content-panel-area <?php echo $pagesite."load"; ?>">
		<!--  HOME PAGE  -->
		<div class="one-big-page service-page">
			<div class="one-big-page-panel" id="scroll">
				<div class="homepage panel one">
					<div class="panel-one-slide-wrapper">
						<?php $args=array('post_type' => 'mainpageslider');$blogPosts = new WP_Query($args); while ($blogPosts->have_posts()) : $blogPosts->the_post(); ?>
						<div class="panel-one-slider first">
							<h4><?php echo get_post_meta(get_the_ID(), 'caryear', true) ?></h4>
							<h5><?php echo get_post_meta(get_the_ID(), 'carmaker', true) ?><br />
								<?php echo get_post_meta(get_the_ID(), 'carmodel', true) ?>
							</h5>
							<div class="panel-slider-lines">
								<div class="panel-slider-lines-inner"></div>
							</div>
							<?php autoc_get_img('sliderfeaturedimage'); ?>						
						</div>
					<?php endwhile; ?>
				</div>
				<div class="panel-textbar">
					<img src="<?php echo get_template_directory_uri(); ?>/images/cross-flags.png" />
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/cross-flags.png" class="flags-two" />
				</div>
				<div class="down-arrow-hover slider-arrow">
					<h6>The Process</h6>
					<img src="<?php echo get_template_directory_uri(); ?>/images/down-arrow.png" class="bottom-button" />
				</div>
			</div>
			<?php $args=array('post_type' => 'mainpage'); $blogPosts = new WP_Query($args);
			while ($blogPosts->have_posts()) : $blogPosts->the_post();
			?>
			<div class="homepage panel two">
				<?php autoc_get_img('processimage'); ?>
				<div class="panel-textbar-horizontal">
					<h2><span>The<br /></span>Process</h2>
					<h4><?php echo get_post_meta(get_the_ID(), 'processtext', true) ?></h4>
                                        <h6 class="the-process">Learn <span>more</span></h6>
					<div class="bot-panel-slider-lines-small the-process">
						<div class="bot-panel-slider-lines-inner-small the-process"></div>
					</div>
				</div>
				<div class="up-arrow-hover">
					<h6>Up</h6>
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
					<?php echo get_post_meta(get_the_ID(), 'whowearetext', true) ?>
					<h6 class="whoweare">Learn <span>more</span></h6>
					<div class="bot-panel-slider-lines-small whoweare">
						<div class="bot-panel-slider-lines-inner-small whoweare">
						</div>
					</div>
				</div>
				<div class="up-arrow-hover">
					<h6>The Process</h6>
					<img src="<?php echo get_template_directory_uri(); ?>/images/up-arrow.png" class="top-button" />
				</div>
				<div class="down-arrow-footer">
					<h6><span>Get Social</span></h6>
					<img src="<?php echo get_template_directory_uri(); ?>/images/down-arrow.png" class="bottom-button" />
				</div>
			</div>
		<?php endwhile; ?>
	</div>
</div>
<!--  ABOUT US PAGE  -->
		<?php 
		$args=array('post_type' => 'aboutus');
		$blogPosts = new WP_Query($args);
		while ($blogPosts->have_posts()) : $blogPosts->the_post(); ?>
		<div class="one-big-page aboutus-page">
			<div class="one-big-page-panel">
				<div class="aboutuspage panel one">
					<div class="panel-textbar-left">
						<img src="<?php echo get_template_directory_uri(); ?>/images/cross-flags.png" />
						<h5>About Us</h5>
						<div class="aboutus-panel-slider-lines">
							<div class="aboutus-panel-slider-lines-inner"></div>
						</div>
						<?php the_content(); ?>
					</div>
					<img src="<?php echo get_template_directory_uri(); ?>/images/aboutus-car.jpg" class="aboutus-slide-image" />
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/playbutton.png" class="playbutton" alt="play button" />
<div class="video-placeholder"></div>
					<div class="down-arrow-hover">
						<h6>The Team</h6>
						<img src="<?php echo get_template_directory_uri(); ?>/images/down-arrow.png" class="bottom-button" />
					</div>
				</div>
				<div class="aboutuspage panel two">
					<div class="aboutus-panel-wide">
						<h2><span>Meet the</span> Team</h2>
					</div>
					<div class="aboutus-panel-people">
						<ul>
						<?php endwhile;
$personcount = 0;
						$args=array('post_type' => 'theteam');
						$blogPosts = new WP_Query($args);
						while ($blogPosts->have_posts()) : $blogPosts->the_post();
$personcount = $personcount + 1; ?>
						<li id="<?php echo get_post_meta(get_the_ID(), 'uniqueid', true) ?>"><div class="aboutus-panel-individual">
							<?php the_post_thumbnail(); ?>
							<h4><span><?php echo get_post_meta(get_the_ID(), 'firstname', true) ?></span> <?php echo get_post_meta(get_the_ID(), 'lastname', true) ?></h4>
						</div></li>
					<?php endwhile; ?>
				</ul>
			</div>
			<?php $args=array('post_type' => 'theteam'); $blogPosts = new WP_Query($args);
			while ($blogPosts->have_posts()) : $blogPosts->the_post(); ?>
			<div class="aboutus-individual-frame <?php echo get_post_meta(get_the_ID(), 'uniqueid', true) ?>">
				<div class="aboutus-individual-frame-text">
					<div class="aboutus-individual-frame-text-first">
						<h3><span><?php echo get_post_meta(get_the_ID(), 'firstname', true) ?></span> <?php echo get_post_meta(get_the_ID(), 'lastname', true) ?></h3>
						<img src="<?php echo get_template_directory_uri(); ?>/images/close-button.png" />
						<p>Close</p>
					</div>
					<div class="aboutus-individual-frame-text-third">
						<h4><span>Hometown :</span> <?php echo get_post_meta(get_the_ID(), 'hometown', true) ?></h4>
					</div>
					<div class="aboutus-individual-frame-text-fourth">
						<h4><span>Position:</span> <?php echo get_post_meta(get_the_ID(), 'position', true) ?></h4>
					</div>
					<div class="aboutus-individual-frame-text-fifth">
						<?php the_content(); ?>
					</div>
				</div>
				<div class="aboutus-individual-frame-pictureframe">
<?php if (autoc_get_img('largeimage')) { autoc_get_img('largeimage'); } else { ?>			
<img src="<?php echo get_template_directory_uri(); ?>/images/redline-team-default.jpg" alt="Team Member Default" />
<?php } ?>
				</div>
				<div class="aboutus-individual-frame-overlay"></div>
			</div>
		<?php endwhile; ?>
                <?php if ($personcount > 10) { ?>
<div class="aboutus-section-nav-left"></div>
<div class="aboutus-section-nav-right"></div>
<?php } ?>
		<div class="up-arrow-hover">
			<h6>Up</h6>
			<img src="<?php echo get_template_directory_uri(); ?>/images/up-arrow.png" class="top-button" />
		</div>
		<div class="down-arrow-hover">
			<h6><span>Awards</span></h6>
			<img src="<?php echo get_template_directory_uri(); ?>/images/down-arrow.png" class="bottom-button" />
		</div>
	</div>
	<div class="aboutuspage panel three">
		<div class="awards-section">
			<div class="awards-wrapper">
                                <?php $cat_args=array('orderby' => 'name','order' => 'DESC');
$categories=get_categories($cat_args); $categorycount = -1;
  foreach($categories as $category) {
    $args=array('showposts' => 4,'post_type' => 'awards','category__in' => array($category->term_id),'caller_get_posts'=>1);
    $categorycount = $categorycount + 1; $posts=get_posts($args);
      if ($posts) { ?>
<div class="awards-single">
					<div class="awards-single-header">
						<h2><?php echo $category->name ?></h2>
						<p>Awards</p>
					</div>
					<div class="awards-single-content">    
        <?php foreach($posts as $post) { setup_postdata($post); ?>
                                                <div class="awards-single-single">
							<div class="awards-single-icon-left">
							</div>
							<h3><?php the_title(); ?></h3>
							<div class="awards-single-icon-right">
							</div>
                                                        <p><?php echo get_post_meta(get_the_ID(), 'line1', true) ?></p>
                                                        <p><?php echo get_post_meta(get_the_ID(), 'line2', true) ?></p>
						</div>
          <?php } // foreach($posts 
?>
</div>
</div>
<?php      } // if ($posts
    } // foreach($categories
?>
<?php if ($categorycount > 3) { ?>
<div class="award-section-nav-left"></div>
<div class="award-section-nav-right"></div>
<?php } ?>
			</div>
		</div>
		<div class="up-arrow-hover">
			<h6>Up</h6>
			<img src="<?php echo get_template_directory_uri(); ?>/images/up-arrow.png" class="top-button" />
		</div>
		<div class="down-arrow-footer">
			<h6><span>Get Social</span></h6>
			<img src="<?php echo get_template_directory_uri(); ?>/images/down-arrow.png" class="bottom-button" />
		</div>
	</div>
</div>
</div>
		<!--  Process Page  -->
                <!--
		<div class="one-big-page process-page">
			<div class="one-big-page-panel">
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
			<div class="homepage panel two">
				<div class="the-process-slider">
                                      <div class="the-process-slider-wrapper">
                                                <?php 
						$args=array(
							'post_type' => 'theprocess'
							);
                                                $procctn = 0;
						$blogPosts = new WP_Query($args);

						while ($blogPosts->have_posts()) : $blogPosts->the_post();
                                                $procctn += 1;
						?>
                                            <div class="the-process-slider-single process-<?php echo $procctn; ?>">
                                                <?php the_post_thumbnail(); ?>
                                                <?php the_content(); ?>
                                            </div>
                                                <?php
                                                    endwhile;
                                                ?>
                                      </div>
                                      <div class="the-process-slider-nav">
                                            <?php 
						$args=array(
							'post_type' => 'theprocess'
							);
                                                $procctn = 0;
						$blogPosts = new WP_Query($args);

						while ($blogPosts->have_posts()) : $blogPosts->the_post();
                                                $procctn += 1;
						?>
                                            <div class="the-process-slider-nav-single process-<?php echo $procctn; ?>">
                                            </div>
                                                <?php
                                                    endwhile;
                                                ?>
                                      </div>
                                </div>
                                <div class="up-arrow-hover">
					<h6>The Process</h6>
					<img src="<?php echo get_template_directory_uri(); ?>/images/up-arrow.png" class="top-button" />
				</div>
				<div class="down-arrow-footer">
					<h6><span>Get Social</span></h6>
					<img src="<?php echo get_template_directory_uri(); ?>/images/down-arrow.png" class="bottom-button" />
				</div>
			</div>
	</div>
</div>
-->
		<!--  Restorations Page  -->
		<div class="one-big-page restorations-page">
			<div class="one-big-page-panel">
				<div class="restorations panel one">
					<img src="<?php echo get_template_directory_uri(); ?>/images/restorationstopimage.jpg" />
					<div class="restorations-panel-textbar">
						<img src="<?php echo get_template_directory_uri(); ?>/images/cross-flags.png" />
						<div class="restorations-outer-lines">
							<div class="restorations-inner-lines">
								<h2>Restorations</h2>
							</div>
						</div>
						<p>Before any and all decisions are made, it is in your vehicle’s best interest to have Redline Restorations to comprehensively evaluate its initial condition. At that time, it is our duty to clearly outline the benefits and detriments of your project with all due respect to current market values and the condition of the car.</p>
					</div>
					<div class="down-arrow-hover">
						<h6>Restorations</h6>
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
						'post_type' => 'restorations',
						'showposts' => '12'
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
						<div class="restorations-individual-frame-images <?php echo get_post_meta(get_the_ID(), 'uniqueid', true) ?>">
							<?php autoc_get_img('largeimage'); ?>
							<div class="restorations-slider-left">
							</div>
							<div class="restorations-slider-right">
							</div>
						</div>
					</div>
				<?php endwhile; ?>
				<div class="up-arrow-hover">
					<h6>Up</h6>
					<img src="<?php echo get_template_directory_uri(); ?>/images/up-arrow.png" class="top-button" />
				</div>
				<div class="down-arrow-hover restorationshover">
					<h6>Other Rest.</h6>
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
							'post_type' => 'restorations',
							'showposts' => '12'
							);

						$blogPosts = new WP_Query($args);

						while ($blogPosts->have_posts()) : $blogPosts->the_post();
						?>
						<li id="<?php echo get_post_meta(get_the_ID(), 'uniqueid', true) ?>">
							<?php echo get_the_post_thumbnail(); ?>
							<h4><span><?php echo get_post_meta(get_the_ID(), 'cartype', true) ?></span></h4>
							<div class="restorations-grid-overlay">
								<h3><?php echo get_post_meta(get_the_ID(), 'modelyear', true) ?></h3>
								<div class="restorations-lines">
									<div class="restorations-lines-inner">
										<h4><?php echo get_post_meta(get_the_ID(), 'cartype', true) ?><br />
											<?php echo get_post_meta(get_the_ID(), 'carmodel', true) ?>
										</h4>
									</div>
								</div>
							</div>
						</li>
					<?php endwhile; ?>
				</ul>
			</div>
			<div class="up-arrow-hover">
				<h6>Up</h6>
				<img src="<?php echo get_template_directory_uri(); ?>/images/up-arrow.png" class="top-button" />
			</div>
			<div class="down-arrow-footer restorationshover">
				<h6><span>Get Social</span></h6>
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
<?php $totalposts = wp_count_posts();
$totalposts = $totalposts->publish;
$totalposts = intval($totalposts); ?>
				<?php $counter = 0;
				$wp_query->query('showposts=6&order=DESC' . '&paged=' . $paged);
				while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
				<?php $counter += 1; ?>

				<?php if ($counter === 1){ ?>	
				<div class="blogpage panel one">
					<div class="blog-panel">
						<div class="blog-panel-summary">
							<div class="blog-summary-preview">
								<p>
									<?php
									$excerpt = substr(get_the_excerpt(),0,79);
									echo $excerpt."..."; ?>
								</p>
								<a href="<?php the_permalink(); ?>">&middot; Read <span>More</span> &middot;</a>
							</div>
							<div class="blog-panel-summary-textbox">
								<div class="blog-summary-title-outerlines">
									<div class="blog-summary-title-innerlines">
										<h4><?php the_title(); ?></h4>
									</div>
								</div>
							</div>
                                                        <?php if (get_the_post_thumbnail()) { ?>
							<?php the_post_thumbnail(); ?>
                                                        <?php } else { ?>
                                                              <img src="<?php echo get_template_directory_uri(); ?>/images/blog-slide-bottom-middle.png" alt="Default blog image" />
                                                        <?php } ?>
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
								<a href="<?php the_permalink(); ?>">&middot; Read <span>More</span> &middot;</a>
							</div>
							<div class="blog-panel-summary-textbox">
								<div class="blog-summary-title-outerlines">
									<div class="blog-summary-title-innerlines">
										<h4><?php the_title(); ?></h4>
									</div>
								</div>
							</div>
							<?php if (get_the_post_thumbnail()) { ?>
							<?php the_post_thumbnail(); ?>
                                                        <?php } else { ?>
                                                              <img src="<?php echo get_template_directory_uri(); ?>/images/blog-slide-bottom-middle.png" alt="Default blog image" />
                                                        <?php } ?>
						</div>
                                                <?php if ($totalposts - 3 == -1) { ?>
                                                <div class="blog-panel-summary">
                                                </div>
                                                </div>
					<div class="down-arrow-footer">
						<h6><span>Get Social</span></h6>
						<img src="<?php echo get_template_directory_uri(); ?>/images/down-arrow.png" class="bottom-button" />
					</div>
				</div>
                                                <?php } ?>
						<?php } ?>
						<?php if ($counter === 3) { ?>
						<div class="blog-panel-summary">
							<div class="blog-summary-preview">
								<p>
									<?php
									$excerpt = substr(get_the_excerpt(),0,79);
									echo $excerpt."..."; ?>
								</p>
								<a href="<?php the_permalink(); ?>">&middot; Read <span>More</span> &middot;</a>
							</div>
							<div class="blog-panel-summary-textbox">
								<div class="blog-summary-title-outerlines">
									<div class="blog-summary-title-innerlines">
										<h4><?php the_title(); ?></h4>
									</div>
								</div>
							</div>
							<?php if (get_the_post_thumbnail()) { ?>
							<?php the_post_thumbnail(); ?>
                                                        <?php } else { ?>
                                                              <img src="<?php echo get_template_directory_uri(); ?>/images/blog-slide-bottom-middle.png" alt="Default blog image" />
                                                        <?php } ?>
						</div>
					</div>
					<!-- <div class="up-arrow-hover">
						<h6>Top</h6>
						<img src="<?php echo get_template_directory_uri(); ?>/images/up-arrow.png" class="top-button" />
					</div> -->
					<div class="down-arrow-hover">
						<h6>Blogs</h6>
						<img src="<?php echo get_template_directory_uri(); ?>/images/down-arrow.png" class="bottom-button" />
					</div>
				</div>
				<?php } ?>
				<?php if ($counter === 4) { ?>
				<div class="blogpage panel two">
					<div class="blog-panel">
						<div class="blog-panel-summary">
							<div class="blog-summary-preview">
								<p>
									<?php
									$excerpt = substr(get_the_excerpt(),0,79);
									echo $excerpt."..."; ?>
								</p>
								<a href="<?php the_permalink(); ?>">&middot; Read <span>More</span> &middot;</a>
							</div>
							<div class="blog-panel-summary-textbox">
								<div class="blog-summary-title-outerlines">
									<div class="blog-summary-title-innerlines">
										<h4><?php the_title(); ?></h4>
									</div>
								</div>
							</div>
							<?php if (get_the_post_thumbnail()) { ?>
							<?php the_post_thumbnail(); ?>
                                                        <?php } else { ?>
                                                              <img src="<?php echo get_template_directory_uri(); ?>/images/blog-slide-bottom-middle.png" alt="Default blog image" />
                                                        <?php } ?>
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
								<a href="<?php the_permalink(); ?>">&middot; Read <span>More</span> &middot;</a>
							</div>
							<div class="blog-panel-summary-textbox">
								<div class="blog-summary-title-outerlines">
									<div class="blog-summary-title-innerlines">
										<h4><?php the_title(); ?></h4>
									</div>
								</div>
							</div>
							<?php if (get_the_post_thumbnail()) { ?>
							<?php the_post_thumbnail(); ?>
                                                        <?php } else { ?>
                                                              <img src="<?php echo get_template_directory_uri(); ?>/images/blog-slide-bottom-middle.png" alt="Default blog image" />
                                                        <?php } ?>
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
								<a href="<?php the_permalink(); ?>">&middot; Read <span>More</span> &middot;</a>
							</div>
							<div class="blog-panel-summary-textbox">
								<div class="blog-summary-title-outerlines">
									<div class="blog-summary-title-innerlines">
										<h4><?php the_title(); ?></h4>
									</div>
								</div>
							</div>
							<?php if (get_the_post_thumbnail()) { ?>
							<?php the_post_thumbnail(); ?>
                                                        <?php } else { ?>
                                                              <img src="<?php echo get_template_directory_uri(); ?>/images/blog-slide-bottom-middle.png" alt="Default blog image" />
                                                        <?php } ?>
						</div>
					</div>
					<div class="up-arrow-hover">
						<h6>Up</h6>
						<img src="<?php echo get_template_directory_uri(); ?>/images/up-arrow.png" class="top-button" />
					</div>
					<div class="down-arrow-footer">
						<h6><span>Get Social</span></h6>
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
<?php $mainoptions = get_option('main_theme_options'); ?>
					<!--	<div class="contactus-socialicons">
							<ul>
								<li><a href="<?php echo $mainoptions['facebookurl']; ?>"><div class="contactus-facebook"></div></a></li>
								<li><a href="<?php echo $mainoptions['twitterurl']; ?>"><div class="contactus-twitter"></div></a></li>
								<li><a href="<?php echo $mainoptions['pinteresturl']; ?>"><div class="contactus-pinterest"></div></a></li>
								<li><a href="<?php echo $mainoptions['youtubeurl']; ?>"><div class="contactus-youtube"></div></a></li>
								<li><a href="<?php echo $mainoptions['instagramurl']; ?>"><div class="contactus-instagram"></div></a></li>
							</ul>
						</div>
-->
<img src="<?php echo get_template_directory_uri(); ?>/images/mail-icon.png" alt="Mail Icon" class="mail-icon" />
					</div>
					<img src="<?php echo get_template_directory_uri(); ?>/images/contactus-car.jpg" class="contactus-slide-image" />
					<div class="down-arrow-hover contact-map-nav">
						<h6>Contact</h6>
						<img src="<?php echo get_template_directory_uri(); ?>/images/down-arrow.png" class="bottom-button" />
					</div>
				</div>
				<div class="contactpage panel two">
					<div class="contactus-contact-panel">
						<form method="POST" action="">
							<!-- Use HTML5 validation through required as first layer -->
							<h4>Name</h4>
							<input name="name" class="form-name" placeholder="name*" type="text"><br />
							<h4>Email</h4>
							<input name="email" class="form-email" placeholder="email*" type="email">
							<h4>Message</h4>
							<textarea placeholder="message*" class="form-mess" name="message"></textarea>
							<input type="submit" class="submit-form-button">
						</form>
					</div>
					<div id="google-map">
					</div>
					<div class="up-arrow-hover">
						<h6>Home</h6>
						<img src="<?php echo get_template_directory_uri(); ?>/images/up-arrow.png" class="top-button" />
					</div>
					<div class="down-arrow-footer">
						<h6><span>Get Social</span></h6>
						<img src="<?php echo get_template_directory_uri(); ?>/images/down-arrow.png" class="bottom-button" />
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; ?>


</div>

</div>
<div class="left-gutter">
</div>
<div class="right-gutter">		
</div>
</div>
<?php get_footer(); ?>