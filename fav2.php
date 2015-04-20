<?
include "mysql.php";
session_start(); 
$username = $_SESSION['username'];
$all = $_POST[hidID];

$list = (explode(',', $all));
echo $total;
$total = count($list);
$total = $total - 1;
mysql_query("DELETE FROM favlsit WHERE owner = '$username'");



for ($i = 0; $i < $total; $i++) {


  $check = mysql_query("SELECT nickname FROM addressbook WHERE id = '$list[$i]'");
	$row = mysql_fetch_row($check);
	
	
mysql_query("INSERT INTO favlsit (addrid, owner, nickname) VALUES('".$list[$i]."','".$username."','".$row[0]."')") or die(mysql_error());

}
header("Location: fav.php");


?>