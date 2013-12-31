<!DOCTYPE html>
<html lang="en">
<head>
	<title>Redline Restorations</title>
	<link tyep="text/css" rel="stylesheet" href="style.css" />
	<link type="text/css" rel="stylesheet" href="http://fast.fonts.com/cssapi/6f0a6d23-c087-4412-9761-ba16bbdef6cd.css"/>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
</head>
<body>
	<div class="container">
		<div class="logo">
			<img src="images/logo.png" alt="logo" />
		</div>

		<div class="description">
			<div class="intro-text-shadow">
				<div class="intro-text">
					<p>A world class automotive restoration facility. 
					Our TUV-certified staff prides themselves on our extensive research and attention to detail.</p>
				</div>
			</div>
			<div class="enter-email-shadow">
				<div class="enter-email">
					<div class="entering-email"><p>Enter your email address below now, and we will notify you when we launch our brand new website.</p></div>
					<div class="confirmation"><img src="images/confirmation.png" id="confirmed" /></div>
					<form action="https://docs.google.com/forms/d/1D_CgYcrN_xg8bQdeQRDpAgjpzCNTzIG-akpD00ZMuCg/formResponse?embedded=true" method="POST" id="ss-form" target="hiddeniframe" onsubmit="emailslide()">
						<input type="email" name="entry.1429264908" value="" placeholder="email" class="ss-q-short email-text-box" id="entry_1429264908" dir="auto" aria-required="true">
						<input class="submit" type="submit" name="submit" value="Submit" id="ss-submit">
					</form>
					<iframe name="hiddeniframe" class="hiddeniframe">
					</iframe>
				</div>
			</div>
		</div>
		<div class="link-to-letter">
			<div class="side-shadowleft">
				<div class="side-linesleft">
				</div>
			</div>
		
			<a href="letter.php">Click here to see a professional courtesy and warning to our dedicated clients.</a>
			<div class="side-shadowright">
				<div class="side-linesright">
				</div>
			</div>
		</div>
		<div class="twitter-feed">
			<div class="the-tweets">
				<a class="twitter-timeline" href="https://twitter.com/Redlineresto" data-widget-id="349941594641805312" data-tweet-limit="2" data-link-color="#263B44" data-chrome="nofooter transparent noborders">Tweets by @Redlineresto</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
				if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
				fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>
		</div>
		<div class="company-info">
			<img src="images/company-info-line.png" alt="company-info-line" />
			<div class="block sales">
				<div class="blockshadow">
					<p>sales@</p>
					<p><a href="http://www.redlinerestorations.net" style="text-decoration:none;color:#d91f2d;line-height:22px;letter-spacing:2px;display:inline;font-family:'BauerBodoniW01-RegItali';">redlinerestorations.net</a></p>
				</div>
			</div>
			<div class="block hours">
				<div class="blockshadow">
					<p><span>m-s</span> 9am-5pm</p>
					<p><span>sun</span>&nbsp; by appt</p>
				</div>
			</div>
			<div class="block phone">
				<div class="blockshadow">
					<p><span>p</span> 203 <em>335 9555</em></p>
					<p><span>f</span> 203 <em>335 9550</em></p>
				</div>
			</div>
			<div class="block address">
					<p><em>2316 fairfield ave</em></p>
					<p>black rock, ct 06605</p>
			</div>
		</div>
		<div class="map">
			<iframe id="mapping" width="471" height="278" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=2316+FAIRFIELD+AVE+BLACK+ROCK,+CT+06605&amp;ie=UTF8&amp;hq=&amp;hnear=2316+Fairfield+Ave,+Bridgeport,+Connecticut+06605&amp;gl=us&amp;ll=41.163306,-73.220987&amp;spn=0.009741,0.01354&amp;t=m&amp;z=14&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?q=2316+FAIRFIELD+AVE+BLACK+ROCK,+CT+06605&amp;ie=UTF8&amp;hq=&amp;hnear=2316+Fairfield+Ave,+Bridgeport,+Connecticut+06605&amp;gl=us&amp;ll=41.163306,-73.220987&amp;spn=0.009741,0.01354&amp;t=m&amp;z=14&amp;source=embed" style="color:#d91f2d;text-align:left">View Larger Map</a></small>
		</div>

		<div class="social-media">
			<ul>
				<li><a href="http://www.facebook.com/redlineresto"><div id="facebook"></div></a></li>
				<li><a href="https://twitter.com/Redlineresto"><div id="socialtwitter"></div></a></li>
				<li><a href="https://foursquare.com/redlineresto?ref=atw"><div id="foursquare"></div></a></li>
				<li><a href="http://www.youtube.com/user/redlineresto"><div id="youtube"></div></a></li>
			</ul>
			<p>Copyright &copy; 2013 Redline Restoration LLC.</p>
		</div>
</div>


	<script type="text/javascript" language="javascript">
	$(document).ready(function() {
		$("#confirmed").hide();
	});
	</script>
	<script type="text/javascript" language="javascript">
	function emailslide() {
		$("#confirmed").show("slide",{direction:'right'}, 2000).delay(2000).hide("slide",{direction:'right'}, 2000);
	}
	</script>
</body>
</html>