<?
include "mysql.php";
$email = $_POST[T1];
$title = $_POST[T2];
$forum = $_POST[T3];
$sitename = $_POST[T4];
$message = $_POST[T5];
$paypal = $_POST[paypal];

mysql_query("UPDATE configuration SET content = '$email' WHERE description = 'sysmail'");
mysql_query("UPDATE configuration SET content = '$title' WHERE description = 'title'");
mysql_query("UPDATE configuration SET content = '$forum' WHERE description = 'forum'");
mysql_query("UPDATE configuration SET content = '$sitename' WHERE description = 'sitename'");
mysql_query("UPDATE configuration SET content = '$message' WHERE description = 'message'");
mysql_query("UPDATE configuration SET content = '$paypal' WHERE description = 'paypal'");

header("Location: configuration.php")
?>