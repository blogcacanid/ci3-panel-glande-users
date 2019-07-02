<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<form action="#" id="form_edit" role="form" >
<input type="hidden" value="<?= ($qRecord->id); ?>" name="id"/> 
<div class="modal-header bg-alert">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3 class="modal-title"><i class="<?php echo $list_icon;?>"></i> <?php echo ucwords($pagetitle);?></h3>
</div>
<!--<div class="modal-body">-->
<div class="box-body table-responsive" style="font-style: Calibri;font-size:10px"> 
    <div class="col-md-12">
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Username</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                    </div>
                    <input type="text" name="username" class="form-control input-sm" value="<?php echo $qRecord->username; ?>" disabled="" >
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Email</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <input type="text" name="email" class="form-control input-sm" value="<?php echo $qRecord->email; ?>" >
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Created</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" name="created" class="form-control input-sm" value="<?php echo $qRecord->created; ?>" disabled="" >
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-12">
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Activated</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-check-circle"></i>
                    </div>
                    <input type="text" name="activated" class="form-control input-sm" value="<?= $qRecord->activated;?>" >
                    <span class="help-block"></span>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Banned</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-check-square"></i>
                    </div>
                    <input type="text" name="banned" class="form-control input-sm" value="<?= $qRecord->banned;?>" >
                    <span class="help-block"></span>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Ban Reasson</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-tag"></i>
                    </div>
                    <input type="text" name="ban_reason" class="form-control input-sm" value="<?php echo $qRecord->ban_reason; ?>" disabled="" >
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-12">
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">New Password Key</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-key"></i>
                    </div>
                    <input type="text" name="new_password_key" class="form-control input-sm" value="<?php echo $qRecord->new_password_key; ?>" disabled="" >
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">New Password Requested</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-keyboard-o"></i>
                    </div>
                    <input type="text" name="new_password_requested" class="form-control input-sm" value="<?php echo $qRecord->new_password_requested; ?>" disabled="" >
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">New Email</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-envelope-o"></i>
                    </div>
                    <input type="text" name="new_email" class="form-control input-sm" value="<?php echo $qRecord->new_email; ?>" disabled="" >
                </div>
            </div>
        </div>
    </div>

    
    <div class="col-md-12">
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">New Email Key</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-terminal"></i>
                    </div>
                    <input type="text" name="new_email_key" class="form-control input-sm" value="<?php echo $qRecord->new_email_key; ?>" disabled="" >
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Last IP</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-desktop"></i>
                    </div>
                    <input type="text" name="last_ip" class="form-control input-sm" value="<?php echo $qRecord->last_ip; ?>" disabled="" >
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Last Login</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-clock-o"></i>
                    </div>
                    <input type="text" name="last_login" class="form-control input-sm" value="<?php echo $qRecord->last_login; ?>" disabled="" >
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-12">
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Modified</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-clock-o"></i>
                    </div>
                    <input type="text" name="modified" class="form-control input-sm" value="<?php echo $qRecord->modified; ?>" disabled="" >
                </div>
            </div>
        </div>
    </div>

</div>
<div class="modal-footer">
    <div class="form-group">
        <p style="font-size:16px;color:orange;">Are your sure edit this record ?</p>
        <div class="btn-group">
            <button type="button" id="btnEdit" onclick="edit_record()" class="btn btn-warning btn-sm"><i class="fa fa-save"></i> Update</button>
            <button type="button" class="btn btn-default btn-sm" data-dismiss="modal"><i class="fa fa-remove"></i> Close</button>
        </div>
    </div>
</div>
</form>

<script type="text/javascript">
    function edit_record(){
        $('#btnEdit').text('Please wait...'); //change button text
        $('#btnEdit').attr('disabled',true); //set button disable 
        $('.form_edit').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string
        // ajax adding data to database
        $.ajax({
            url : "<?= site_url($this->module_name.'/edit-record')?>",
            type: "POST",
            data: $('#form_edit').serialize(),
            dataType: "JSON",
            success: function(data){
                if(data.status) { //if success close modal and reload ajax table
                    $('#myEdit').modal('hide');
                    window.location = "<?= $this->session->userdata('EW_BACK_URL'.$this->module_menu);?>";
    //                reload_table();
                }else{
                    for (var i = 0; i < data.inputerror.length; i++){
                        $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                        $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                    }
                    $('#btnEdit').attr('disabled',false); //set button enable 
                }
                $('#btnEdit').text('Update'); //change button text
            },
            error: function (jqXHR, textStatus, errorThrown){
                alert('Error adding / update data');
                $('#btnEdit').text('Update'); //change button text
                $('#btnEdit').attr('disabled',false); //set button enable 
            }
        });
    }
</script>

