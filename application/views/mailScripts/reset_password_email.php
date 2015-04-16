<h3>Hello, <?php echo $last_name;?></h3>
<span>User Id: <?php echo $to_address;?></span>
<br/>

<span>
    To reset your account click the link bellow:
</span>
<br/>
<br/>
<span style="background: #F3F3F3; padding: 10px;">
    <a href="<?php echo base_url();?>index.php/login_controller/resetPassword/<?php echo $user_id;?>"> Reset Password </a>
</span>
<h3>Thank you To Join our community !</h3>
