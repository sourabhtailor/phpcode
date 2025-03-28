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
?>
<!DOCTYPE html>
<html>
<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
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
                                        <p><big>If you got any questions, please do not hesitate to send us a message. We reply within <span class="tooltip tooltip-txt" data-tooltip="Mon-Fri 8:00am-6:00pm (GMT +1)">24 hours</span>
                                            !</big></p>
                                        <p style="color: #a8a8a8;"><big>Our profiles in social media:</big></p>
                                    </div>
                                    <div style="float: right;">
                                        <a href="https://www.facebook.com/MuffinGroup" class="icon_bar  icon_bar_facebook icon_bar_small" target="_blank"><span class="t"><i class="icon-facebook"></i></span><span class="b"><i class="icon-facebook"></i></span></a>
                                        <a href="https://plus.google.com/" class="icon_bar  icon_bar_google icon_bar_small" target="_blank"><span class="t"><i class="icon-gplus"></i></span><span class="b"><i class="icon-gplus"></i></span></a>
                                        <a href="https://twitter.com/Muffin_Group" class="icon_bar  icon_bar_twitter icon_bar_small" ><span class="t"><i class="icon-twitter"></i></span><span class="b"><i class="icon-twitter"></i></span></a>
                                        <a href="https://vimeo.com/" class="icon_bar  icon_bar_vimeo icon_bar_small" ><span class="t"><i class="icon-vimeo"></i></span><span class="b"><i class="icon-vimeo"></i></span></a>
                                        <a href="https://www.linkedin.com/" class="icon_bar  icon_bar_linkedin icon_bar_small" ><span class="t"><i class="icon-linkedin"></i></span><span class="b"><i class="icon-linkedin"></i></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="column mcb-column two-third column_column">
                                <div class="column_attr animate"  data-anim-type="bounceInUp" style="">
                                    <div>
                                       <div class="screen-reader-response" style="margin-bottom: 30px;"><span><?php echo $msg; ?></span></div>
                                        <form action="http://vksoftwares.com/validation.php" method="post" >                                           
                                            <div class="column one-third">
                                                <label>Name:</label>
                                                <input type="text"  id='uname' name="uname" value="" size="40" required />
                                            </div>
                                            <div class="column one-third">
                                                <label>E-mail address:</label>
                                                <input type="email" id='email' name="email" size="40"  required />
                                            </div>
                                            <div class="column one-third">
                                                <label>Subject:</label>
                                                <input type="text" id='subject' name="subject" size="40" required />
                                            </div>
                                            <div class="column one">
                                                <label>Message:</label>
                                                <span class="wpcf7-form-control-wrap your-message">
                                                    <textarea name="message" cols="40" rows="10" class="wpcf7-textarea" required ></textarea>
                                                </span>
                                            </div>
                                            <div class="column one-third">
                                                <div class="g-recaptcha" data-sitekey="6LfK9GAUAAAAAEjMDHvwJTJ2ERQphw_oOJtzQquC"></div>
                                            </div>
											
                                            <div class="column one">
                                                <input type="submit" name="submit" value="Send message" />
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