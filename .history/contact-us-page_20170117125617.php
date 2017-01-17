<?php include_once "include/header.php";?>
		<!--=====Slider-Section-End======-->


		<!--<script>
var myCenter=new google.maps.LatLng(22.7253, 75.8655);
function initMap()
{
var mapProp = {
  center:myCenter,
  zoom:7,
  scrollwheel: false,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };
var map=new google.maps.Map(document.getElementById("artist_googleMap"),mapProp);
var marker=new google.maps.Marker({
  position:myCenter,
   map: map,
  title: 'Hsoft Dewas'
  });
marker.setMap(map);
var infowindow = new google.maps.InfoWindow({
  content:""
  });
google.maps.event.addListener(marker, 'click', function() {
  infowindow.open(map,marker);
  });
}
google.maps.event.addDomListener(window, 'load', initMap);
</script>-->



		<!-- Contact-Slide-Start -->
		<div class="row-fluid">
			<div class="span12 hs_slide_part wow fadeInDown">
				<div class="span12 hs_single_thumb hs_single_thumb_map">
					<div id="artist_googleMap" class="map-size">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d60507.67757425257!2d73.86970413200459!3d18.58621431716007!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x92bf2ad7d36c20b5!2sPune+International+Airport!5e0!3m2!1sen!2sin!4v1484125120723"
							width="100%" height="100%" frameborder="0" class="map-iframe-border" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
		<!-- Contact-Slide-End -->
		<!-- Make-Details-Path-Start -->
		<div class="row-fluid">
			<div class="span12 hs_left">
				<div class="span12 hs_make_path hs_left wow fadeInLeft">
					<h1 class="lined"> Always Think NAK EVENTS</h1>
				</div>
				<div class="span12 hs_make_detail hs_left wow fadeInDown">
					<div class="span4">
						<div class="span2">
							<p class="hs_font_icon_10">Q</p>
						</div>
						<div class="span8"> +91 9822072002 <br/> 020-25530473 </div>
					</div>
					<div class="span4">
						<div class="span2 hs_box">
							<p class="hs_font_icon_10">O</p>
						</div>
						<div class="span8"> info@nakevents.com <br/> www.nakevents.com </div>
					</div>
					<div class="span4">
						<div class="span2">
							<p class="hs_font_icon_10">u</p>
						</div>
						<div class="span8">1st Floor, Arvind Apartments, Besides Hotel Sheetal, Dnyaneshwar Paduka Chowk, FC Road, Shivaji Nagar, Pune- 411005.
							</div>
					</div>
				</div>
			</div>
		</div>
		<!-- MakeDe-tails-Path-End -->

		<!--Contact-Form-Start -->
		<div class="row-fluid">
			<div class="span12 hs_contact_part wow fadeInLeft">
				<h1 class="lined"> Drop us a Line </h1>
			</div>
			<div class="span12 hs_left hs_contect_form hs_overflow_hidden">
				<form id="artist_contactform" method="post">
					<div class="span6">
						<div class="contacthas-error"><input type="text" value="" placeholder="Phone No" name="phono" data-validation="number" class="span12 hs_comment_input wow bounceInDown"
							/></div>
						<div class="contacthas-error">
							<input type="hidden" value="http://kamleshyadav.com/wp/artist/wp-admin/admin-ajax.php" id="artist_ajaxurl">
							<input type="text" data-validation='required' value="" placeholder="Name" name="name" class="span12 hs_comment_input wow bounceInDown"
							/></div>
						<div class="contacthas-error"><input value="" placeholder="Email" type="text" name="email" data-validation="email" class="span12 hs_comment_input txtEmail wow bounceInDown hs_delay_02"
							/></div>
					</div>
					<div class="span6">
						<div class="contacthas-error"><textarea name="Message" id="Message" data-validation="required" class="span12 hs_blog_comment wow bounceInDown hs_delay_04"></textarea></div>
					</div>
					<div class="span12 hs_left">
						<div class="span6 hs_left"> All Fields are required*** </div>
						<div class="span12 pull-right artist_contact_submit">
							<input type="submit" name="submit" value="Send Message" id="hs_send_btn" class="btnValidate wow bounceInDown hs_delay_04">
							<div class="artist_infotext"></div>
							<div class="artist_loading_images display-none"><img src="public/images/loading.gif" alt=""></div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!--Contact-Form-End -->

<?php include_once "include/footer.php";?>