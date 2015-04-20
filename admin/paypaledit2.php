<?
include "mysql.php";

$credits = $_POST[credits];
$price = $_POST[price];
$id = $_GET[id];

mysql_query("UPDATE paypal SET credits = '$credits' WHERE id = '$id'");
mysql_query("UPDATE paypal SET price = '$price' WHERE id = '$id'");

header("Location: paypaledit.php?id=$id");

?>