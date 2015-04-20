<?
include ("mysql.php");
$id = $_GET[id];



mysql_query("DELETE FROM faq WHERE id = '$id' LIMIT 1");


header("Location: faq.php");
?>


