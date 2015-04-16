<div>
    <?php
        $message=$this->session->userdata('message');
        if(isset($message))
        {
            echo $message;
            $this->session->unset_userdata('message');
        }
    
    ?>
</div>

<div style="font-size: 13px; color: #666; line-height: 23px;">
<form action="<?php echo base_url();?>super_admin/save_content" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Content Title </td>
            <td><input class="border" type="text" name="content_title" required="1"></td>
        </tr>
        
        <tr>
            <td>Select Category:</td>
            <td> 
                <select class="border" name="category_id" >
                    <?php
                        foreach($categoryInfo as $values)
                        {
                    ?>
                    <option value="<?php echo $values->category_id; ?>">
                        <?php echo $values->category_name; ?>
                    </option>
                    
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Content Description</td>
            <td>
                <textarea class="border" name="content_description" id="ck_editor" ></textarea>
                    <?php echo display_ckeditor($check_editor['ckeditor']); ?>

            </td>
        </tr>
        
        <tr>
            <td>Content Image:</td>
            <td>
                <input class="border" type="file" name="content_image" required="1">
            </td>
        </tr>
        
        <tr>
            
            <td colspan="2"><input type="submit" name="btn" value="Save"></td>
        </tr>
        
    </table>
</form>
</div>

