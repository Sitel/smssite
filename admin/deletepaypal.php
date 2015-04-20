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
$id = $_GET[id];


mysql_query("DELETE FROM paypal WHERE id = '$id' LIMIT 1");

header("Location: paypal.php");
?>