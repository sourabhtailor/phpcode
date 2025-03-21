 <?php 
session_start();
$notification = ''; 
if (isset($_SESSION['success_msg'])) {
    $notification = '<div role="alert" class="alert alert-success" style="color:green;"><strong>Success!</strong> ' . $_SESSION['success_msg'] . '</div>';
    unset($_SESSION['success_msg']);
}
if (isset($_SESSION['failure_msg'])) {
    $notification = '<div role="alert" class="alert alert-danger" style="color:red;"><strong>Failed!</strong> ' . $_SESSION['failure_msg'] . '</div>';
    unset($_SESSION['failure_msg']);
}
?>
<!DOCTYPE html> 
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src='https://www.google.com/recaptcha/api.js' async defer ></script>
	<?php include 'header.php'; ?>	
</head>
</div>
<div id="Content">
    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <div class="entry-content" itemprop="mainContentOfPage">
                <div class="section mcb-section  section-border-top "  style="padding-top:40px; padding-bottom:0px; background-color:#f9f9f9" >
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one  clearfix" style="padding:; background-color:" >
                            <div class="column mcb-column one-third column_column  column-margin-">
                                <div class="column_attr animate"  data-anim-type="bounceInUp" style="">
                                    <div style="text-align: right;">
                                        <h2>Write a message</h2>
                                        <p><big>If you got any questions, please do not hesitate to send us a message. We reply within <span class="tooltip tooltip-txt" data-tooltip="Mon-Fri 8:00am-6:00pm (GMT +1)">24 hours</span>!</big></p>
                                        <p style="color: #a8a8a8;"><big>Our profiles in social media:</big></p>
                                    </div>
                                    <div style="float: right;">
                                        <a href="https://www.facebook.com/vksoftwares" class="icon_bar  icon_bar_facebook icon_bar_small" target="_blank"><span class="t"><i class="icon-facebook"></i></span><span class="b"><i class="icon-facebook"></i></span></a>                                       
                                        <a href="https://www.linkedin.com/company/2343890/" class="icon_bar  icon_bar_linkedin icon_bar_small" ><span class="t"><i class="icon-linkedin"></i></span><span class="b"><i class="icon-linkedin"></i></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="column mcb-column two-third column_column">
                                <div class="column_attr animate"  data-anim-type="bounceInUp" style="">
                                    <div>
                                       <div class="screen-reader-response" style="margin-bottom: 30px;"><span><?php echo $msg; ?></span></div>
									   <span><?php echo $notification; ?></span>
										<form method="post" action="callback_contact.php" id="create_customer" name="create_customer">               
                                            <div class="column one-third">
                                                <label>Name:</label>
                                                <input type="text"  id='name' name="name" value=""  required />
                                            </div>
                                            <div class="column one-third">
                                                <label>E-mail address:</label>
                                                <input type="email" id='email' name="email" required />
                                            </div>
                                            <div class="column one-third">
                                                <label>Subject:</label>
                                                <input type="text" id='subject' name="subject" required />
                                            </div>
                                            <div class="column one">
                                                <label>Message:</label>
                                                <span class="wpcf7-form-control-wrap your-message">
                                                    <textarea name="message" id="message" cols="40" rows="4" class="wpcf7-textarea" required ></textarea>
                                                </span>
                                            </div>
                                            <div class="column one-third">
												<img src="captcha.php?rand=<?php echo rand();?>" id='captchaimg'><br>
												<label for='message'>Enter the code above here :</label>
												<input id="captcha_code" name="captcha_code" type="text">												
												Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh.</td>
												<!--<div class="g-recaptcha" data-sitekey="6LfK9GAUAAAAAEjMDHvwJTJ2ERQphw_oOJtzQquC"></div>-->
                                                <!--<div class="g-recaptcha" data-sitekey="6LfK9GAUAAAAAEjMDHvwJTJ2ERQphw_oOJtzQquC"></div>-->
                                            </div>											
                                            <div class="column one">
                                                <input type="submit" name="submit" id= "submit" value="Send message" />
                                            </div>
                                        </form> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</div>		
<?php include 'footer.php'; ?>
</div>
<script type='text/javascript' src='js/js/jquery/ui/core.mine899e899.js?ver=1.11.4'></script>
<script type='text/javascript' src='css/plugins/contact-form-7/includes/js/jquery.form.mind03dd03d.js?ver=3.51.0-2014.06.20'></script>
<script type='text/javascript' src='css/themes/betheme/js/scripts2c4c2c4c.js?ver=10.9'></script>
</body>
</html>
<!--
Site Key : 6Ld8FqsZAAAAAOEadG3DGFjzkLfhsdtHny3fsciv
Secrate Key : 6Ld8FqsZAAAAACLY_ic61husnD9wxEgDrc0Z87U2
-->
<script src="js/jquery.validate.js"></script>
<script>
	$(document).ready(function () {
		$('#submit').click(function (e) {
			$('#create_customer').validate({
				rules: {
					name: {
						required: true,
					},
					email: {
						required: true
					}
				},
				highlight: function (element) {
					$(element).closest('.form-group').addClass('has-error');
				},
				unhighlight: function (element) {
					$(element).closest('.form-group').removeClass('has-error');
				},
				errorElement: 'span',
				errorClass: 'help-block',
				errorPlacement: function (error, element) {
					if (element.parent('.input-group').length) {
						error.insertAfter(element.parent());
					} else {
						error.insertAfter(element);
					}
				},
				submitHandler: function (form) {
					form.submit();
				}
			});
		});
	});
	$('form').on('submit', function(e) {
	  if(grecaptcha.getResponse() == "") {
		e.preventDefault();
		alert("You can't proceed! Robot verification failed");
	  }
	});
	function refreshCaptcha(){
		var img = document.images['captchaimg'];
		img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
	}
</script>