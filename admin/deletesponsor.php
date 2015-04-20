<?
include ("mysql.php");
$username = $_GET[userid];
// $username = strtolower($username);


mysql_query("DELETE FROM sponsor WHERE username = '$username' LIMIT 1");
header("Location: sponsor.php");
?>


