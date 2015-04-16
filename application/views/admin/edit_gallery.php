
<form name="edit_form" action="<?php echo base_url();?>super_admin/update_gallery" method="post" enctype="multipart/form-data">
<table border="0">
    <tr>
        <td>Gallery Name :</td>
        <td>
            <input class="border" type="text" name="gallery_name" required="1" value="<?php echo $result->gallery_name;?>" />
            <input type="hidden" name="gallery_id" value="<?php echo $result->gallery_id;?>" />
        </td>
    </tr>


    <tr>
        <td>Gallery Image : </td>
         <td>
             <input class="border" type="file" name="gallery_image" required="1">               
             <img style="border: 1px solid #ccc; padding: 3px;" src="<?php echo base_url()?><?php echo $result->gallery_image; ?>"  width="100" height="100">
         </td>
         
    </tr>
    <tr>
        <td>&nbsp;&nbsp;</td>
        
        <td><?php echo $result->gallery_id;?><input type="submit" name="btn" value="Save" /></td>
    </tr>
</table>
</form>
<script type="text/javascript">
    document.forms['edit_form'].elements['category_id'].value ='<?php echo $result->category_id;?>';
</script>
