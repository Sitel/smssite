<?
include "mysql.php";

$credits = $_POST[credits];
$cost = $_POST[cost];


mysql_query("INSERT INTO paypal (credits, price) VALUES('".$credits."','".$cost."')") or die(mysql_error());
header("Location: paypal.php");

?>