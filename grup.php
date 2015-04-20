<?
include "mysql.php";
session_start(); 
$user = $_SESSION['username'];

$id = $_POST[id];
$grup = $_POST[grp];
$delete = $_POST[delete];
$rename = $_POST[rename];


$check = mysql_query("SELECT owner FROM groups WHERE id = '$id'");
$row = mysql_fetch_row($check); 


if ( $row[0] == $user){

if ($delete == 'Delete'){
mysql_query("DELETE FROM groups WHERE id = '$id' LIMIT 1");
}

if ($rename == 'Rename')
{
mysql_query("UPDATE groups SET grup = '$grup' WHERE id = '$id'");
}
}
header("Location: addressbook.php");
?>