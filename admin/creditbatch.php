<?
include "mysql.php";

$number = $_POST[T1];
$list = $_POST[S1];
$list = (explode(chr(13), $list));
$method = $_POST[R1];

function convertToInt($string) {
   $y = ltrim($string, '0');
   $z = 0 + $y;
   return $z;
}
$sms = convertToInt($number);
$length = sizeof($list);

for ($i = 1; $i <= $length; $i++) {
  $list[$i] = substr($list[$i], 1);
}

function add($number, $usr)
{
mysql_query("UPDATE users SET sms = sms+$number WHERE username = '$usr'");
}

function add2($number, $usr)
{
mysql_query("UPDATE users SET sms = sms+$number WHERE email = '$usr'");
}

function deduct($number, $usr)
{
mysql_query("UPDATE users SET sms = sms-$number WHERE username = '$usr'");
}
function deduct2($number, $usr)
{
mysql_query("UPDATE users SET sms = sms-$number WHERE email = '$usr'");
}

if ($method == 'add')
{
  foreach($list as $key => $value)
    {
     $check = mysql_query("SELECT username FROM users WHERE username = '$value'");
	  if(mysql_num_rows($check) == 0)
	  {
	  			$check2 = mysql_query("SELECT email FROM users WHERE email = '$value'");
					if(mysql_num_rows($check2) == 0) { $f[] = $value; } else { add2($sms, $value); }
					
	  }
	  
	  	else { add($sms, $value); }
	      }

}
else
{



  foreach($list as $key => $value)
    {
     $check = mysql_query("SELECT username FROM users WHERE username = '$value'");
	  if(mysql_num_rows($check) == 0)
	  {
	  			$check2 = mysql_query("SELECT email FROM users WHERE email = '$value'");
					if(mysql_num_rows($check2) == 0) { $f[] = $value; } else { deduct2($sms, $value); }
					
	  }
	  
	  	else { deduct($sms, $value); }
	      }
}

if ($f[0])
{
echo "The following users could not be found in the database: ";
  foreach($f as $key => $value)
    { echo $value; echo " ";
}
}
else
{
echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"2; URL=index.php\">";
echo "Command successfully! Redirecting you to admin homepage...";
}
?>