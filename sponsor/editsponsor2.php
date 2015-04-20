<?
include "igwt.php";
include "mysql.php";
session_start(); 

if ($_SESSION['sponsor'] == '')
{
include "login.php";
die;
exit;
break;
}

$id = $_GET[id];
$password = $_POST[password];
$name = $_POST[name];
$url = $_POST[url];
$email = $_POST[email];
$credit = $_POST[credit];



mysql_query("UPDATE sponsor SET password = '$password' WHERE id = '$id'");
mysql_query("UPDATE sponsor SET name = '$name' WHERE id = '$id'");
mysql_query("UPDATE sponsor SET url = '$url' WHERE id = '$id'");
mysql_query("UPDATE sponsor SET email = '$email' WHERE id = '$id'");
mysql_query("UPDATE sponsor SET credit = '$credit' WHERE id = '$id'");


header("Location: details.php");
?>