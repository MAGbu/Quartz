<?php
/*
 * This page approves a user's account.
 */

$thisfilename = "approve.php";

include 'dbvars.php';

if ($_GET['id'] == "")
{
	die("Error");
}

// Connect to DB server

mysql_connect($serverurl, $adminname, $adminp) or die(mysql_error());
mysql_select_db($dbname) or die(mysql_error());

//Update the user as approved

mysql_query("UPDATE loginSet SET isApproved = 1 WHERE hash = '".$_GET['id']. "'")or die(mysql_error());
mysql_query("UPDATE loginSet SET hash = '' WHERE hash = '".$_GET['id']. "'")or die(mysql_error());

echo '<h2>Your account has been approved.</h2>'

?>
