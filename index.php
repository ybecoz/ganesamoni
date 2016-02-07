<?php include ('includes/head.php');

include ('includes/header.php');
 ?>
<!--banner-->
	<div class="banner">
		<div class="container ">
			<!-- banner-text Slider starts Here -->
			<script src="js/responsiveslides.min.js"></script>
			 <script>
				// You can also use "$(window).load(function() {"
					$(function () {
					// Slideshow 4
						$("#slider3").responsiveSlides({
						auto: true,
						pager:true,
						nav:false,
						speed: 500,
						namespace: "callbacks",
						before: function () {
						$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
						}
					});	
				});
			</script>
			<!--//End-slider-script -->
			<div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-text">		
							<h1>Free Check-up camp</h1>
							<p>Periodical free check-up camps focussing on speciality health care, Urology and Cancer treatment and screening services are conducted at Ganesamoni Hospital.</p>
						</div>
					</li>
					
					<li>
						<div class="banner-text">		
							<h1>Management of lower pole kidney stones</h1>
							<p>Kidney stones in lower part of kidney are peculiar in that the results of lithotripsy are poor in these stones. In RIRS, using a flexible scope these difficult stones can be broken with laser.</p>
						</div>
					</li>
					<li>
						<div class="banner-text">		
							<h1>Medical Camp</h1>
							<p>Kidney stones are very common in South Tamil Nadu and Kerala. Ours being a tertiary care center for the treatment of kidney problems, conducting such free camps will be of immense benefit for the local population.</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!--//banner-->
	<!--banner-bottom-->
	<div class="banner-bottom">
		<div class="container">
			<h2>World-class advanced treatment for kidney stones</h2>
			<a href="#gallery" class="arrow scroll"> </a>
		</div>
	</div>
	<!--//banner-bottom-->
	<!--gallery-->
	<div class="gallery" id="gallery">
		<div class="col-md-6 gallery-right">
        <div class="gallery-grid-a">
			<div class="inner-text">
				<h4>Who We Are</h4>
				<p>Ganesamoni hospital was founded in 1983 by Dr. S. Ganesamoni M.S., F.A.I.S. The hospital has been providing compassionate, quality and affordable healthcare to people since then.</p>
			</div>	
			</div>
			<div class="gallery-grid-b">	
			<div class="inner-text">	
				<h4>Our Specialities</h4>
				<p>At the commemoration of 30 years of service, the hospital has acquired advanced laparoscopic facilities and laser lithotripsy facilities.</p>
			</div>
			</div>
		</div>
		<div class="col-md-6 gallery-right">
			<div class="gallery-grid-a2">
			<div class="inner-text">
				
				<h4>What We Do</h4>
			<p>Over the years, in line with the advances in medical field, the hospital was started with General Surgery, Internal Medicine, Obstetrics & Gynaecology, Pediatrics and Emergency Medicine services.</p>
			</div>	
			</div>
			<div class="gallery-grid-b2">	
			<div class="inner-text">	
				<h4>We're Upgrading</h4>
			<p>Following the hospital's motto of "Compassion, Quality and Excellence", the hospital is continuously upgrading the existing facilities and increasing faculties.</p>
			</div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!--//gallery-->
	<!--work-->
	<div class="work">		
		<div class="container">	
			<div class="work-title">
				<h3>Commonly done surgeries at GMH</h3>
				
			</div>
			
			<div class="col-md-6 work-grids">
				<ul>
					<li><img src="images/icon3.png" alt=""></li>
					<li>
					<h4>Surgical Oncology</h4>
						<ul class="list-group">
						<li class="list-group-item" style="width:100%">Head and Neck Cancer</li>
						<li class="list-group-item" style="width:100%">Breast Cancer</li>
						<li class="list-group-item" style="width:100%">Hernia Repair</li>
						<li class="list-group-item" style="width:100%">Gastrointestinal Cancer</li>
						<li class="list-group-item" style="width:100%">Soft Tissue Sarcoma</li>
						<li class="list-group-item" style="width:100%">Lung Cancer</li>
						<li class="list-group-item" style="width:100%">Skin Cancer</li>
						<li class="list-group-item" style="width:100%">Cervical Cancer</li>
					
				</ul>
					</li>
				</ul>
				<ul>
					<li></li>
					<li>
					<h4>Laparoscopic Gynecology</h4>
						<ul class="list-group">
						<li class="list-group-item" style="width:100%">Lap Hysterectomy </li>
						<li class="list-group-item" style="width:100%">Lap Ovarian Cyst removal</li>
						<li class="list-group-item" style="width:100%">Hernia Repair</li>
						<li class="list-group-item" style="width:100%">Lap Ectopic Pregnancy treatment</li>
					
				</ul>
					</li>
				</ul>
				
			</div>
			<div class="col-md-6 work-grids">
			<ul>
					<li><img src="images/icon2.png" alt=""></li>
					<li>
						<h4>Urology</h4>
						<ul class="list-group">
						<li class="list-group-item" style="width:100%">Kidney Stones</li>
						<li class="list-group-item" style="width:100%">Enlarged Prostate</li>
						<li class="list-group-item" style="width:100%">Kidney Cancer - Laparoscopic</li>
						<li class="list-group-item" style="width:100%">Bladder Cancer</li>
						<li class="list-group-item" style="width:100%">Prostate Cancer</li>
						<li class="list-group-item" style="width:100%">PUJ Obstruction</li>
						<li class="list-group-item" style="width:100%">Vesico-Ureteric Reflux</li>
						<li class="list-group-item" style="width:100%">Ureteric Stricture</li>
						<li class="list-group-item" style="width:100%">Male Infertility</li>
						<li class="list-group-item" style="width:100%">Gall Bladder Stone</li>
						<li class="list-group-item" style="width:100%">Erectile Dysfunction</li>
						<li class="list-group-item" style="width:100%">Female Urology</li>
						<li class="list-group-item" style="width:100%">Emergency Urology</li>
						
						
				</ul>
				</li>
				</ul>
				
			</div>
			<div class="clearfix"> </div>
			
		</div>
	</div>
	<div class="testimonial">		
		<div class="container">	
			<div class="work-title">
				<h3>What our patients say about us?</h3>
				
			</div>
	<div class="cd-testimonials-wrapper cd-container">
	<ul class="cd-testimonials">
		<li>
			<p>Maldivian patients are extremely happy with excellent medication , wonderful care & service.. Thank u all @ all the very best...</p>
			<div class="cd-author">
				<img src="img/avatar-1.jpg" alt="Author image">
				<ul class="cd-author-info">
					<li>Kalai Vanan</li>
					<li>Maladives</li>
				</ul>
			</div>
		</li>

		<li>
			<p>South India's one of the Best hospital for all diseases...Such an wonderful atmosphere..very kind doctors..high class equipments...have all facilities...wat else u want?</p>
			<div class="cd-author">
				<img src="img/avatar-2.jpg" alt="Author image">
				<ul class="cd-author-info">
					<li>Vikimanish</li>
					<li>Chennai</li>
				</ul>
			</div>
		</li>

		<li>
			<p>Great Urology work done... Patients first and Excellent care</p>
			<div class="cd-author">
				<img src="img/avatar-3.jpg" alt="Author image">
				<ul class="cd-author-info">
					<li>Ranjith Kumar</li>
					<li>Nagercoil</li>
				</ul>
			</div>
		</li>
		
	</ul> <!-- cd-testimonials -->

	<!-- <a href="#0" class="cd-see-all">See all</a> -->
</div> <!-- cd-testimonials-wrapper -->

<!-- <div class="cd-testimonials-all">
	<div class="cd-testimonials-all-wrapper">
		<ul>
			<li class="cd-testimonials-item">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit totam saepe iste maiores neque animi molestias nihil illum nisi temporibus.</p>
				
				<div class="cd-author">
					<img src="img/avatar-1.jpg" alt="Author image">
					<ul class="cd-author-info">
						<li>MyName</li>
						<li>CEO, CompanyName</li>
					</ul>
				</div> <!-- cd-author -->
			<!-- </li>

			<li class="cd-testimonials-item">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore nostrum nisi, doloremque error hic nam nemo doloribus porro impedit perferendis. Tempora, distinctio hic suscipit. At ullam eaque atque recusandae modi fugiat voluptatem laborum laboriosam rerum, consequatur reprehenderit omnis, enim pariatur nam, quidem, quas vel reiciendis aspernatur consequuntur. Commodi quasi enim, nisi alias fugit architecto, doloremque, eligendi quam autem exercitationem consectetur.</p>
				
				<div class="cd-author">
					<img src="img/avatar-2.jpg" alt="Author image">
					<ul class="cd-author-info">
						<li>MyName</li>
						<li>CEO, CompanyName</li>
					</ul>
				</div> <!-- cd-author -->
			<!-- <!-- </li>
</ul> -->
<!-- <a href="#0" class="close-btn">Close</a>
</div>  -->
</div>
</div>
	<!--//work-->
	<div class="like">		
		<div class="container">
			<div class="work-title">
				<h3>Stay connected with us</h3>
				<p class="cnnct">Follow Us in Social Network</p>
			</div>
			<div class="col-md-3">
				
			</div>
			<div class="col-md-3 like-grids">
			<a href="https://www.facebook.com/GMHIndia" target="_blank">
					<img src="images/icon1.png" alt=""/>
				</a>
				<p>Facebook</p>
				
			</div>
			<div class="col-md-3 like-grids">
			<a href="https://plus.google.com/+GanesamoniHospitalNagercoil/about" target="_blank">
					<img src="images/icon7.png" alt=""/>
				</a>
				<p>Googleplus</p>
				
			</div>
			<div class="col-md-3">
				
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<?php include ('includes/extfooter.php');

include ('includes/footer.php');
 ?>