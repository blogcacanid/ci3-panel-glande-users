<?php
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'size'	=> 30,
);
$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> set_value('email'),
	'maxlength'	=> 80,
	'size'	=> 30,
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
            <h3 class="hdg"><i class="fa fa-envelope-o"></i>&nbsp;<?php echo ucwords($pagetitle);?></h3>
            <hr class="widget-separator">
            <?php echo form_open($this->uri->uri_string()); ?>
            <table class="table" style="font-style: Calibri;font-size:13px">
                    <tr>
                            <td><?php echo form_label('Password', $password['id']); ?></td>
                            <td><?php echo form_password($password); ?></td>
                            <td style="color: red;"><?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?></td>
                    </tr>
                    <tr>
                            <td><?php echo form_label('New email address', $email['id']); ?></td>
                            <td><?php echo form_input($email); ?></td>
                            <td style="color: red;"><?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?></td>
                    </tr>
            </table>
            <br/>
            <br/>
            <a href="<?=base_url('profile');?>" class = "btn btn-sm btn-dark"><i class="fa fa-reply"></i> Back</a>
            <?php echo form_submit('change', 'Send confirmation email'); ?>
            <?php echo form_close(); ?>
            <br/>
            <br/>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

