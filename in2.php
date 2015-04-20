<?
include "mysql.php";
$affiliate = "cellebrum";
mysql_query("UPDATE affiliates SET clicks = clicks+1 WHERE username = '$affiliate'");

$cookie_life = time() + 31536000;
$path = '/';
$hostname = 'www.yoursite.com';

setcookie('affiliate', $affiliate, $cookie_life, $path, $hostname); 


include "index.php";
?>
