<?
$server = 'localhost';
$database = 'database_name';
$username = 'dababase_username';
$password = 'password';
$connection = mysql_connect($server,$username,$password);

if (!$connection) {
die('Could not connect to MySQL database, the server return the error: '.mysql_error());
}
// $db2 = mysql_select_db($database2);
$db = @mysql_select_db($database);
 






function sysmail()
{
  $check = mysql_query("SELECT content FROM configuration WHERE description = 'sysmail'");
	$row = mysql_fetch_row($check);
$d = "From: ";
$d .= $row[0];
$d .= "\r\n";
return $d;
}



function forumlink()
{
  $check = mysql_query("SELECT content FROM configuration WHERE description = 'forum'");
	$ffff = mysql_fetch_row($check);
$d = $ffff[0];
return $d;
}



function vbl($usern,$paswd,$ema)
{





return "INSERT INTO `user` ( `username` , `password` , `email` )  VALUES ('".$usern."','".$paswd."','".$ema."')";

}
 










?>
