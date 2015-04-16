<!DOCTYPE html>
<html>
    <head>
        <title> <?php echo $title; ?> </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>admin_css/style.css" />
        
       
        
        
        <script type="text/javascript">
            $(function(){
                $(".box .h_title").not(this).next("ul").hide("normal");
                $(".box .h_title").not(this).next("#home").show("normal");
                $(".box").children(".h_title").click( function() { $(this).next("ul").slideToggle(); });
            });
        </script>
        <script type="text/javascript">
            function checkDelete()
            {
                var clk=confirm("Are You Sure Delete to this Record!")
                if(clk)
                    {
                        return true;
                    }
                    else{
                        return false;
                    }
            }
        </script>
    </head>
    
    
    <body>
        <div id="wrapper">
            
            <div id="logo">
                <a href="<?php echo base_url(); ?>super_admin"> <img src="<?php echo base_url();?>admin_images/logo.png" alt="Telic Apps" > </a>
               
               <span class="link_text" style="color: white; vertical-align: top; float: right;">
                   <script>

                var mydate=new Date()
                var year=mydate.getYear()
                if (year < 1000)
                year+=1900
                var day=mydate.getDay()
                var month=mydate.getMonth()
                var daym=mydate.getDate()
                if (daym<10)
                daym="0"+daym
                var dayarray=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
                var montharray=new Array("January","February","March","April","May","June","July","August","September","October","November","December")
                document.write(dayarray[day]+", "+montharray[month]+" "+daym+", "+year)

            </script>

                   
                   <br />
                   Welcome <strong>Selim</strong>  <br />
                   [ <a href="<?php echo base_url() ?>super_admin/logout">Logout</a> ]
               </span>
            </div>
            
            
            <nav>
                <a href="<?php echo base_url();?>super_admin">Home</a>
                <a href="<?php echo base_url(); ?>super_admin/view_about_us">About Us</a>
                <a href="<?php echo base_url(); ?>super_admin/view_services">Services</a>
                <a href="<?php echo base_url(); ?>super_admin/view_gallery">Gallery</a>
                <a href="#">Contact</a>
            </nav>
            
            

            
            <section>
                
                
                <aside>
                    
                    <?php echo $aside_home; ?>

                </aside>
                
                <article>
                    
                    <?php echo $maincontent; ?>
                    
                </article>
                
            </section>
            
            
            <footer>
                <div class="footer_1">
                    <strong>Contact : </strong> <br /><br />
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
