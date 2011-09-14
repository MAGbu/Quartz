<?php


    //This sub-page displays an under construction sign.
    session_start();



?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">



<html>



    <head>



        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">



        <link rel="stylesheet" type="text/css" href="../Style.css" />



        <title></title>



    </head>



    <body bgcolor="#EEEEEE">

        <?php
            $username = "null";
            include '../header.php';

        ?>
            <center>

            <div style="position: relative; width: 945px; height: 400px; background: url('../images/Body.jpg');">
                <div style="position: relative; top: 50px; background: url('../images/construction.jpg'); width: 525px; height: 246px;">
                </div>
            </div>

            </center>

        <?php

            include '../footer.php';
            
        ?>


    </body>

</html>
