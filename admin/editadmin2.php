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

$id = $_GET[userid];
$username = $_POST[username];
$password = $_POST[password];
$access = $_POST[access];


mysql_query("UPDATE superior SET username = '$username' WHERE id = '$id'");
mysql_query("UPDATE superior SET password = '$password' WHERE id = '$id'");
mysql_query("UPDATE superior SET access = '$access' WHERE id = '$id'");

header("Location: editadmin.php?username=$username");

?>