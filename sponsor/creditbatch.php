<?
include "mysql.php";
session_start();

$batch = rand(11111, 99999);
$number = $_POST[T1];
$list = $_POST[S1];
$list = (explode(chr(13), $list));
$auto = $_POST[C1];
$username = $_SESSION['sponsor'];
$date = date("m.d.y");

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


if ($auto == 'ON')
{ $spo = 'auto';
  foreach($list as $key => $value)
    {
     $check = mysql_query("SELECT username FROM users WHERE username = '$value'");
	  if(mysql_num_rows($check) == 0)
	  {
	  			$check2 = mysql_query("SELECT email FROM users WHERE email = '$value'");
					if(mysql_num_rows($check2) == 0) { $f[] = $value; } else { add2($sms, $value); 
																			   mysql_query("INSERT INTO approvelog (sponsor, happyuser, credit, status, date, editor, batch) VALUES('".$username."','".$value."','".$number."','approved','".$date."','".$spo."','".$batch."')") or die(mysql_error());
}
					
	  }
	  
	  	else { add($sms, $value);
				mysql_query("INSERT INTO approvelog (sponsor, happyuser, credit, status, date, editor, batch) VALUES('".$username."','".$value."','".$number."','approved','".$date."','".$spo."','".$batch."')") or die(mysql_error());
				}
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
					if(mysql_num_rows($check2) == 0) { $f[] = $value; } else { 
																			   mysql_query("INSERT INTO approve (sponsor, happyuser, credit, done, batch) VALUES('".$username."','".$value."','".$number."','no','".$batch."')") or die(mysql_error());
}
					
	  }
	  
	  	else { 
				mysql_query("INSERT INTO approve (sponsor, happyuser, credit, done, batch) VALUES('".$username."','".$value."','".$number."','no','".$batch."')") or die(mysql_error());
				}
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