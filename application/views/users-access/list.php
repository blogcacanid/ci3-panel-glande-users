<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- main content start-->
<div id="page-wrapper">
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
                    <?php 
                        $flashmessage = $this->session->flashdata('message');
                        echo ! empty($flashmessage) ? '<p>' . $flashmessage . '</p>': '';
                    ?>
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
                            <?php foreach($sSQL->result() as $row): ?>
                            <tr>
<!--<td>&nbsp;</td>-->
<td>
<?php
    $view = '<a data-toggle="modal" href="'.site_url($this->module_name.'/view/'.($row->id)).'" data-target="#myView'.$row->id.'" '
            . 'title="View record" >'
            . '<i class="glyphicon glyphicon-eye-open" ></i>'
            . '</a>'
        . '<div class="modal fade" id="myView'.($row->id).'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">'
            . '<div class="modal-dialog">'
                . '<div class="modal-content">'
                . '</div>'
            . '</div>'
        . '</div>';
    echo $view;
    $edit = '&nbsp;<a data-toggle="modal" href="'.site_url($this->module_name.'/edit-form/'.($row->id)).'" data-target="#myEdit'.($row->id).'" '
            . 'title="Edit record" >'
            . '<i class="glyphicon glyphicon-pencil" ></i>'
            . '</a>'
        . '<div class="modal fade" id="myEdit'.($row->id).'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">'
            . '<div class="modal-dialog modal-lg">'
                . '<div class="modal-content">'
                . '</div>'
            . '</div>'
        . '</div>';
    echo $edit;
    $delete = '<a data-toggle="modal" href="'.site_url($this->module_name.'/delete-form/'.($row->id)).'" data-target="#myDelete'.($row->id).'" '
            . 'title="Delete record" >'
            . '<i class="glyphicon glyphicon-trash" ></i>'
            . '</a>'
        . '<div class="modal fade" id="myDelete'.($row->id).'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">'
            . '<div class="modal-dialog">'
                . '<div class="modal-content">'
                . '</div>'
            . '</div>'
        . '</div>';
    echo $delete;
    
?>                                
</td>                                
                                <td><?php echo $row->username; ?></td>
                                <td><?php echo ($row->email);?></td>
                                <td><?php echo ($row->activated);?></td>
                                <td><?php echo ($row->banned);?></td>
                                <td><?php echo ($row->created);?></td>
                                <td><?php echo ($row->last_login);?></td>
                            </tr>
                            <?php endforeach ?>
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

</div>
