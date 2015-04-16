<div id="content_detail">
            <?php
            foreach ($result as $values) {
                ?>
    <div class="content_image">
        <img src="<?php echo base_url(); ?><?php echo $values->content_image; ?>" />
        
        <p>Share this :</p>
    </div>
    
    
    <div class="product_description">
        <h3 style="color: #006699;"><?php echo $values->content_title ?></h3> <br />
        
        <p><?php echo $values->content_description; ?></p>
        
        
        
    </div>
    
            <?php } ?>
    
</div>