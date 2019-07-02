<?php
if ($use_username) {
    $username = array(
        'name'          => 'username',
        'id'            => 'username',
        'value'         => set_value('username'),
        'maxlength'	=> $this->config->item('username_max_length', 'tank_auth'),
        'size'          => 30,
        'class'         => 'form-control input-sm',
        'placeholder'   => 'Username',
    );
}
$email = array(
    'name'          => 'email',
    'id'            => 'email',
    'value'         => set_value('email'),
    'maxlength'     => 80,
    'size'          => 30,
    'class'         => 'form-control input-sm',
    'placeholder'   => 'Email',
);
$app = array(
    'name'          => 'app',
    'id'            => 'app',
    'value'         => set_value('app'),
//    'maxlength'     => 80,
//    'size'          => 30,
    'disabled'      => "",
    'class'         => 'form-control input-sm',
    'placeholder'   => 'Please select app',
);
$userlevel = array(
    'name'          => 'userlevel',
    'id'            => 'userlevel',
    'value'         => set_value('userlevel'),
//    'maxlength'     => 80,
//    'size'          => 30,
    'disabled'      => "",
    'class'         => 'form-control input-sm',
    'placeholder'   => 'Please select user level',
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
?>
<div class="row">
    <div class="col-md-8">
        <?php echo form_open($this->uri->uri_string()); ?>
        <div class="box box-success box-solid">
            <div class="box-header with-border">
                <h4 class="box-title"><i class="<?php echo $list_icon;?>"></i>&nbsp;<?php echo ucwords($pagetitle);?> </h4>
                <div class="box-tools pull-right">
                    <a href="<?= site_url('auth/add-user');?>" class="btn btn-default btn-sm" title="Refresh"><i class="glyphicon glyphicon-refresh"></i></a>
                </div>
            </div>

            <div class="box-body table-responsive" style="font-style: Calibri;font-size:10px"> 
                <div class="login-box-body">

                    <div class="col-xs-6">
                    <?php if ($use_username) { ?>
                        <div class="form-group">
                            <label class="control-label"><?php echo form_label('Username', $username['id']); ?></label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <?php echo form_input($username); ?>
                                <div style="color: red;"><?php echo form_error($username['name']); ?><?php echo isset($errors[$username['name']])?$errors[$username['name']]:''; ?></div>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label class="control-label"><?php echo form_label('Email Address', $email['id']); ?></label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <?php echo form_input($email); ?>
                                <div style="color: red;"><?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label class="control-label"><?php echo form_label('App', $app['id']); ?></label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-list-alt"></i>
                                </div>
                                <input type="hidden" class="form-control input-sm" name="id_app" id="id_app" value="<?php set_value('id_app');?>" />
                                <?php echo form_input($app); ?>
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModalApp" title="Lookup App" ><i class="fa fa-search"></i></button>
                                </div>
                                <div style="color: red;"><?php echo form_error($app['name']); ?><?php echo isset($errors[$app['name']])?$errors[$app['name']]:''; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label class="control-label"><?php echo form_label('Userlevel', $userlevel['id']); ?></label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-sitemap"></i>
                                </div>
                                <input type="hidden" class="form-control input-sm" name="userlevelid" id="userlevelid" value="<?php set_value('userlevelid');?>" />
                                <?php echo form_input($userlevel); ?>
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModalUserlevel" title="Lookup User Level" ><i class="fa fa-search"></i></button>
                                </div>
                                <div style="color: red;"><?php echo form_error($userlevel['name']); ?><?php echo isset($errors[$userlevel['name']])?$errors[$userlevel['name']]:''; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label class="control-label"><?php echo form_label('Prefix'); ?></label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-unlock"></i>
                                </div>
                                <input type="text" readonly class="form-control input-sm" name="prefix" id="prefix"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="btn-group">
                    <?php echo form_submit('add-user', 'Save', "class='btn btn-success btn-sm'"); ?>
                    <?php echo anchor('users-access', 'Back',array('class' => 'btn btn-default btn-sm')); ?>
                </div>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>


    <div class="col-md-4">
        <div class="box box-primary box-solid">
            <div class="box-header with-border">
                <h4 class="box-title"><i class="fa fa-info-circle"></i>&nbsp;Guide</h4>
            </div>

            <div class="box-body table-responsive" style="font-style: Calibri;font-size:10px"> 
                <b>Username : </b>Harus unik, misalnya <b>support_mcd</b><br />
                <i>Disarankan diakhir nama user diberi <b>_namadomain</b> supaya menjadi unik.</i><br /><br />
                <b>Email : </b>Harus unik sesuai dengan format email, misalnya <b>support@mcd.co.id</b><br /><br />
                <b>App : </b>Silahkan dipilih dari combo lookup App.<br /><br />
                <b>Userlevel : </b>Silahkan dipilih dari combo lookup Userlevel.<br />
                <br /><br />
                <b>NOTE : </b><br />
                1. Jika <b>loockup App</b> masih kosong, silahkan input terlebih dahulu dari menu 'Master Data -> App'.<br />
                2. Jika <b>loockup Userlevel</b> masih kosong, silahkan input terlebih dahulu dari menu 'Admin Menu -> User Level'.<br />
                3. Jika <b>user menggunakan app M-SAKU</b> maka prefix harus diisi.
            </div>
        </div>
    </div>
</div>    
<div style="font-style: Calibri;font-size:10px"> 
    <?= '<b>Page rendered in : </b><em>'.$this->benchmark->elapsed_time().' second.</em> ';?>
    <?= '<b>Memori usage : </b><em>'.$this->benchmark->memory_usage().'</em>';?>
</div>

<script type="text/javascript">
// tabel lookup App
$(function () {
    $("#lookupApp").dataTable({
        "processing": true, //Feature control the processing indicator.
//        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "bDestroy": true, // cannot reinitialise data table
        "order": [], //Initial no order.
    });
});
// jika dipilih, kode group akan masuk ke input dan modal di tutup
$(document).on('click', '.pilihApp', function (e) {
    document.getElementById("id_app").value = $(this).attr('data-id_app');
    document.getElementById("app").value = $(this).attr('data-app');
    if($(this).attr('data-id_app') == 1){
        // $('#prefix').attr('required', true);
        $('#prefix').attr('readonly', false);
    } else{
        $('#prefix').removeAttr('required');
        $('#prefix').attr('readonly', true);
    }
    $('#myModalApp').modal('hide');
});

// tabel lookup Userlevel
$(function () {
    $("#lookupUserlevel").dataTable({
        "processing": true, //Feature control the processing indicator.
//        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "bDestroy": true, // cannot reinitialise data table
        "order": [], //Initial no order.
    });
});
// jika dipilih, kode group akan masuk ke input dan modal di tutup
$(document).on('click', '.pilihUserlevel', function (e) {
    document.getElementById("userlevelid").value = $(this).attr('data-userlevelid');
    document.getElementById("userlevel").value = $(this).attr('data-userlevel');
    $('#myModalUserlevel').modal('hide');
});



</script>


<!-- Modal lookup App -->
<div class="modal fade" id="myModalApp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Lookup App</h4>
            </div>
            <div class="modal-body" style="font-style: Calibri;font-size:10px"> 
                <table id="lookupApp" class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>App*</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($qApp->result() as $row){ ?>
                            <tr class="pilihApp" data-id_app="<?= $row->id_app; ?>" data-app="<?= ucname($row->name); ?>">
                                <td><?= ucname($row->app); ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>  
            </div>
        </div>
    </div>
</div>
<!-- End Modal lookup App-->


<!-- Modal lookup Userlevel -->
<div class="modal fade" id="myModalUserlevel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Lookup Userlevel</h4>
            </div>
            <div class="modal-body" style="font-style: Calibri;font-size:10px"> 
                <table id="lookupApp" class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>User level name*</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($qUserlevel->result() as $row){ ?>
                            <tr class="pilihUserlevel" data-userlevelid="<?= $row->userlevelid; ?>" data-userlevel="<?= ucname($row->userlevelname); ?>">
                                <td><?= ucname($row->userlevelname); ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>  
            </div>
        </div>
    </div>
</div>
<!-- End Modal lookup Userlevel-->

