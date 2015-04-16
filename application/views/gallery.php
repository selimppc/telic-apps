<h1>Gallery</h1>


<ul class="hoverbox">
    
    <?php

    foreach ($galleryInfo as $values)
    {
    ?>
    
    <li>
        <a href="#"><img src="<?php echo base_url();?><?php echo $values->gallery_image ?>" /><img src="<?php echo base_url();?><?php echo $values->gallery_image ?>" class="preview" /></a>
    </li>
    <?php }  ?>
</ul>


