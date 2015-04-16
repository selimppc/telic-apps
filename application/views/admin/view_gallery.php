<div>
<table style="font-size:12px; color: #666; border: 1px solid #ccc;">
    <tr>
        <td width="100">Gallery ID</td>
        <td width="200">Gallery Name</td>
        <td width="200">Gallery Image</td>
        <td width="100">Action</td>
    </tr>
    <?php
        foreach ($galleryInfo as $values)
        {
    ?>
    <tr>
        <td><?php echo $values->gallery_id;?></td>
        <td><?php echo $values->gallery_name;?></td>
        <td><img style="border: 1px solid #ccc; padding: 3px;" src="<?php echo base_url(); ?><?php echo $values->gallery_image;?>" width="100" height="80"/></td>
        
        <td>
            <a href="<?php echo base_url();?>super_admin/edit_gallery/<?php echo $values->gallery_id;?>">Edit &nbsp;</a>
            <a href="<?php echo base_url();?>super_admin/delete_gallery/<?php echo $values->gallery_id;?>" onclick=" return checkDelete();">Delete</a>
        </td>
        
    </tr>
    <?php } ?>
</table>
    </div>


<div class="pagination">
    <?php echo $this->pagination->create_links(); ?>
</div>
