<?php include ('includes/head.php');

include ('includes/header.php');
 ?>
<div class="services">
<div class="container">
<h3>Facilities</h3>
	<div class="row services-info">
	<div class="col-md-3">
<div class="tile blue">
        <h3 class="title">24 hours Emergency Care</h3>
        
      </div>
      </div>
      <div class="col-md-3">
      <div class="tile blue">
        <h3 class="title">Intensive Care Unit</h3>
        
      </div>
      </div>
      <div class="col-md-3">
      <div class="tile blue">
        <h3 class="title">Modern Operation Theatres</h3>
       
      </div>
      </div>
      <div class="col-md-3">
      <div class="tile blue">
        <h3 class="title">Ambulance Service</h3>
       
      </div>
      </div>
      </div>
      <div class="row services-info">
      	<div class="col-md-3">
<div class="tile blue">
        <h3 class="title">Pharmacy</h3>
        
      </div>
      </div>
      <div class="col-md-3">
      <div class="tile blue">
        <h3 class="title">Clinical Laboratory</h3>
        
      </div>
      </div>
      <div class="col-md-3">
      <div class="tile blue">
        <h3 class="title">Radiology</h3>
       
      </div>
      </div>
      <div class="col-md-3">
      <div class="tile blue">
        <h3 class="title">Canteen</h3>
       </div>
      </div>
      </div>
      <div class="services-info ">
      <div class="row facilities-row">
      <div class="col-md-3">
      <img src="images/facilities/Flexible-Ureteroscopy-RIRS.png" class="img-responsive">
      </div>
      
      <div class="col-md-9">
<h3>Flexible Ureteroscopy - RIRS</h3>
      
      <p>Retrograde intrarenal surgery (RIRS) is a procedure for doing surgery within the kidney using a viewing tube called a fiberoptic endoscope.
In RIRS the scope is placed through the urethra (the urinary opening) into the bladder and then through the ureter into the urine-collecting part of the kidney. The scope is inserted retrograde (up the urinary tract) to within the kidney (intrarenal).</p><p>
RIRS may be done to remove a stone or treat cancer. The stone or tumor is seen through the scope and can then be fragmented/vaporized by Holmium laser o  removed by small basket. RIRS is performed by a specialist, a urologist (endourologist) with special expertise in RIRS. The procedure is usually done under general or spinal anesthesia.The advantages of RIRS over open surgery include a quicker solution of the problem, the elimination of prolonged pain after surgery, and much faster recovery.</p>
</div>
<div class="clearfix"></div>
</div>
 <div class="row facilities-row">
      <div class="col-md-9">
      <h3>PCNL - Standard/Mini</h3>
      <p>
      Percutaneous nephrolithotomy (PCNL) is the removal of kidney stones through a small incision (&laquo;1 cm) at the back. 
      This is usually done under general anesthesia with the patient in prone position under ultrasound and fluoroscopic guidance.
     Mini-PCNL or miniperc is a less invasive form of PCNL in which the incision is still smaller and smaller instruments are used. This is suitable for smaller kidney stones and stone surgeries in children.
      </p>
      </div>
      

      <div class="col-md-3">
      <img src="images/facilities/PCNL-StandardMini.jpg" class="facilities-img img-responsive"></div>
      <div class="clearfix"></div>
      </div>
       <div class="row facilities-row">
      <div class="col-md-3">
      <img src="images/facilities/Laparoscopic-Urology.jpg" class="facilities-img img-responsive"></div>
     
      <div class="col-md-9">
      <h3>Laparoscopic Urology</h3>
      <p>
      The laparoscopic era in Urology started with the first laparoscopic nephrectomy by Dr. Ralph Clayman in 1991. Over the last two decades laparoscopic Urology has grown leaps and bounds to make it both patient and surgeon friendly.  

    The Urological procedures done laparoscopically include
      </p>
      	<ul> <li>Laparoscopic simple nephrectomy - for non-malignant non-functioning kidneys</li>
      	 <li>Laparoscopic donor nephrectomy - removal of healthy kidney from a voluntary kidney donor with two good functioning kidneys for the purpose of kidney transplantation</li> 
      	 <li>Laparoscopic radical nephrectomy - for large malignant tumors of kidney</li> <li>Laparoscopic partial nephrectomy/ Nephron Sparing Surgery - smaller tumors of kidney</li>
      	 
      	 <div class="read-more-content">
      	  <li>Laparoscopic pyeloplasty - for pelvi-ureteric junction obstruction (congenital block in the urine flow from kidney into ureter)</li>
      	   <li>Laparoscopic ureterolithotomy - removal of stone from ureter (tube connecting kidney and bladder)</li>
      	    <li>Laparoscopic ureteric reimplantation - making a new connection between ureter and bladder - done for block in lower ureter or vesico-ureteric reflux (urine flowing backwards from bladder into kidney)</li>
      	     <li>Laparoscopic radical cystectomy - removal of bladder and lymphnodes (along with prostate in males and uterus in females) for bladder cancer</li> 
      	     <li>Laparoscopic bladder augmentation - increasing the size of bladder by attaching small bowel with bladder - done for bladder with reduced capacity</li>
      	      <li>Laparoscopic radical prostatectomy - for prostate cancer which is confined to prostate gland</li> <li>Laparoscopic retroperitoneal lymph node dissection - removal of lymph nodes in the back of abdomen - for testicular cancer</li> </ul>
      </div>
      </div>
      </div>
      </div>
</div></div>
</div>
<style type="text/css">
	.hide {
  display: none;
}
</style>
<script>
$(document).ready(function()
{
	// Hide the extra content initially, using JS so that if JS is disabled, no problemo:
$('.read-more-content').addClass('hide')

// Set up a link to expand the hidden content:
.before('<a class="read-more-show" href="#">Read More</a>')
  
// Set up a link to hide the expanded content.
.append(' <a class="read-more-hide" href="#">Read Less</a>');

// Set up the toggle effect:
$('.read-more-show').on('click', function(e) {
  $(this).next('.read-more-content').removeClass('hide');
  $(this).addClass('hide');
  e.preventDefault();
});

$('.read-more-hide').on('click', function(e) {
  $(this).parent('.read-more-content').addClass('hide').parent().children('.read-more-show').removeClass('hide');

  e.preventDefault();
});
})
</script>
	<?php include ('includes/extfooter.php');

include ('includes/footer.php');
 ?>