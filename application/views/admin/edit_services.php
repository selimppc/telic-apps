
<form name="edit_form" action="<?php echo base_url();?>super_admin/update_services" method="post" enctype="multipart/form-data">
<table border="0">
    <tr>
        <td>Content Title :</td>
        <td>
            <input class="border" type="text" name="content_title" required="1" value="<?php echo $result->content_title;?>" />
            <input type="hidden" name="category_id" value="<?php echo $result->category_id;?>" />
        </td>
    </tr>
    <tr>
            <td>Content Category :</td>
            <td>
                <select class="border" id="category_id" name="category_id" required="1" value="<?php echo $result->category_id;?>">
                    <option value=" ">Select Category.....</option>
                    <?php
                        foreach($categoryInfo as $values)
                        {
                    ?>
                    <option value="<?php echo $values->category_id?>"><?php echo $values->category_name?></option>
                    <?php } ?>
                </select> 
            </td>
        </tr>

    <tr>
        <td>Content Description :</td>
        <td>
            <textarea name="content_description" id="ck_editor" >
                <?php echo $result->content_description;?>
            </textarea>
                <?php echo display_ckeditor($check_editor['ckeditor']); ?>
        </td>
    </tr>
    <tr>
        <td>Content Image : </td>
         <td>
             <input class="border" type="file" name="content_image" hidden="hidden">               
                <img src="<?php echo base_url()?><?php echo $result->content_image; ?>"  width="100" height="100">
         </td>
         
    </tr>
    <tr>
        <td>&nbsp;&nbsp;</td>
        
        <td><?php echo $result->category_id;?><input type="submit" name="btn" value="Save" /></td>
    </tr>
</table>
</form>
<script type="text/javascript">
    document.forms['edit_form'].elements['category_id'].value ='<?php echo $result->category_id;?>';
</script>
