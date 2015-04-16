

<?php 
    foreach ($result as $values)
    {
?>
<h1 style="border-bottom: 1px solid #ccc;"> <?php echo $values->content_title ?> </h1> <br />
<p>
<img style="border: 1px solid #ccc; padding: 5px;" src="<?php echo base_url();?><?php echo $values->content_image ?>" width="690" height="150" />
</p>
<br />
<p style="font-size: 13px;">
    
    <?php echo $values->content_description ?>
</p>






<?php } ?>
