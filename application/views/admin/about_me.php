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
<form action="<?php echo base_url();?>super_admin/save_about_me" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>About Me Title </td>
            <td><input class="border" type="text" name="about_me_title" required="1"></td>
        </tr>
        
        
        <tr>
            <td>About Me Description</td>
            <td>
                <textarea class="border" name="about_me_description" id="ck_editor" ></textarea>
                    <?php echo display_ckeditor($check_editor['ckeditor']); ?>

            </td>
        </tr>
        
        <tr>
            <td>About Me Image:</td>
            <td>
                <input class="border" type="file" name="about_me_image" required="1">
            </td>
        </tr>
        
        <tr>
            
            <td colspan="2"><input type="submit" name="btn" value="Save"></td>
        </tr>
        
    </table>
</form>
</div>

