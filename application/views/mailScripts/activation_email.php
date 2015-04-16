<h3>Hello, <?php echo $last_name;?></h3>
<span>User Id: <?php echo $to_address;?></span>
<br/>
<span>Password : <?php echo $password;?></span>
<br/>
<span>
    To activate your account click the link bellow:
</span>
<br/>
<span>
    Activation Link: <a href="<?php echo base_url();?>index.php/login_controller/updateUserStatus/<?php echo $user_id;?>"><?php echo base_url();?>login_controller/updateUserStatus/<?php echo $user_id;?></a>
</span>
<h3>Thank you To Join our community !</h3>
