<?



include ("igwt.php");
include ("mysql.php");
include ("api/smsapi.php");

$email = $_POST[email];
$emailconfirm = $_POST[emailconfirm];
$password = $_POST[password];
$passwordconfirm = $_POST[passwordconfirm];
$username = $_POST[username];
$firstname = $_POST[firstname];
$name = $_POST[name];
$accept = $_POST[accept];
$address = $_POST[address];
$city = $_POST[city];
$state = $_POST[state];
$zip = $_POST[zip];
$country = $_POST[country];
$mobile = $_POST[mobile];
$home = $_POST[home];
$date = date("Ymd");
$rand = rand(100000, 999999);
$affiliate = $_COOKIE['affiliate'];

$username = strtolower($username);


$subject = "Registration";
$sss = "From: support@yoursite.com\r\n";
$mmessage = "Dear $firstname $name,

Thank you for signing up! Just for signing up with us, you received a free SMS message!

Please read this email carefully because it contains important information!

You should recieve a SMS message with an activation code in order to fully activate your account (ability to earn extra free SMS credits).

In order to activate your account login to your account in the Member's Area.

In order to receive extra free messages, please read the \"Get Free SMSs\" area from your Member homepage.

If you experience delays and/or site bugs, please feel free to contact us

Please feel free to browse the forums and interact with other users in our Forum

Best regards,
Support Team.";

if (!$firstname)
{
$error[] = 'No first name selected!';
}

if (!$name)
{
$error[] = 'No name selected!';
}

if (!$mobile)
{
$error[] = 'No mobile phone selected!';
}

/* if (strlen($mobile) == 10)
{
$error[] = 'Mobile country code not entered! Eg. for a US phone number: 14044444442';
} */

if ($accept != 1) $error[] = 'You must accept the terms in order to continue';
  // check the username
  if(!eregi("^[[:alnum:]]+$", $username))
     $error[] = 'Username error';

  // check to make sure the password is long enough and of the right format
  if(!$password)
    $error[] = 'Password error';

  // check to make sure that the password matches the confirmed password.
  if($password != $passwordconfirm)
    $error[] = 'Passwords do not match!';

  // check to make sure they entered a valid email address
  if(!eregi("^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$", 
$email))
    $error[] = 'Invalid e-mail';

  // check to make sure that the email matches the confirmed email.
  if($email != $emailconfirm)
    $error[] = 'E-mail confirmation error';

 // check the mobile number
$atom = '[-a-z!#$%&\'*+/=?^_`{|}~]';
if (eregi($atom, $mobile)) {
 $error[] = 'Invalid mobile phone number';
}


  // check to see if username already exists
  $check = mysql_query("SELECT username FROM users WHERE username = '$username'");
if(mysql_num_rows($check ) != 0)  {$error[] = 'This username is already in our database!'; };

// check to see if phone number already exists
  $check = mysql_query("SELECT mobile FROM users WHERE mobile = '$mobile'");
if(mysql_num_rows($check ) != 0)  {$error[] = 'This phone number is already in our database!'; };

  // check to see if email already exists
  $check = mysql_query("SELECT email FROM users WHERE email = '$email'");
        if(mysql_num_rows($check ) != 0){  $error[] =  'This email already exists in our database!'; };
 
  // register if there are no errors

if ($mobile{0} == "+")
{
$mobile = substr($mobile,1);
}

if ($mobile{0} == "0")
{
$mobile = substr($mobile,1);
}
if ($mobile{0} == "0")
{
$mobile = substr($mobile,1);
}


if (!$error) {
 mysql_query("INSERT INTO users (username,password,email,joindate,name,firstname,address,city,state,zip,country,mobile,home,refferedby,ip,activation) 
VALUES('".$username."','".$password."','".$email."','".$date."','".$name."','".$firstname."','".$address."','".$city."','".$state."','".$zip."','".$country."','".$mobile."','".$home."','".$affiliate."','".$REMOTE_ADDR."','".$rand."')") 
or die(mysql_error());

// affiliate
mysql_query("INSERT INTO affiliates (username) VALUES('".$username."')") or die(mysql_error());



$to = $mobile;
$from = "Activate";
$message = "Dear $firstname $name, welcome to our site! Use this code to activate your account: $rand";

$mysms = new sms();
$results = $mysms->send($to,$from,$message);

mail($email, $subject, $mmessage, sysmail());

$ion = "<p style=\"margin-left: 5px; margin-right: 5px; margin-bottom:0\" align=\"center\">			
			<span class=\"o\">Registration Success! <font color=\"#FF0000\">Just for signing up you received a free SMS!</font> </span></p>
<p style=\"margin-left: 5px; margin-right: 5px; margin-bottom:0\" align=\"center\">			
			<span class=\"o\">You should receive the activation code in seconds! <br> Please <a href=\"index.php\">
			click here</a> to login and enter the activation code!</span></p>";
}

 
?>


<?

echo $sus;
?>


<style type="text/css" media="all">
@import "main.css";
</style>
<script type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

function popUp(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=450,height=200,left = 100,top = 100');");
}

//-->
</script>
</head>

<body bgcolor="#FFFFFF" onLoad="MM_preloadImages('images/over_02.jpg','images/over_04.jpg','images/over_06.jpg','images/over_08.jpg','images/over_10.jpg','images/over_12.jpg','images/over_14.jpg')">
<div align="center">
<table id="Table_01" width="790" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="7">
			<img src="images/index_01.jpg" width="249" height="77" alt=""></td>
		<td colspan="10" style="background-image: url(images/index_02.jpg);">
		<p align="right" class="txt" style="margin-right: 25px">
			<img src="images/arr.jpg" alt="Log In" width="14" height="11" border="0" style="vertical-align:middle;"> 
			<a href="login.php" style="text-decoration: none">
			<font color="#666666">Log In</font></a>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
			<img src="images/arr.jpg" alt="Register" width="14" height="11" border="0" style="vertical-align:middle;"> 
			<a href="register.php" style="text-decoration: none">
			<font color="#666666">Register</font></a></td>
	</tr>
	<tr>
		<td colspan="17">
			<img src="images/top5.jpg" alt="" width="790" height="151"></td>
	</tr>
	<tr>
		<td>
			<a href="index.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Home','','images/over_02.jpg',1)"><img src="images/index_04.jpg" name="Home" width="110" height="24" border="0" alt="Home"></a></td>
		<td>
			<img src="images/index_05.jpg" width="2" height="24" alt=""></td>
		<td colspan="3">
			<a href="myaccount.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('My Account','','images/over_04.jpg',1)"><img src="images/raw2_05.jpg" name="My Account" width="110" height="24" border="0" alt="My Account"></a></td>
		<td>
			<img src="images/index_07.jpg" width="2" height="24" alt=""></td>
		<td colspan="2">
			<a href="signup.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Sign Up','','images/over_06.jpg',1)"><img src="images/raw2_06.jpg" name="Sign Up" width="110" height="24" border="0" alt="Sign Up"></a></td>
		<td>
			<img src="images/index_09.jpg" width="2" height="24" alt=""></td>
		<td>
			<a href="features.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Features','','images/over_08.jpg',1)"><img src="images/raw2_08.jpg" name="Features" width="110" height="24" border="0" alt="Features"></a></td>
		<td>
			<img src="images/index_11.jpg" width="2" height="24" alt=""></td>
		<td>
			<a href="coverage.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Coverage','','images/over_10.jpg',1)"><img src="images/raw2_10.jpg" name="Coverage" width="113" height="24" border="0" alt="Coverage"></a></td>
		<td>
			<img src="images/index_13.jpg" width="2" height="24" alt=""></td>
		<td>
			<a href="forum" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Forum','','images/over_12.jpg',1)"><img src="images/index_14.jpg" name="Pricing" width="113" height="24" border="0" alt="Pricing"></a></td>
		<td>
			<img src="images/index_15.jpg" width="2" height="24" alt=""></td>
		<td colspan="2">
			<a href="faq.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Support','','images/over_14.jpg',1)"><img src="images/index_16.jpg" name="Support" width="112" height="24" border="0" alt="Suport"></a></td>
	</tr>
	<tr>
		<td colspan="17">
			<img src="images/index_17.jpg" width="790" height="23" alt=""></td>
	</tr>
	<tr>
		<td colspan="3" rowspan="2" style="background-image: url(images/raw2_18.jpg);" valign="top"><br>
<table id="table1" width="145" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="2">
			<img src="images/tabel_01.jpg" width="145" height="13" alt=""></td>
	</tr>
	<tr>
		<td width="142">
			<p style="margin-left: 3px">
			<img border="0" src="images/test.jpg" width="24" height="24" alt="Test our service" style="vertical-align:middle;"> <span class="txtn">Test 
			our service</span></p>
			<p class="o" style="margin-left: 6px; margin-top:0; margin-bottom:5px" align="left">
			Mobile No.: <a href="javascript:popUp('numberformat.html')">Format</a></p>
			<form action="testsend.php" method="POST" class="o">
			  <p style="margin-left: 3px; margin-top:0px; margin-bottom:0" align="center">
				<input name="T1" type="text" class="o" size="20"></p>
				<p style="margin-left: 3px; margin-top:3px; margin-bottom:0" align="center">
				<input type="image" src="images/pressme.jpg"  name="B1" class="o" value="Submit">
				</p>
			</form>
			</td>
		<td style="background-image: url(images/tabel_03.jpg);" width="3" height="136">
		  </td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="images/tabel_04.jpg" width="145" height="11" alt=""></td>
	</tr>
</table>
		 <p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
		</td>
		<td colspan="13">
			<img src="images/support.jpg" width="639" height="23" alt=""></td>
		<td>
			<img src="images/index_20.jpg" width="2" height="23" alt=""></td>
	</tr>
	<tr>
		<td style="background-image: url(images/backft2.jpg);">&nbsp;	  </td>
		<td colspan="13" style="background-image: url(images/index_22.jpg);">
			<p style="margin-left: 5px; margin-right: 5px; margin-bottom:0">			<span class="o">
			<br>
			</span><span class="txtn">
			<font color="#D61217">
			<img border="0" src="images/register.jpg" width="32" height="32" style="vertical-align:middle;" alt=""> 
			User Registration</font></span></p>
<?
if ($error) {
    foreach($error as $key => $value)
    {
      echo "<p style=\"margin-left: 5px; margin-right: 5px; margin-bottom:0\">			<span class=\"o\"><br>
			<b><font color=\"#FF0000\">Error</font></b>: $value</span></p>";
    }


echo "			<p style=\"margin-left: 5px; margin-right: 5px\" align=\"center\" class=\"o\">&nbsp;			
			<a href=\"register.php\">Go back</a></p>";
}

?>


<?

echo $ion;  ?>			

			<p style="margin-left: 5px; margin-right: 5px; margin-bottom:0" align="center">&nbsp;</p>
			<p style="margin-left: 5px; margin-right: 5px" align="center">&nbsp;</p>
			<p style="margin-left: 5px; margin-right: 5px" align="center">&nbsp;			</p>
			<p style="margin-left: 5px; margin-right: 5px" align="center">&nbsp;</p>
			<p style="margin-left: 5px; margin-right: 5px" align="center">&nbsp;</p>
	  </td>
	</tr>
	<tr>
		<td colspan="17">
			<img src="images/index_23.jpg" width="790" height="30" alt=""></td>
	</tr>
<? echo $footer; ?>		<td>
			<img src="images/spacer.gif" width="110" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="2" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="37" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="13" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="60" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="2" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="25" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="85" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="2" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="110" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="2" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="113" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="2" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="113" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="2" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="110" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="2" height="1" alt=""></td>
	</tr>
</table>
</div>
</body>
</html>
