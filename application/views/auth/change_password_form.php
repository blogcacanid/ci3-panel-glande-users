<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
$old_password = array(
	'name'	=> 'old_password',
	'id'	=> 'old_password',
	'value' => set_value('old_password'),
	'size' 	=> 30,
);
$new_password = array(
	'name'	=> 'new_password',
	'id'	=> 'new_password',
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
);
$confirm_new_password = array(
	'name'	=> 'confirm_new_password',
	'id'	=> 'confirm_new_password',
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size' 	=> 30,
);
?>

<div class="main-page">
    <div class="col-md-12">
        <div class="col-md-4 chart-layer1-left"> 
            <div class="user-marorm">
                <div class="malorum-top"></div>
                <div class="malorm-bottom">
                    <span class="malorum-pro"> </span>
                    <h2><?= ucwords($this->tank_auth->get_username()); ?></h2>
                </div>
           </div>
        </div>
        <div class="col-md-8 widget-shadow">
            <br/>
            <h3 class="hdg"><i class="fa fa-user-secret"></i>&nbsp;<?php echo ucwords($pagetitle);?></h3>
            <hr class="widget-separator">
            <?php echo form_open($this->uri->uri_string()); ?>
            <table class="table" style="font-style: Calibri;font-size:13px">
                <tr>
                    <td><?php echo form_label('Old Password', $old_password['id']); ?></td>
                    <td><?php echo form_password($old_password); ?></td>
                    <td style="color: red;"><?php echo form_error($old_password['name']); ?><?php echo isset($errors[$old_password['name']])?$errors[$old_password['name']]:''; ?></td>
                </tr>
                <tr>
                    <td><?php echo form_label('New Password', $new_password['id']); ?></td>
                    <td><?php echo form_password($new_password); ?></td>
                    <td style="color: red;"><?php echo form_error($new_password['name']); ?><?php echo isset($errors[$new_password['name']])?$errors[$new_password['name']]:''; ?></td>
                </tr>
                <tr>
                    <td><?php echo form_label('Confirm New Password', $confirm_new_password['id']); ?></td>
                    <td><?php echo form_password($confirm_new_password); ?></td>
                    <td style="color: red;"><?php echo form_error($confirm_new_password['name']); ?><?php echo isset($errors[$confirm_new_password['name']])?$errors[$confirm_new_password['name']]:''; ?></td>
                </tr>
            </table>
            <br/>
            <br/>
            <a href="<?=base_url('profile');?>" class = "btn btn-sm btn-dark"><i class="fa fa-reply"></i> Back</a>
            <?php echo form_submit('change', 'Change Password'); ?>
            <?php echo form_close(); ?>
            <br/>
            <br/>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

        
        
        
        

