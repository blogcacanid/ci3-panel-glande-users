<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="main-page">
    <div class="col-md-12">
        <div class="col-md-4 chart-layer1-left"> 
            <div class="user-marorm">
                <div class="malorum-top"></div>
                <div class="malorm-bottom">
                    <span class="malorum-pro"> </span>
                    <h2><?= ucwords($this->tank_auth->get_username()); ?></h2>
                    <ul class="malorum-icons">
                        <li>
                            <h4><a href="#"><span class="label label-default">Change Avatar</span></a></h4>
                        </li>
                    </ul>
                </div>
           </div>
        </div>
        <div class="col-md-8 widget-shadow">
            <br/>
            <h3 class="hdg"><i class="fa fa-suitcase"></i>&nbsp;<?php echo ucwords($pagetitle);?></h3>
            <hr class="widget-separator">

            <table class="table" style="font-style: Calibri;font-size:13px">
                <tbody>
                    <tr>
                        <td><b>Username</b></td>
                        <td><?= $qRecord->username; ?></td>
                    </tr>
                    <tr>
                        <td><b>Email</b></td>
                        <td><?= $qRecord->email; ?></td>
                    </tr>
                    <tr>
                        <td><b>Last IP</b></td>
                        <td><?= $qRecord->last_ip; ?></td>
                    </tr>
                    <tr>
                        <td><b>Last Login</b></td>
                        <td><?= date("d M Y H:i:s",strtotime($qRecord->last_login)); ?></td>
                    </tr>
                    <tr>
                        <td><b>Member Since</b></td>
                        <td><?= date("d M Y",strtotime($qRecord->created)); ?></td>
                    </tr>
                    <tr>
                        <td><b>Group</b></td>
                        <td><?= $qRecord->group_id; ?></td>
                    </tr>
                </tbody>
            </table>
            <div class="col-md-8">
                <a href="<?=base_url('auth/change_password');?>" class = "btn btn-primary"><i class="fa fa-key"></i> Change Password</a>
                <a href="<?=base_url('auth/change_email');?>" class = "btn btn-primary"><i class="fa fa-envelope-o"></i> Change Email</a>
            </div>
            <br/>
            <br/>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
