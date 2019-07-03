<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <div class="main-page">
        <div class="col-md-pull-0 widget-shadow">
            <div class="panel-default">
                <div class="panel-heading">
                    <i class="fa fa-suitcase"></i>&nbsp;<?php echo ucwords($pagetitle);?> 
                    <div class="box-tools pull-right">
                        <a href="<?= site_url($halaman);?>" class="btn btn-default btn-sm" title="Refresh"><i class="glyphicon glyphicon-refresh"></i></a>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="col-md-4">
                        <h3 class="page-header page-header icon-subheading"><?php echo $this->apps->title; ?></h3>
                        <div class="col-md-8">
                            <?php echo $this->apps->lorem_2; ?>
                        </div>
                        <div class="col-md-8">
                            <?php echo $this->apps->lorem_3; ?>
                        </div>
<!--                        <span class="prfil-img"><img src="<//?= base_url('assets/images/2.jpg');?>" alt=""> </span>-->
                    </div>
                    <h3 class="page-header page-header icon-subheading"><?php echo $this->apps->title; ?></h3>
                    <div class="col-md-8">
                        <?php echo $this->apps->lorem_1; ?>
                    </div>
                </div>
                <div class="inbox-page" style="font-style: Calibri;font-size:12px">
                    <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <tr><td>&nbsp;</td></tr>
                    </table>
                </div>
            </div>
            <section id="new" style="font-style: Calibri;font-size:12px">
                <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds.</p>
            </section>

        </div>
        <div class="clearfix"> </div>	
    </div>
