<div class="footer">
        <div class="footer-af">
             <div class="footer-social-tab">
                   <p>&middot;</p>
		   <h3>Get <span>Social</span></h3>
                   <p>&middot;</p>
	     </div>
<?php $mainoptions = get_option('main_theme_options'); ?>
             <div class="footer-af-icons">
                   <a href="<?php echo $mainoptions['facebookurl']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/af-fb.png" alt="Facebook Social Icon" /></a>
                   <a href="<?php echo $mainoptions['twitterurl']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/af-twt.png" alt="Twitter Social Icon" /></a>
                   <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/af-rr.png" alt="RR Social Icon" class="footer-af-rr" /></a>
                   <a href="<?php echo $mainoptions['pinteresturl']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/af-pin.png" alt="Pinterest Social Icon" /></a>
                   <a href="<?php echo $mainoptions['youtubeurl']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/af-yt.png" alt="Youtube Social Icon" /></a>
                   <a href="<?php echo $mainoptions['instagramurl']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/af-ig.png" alt="Instagram Social Icon" /></a>
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
<?php wp_footer(); ?>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/function.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">

// Function to create the map //
function mapinitialize() {

  // Create an array of styles.
  var styles = [
  {
    "featureType": "landscape",
    "stylers": [
      { "color": "#d4e2df" }
    ]
  },{
    "featureType": "road.local",
    "elementType": "geometry.fill",
    "stylers": [
      { "color": "#ffffff" }
    ]
  },{
    "elementType": "labels.text.fill",
    "stylers": [
      { "color": "#1e403a" }
    ]
  },{
    "featureType": "poi.park",
    "elementType": "geometry.fill",
    "stylers": [
      { "color": "#9ebbb5" }
    ]
  },{
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      { "color": "#618983" }
    ]
  },{
    "featureType": "road",
    "elementType": "geometry.stroke",
    "stylers": [
      { "color": "#b0c9c5" }
    ]
  }
];



  // Create a new StyledMapType object, passing it the array of styles,
  // as well as the name to be displayed on the map type control.
  var styledMap = new google.maps.StyledMapType(styles,
    {name: "Styled Map"});

  // Create a map object, and include the MapTypeId to add
  // to the map type control.
  var mapOptions = {
    zoom: 16,
    mapTypeControl: false,
streetViewControl: false,
// Put the coordinates that you want the map to center around //
    center: new google.maps.LatLng(41.163519,-73.220787),
    mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
    }
  };
  var map = new google.maps.Map(document.getElementById('google-map'),
    mapOptions);

// This will create the tab that shows up when the pin is clicked on //
var contentString = '<div id="mapcontent">'+'<img src="http://redlinerestorations.net/wp-content/themes/RedlineRestorationsLess/images/redline-map-image.png" />'+'<div class="mapcontent-text">'+'<p><span>Red<em>line Restorations</em></span></p>'+
'<p>2316 FAIRFIELD AVE</p>'+'<p>BLACK ROCK, CT 06605</p>'+'<p>P: 203 335 9555</p>'+'</div>'+'</div>';

// Attachs the tab //
var infowindow = new google.maps.InfoWindow({
content: contentString,
maxWidth: 320
});


  //Associate the styled map with the MapTypeId and set it to display.
  map.mapTypes.set('map_style', styledMap);
  map.setMapTypeId('map_style');

// Sets the pin location on the map and chooses the picture that will be used //
var image = 'http://redlinerestorations.net/wp-content/themes/RedlineRestorationsLess/images/redline-map-flag.png';
// This should be the coordinates where you want the pin to be put //
  var myLatLng = new google.maps.LatLng(41.163340,-73.221006);
  var pinmarker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      icon: image
  });

// Associates the text tab with the marker you created //
google.maps.event.addListener(pinmarker,'click',function(){
infowindow.open(map,pinmarker);
});

// Puts the marker on the map //
  pinmarker.setMap(map);
              
}

// Puts listener so that the map will not try to load unless it need to //
// google.maps.event.addDomListener(window, "load", mapinitialize); //

</script>
</body>
</html>