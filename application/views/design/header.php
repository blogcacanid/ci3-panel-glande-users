<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $this->apps->title; ?> | <?php echo $this->apps->project_code; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="<?= base_url('assets/css/bootstrap.css');?>" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="<?= base_url('assets/css/style.css');?>" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="<?= base_url('assets/css/font-awesome.css');?>" rel="stylesheet">
<!-- //font-awesome icons CSS-->

<!-- side nav css file -->
<link href="<?= base_url('assets/css/SidebarNav.min.css');?>" media='all' rel='stylesheet' type='text/css'/>
<!-- //side nav css file -->

 <!-- js-->
<script src="<?= base_url('assets/js/jquery-1.11.1.min.js');?>"></script>
<script src="<?= base_url('assets/js/modernizr.custom.js');?>"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts-->

<!-- chart -->
<script src="<?= base_url('assets/js/Chart.js');?>"></script>
<!-- //chart -->

<!-- Metis Menu -->
<script src="<?= base_url('assets/js/metisMenu.min.js');?>"></script>
<script src="<?= base_url('assets/js/custom.js');?>"></script>
<link href="<?= base_url('assets/css/custom.css');?>" rel="stylesheet">
<!--//Metis Menu -->
<style>
#chartdiv {
  width: 100%;
  height: 295px;
}
</style>
<!--pie-chart --><!-- index page sales reviews visitors pie chart -->
<script src="<?= base_url('assets/js/pie-chart.js');?>" type="text/javascript"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#2dde98',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#8e43e7',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ffc168',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });


        });

    </script>
<!-- //pie-chart --><!-- index page sales reviews visitors pie chart -->

        <!-- requried-jsfiles-for owl -->
                                        <link href="<?= base_url('assets/css/owl.carousel.css');?>" rel="stylesheet">
                                        <script src="<?= base_url('assets/js/owl.carousel.js');?>"></script>
                                                <script>
                                                        $(document).ready(function() {
                                                                $("#owl-demo").owlCarousel({
                                                                        items : 3,
                                                                        lazyLoad : true,
                                                                        autoPlay : true,
                                                                        pagination : true,
                                                                        nav:true,
                                                                });
                                                        });
                                                </script>
                                        <!-- //requried-jsfiles-for owl -->
</head>
<body class="cbp-spmenu-push">
        <div class="main-content">
        <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
                <!--left-fixed -navigation-->
                <aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <h1><a class="navbar-brand" href="index.html"><span class="fa fa-area-chart"></span> Glance<span class="dashboard_text">Design dashboard</span></a></h1>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
              <li class="header">MAIN NAVIGATION</li>
              <li class="treeview">
                <a href="<?= site_url('welcome');?>">
                <i class="fa fa-home"></i> <span>Welcome</span>
                </a>
              </li>
              <li class="treeview">
                <a href="<?= site_url('dashboard');?>">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
              </li>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
      </nav>
    </aside>
        </div>
                <!--left-fixed -navigation-->

                <!-- header-starts -->
                <div class="sticky-header header-section ">
                        <div class="header-left">
                                <!--toggle button start-->
                                <button id="showLeftPush"><i class="fa fa-bars"></i></button>
                                <!--toggle button end-->
                                <div class="clearfix"> </div>
                        </div>
                        <div class="header-right">



                                <div class="profile_details">
                                    <ul>
                                        <li class="dropdown profile_details_drop">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <div class="profile_img">
                                                        <span class="prfil-img"><img src="<?= base_url('assets/images/2.jpg');?>" alt=""> </span>
                                                        <div class="user-name">
                                                                <!--<p>Admin Name</p>!-->
                                                                <!--<span>Administrator</span>!-->
                                                                <p><?= ucwords($this->tank_auth->get_username()); ?></p>
                                                                <?php
                                                                    if ($this->tank_auth->is_admin()){
                                                                        echo '<span>Administrator</span>';
                                                                    }else{
                                                                        echo '<span>Default</span>';
                                                                    }
                                                                ?>
                                                        </div>
                                                        <i class="fa fa-angle-down lnr"></i>
                                                        <i class="fa fa-angle-up lnr"></i>
                                                        <div class="clearfix"></div>
                                                </div>
                                            </a>
                                            <ul class="dropdown-menu drp-mnu">
                                                    <li> <a href="<?=base_url('users-access');?>"><i class="fa fa-users"></i>Manage Users</a> </li>
                                                    <li> <a href="<?=base_url('profile');?>"><i class="fa fa-suitcase"></i> Profile</a> </li>
                                                    <li> <a href="<?=base_url('auth/logout');?>"><i class="fa fa-sign-out"></i> Logout</a> </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="clearfix"> </div>
                        </div>
                        <div class="clearfix"> </div>
                </div>
                <!-- //header-ends -->
<!-- main content start-->
<div id="page-wrapper">

