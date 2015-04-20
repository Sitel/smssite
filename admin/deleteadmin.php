<?
include ("mysql.php");
$id = $_GET[username];



mysql_query("DELETE FROM superior WHERE username = '$id' LIMIT 1");


header("Location: admin.php");
?>


