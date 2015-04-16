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

<div style="font-size: 13px; color: #666; line-height: 20px;">
<form action="<?php echo base_url();?>super_admin/save_category" method="post">
    <table>
        <tr>
            <td>Category Name</td>
            <td><input type="text" name="category_name"></td>
        </tr>
        
        <tr>
            <td>Description</td>
            <td>
                <textarea name="category_description" id="ck_editor" ></textarea><?php echo display_ckeditor($check_editor['ckeditor']); ?>

            </td>
        </tr>
        
        <tr>
            
            <td colspan="2"><input type="submit" name="btn" value="Save"</td>
        </tr>
        
    </table>
</form>
</div>