<?
include "../mysql.php";

$io = sysmail();



$cec = $_POST[te];
$cec = mysql_real_escape_string($cec);
/*  $check = mysql_query("SELECT email FROM users WHERE email = '$cec'");
        if(mysql_num_rows($check ) != 0){  $ver =  'This email already exists in our database!'; };

  $check = mysql_query("SELECT username FROM users WHERE email = '$cec'");
        if ((mysql_num_rows($check ) != 0) and (!$ver)) {  $ver =  'This email already exists in our database!'; };
*/

if (eregi('@', $cec)) {


$check = mysql_query("SELECT username, password FROM sponsor WHERE email = '$cec'");
$row = mysql_fetch_row($check); 

$subject = "Password recovered!";
$message = "
Dear sponsor,

Here is the information you requested from us:

Username: $row[0]
Password: $row[1]

If you did not ask for a password change, or you received this e-mail by mistake, please contact us as soon as possible

Best regards,
Support Team.
";
$from = "From: support@yoursite.com\r\n";
if (mysql_num_rows($check ) != 0)
{
$ver = 1;
$from = "From: $io\r\n";
mail($cec, $subject, $message, sysmail());
}
}
else
{

$check = mysql_query("SELECT password, email FROM sponsor WHERE username = '$cec'");
$row = mysql_fetch_row($check); 



$subject = "Password recovered!";
$message = "
Dear sponsor,

Here is the information you requested from us:

Username: $cec
Password: $row[0]

If you did not ask for a password change, or you received this e-mail by mistake, please contact us as soon as possible

Best regards,
Support Team.
";
$from = "support@yoursite.com";

$cec2 = $row[1];

if (mysql_num_rows($check ) != 0)
{
$ver = 1;
$from = "From: $io\r\n";
mail($cec2, $subject, $message, sysmail());
}

}


?>
