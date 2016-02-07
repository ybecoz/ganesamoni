<?php include ('includes/head.php');

include ('includes/header.php');
 ?>
<div class="contact">
		<div class="container">
			<h3>Contact us</h3>
			<div class="contact-form">
				<form name="contact" id="contact" method="post">
					<input type="text" placeholder="Name" name="name" id="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
					<div>
					</div>
					<div class="col-md-6 cnt-inpt">
						<input type="email" value="Email" id="email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					</div>
					<div></div>
					<div class="col-md-6 cnt-inpt">
						<input type="text" placeholder="Telephone" id="phno" name="phno" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
					</div>
					<div class="clearfix"> </div>
					<textarea id="msg" name="msg" placeholder="message" required=""></textarea>
					<div id="texterror"></div>
					<input type="submit" value="submit">
				</form>
				
			</div>
			<div id="success">
  <span>
    <p>Your message was sent succssfully! I will be in touch as soon as I can.</p>
  </span>
</div>
<div id="error">
  <span>
    <p>Something went wrong, try refreshing and submitting the form again.</p>
  </span>
</div>
		</div>
	</div>
	<script>
            $(document).ready(function(){

            	
   $("#contact").validate({

   	errorPlacement: function(error, element) {
    if (element.attr("name") == "msg" )
    {
        error.insertBefore("#texterror");
    }
    
else {

         // the default error placement for the rest
         error.insertAfter(element);

     }
 },
      rules: {
         name: {
            required: true
               }
         ,
         email: {
            required: true,
            email:true,
               }
         ,
         phno: {
            required: true
               }
         ,

               msg: {
            required: true,
            maxlength:250,
               }
           }
         

         ,
         messages: {
            name: {
                required:"Please enter the name"
            },
            email:{
                required:"Please enter your email address",
                email:"Please enter valid email address"
            },
            phno:{
                required:"Please enter your phone number"
            },
               msg: {
            required:"Please enter the message",
            maxlength:"Please enter message upto 500 characters"
        }
    },
    submitHandler: function(form) {
            $(form).ajaxSubmit({
                type:"POST",
                data: $(form).serialize(),
                url:"process.php",
                success: function() {
                    $('#contact :input').attr('disabled', 'disabled');
                    $('#contact').fadeTo( "slow", 0.15, function() {
                        $(this).find(':input').attr('disabled', 'disabled');
                        $(this).find('label').css('cursor','default');
                        $('#success').fadeIn();
                    });
                },
                error: function() {
                    $('#contact').fadeTo( "slow", 0.15, function() {
                        $('#error').fadeIn();
                    });
                }
            });
        }
              
     });
});
            </script>

	<?php include ('includes/extfooter.php');

include ('includes/footer.php');
 ?>