Hi, <strong><?php echo $username; ?></strong>! You are logged in now. <?php echo anchor('/auth/logout/', 'Logout'); ?>
<br />
Group : 
<?php
    if ($this->tank_auth->is_admin()){
        echo 'Admin';
    }else{
        echo 'Guest';
    }
