 <?php 
/* */
session_start(); 
$msg = '';

if (isset($_SESSION["status"]) && !empty($_SESSION["status"])) {
$status =  $_SESSION['status'];

if($status == 'Error'){
	$msg = '<span style="color: #D8000C;margin:10px 22px;font-size:1.5em;vertical-align:middle; padding:12px;">'.$_SESSION['er_msg'].'</span>';
	unset($_SESSION['er_msg']);
	unset($_SESSION['status']);
}
else if ($status == 'Success'){
	$msg = '<span style="color: #4F8A10;margin:10px 22px;font-size:1.5em;vertical-align:middle; padding:12px;">'.$_SESSION['su_msg'].'</span>';
	unset($_SESSION['su_msg']);
	unset($_SESSION['status']);
} 
}



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
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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
							<h1>Privacy Policy for VK Softwares</h1>

<p>At VK Softwares, accessible from http://vksoftwares.com/, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by VK Softwares and how we use it.</p>

<p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>

<h2>Log Files</h2>

<p>VK Softwares follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users' movement on the website, and gathering demographic information.</p>




<h2>Privacy Policies</h2>

<p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on VK Softwares, which are sent directly to users' browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>

<p>Note that VK Softwares has no access to or control over these cookies that are used by third-party advertisers.</p>

<h2>Third Party Privacy Policies</h2>

<p>VK Softwares's Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options. </p>

<p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers' respective websites. What Are Cookies?</p>

<h2>Children's Information</h2>

<p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>

<p>VK Softwares does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>

<h2>Online Privacy Policy Only</h2>

<p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in VK Softwares. This policy is not applicable to any information collected offline or via channels other than this website.</p>

<h2>Consent</h2>

<p>By using our website, you hereby consent to our Privacy Policy and agree to its Terms and Conditions.</p>
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
<script type='text/javascript' src='js/js/jquery/ui/widget.mine899e899.js?ver=1.11.4'></script>
<script type='text/javascript' src='js/js/jquery/ui/mouse.mine899e899.js?ver=1.11.4'></script>
<script type='text/javascript' src='js/js/jquery/ui/resizable.mine899e899.js?ver=1.11.4'></script>
<script type='text/javascript' src='js/js/jquery/ui/draggable.mine899e899.js?ver=1.11.4'></script>
<script type='text/javascript' src='js/js/jquery/ui/button.mine899e899.js?ver=1.11.4'></script>
<script type='text/javascript' src='js/js/jquery/ui/position.mine899e899.js?ver=1.11.4'></script>
<script type='text/javascript' src='js/js/jquery/ui/dialog.mine899e899.js?ver=1.11.4'></script>
<script type='text/javascript' src='js/js/wpdialog.minb523b523.js?ver=4.3.3'></script>
<script type='text/javascript' src='css/plugins/contact-form-7/includes/js/jquery.form.mind03dd03d.js?ver=3.51.0-2014.06.20'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var _wpcf7 = {"loaderUrl": "http:\/\/vksoftwares.com\/css\/plugins\/contact-form-7\/images\/ajax-loader.gif", "recaptchaEmpty": "Please verify that you are not a robot.", "sending": "Sending ..."};
    /* ]]> */
</script>
<script type='text/javascript' src='css/plugins/contact-form-7/includes/js/scripts5b315b31.js?ver=4.3.1'></script>
<script type='text/javascript' src='js/js/jquery/ui/sortable.mine899e899.js?ver=1.11.4'></script>
<script type='text/javascript' src='js/js/jquery/ui/tabs.mine899e899.js?ver=1.11.4'></script>
<script type='text/javascript' src='js/js/jquery/ui/accordion.mine899e899.js?ver=1.11.4'></script>
<script type='text/javascript' src='css/themes/betheme/js/plugins2c4c2c4c.js?ver=10.9'></script>
<script type='text/javascript' src='css/themes/betheme/js/menu2c4c2c4c.js?ver=10.9'></script>
<script type='text/javascript' src='css/themes/betheme/assets/animations/animations.min2c4c2c4c.js?ver=10.9'></script>
<script type='text/javascript' src='css/themes/betheme/assets/jplayer/jplayer.min2c4c2c4c.js?ver=10.9'></script>
<script type='text/javascript' src='css/themes/betheme/js/scripts2c4c2c4c.js?ver=10.9'></script>
<script type='text/javascript' src='js/js/comment-reply.minb523b523.js?ver=4.3.3'></script><script>
    $(document).ready(function () {
//change CAPTCHA on each click or on refreshing page
        $("#reload").click(function () {

            $("img#img").remove();
            var id = Math.random();
            $('<img id="img" src="captcha.php?id=' + id + '"/>').appendTo("#imgdiv");
            id = '';
        });

//validation function
        /* $('#button').click(function () {
         var captcha = $("#captcha1").val();
         if (!captcha == ''){ 
         var dataString = 'captcha=' + captcha;
         $.ajax({
         type: "POST",
         url: "validation.php",
         data: dataString,
         success: function (html) {
         alert(html);
         }
         });
         }
         }); */
    });
</script>
</body>
</html>
<!-- 

Site Key : 6Ld8FqsZAAAAAOEadG3DGFjzkLfhsdtHny3fsciv
Secrate Key : 6Ld8FqsZAAAAACLY_ic61husnD9wxEgDrc0Z87U2


-->




<script src="js/jquery.validate.js"></script>
<script>
	$(document).ready(function () {		
		$.validator.addMethod("customemail", function (value, element, params) {
			if (value == '')
				return true;
			var ptrn = /^([a-zA-Z0-9_\.\-\'])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value);
			return ptrn;
		});
		$('#submit').click(function (e) {
			$('#create_customer').validate({
				rules: {
					name: {
						required: true,
					},
					email: {
						required: true,
						customemail: true
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
</script>
<script>
	$('form').on('submit', function(e) {
	  if(grecaptcha.getResponse() == "") {
		e.preventDefault();
		alert("You can't proceed! Robot verification failed");
	  }
	});
</script>