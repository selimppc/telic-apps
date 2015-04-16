<h1>Contact</h1>
&nbsp;
<p>
    Please leave you message
</p>



<form action="<?php echo base_url();?>contact/send_email" method="POST" onsubmit="return validateStandard(this)">
    <table border="0" style="font-size: 13px; line-height: 40px; padding: 30px;">
        <tr>
            <td>Your Name (<span class="required">required</span>): </td>
            <td>
                <input class="border" type="text" name="contact_name"  required="1" egexp="JSVAL_RX_ALPHA" err="Please Enter Your Name" /> 
            </td>
        </tr>
        
        <tr>
            <td>Phone (<span class="required">required</span>): </td>
            <td>
                <input class="border" type="text" name="contact_phone" required="1" egexp="JSVAL_RX_ALPHA" /> 
            </td>
        </tr>
        
        <tr>
            <td>Email (<span class="required">required</span>): </td>
            <td>
                <input class="border" type="text" name="contact_email" required="1" regexp="JSVAL_RX_EMAIL"  /> 
            </td>
        </tr>
        
        <tr>
            <td>Country (<span class="required">required</span>): </td>
            <td align="right">
                <input class="border" type="text" name="contact_country" required="1" egexp="JSVAL_RX_ALPHA" /> 
            </td>
        </tr>
        
        <tr>
            <td>Message (<span class="required">required</span>): </td>
            <td>
                <textarea class="border" type="text" name="contact_message" required="1" regexp="JSVAL_RX_ALPHA"></textarea> 
            </td>
        </tr>
        
        <tr>
            <td>
                <input class="btn_submit" type="submit" name="btn" value="Send" /> 
            </td>
        </tr>
            

    </table>
</form>

<?php
    $this->session->unset_userdata('contact_name');
    $this->session->unset_userdata('contact_phone');
    $this->session->unset_userdata('contact_email');
    $this->session->unset_userdata('contact_country');
    $this->session->unset_userdata('contact_message');

?>