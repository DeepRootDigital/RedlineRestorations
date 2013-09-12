<?php get_header(); ?>
<div class="single-blog-viewport">
	<img src="<?php echo get_template_directory_uri(); ?>/images/blog-image.png" class="single-blog-featured" />
	<div class="single-blog-content">
		<div class="single-blog-content-lines">	
		</div>
		<div class="single-blog-header">
			<h2>This is a three line <span>stacked blog post to show length</span></h2>
		</div>
		<div class="single-blog-info">
			<h3>Alvaro <span>Flores</span> / <em>September 10th, 2013</em></h3>
		</div>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
		<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
		<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
		<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
		<div class="single-blog-tags">
			<h4>TAGS: Restored / <span>Vintage</span> / Exotic / High-End / Redline</h4>
		</div>
		<div class="single-blog-social">
			<h4>Share this article!</h4>
		</div>
	</div>
	<div class="single-blog-comments">
		<h5>Leave a <span>comment</span></h5>
		<form method="POST" action="mailformprocess.php">
			<!-- Use HTML5 validation through required as first layer -->
			<h4>Name</h4>
			<input name="name" placeholder="name*" type="text" required><br />
			<h4>Email</h4>
			<input name="email" placeholder="email*" type="email" required>
			<h4>Comment</h4>
			<textarea placeholder="message*" name="message" required></textarea>
			<input type="submit">
		</form>
	</div>
</div>
<?php get_footer(); ?>