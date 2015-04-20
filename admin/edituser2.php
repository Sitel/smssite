<?
include "igwt.php";
include "mysql.php";
session_start(); 

if ($_SESSION['admin'] == '')
{
include "login.php";
die;
exit;
break;
}

function convertToInt($string) {
   $y = ltrim($string, '0');
   $z = 0 + $y;
   return $z;
}

$na = $_POST[name];
$fi = $_POST[firstname]; 
$active = $_POST[active];
$sms = $_POST[sms];
$usr = $_POST[username];
$address = $_POST[address];
$city = $_POST[city];
$state = $_POST[state];
$zip = $_POST[zip];
$country = $_POST[country];
$home = $_POST[home];
$email = $_POST[email];
$password = $_POST[password];
$mobile = $_POST[mobile];
$sms = convertToInt($sms);

$username = $usr;
mysql_query("UPDATE users SET name = '$na' WHERE username = '$usr'");
mysql_query("UPDATE users SET firstname = '$fi' WHERE username = '$usr'");
mysql_query("UPDATE users SET active = '$active' WHERE username = '$usr'");
mysql_query("UPDATE users SET sms = sms+$sms WHERE username = '$usr'");
mysql_query("UPDATE users SET username = '$usr' WHERE mobile = '$mobile'");

mysql_query("UPDATE users SET address = '$address' WHERE username = '$usr'");
mysql_query("UPDATE users SET city = '$city' WHERE username = '$usr'");
mysql_query("UPDATE users SET state = '$state' WHERE username = '$usr'");
mysql_query("UPDATE users SET zip = '$zip' WHERE username = '$usr'");
mysql_query("UPDATE users SET country = '$country' WHERE username = '$usr'");
mysql_query("UPDATE users SET home = '$home' WHERE username = '$usr'");


mysql_query("UPDATE users SET email = '$email' WHERE username = '$usr'");
mysql_query("UPDATE users SET password = '$password' WHERE username = '$usr'");
mysql_query("UPDATE users SET mobile = '$mobile' WHERE username = '$usr'");

header("Location: edituser.php?userid=$username");

?>