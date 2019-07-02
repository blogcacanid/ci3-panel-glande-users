<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<form id="form-delete" method="POST" action="<?= $form_delete;?>" role="form" >
<input type="hidden" value="<?= ($qRecord->id); ?>" name="id"/> 
<div class="modal-header bg-danger">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3 class="modal-title"><i class="<?php echo $list_icon;?>"></i> <?php echo ucwords($pagetitle);?></h3>
</div>
<div class="modal-body">
    <div class="panel panel-danger" style="font-style: Calibri;font-size:10px"> 
        <div class="table-responsive">
            <table class="table"> 
                <tr>
                    <th width="120px">Username</th>
                    <td><?= $qRecord->username; ?></td>
                    <th width="120px">Email</th>
                    <td><?= $qRecord->email; ?></td>
                </tr>
                <tr>
                    <th>Created</th>
                    <td><?= $qRecord->created; ?></td>
                    <th>Activated</th>
                    <td><?= $qRecord->activated; ?></td>
                </tr>
                <tr>
                    <th>Banned</th>
                    <td><?= $qRecord->banned; ?></td>
                    <th>Ban Reason</th>
                    <td><?= $qRecord->ban_reason; ?></td>
                </tr>
                <tr>
                    <th>New Password Key</th>
                    <td><?= $qRecord->new_password_key; ?></td>
                    <th>New Password Requested</th>
                    <td><?= $qRecord->new_password_requested; ?></td>
                </tr>
                <tr>
                    <th>New Email</th>
                    <td><?= $qRecord->new_email; ?></td>
                    <th>New Email Key</th>
                    <td><?= $qRecord->new_email_key; ?></td>
                </tr>
                <tr>
                    <th>Last IP</th>
                    <td><?= $qRecord->last_ip; ?></td>
                    <th>Last Login</th>
                    <td><?= $qRecord->last_login; ?></td>
                </tr>
                <tr>
                    <th>Modified</th>
                    <td><?= $qRecord->modified; ?></td>
                    <th>Group</th>
                    <td><?= $qRecord->group_id; ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<div class="modal-footer">
    <div class="form-group">
        <p style="font-size:16px;color:red;">Are your sure delete this record ?</p>
        <div class="btn-group">
            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>
            <button type="button" class="btn btn-default btn-sm" data-dismiss="modal"><i class="fa fa-remove"></i> Close</button>
        </div>
    </div>
</div>
</form>

