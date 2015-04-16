<?php

    foreach ($result as $values)
    {
?>
<div id="home_message_content">
    <div class="home_message_img">
        <img src="<?php echo base_url(); ?><?php echo $values->content_image ;?>" width="120" height="120" />
    </div>
    
    <div class="home_message_content_right">
        <div class="home_message_title"> <h2 class="home_title"> <a href="<?php echo base_url();?>welcome/content_detail/<?php echo $values->content_id;?>"> <?php echo $values->content_title; ?> </a></h2> </div>
        
        <div class="home_message_text"> 
            <?php echo $values->content_description; ?>
        </div>
        
        <div class="home_message_readmore"><span class="read_more"><a href="<?php echo base_url();?>welcome/content_detail/<?php echo $values->content_id;?>">read more </a></span></div>
    </div>
</div>
<?php }  ?>
<div class="pagination">
    <?php echo $this->pagination->create_links(); ?>
</div>