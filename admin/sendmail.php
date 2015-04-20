<?
include "mysql.php";
$country = $_POST[country];
$subject = $_POST[subject];
$message = $_POST[body];
$method = $_POST[R1];

if ($country != 'newsletter')
{
if ($method == 'V1')
{
$from = sysmail();
echo "sending mail ....    ";
if ($country != 'all')
{
$sql = "SELECT email FROM  users WHERE country = '$country'";
$result = mysql_query($sql);
while ($row = mysql_fetch_assoc($result)) {
mail($row[email], $subject, $message, $from);
}
}
else
{
$sql = "SELECT email FROM  users";
$result = mysql_query($sql);
while ($row = mysql_fetch_assoc($result)) {
mail($row[email], $subject, $message, sysmail());
}

}
}

else

{
$handle = fopen("editable/mail.html", "r");
$contents = '';
while (!feof($handle)) {
  $contents .= fread($handle, 8192);
}
fclose($handle);

$from = sysmail();
$from .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
echo "sending mail ....    ";
if ($country != 'all')
{
$sql = "SELECT email FROM  users WHERE country = '$country'";
$result = mysql_query($sql);
while ($row = mysql_fetch_assoc($result)) {
mail($row[email], $subject, $contents, $from);
}
}
else
{
$sql = "SELECT email FROM  users";
$result = mysql_query($sql);
while ($row = mysql_fetch_assoc($result)) {
mail($row[email], $subject, $message, $from);
}

}

}
}
else
{


if ($method == 'V1')
{
$from = sysmail();
echo "sending mail ....    ";
$sql = "SELECT email FROM newsletter";
$result = mysql_query($sql);
while ($row = mysql_fetch_assoc($result)) {
mail($row[email], $subject, $message, sysmail());
}}
else
{
$handle = fopen("editable/mail.html", "r");
$contents = '';
while (!feof($handle)) {
  $contents .= fread($handle, 8192);
}
fclose($handle);

$from = sysmail();
$from .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
echo "sending mail ....    ";
$sql = "SELECT email FROM newsletter";
$result = mysql_query($sql);
while ($row = mysql_fetch_assoc($result)) {
mail($row[email], $subject, $message, sysmail());
}

}






}
echo "process complete!";
?>