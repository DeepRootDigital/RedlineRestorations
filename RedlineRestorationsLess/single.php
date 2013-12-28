<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="single-blog-viewport">
	<img src="<?php echo get_template_directory_uri(); ?>/images/blog-image.png" class="single-blog-featured" />
	<div class="single-blog-content">
		<div class="single-blog-content-lines">	
		</div>
		<div class="single-blog-header">
			<h2><?php the_title(); ?></h2>
		</div>
		<div class="single-blog-info">
			<h3>Alvaro <span>Flores</span> / <em>September 10th, 2013</em></h3>
		</div>
		<?php the_content(); ?>
		<div class="single-blog-tags">
			<?php the_tags('Tags: ',' / '); ?>
		</div>
		<div class="single-blog-social">
			<h4>Share this article!</h4>
		</div>
	        <?php 
$comments_args = array(
     'title_reply'=>'Leave a <span>Comment</span>',
     'comment_notes_after' => '',
     'fields' => apply_filters( 'comment_form_default_fields', array(

    'author' =>
      '<p class="comment-form-author">' .
      '<label for="author">' . __( 'Name', 'domainreference' ) . '</label> ' .
      ( $req ? '<span class="required">*</span>' : '' ) .
      '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
      '" size="30"' . $aria_req . ' /></p>',

    'email' =>
      '<p class="comment-form-email"><label for="email">' . __( 'Email', 'domainreference' ) . '</label> ' .
      ( $req ? '<span class="required">*</span>' : '' ) .
      '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
      '" size="30"' . $aria_req . ' /></p>',
    )
  ),
);



comment_form($comments_args); ?>
<div class="comments-discussion-section">
<?php comments_template(); ?>
</div>
	</div>
<?php endwhile; endif;  ?>
<div class="single-blog-sidebar">
<h3>Other <span>Blog Posts</span></h3>
<?php query_posts('posts_per_page=3&order=DESC'); ?>
<?php while (have_posts()) : the_post(); ?>
<a href="<?php the_permalink(); ?>">
<div class="single-sidebar-single">
     <p><?php echo get_the_title(); ?></p>
</div>
</a>
<?php endwhile; ?>
</div>
      <div class="return-to-blogs">
            <p>Return to Blogs</p>
      </div>
</div>
<div class="footer single-blog-footer">
	<div class="footer-wrap">
		<div class="footer-left">
			<div class="footer-social-tab">
				<h3>Get <span>Social</span></h3>
			</div>
			<div class="footer-facebook">
				<img src="<?php echo get_template_directory_uri(); ?>/images/facebook-icon.png" class="social-icon" />
			</div>
			<div class="footer-twitter">
				<img src="<?php echo get_template_directory_uri(); ?>/images/twitter-icon.png" class="social-icon" />
				<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/Redlineresto" data-widget-id="375761053969166337" data-tweet-limit="1" data-chrome="noheader nofooter noborders noscrollbar transparent" width="470px">Tweets by @Redlineresto</a>
			</div>
			<div class="footer-blog">
				<img src="<?php echo get_template_directory_uri(); ?>/images/blog-icon.png" class="social-icon" />
				<h4><span>Latest</span> Blog Feed</h4>
			</div>
			<div class="footer-left-bottom">
				<h6>Redline Restorations. Copyright &copy; 2013 All rights reserved.</h6>
			</div>
		</div>
		<div class="footer-right">
			<div class="footer-pinterest">
				<img src="<?php echo get_template_directory_uri(); ?>/images/pinterest-icon.png" class="social-icon" />
				<div class="pinterest-box">
					<a data-pin-do="embedUser" href="http://pinterest.com/redlineresto/" data-pin-scale-height="60"></a>
				</div>
			</div>
			<div class="footer-youtube">
				<img src="<?php echo get_template_directory_uri(); ?>/images/youtube-icon.png" class="social-icon" />
			</div>
			<div class="footer-instagram">
				<img src="<?php echo get_template_directory_uri(); ?>/images/instagram-icon.png" class="social-icon" />
			</div>
			<div class="footer-right-bottom">
				<h6>Designed by / Business on Market St.</h6>
			</div>
		</div>
	</div>
</div>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/function.js"></script>
</body>
</html>