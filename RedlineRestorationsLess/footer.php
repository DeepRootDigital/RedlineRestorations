<div class="footer">
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
				 <div id="player"></div>
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
<?php wp_footer(); ?>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/function.js"></script>
<script>
      // 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '98',
          width: '175',
          videoId: 'M7lc1UVf-VE',
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        event.target.playVideo();
      }

      // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.
      var done = false;
      function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
          setTimeout(stopVideo, 6000);
          done = true;
        }
      }
      function stopVideo() {
        player.stopVideo();
      }
    </script>
</body>
</html>