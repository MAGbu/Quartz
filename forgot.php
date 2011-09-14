<?php

    session_start();

	$thisfilename = "forgot.php";

    include 'dbvars.php';

    //Connect to DB server
    mysql_connect($serverurl, $adminname, $adminp) or die(mysql_error());
    mysql_select_db($dbname) or die(mysql_error());

    //Send the user an email with a link to the password reset page.

    if (isset($_POST['reset']) && $_POST['reset'])
    {
        mysql_query("UPDATE loginSet SET hash = '".md5($_POST['mail'])."'  WHERE email = '". $_POST['mail']. "'")
        	or die(mysql_error());

        $to = $_POST['mail'];
        $subject = "CS Website Reset Password";
        $body = "Hi,\n\nClick on the link below to reset your CS account password.\n\n".$rootpath."reset.php?id=".md5($_POST['mail'])."\n\n";
        $headers = "From: admin@cs.bu.edu\r\n"."X-Mailer: php";

		if ( $canmail )
		{
        	mail($to, $subject, $body, $headers);

        	die("A password reset email has been sent to your email account.");
        }
        else
        {
       		print("To: ".$to."<br>");
         	print($headers."<br>");
        	print("Subject: ".$to."<br>");
        	print($body."<br>");

        	die();
        }
    }

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>

    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <link rel="stylesheet" type="text/css" href="Style.css" />

        <title></title>

    </head>

    <body bgcolor="#EEEEEE">

        <?php

			$headerincludedfrom = "forgot.php";

            include 'header.php';

        ?>
            <center>

            <div style="position: relative; width: 945px; height: 400px; background: url('images/Body.jpg');">
                <div style="position: relative; font-family:Tahoma; font-size:14px; top: 50px; background: url('images/Login.jpg'); width: 525px; height: 246px;">
                    <br><br><br><br><br><br>
                    <form action="" method="POST">
                        Email : <input type="text" name="mail" value="" size="20" /><br><br>
                        <br><br>   <br><br>    <input type="submit" value="Send Password Reset Email" name="reset" />
                    </form>
                </div>
            </div>

            </center>

        <?php

            include 'footer.php';

        ?>
