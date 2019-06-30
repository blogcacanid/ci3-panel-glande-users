<!-- main content start-->
<div id="page-wrapper">
    <div class="main-page">
        <div class="agile3-grids">
		
            <div class="grid_3 grid_4 w3_agileits_icons_page">
                <div class="icons">
                    <h2 class="agileits-icons-title">Welcome</h2>
                    <section id="new">
                        <h3 class="page-header page-header icon-subheading"><?php echo $this->apps->title; ?></h3>	
                        <p><?php echo $this->apps->lorem_1; ?></p>
                        <p><em>"<?php echo $this->apps->lorem_2; ?>"</em></p>
                        <p><?php echo $this->apps->lorem_3; ?></p>
                        <p><?php echo $this->apps->lorem_4; ?></p>
                    </section>
                    <section id="new">
                	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
                    </section>
                </div>
            </div>
	</div>
        <!-- script-for sticky-nav -->
        <script>
        $(document).ready(function() {
                 var navoffeset=$(".header-main").offset().top;
                 $(window).scroll(function(){
                        var scrollpos=$(window).scrollTop(); 
                        if(scrollpos >=navoffeset){
                                $(".header-main").addClass("fixed");
                        }else{
                                $(".header-main").removeClass("fixed");
                        }
                 });

        });
        </script>
        <!-- /script-for sticky-nav -->
        <!--inner block start here-->
        <div class="inner-block">

        </div>
        <!--inner block end here-->
    </div>
</div>
