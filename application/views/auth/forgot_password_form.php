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
);
if ($this->config->item('use_username', 'tank_auth')) {
	$login_label = 'Email or login';
} else {
	$login_label = 'Email';
}
?>
<!--<div class="main-content">-->
    <!-- main content start-->
    <div id="page-wrapper">
        <div class="main-page login-page ">
            <h2 class="title1">Forgot Password</h2>
            <div class="widget-shadow">
                <div class="login-body">
                    <?php echo form_open($this->uri->uri_string()); ?>
                        <table>
                            <tr>
                                <td><?php echo form_label($login_label, $login['id']); ?></td>
                                <td><?php echo form_input($login); ?></td>
                                <td style="color: red;"><?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?></td>
                            </tr>
                        </table>
                        <?php echo form_submit('reset', 'Get a new password'); ?>
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