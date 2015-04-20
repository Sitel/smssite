<?
include "igwt.php";
include "mysql.php";
session_start(); 

if ($_SESSION['admin'] == '')
{
include "login.php";
die;
exit;
break;
}
$username = $_POST[username];
$password = $_POST[password];
$access = $_POST[access];

mysql_query("INSERT INTO superior (username, password, access) VALUES('".$username."','".$password."','".$access."')") or die(mysql_error());
header("Location: admin.php");
?>
