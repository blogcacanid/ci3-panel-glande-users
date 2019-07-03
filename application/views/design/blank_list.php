<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <div class="main-page">
        <div class="col-md-4 compose-left">
            <div class="folder widget-shadow">
                <ul>
                    <li class="head"><i class="fa fa-users" aria-hidden="true"></i>Manage Users</li>
                    <li><a href="<?= site_url($halaman);?>"><i class="fa fa-user"></i>Users</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-8 compose-right widget-shadow">
            <div class="panel-default">
                <div class="panel-heading">
                    <i class="fa fa-user"></i>&nbsp;<?php echo ucwords($pagetitle);?> 
                    <div class="box-tools pull-right">
                        <a href="<?= site_url($halaman);?>" class="btn btn-default btn-sm" title="Refresh"><i class="glyphicon glyphicon-refresh"></i></a>
                    </div>
                </div>
                <div class="inbox-page" style="font-style: Calibri;font-size:12px">
                    <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead class="bg-blue-gradient">
                            <tr>
                                <th>Action</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Activated</th>
                                <th>Banned</th>
                                <th>Date Created</th>
                                <th>Last Login</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>&nbsp;</td>                                
                                <td>&nbsp;</td>                                
                                <td>&nbsp;</td>                                
                                <td>&nbsp;</td>                                
                                <td>&nbsp;</td>                                
                                <td>&nbsp;</td>                                
                                <td>&nbsp;</td>                                
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Action</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Activated</th>
                                <th>Banned</th>
                                <th>Date Created</th>
                                <th>Last Login</th>
                            </tr>
                        </tfoot>
                    </table>
                    <section id="new">
                	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds.</p>
                    </section>
                </div>
            </div>

        </div>
        <div class="clearfix"> </div>	
    </div>
