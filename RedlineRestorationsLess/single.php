<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="single-blog-viewport">
	<?php autoc_get_img('featureimage'); ?>
	<div class="single-blog-content">
		<div class="single-blog-content-lines">	
		</div>
		<div class="single-blog-header">
			<h2><?php the_title(); ?></h2>
		</div>
		<div class="single-blog-info">
			<h3><?php the_author(); ?> / <em><?php echo get_the_date(); ?></em></h3>
		</div>
		<?php the_content(); ?>
		<div class="single-blog-tags">
			<?php the_tags('Tags: ',' / '); ?>
		</div>
		<div class="single-blog-social">
			<h4>Share this article!</h4>
                        <?php if ( dynamic_sidebar('sidebar_1') ) : else : endif; ?>
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
      '<input id="email" placeholder="*" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
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
<?php $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(),'full');
$large_image_url = $large_image_url[0]; ?>
<div class="single-sidebar-single-image" style="background-image:url('<?php echo $large_image_url; ?>');">
<div class="single-sidebar-single">
     <p><?php echo get_the_title(); ?></p>
</div>
</div>
</a>
<?php endwhile; ?>
</div>
      <div class="return-to-blogs">
            <img src="<?php echo get_template_directory_uri(); ?>/images/backtoblogbtn.png" />
      </div>
</div>
<div class="footer single-blog-footer">
        <div class="footer-af">
             <div class="footer-social-tab">
                   <p>&middot;</p>
		   <h3>Get <span>Social</span></h3>
                   <p>&middot;</p>
	     </div>
<?php $mainoptions = get_option('main_theme_options'); ?>
             <div class="footer-af-icons">
                   <a href="<?php echo $mainoptions['facebookurl']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/af-fb.png" alt="Facebook Social Icon" /></a>
                   <a href="<?php echo $mainoptions['twitterurl']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/af-twt.png" alt="Facebook Social Icon" /></a>
                   <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/af-rr.png" alt="Facebook Social Icon" /></a>
                   <a href="<?php echo $mainoptions['pinteresturl']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/af-pin.png" alt="Facebook Social Icon" /></a>
                   <a href="<?php echo $mainoptions['youtubeurl']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/af-yt.png" alt="Facebook Social Icon" /></a>
                   <a href="<?php echo $mainoptions['instagramurl']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/af-ig.png" alt="Facebook Social Icon" /></a>
             </div>
        </div>
	<div class="footer-wrap">
		<div class="footer-left">
			<div class="footer-facebook">
				<img src="<?php echo get_template_directory_uri(); ?>/images/facebook-icon.png" class="social-icon" />
                                <div class="fb-activity" data-app-id="648638865176460" data-site="http://www.redlinerestorations.net/" data-action="likes, recommends" data-height="105" data-colorscheme="dark" data-header="false"></div>
			</div>
			<div class="footer-twitter">
				<img src="<?php echo get_template_directory_uri(); ?>/images/twitter-icon.png" class="social-icon" />
				<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/Redlineresto" data-widget-id="375761053969166337" data-tweet-limit="1" data-chrome="noheader nofooter noborders noscrollbar transparent" width="470px">Tweets by @Redlineresto</a>
			</div>
			<div class="footer-blog">
				<img src="<?php echo get_template_directory_uri(); ?>/images/blog-icon.png" class="social-icon" />
				<h4><span>Latest</span> Blog Feed</h4>
<?php $counter = 0;
				$wp_query->query('showposts=1&order=DESC' . '&paged=' . $paged);
				while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
<h5><?php the_title(); ?></h5>
<p><?php echo substr(get_the_content(),0,80); ?></p>
<?php endwhile; ?>
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
                                <iframe id="ytplayer" type="text/html" width="250" height="140.625" src="https://www.youtube.com/embed/?listType=user_uploads&list=redlineresto" frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="footer-instagram">
				<img src="<?php echo get_template_directory_uri(); ?>/images/instagram-icon.png" class="social-icon" />
                                <iframe src="http://snapwidget.com/in/?u=cmVkbGluZXJlc3RvfGlufDEyNXwyfDF8fG5vfDV8bm9uZXxvblN0YXJ0fHllcw==&v=261213" title="Instagram Widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:260px; height:130px"></iframe>
			</div>
			<div class="footer-right-bottom">
				<h6>Designed by / <a href="http://www.businessonmarketst.com/">Business on Market St.</a></h6>
			</div>
		</div>
	</div>
</div>
<?php 
$directory = get_template_directory_uri();
?>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/function.js"></script>
</body>
</html>