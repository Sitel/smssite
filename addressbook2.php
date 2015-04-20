<?
include "mysql.php";
session_start(); 
$nickname = $_POST[nickname];
$mobile = $_POST[mobile];
$fax = $_POST[fax];
$home = $_POST[home];
$grup = $_POST[group];
$first = $_POST[first];
$last = $_POST[last];
$email = $_POST[email];
$address = $_POST[address];
$city = $_POST[city];
$state = $_POST[state];
$zip = $_POST[zip];
$country = $_POST[country];
$details = $_POST[details];
$owner = $_SESSION['username'];

mysql_query("INSERT INTO addressbook (nickname, phone, grup, first, last, email, address, city, state, zip, home, country, fax, details, owner) 
VALUES('".$nickname."','".$mobile."','".$grup."','".$first."','".$last."','".$email."','".$address."','".$city."','".$state."','".$zip."','".$home."','".$country."','".$fax."','".$details."','".$owner."')") 
or die(mysql_error());

header("Location: addressbook.php");
?>