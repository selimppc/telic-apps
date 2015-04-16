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
<form action="<?php echo base_url();?>super_admin/save_gallery" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Gallery Name </td>
            <td><input class="border" type="text" name="gallery_name" required="1"></td>
        </tr>

        <tr>
            <td> &nbsp;</td>
            <td> &nbsp;</td>
        </tr>
        <tr>
            <td>Gallery Image:</td>
            <td>
                <input class="border" type="file" name="gallery_image" required="1">
            </td>
        </tr>
        
        <tr>
            
            <td colspan="2"><input type="submit" name="btn" value="Save"></td>
        </tr>
        
    </table>
</form>
</div>

