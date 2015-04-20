<?
include ("mysql.php");
$username = $_GET[userid];
// $username = strtolower($username);


mysql_query("DELETE FROM users WHERE username = '$username' LIMIT 1");
mysql_query("DELETE FROM affiliates WHERE username = '$username' LIMIT 1");

mysql_select_db($database2);

$check = mysql_query("SELECT userid FROM user WHERE username = '$username'");
$row = mysql_fetch_row($check);
$idz = $row[0];

mysql_query("DELETE FROM usertextfield WHERE userid = '$idz' LIMIT 1");

mysql_query("DELETE FROM user WHERE username = '$username' LIMIT 1");
header("Location: member.php");
?>


