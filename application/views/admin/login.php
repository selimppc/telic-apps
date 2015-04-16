<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Log into Control Panel</title>

    <style type="text/css">
        #admin_login{
            width: 100%;
            background: url('./admin_images/bg.jpg') repeat;
            font-family: sans-serif;
        }
        #login_area{
            background: none repeat scroll 0 0 white;
            color: #666666;
            font-size: 13px;
            line-height: 30px;
            margin: 0 auto;
            padding: 30px 50px;
            width: 300px;
            border-radius: 10px; 
            margin-top: 200px;
        }
        .border{
            border: 1px solid #666;
            padding: 3px;
        }
        h3{
            color: #5A981B;
        }
        .admin_login {
            background-color: #5A981B;
            background-image: -moz-linear-gradient(center top , #A2C42F, #3D840E);
            border: 1px solid #5A981B;
            border-radius: 3px 3px 3px 3px;
            color: #FFFFFF;
            font-family: arial,helvetica,sans-serif;
            font-weight: bold;
            padding: 5px 10px;
            text-align: center;
            text-shadow: -1px -1px 0 rgba(0, 0, 0, 0.3);
        }
        .admin_login:hover {
            background-color: #5A981B;
            background-image: -moz-linear-gradient(center top , #3D840E, #A2C42F);
            border: 1px solid #5A981B;
            border-radius: 3px 3px 3px 3px;
            color: #FFFFFF;
            font-family: arial,helvetica,sans-serif;
            font-weight: bold;
            padding: 5px 10px;
            text-align: center;
            text-shadow: -1px -1px 0 rgba(0, 0, 0, 0.3);
        }
        
    </style>
</head>

<body id="admin_login">
    <div id="login_area">
        <h3>Apps Control Panel</h3>
            <form action="<?php echo base_url();?>admin/checkLogin" method="POST">
                <table>
                    <tr>
                        <td>Username : </td>
                        <td> <input class="border"  type="text" name="username" required="1"  value="" /></td>
                    </tr>
                    
                    <tr>
                        <td>Password : </td>
                        <td> <input class="border" type="password" name="username" required="1" value="" /></td>
                    </tr>
                    
                    <tr>
                        <td>&nbsp;</td>
                        <td> <input class="admin_login" type="submit" name="btn" value="Login" /></td>
                    </tr>
                    
                    <tr>
                        <td>&nbsp;</td>
                        <td> Forgot Your Password ?</td>
                    </tr>
                </table>
            </form>
</div>
</body>