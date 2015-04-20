<?
include "mysql.php";
session_start();

$group = $_POST[T1];
$owner = $_SESSION['username'];

mysql_query("INSERT INTO groups (grup, owner) VALUES('".$group."','".$owner."')") or die(mysql_error());

header("Location: addressbook.php");
?>