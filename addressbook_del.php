<?
include "mysql.php";
session_start();

$id = $_GET[profile];


mysql_query("DELETE FROM addressbook WHERE id = '$id' LIMIT 1");

header("Location: addressbook.php");
?>