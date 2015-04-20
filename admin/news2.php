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

$t1 = $_POST[T1];
$t2 = date("F j, Y, g:i a");
$t3 = $_POST[T3];
$t4 = date("F j, Y, g:i a");
$t5 = $_POST[T5];
$t6 = date("F j, Y, g:i a");
$s1 = $_POST[S1];
$s2 = $_POST[S2];
$s3 = $_POST[S3];

mysql_query("UPDATE news SET title = '$t1' WHERE id = '1'");
mysql_query("UPDATE news SET time = '$t2' WHERE id = '1'");
mysql_query("UPDATE news SET content = '$s1' WHERE id = '1'");



mysql_query("UPDATE news SET title = '$t3' WHERE id = '2'");
mysql_query("UPDATE news SET time = '$t4' WHERE id = '2'");
mysql_query("UPDATE news SET content = '$s2' WHERE id = '2'");



mysql_query("UPDATE news SET title = '$t5' WHERE id = '3'");
mysql_query("UPDATE news SET time = '$t6' WHERE id = '3'");
mysql_query("UPDATE news SET content = '$s3' WHERE id = '3'");

header("Location: news.php");
?>