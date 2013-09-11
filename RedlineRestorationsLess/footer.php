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
			<div class="footer-close-tab">
				<h3>Close <span>Social</span></h3>
			</div>
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
      stylers: [
      // This makes the map black and white //
        { Hue:  "#5d2c32" },
{ Saturation: 5 },
{ Gamma:  0 },
{ Lightness: 20 }
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
var contentString = '##################';

// Attachs the tab //
var infowindow = new google.maps.InfoWindow({
content: contentString
});


  //Associate the styled map with the MapTypeId and set it to display.
  map.mapTypes.set('map_style', styledMap);
  map.setMapTypeId('map_style');

// Sets the pin location on the map and chooses the picture that will be used //
var image = 'http://localhost/wordpress/wp-content/themes/RedlineRestorationsLess/images/redline-map-flag.png';
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
google.maps.event.addDomListener(window, "load", mapinitialize);

</script>
</body>
</html>