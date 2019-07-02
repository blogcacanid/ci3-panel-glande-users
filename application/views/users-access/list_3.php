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
                    <li><a href="#"><i class="fa fa-group"></i>Groups</a></li>
                    <li><a href="#"><i class="fa fa-key"></i>Permissions</a></li>
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

<script type="text/javascript">
function toggle_visibility(id) {
    var e = document.getElementById(id);
    if(e.style.display == 'block')
        e.style.display = 'none';
    else
        e.style.display = 'block';
}

$(document).ready(function() {
    $('#id_app').multiselect();
});

function show_search(){
    if(document.getElementById('search').style.display == 'none'){
        document.getElementById('search').style.display = 'block';
//        document.getElementById('a_search').style.display = 'none';
    }else{
        document.getElementById('search').style.display = 'none';
    }
}

function delete_record(id){
    if(confirm('Are you sure delete this record?')){
        // ajax delete data to database
        $.ajax({
            url : "<?= site_url('users-access/ajax-delete')?>/"+id,
            data: {'<?php echo $this->security->get_csrf_token_name(); ?>':'<?php echo $this->security->get_csrf_hash(); ?>'},
            type: "POST",
            dataType: "JSON",
            success: function(data){
                //if success reload ajax table
                //$('#modal_form').modal('hide');
//                reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown){
                alert('Error deleting data');
            }
        });
    }
}


</script>

<!-- Bootstrap modal edit -->
<div class="modal fade" id="modal_form_edit" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Usersaccess Form</h4>
            </div>
            <div class="modal-body form" style="font-style: Calibri;font-size:10px"> 
                <form action="#" id="form_edit" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Username</label>
                            <div class="col-md-9">
                                <input name="username" placeholder="username" class="form-control input-sm" type="text" required="">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Email</label>
                            <div class="col-md-9">
                                <input name="email" placeholder="email" class="form-control input-sm" type="text" required="">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Activated</label>
                            <div class="col-md-9">
                                <?//= combo_activated('activated','','','required');?>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Banned</label>
                            <div class="col-md-9">
                                <?//= combo_banned('banned','','','required');?>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">App</label>
                            <div class="col-md-9">
                                <?//= combo_db('db51','app','id_app','name','asc','id_app',set_value('id_app'));?>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Userlevel</label>
                            <div class="col-md-9">
                                <?//= combo_levelname('userlevelid','','','required');?>
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="update()" class="btn btn-primary btn-sm">Save</button>
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal edit -->
