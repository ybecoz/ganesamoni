<?php include ('includes/head.php');

include ('includes/header.php');
 ?>
 <script type="text/javascript">
$(document).ready(function() {
  $('.popup-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
			}
		}
	});
});
 </script>
<div class="gallery-page">
<h3>Gallery</h3>
		<div class="container">
		<div class="row">
		<div class="col-lg-12 popup-gallery center-block">
     <div class="col-lg-4 col-sm-6">
    <a href="images/gallery/ganesamani-hospital-gallery-1.jpg" title="Ganesamoni Hospital Infrastructure"><img class="gallery-img img-responsive" src="images/gallery/ganesamani-hospital-gallery-1.jpg" /></a></div>
    <div class="col-lg-4 col-sm-6">
    <a href="images/gallery/ganesamani-hospital-gallery-4.jpg" title="Ganesamoni Hospital Infrastructure"><img class="gallery-img img-responsive" src="images/gallery/ganesamani-hospital-gallery-4.jpg" /></a></div>
    <div class="col-lg-4 col-sm-6">
    <a href="images/gallery/ganesamani-hospital-gallery-3.jpg" title="Eco Friendly Environment"><img class="gallery-img img-responsive" src="images/gallery/ganesamani-hospital-gallery-3.jpg"  /></a></div>
    <div class="col-lg-4 col-sm-6">
    <a href="images/gallery/ganesamani-hospital-gallery-4.jpg" title="Eco Friendly Environment"><img class="gallery-img img-responsive" src="images/gallery/ganesamani-hospital-gallery-2.jpg" /></a>
    </div>
    <div class="col-lg-4 col-sm-6">
    <a href="images/gallery/ganesamani-hospital-gallery-2.jpg" title="24/7 Ambulance Service"><img class="gallery-img img-responsive" src="images/gallery/ganesamani-hospital-gallery-5.jpg"/></a></div>
    <div class="col-lg-4 col-sm-6">
    <a href="images/gallery/ganesamani-hospital-gallery-6.jpg" title="Multi Speciality Hospital"><img class="gallery-img img-responsive" src="images/gallery/ganesamani-hospital-gallery-6.jpg" /></a></div>

		</div>
		</div>
			
	</div>
	</div>
	<?php include ('includes/extfooter.php');

include ('includes/footer.php');
 ?>