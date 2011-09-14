<?php

    session_start();

	$thisfilename = "reset.php";

    include 'dbvars.php';

    if 	( // what is this checking for?
			(
				isset($_GET['id']) && ($_GET['id']== "")
			)
			&&
			(
				isset($_GET['name']) && ( $_GET['name'] == "" )
			)
			&&
			(
				isset($_POST['reset'])
			)
    	)
    {
    	die("Error@0");
    }

    if 	( // what is this checking for?
			(
				isset($_GET['name']) && ($_GET['name'] != "")
			)
			&&
			(
				!isset($_POST['reset'])
			)
    	)
    {
    	print("is GET name set?");
    	print("[");
    	print(isset($_GET['name'])?"true":"false");
    	print("] ");

    	print("is POST reset set?");
    	print("[");
    	print(isset($_POST['reset'])?"true":"false");
    	print("] ");

    	die("Error@1");
    }

    // Connect to DB server

    mysql_connect($serverurl, $adminname, $adminp) or die(mysql_error());
    mysql_select_db($dbname) or die(mysql_error());

    // Set the new password for the user

    if (isset($_POST['reset']) && $_POST['reset'])
    {
        mysql_query("UPDATE loginSet SET hash = ''  WHERE email = '". $_GET['name']. "'")or die(mysql_error());
        mysql_query("UPDATE nLogin SET password = '".md5($_POST['pass'])."'  WHERE email = '". $_GET['name']. "'")or die(mysql_error());
        die("Your password has been reset.");
    }

    // Select user information from Database

    $check = mysql_query("SELECT * FROM loginSet WHERE hash = '". $_GET['id']. "'")or die(mysql_error());
    $info = mysql_fetch_array( $check );

    if (!$info)
    {
    	die("Hacking attempt.");
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


			$headerincludedfrom = "reset.php";

            include 'header.php';

        ?>
            <center>

            <div style="position: relative; width: 945px; height: 400px; background: url('images/Body.jpg');">
                <div style="position: relative; font-family:Tahoma; font-size:14px; top: 50px; background: url('images/Login.jpg'); width: 525px; height: 246px;">
                    <br><br><br><br><br><br>Email : <?php echo $info['email']; ?><br><br>
                    <form action="reset.php?name=<?php echo $info['email']; ?>" method="POST">
                        New Password : <input type="password" name="pass" value="" size="20" /><br><br>
                        <br><br>       <input type="submit" value="Reset Password" name="reset" />
                    </form>
                </div>
            </div>

            </center>

        <?php

            include 'footer.php';

        ?>
