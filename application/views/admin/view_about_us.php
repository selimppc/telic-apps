<div>
<table style="font-size:12px; color: #666; border: 1px solid #ccc;">
    <tr>
        <td>Content ID</td>
        <td>Content Title</td>
        <td> Content Description</td>
        <td> Content Image</td>
        <td>Action</td>
    </tr>
    <?php
        foreach ($contentInfo as $values)
        {
    ?>
    <tr>
        <td><?php echo $values->content_id;?></td>
        <td><?php echo $values->content_title;?></td>
        <td><?php echo $values->content_description;?></td>
        <td><img style="border: 1px solid #ccc; padding: 3px;" src="<?php echo base_url();?><?php echo $values->content_image?>" width="50" height="50" /></td>
        
        <td>
            <a href="<?php echo base_url();?>super_admin/edit_about_us/<?php echo $values->content_id;?>">Edit &nbsp;</a>
            <a href="<?php echo base_url();?>super_admin/delete_about_us/<?php echo $values->content_id;?>" onclick=" return checkDelete();">Delete</a>
        </td>
        
    </tr>
    <?php } ?>
</table>
    </div>

<?php /*
<div class="pagination">
    <?php echo $this->pagination->create_links(); ?>
</div>
 * 
 * 
 */ ?>