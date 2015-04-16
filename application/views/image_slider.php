<?php /* <img src="<?php echo base_url();?>images/banner_1.jpg" /> */ ?>


<div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <img src="<?php echo base_url();?>images/nivo_images/banner_1.jpg" data-thumb="<?php echo base_url();?>images/nivo_images/banner_1.jpg" alt="" />
                <img src="<?php echo base_url();?>images/nivo_images/banner_2.jpg" data-thumb="<?php echo base_url();?>images/nivo_images/banner_2.jpg" alt="" title="This is an example of a caption" />
                <img src="<?php echo base_url();?>images/nivo_images/banner_3.jpg" data-thumb="<?php echo base_url();?>images/nivo_images/banner_3.jpg" alt="" data-transition="slideInLeft" />
                <img src="<?php echo base_url();?>images/nivo_images/banner_4.jpg" data-thumb="<?php echo base_url();?>images/nivo_images/banner_4.jpg" alt="" title="#htmlcaption" />
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
            </div>
</div>

<script type="text/javascript" src="<?php echo base_url(); ?>js/nivo/scripts/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/nivo/jquery.nivo.slider.js"></script>
<script type="text/javascript">
$(window).load(function() {
    $('#slider').nivoSlider();
});
</script>