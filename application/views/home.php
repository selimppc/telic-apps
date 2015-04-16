<!DOCTYPE html>
<html>
    <head>
        <title> <?php echo $title;?> </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css" />
        
        
        <!-- Start Nivo Slider -->
        <link rel="stylesheet" href="<?php echo base_url();?>css/nivo/themes/default/default.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url();?>css/nivo/themes/light/light.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url();?>css/nivo/themes/dark/dark.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url();?>css/nivo/themes/bar/bar.css" type="text/css" media="screen" />

        <link rel="stylesheet" href="<?php echo base_url();?>css/nivo/nivo-slider.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url();?>css/nivo/style.css" type="text/css" media="screen" />
        <!-- END Nivo Slider -->
        
        <!-- Start Gallery -->
            <link rel="stylesheet" href='<?php echo base_url();?>css/gallery/hoverbox.css' type="text/css" media="screen, projection" />
            <!--[if lte IE 7]>
            <link rel="stylesheet" href='<?php echo base_url();?>css/gallery/ie_fixes.css' type="text/css" media="screen, projection" />
            <![endif]-->
        <!-- End Gallery -->
        
    </head>
    
    
    <body>
        <div id="wrapper">
            
            <div id="logo">
                <a href="<?php echo base_url();?>"> <img src="<?php echo base_url();?>images/logo.png" alt="Telic Apps" /> </a>
            </div>
            
            
            <nav>
                <a href="<?php echo base_url();?>">Home</a>
                <a href="<?php echo base_url();?>about_us">About Us</a>
                <a href="<?php echo base_url();?>services">Services</a>
                <a href="<?php echo base_url();?>gallery">Gallery</a>
                <a href="<?php echo base_url();?>contact">Contact</a>
             </nav>
            
            
            <div id="image_slider">
                <?php echo $slider; ?>
                
            </div>
            
            <section>
                <article>
                    <?php echo $maincontent;?>
                    
                </article>
                
                <aside>
                    <div class="aside_contact">
                        Phone : (183)180-3255 <br />
                        Email : selimppc@gmail.com <br />
                        <p>
                            <img src="<?php echo base_url();?>images/facebook_icon.png" width="30" height="30"/>
                            <img src="<?php echo base_url();?>images/twitter_icon.png" width="30" height="30"/>
                            <img src="<?php echo base_url();?>images/linkedin_icon.png" width="30" height="30"/>
                        </p>
                    </div>
                    
                    <div class="aside_about_me">
                        
                        <div class="aside_img">
                            <img src="<?php echo base_url();?>images/selim.jpg" width="70" height="70" />
                        </div>
                        <div class="aside_title">
                            About Me
                        </div>
                        <div class="aside_content">
                            I have some experience on some professional topics... I have some experience on some professional topics... I have some experience on some professional topics... I have some experience on some professional topics... I have some experience on some professional topics... I have some experience on some professional topics... I have some experience on some professional topics... 
                        </div>
                        
                    </div>
                </aside>
            </section>
            
            
            <footer>
                <div class="footer_1">
                    <strong>Telic Apps </strong> <br /><br />
                    Phone: (183)180-3255 <br />
                    Email: selimppc@gmail.com<br />
                    www.selimppc.com <br />
                    &COPY; copyright by Selim Reza <br />
                </div>
                <div class="footer_2">
                    <strong>Address: </strong><br /><br />
                    House : 39 (4th floor) <br />
                    Road : 4 <br />
                    S/A Khalek R/A, Darus Salam <br />
                    Kallayanpur, Dhaka. <br />
                </div>
                <div class="footer_3">
                    <strong>About Telis Apps: </strong><br /><br />
                    Specialized on custom web application for small and medium sized company. We design your apps in some MVC pattern which are easy to handle. You can maintain your apps by own.For more info please contact us.
                </div>
            </footer>
            
        </div>
        
    </body>
</html>
