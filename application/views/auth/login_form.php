<!DOCTYPE HTML>
<html>
<head>
<title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Login Page :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="<?= base_url('assets/css/bootstrap.css');?>" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="<?= base_url('assets/css/style.css');?>" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS-->
<link href="<?= base_url('assets/css/font-awesome.css');?>" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

 <!-- side nav css file -->
 <link href="<?= base_url('assets/css/SidebarNav.min.css');?>" media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="<?= base_url('assets/js/jquery-1.11.1.min.js');?>"></script>
<script src="<?= base_url('assets/js/modernizr.custom.js');?>"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts-->
 
<!-- Metis Menu -->
<script src="<?= base_url('assets/js/metisMenu.min.js');?>"></script>
<script src="<?= base_url('assets/js/custom.js');?>"></script>
<link href="<?= base_url('assets/css/custom.css');?>" rel="stylesheet">
<!--//Metis Menu -->

</head> 
<body class="cbp-spmenu-push">
<?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'size'	=> 30,
	'type'	=> 'email',
        'class' => 'user',
        'placeholder' => 'Enter Your Email',
);
if ($login_by_username AND $login_by_email) {
	$login_label = 'Email or login';
} else if ($login_by_username) {
	$login_label = 'Login';
} else {
	$login_label = 'Email';
}
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'size'	=> 30,
	'type'	=> 'password',
        'class' => 'lock',
        'placeholder' => 'Password',
);
$remember = array(
	'name'	=> 'remember',
	'id'	=> 'remember',
	'value'	=> 1,
	'checked'	=> set_value('remember'),
	'style' => 'margin:0;padding:0',
	'type'	=> 'checkbox',
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
?>
<!--<div class="main-content">-->
    <!-- main content start-->
    <div id="page-wrapper">
        <div class="main-page login-page ">
            <h2 class="title1">Login</h2>
            <div class="widget-shadow">
                <div class="login-body">
                    <?php echo form_open($this->uri->uri_string()); ?>
                        <?php echo form_input($login); ?>
                        <?php echo form_password($password); ?>
                        <div class="forgot-grid">
                            <?php echo form_checkbox($remember); ?>
                            <?php echo form_label('Remember me', $remember['id']); ?>
                            <div class="forgot">
                                <?php echo anchor('/auth/forgot_password/', 'Forgot password'); ?>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="registration">
                        <?php if ($show_captcha) { ?>
                            <table>
                                <?php if ($use_recaptcha) { ?>
                                    <tr>
                                        <td colspan="2">
                                            <div id="recaptcha_image"></div>
                                        </td>
                                    <td>
                                        <a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
                                        <div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
                                        <div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="recaptcha_only_if_image">Enter the words above</div>
                                        <div class="recaptcha_only_if_audio">Enter the numbers you hear</div>
                                    </td>
                                    <td><input type="text" id="recaptcha_response_field" name="recaptcha_response_field" /></td>
                                    <td style="color: red;"><?php echo form_error('recaptcha_response_field'); ?></td>
                                    <?php echo $recaptcha_html; ?>
                                </tr>
                            <?php } else { ?>
                                <tr>
                                    <td colspan="3">
                                        <p>Enter the code exactly as it appears:</p>
                                        <?php echo $captcha_html; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><?php echo form_label('Confirmation Code', $captcha['id']); ?></td>
                                    <td><?php echo form_input($captcha); ?></td>
                                    <td style="color: red;"><?php echo form_error($captcha['name']); ?></td>
                                </tr>
                            <?php } ?>
                            </table>
                        <?php } ?>
                    </div>
                    <?php echo form_submit('submit', 'Let me in'); ?>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
    <!--footer-->
    <div class="footer">
       <p>&copy; 2018 Glance Design Dashboard. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>		
    </div>
    <!--//footer-->
<!--	</div>-->
		
    <!--scrolling js-->
    <script src="<?= base_url('assets/js/jquery.nicescroll.js');?>"></script>
    <script src="<?= base_url('assets/js/scripts.js');?>"></script>
    <!--//scrolling js-->

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url('assets/js/bootstrap.js');?>"> </script>
    <!-- //Bootstrap Core JavaScript -->
   
</body>
</html>