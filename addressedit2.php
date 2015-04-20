<?
include "mysql.php";
session_start();
$ril = $_SESSION['username'];
$nickname = $_POST[nickname];
$mobile = $_POST[mobile];
$fax = $_POST[fax];
$home = $_POST[home];
$group = $_POST[group];
$first = $_POST[first];
$last = $_POST[last];
$email = $_POST[email];
$address = $_POST[address];
$city = $_POST[city];
$state = $_POST[state];
$zip = $_POST[zip];
$country = $_POST[country];
$details = $_POST[details];

$id = $_GET[user];

  $check = mysql_query("SELECT owner FROM addressbook WHERE id = '$id'");
	$row = mysql_fetch_row($check);



if ($row[0] == $ril)
{
mysql_query("UPDATE addressbook SET nickname = '$nickname' WHERE id = '$id'");
mysql_query("UPDATE addressbook SET phone = '$mobile' WHERE id = '$id'");
mysql_query("UPDATE addressbook SET grup = '$group' WHERE id = '$id'");
mysql_query("UPDATE addressbook SET first = '$first' WHERE id = '$id'");
mysql_query("UPDATE addressbook SET last = '$last' WHERE id = '$id'");
mysql_query("UPDATE addressbook SET email = '$email' WHERE id = '$id'");
mysql_query("UPDATE addressbook SET address = '$address' WHERE id = '$id'");
mysql_query("UPDATE addressbook SET city = '$city' WHERE id = '$id'");
mysql_query("UPDATE addressbook SET state = '$state' WHERE id = '$id'");
mysql_query("UPDATE addressbook SET zip = '$zip' WHERE id = '$id'");
mysql_query("UPDATE addressbook SET home = '$home' WHERE id = '$id'");
mysql_query("UPDATE addressbook SET country = '$country' WHERE id = '$id'");
mysql_query("UPDATE addressbook SET fax = '$fax' WHERE id = '$id'");
mysql_query("UPDATE addressbook SET details = '$details' WHERE id = '$id'");
}


header ("location: addressedit.php?user=$id");


?>