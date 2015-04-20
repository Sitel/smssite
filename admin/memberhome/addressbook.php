<?
include "igwt.php";
include "mysql.php";


session_start(); 

$check = mysql_query("SELECT clicks, registrations FROM affiliates WHERE username = '$username'");
$row = mysql_fetch_row($check); 

$_SESSION['clicks'] = $row[0];
$_SESSION['registrations'] = $row[1];

if ($_SESSION['username'] == '')
{
include "loginerror.php";
die;
exit;
break;
}

$activa = "			<p align=\"left\" class=\"o\" style=\"margin-right: 25px; margin-left:10px\">
			<img border=\"0\" src=\"images/arr2.jpg\" width=\"10\" height=\"7\" alt=\"\" style=\"vertical-align:middle;\">
			Insert here the <font color=\"#FF0000\">activation code</font> you received in the SMS message when 
			you signed up:<form method=\"POST\" action=\"activate.php\">
				<p align=\"left\" class=\"o\" style=\"margin-left: 10px; margin-right: 25px\">
				<input name=\"T2\" type=\"text\" class=\"o\" size=\"20\">
				<input type=\"image\" src=\"images/pressme.jpg\"  name=\"B1\" class=\"o\" value=\"Submit\" style=\"vertical-align:top;\"></p>
			</form>
";

$check = mysql_query("SELECT name, firstname, active, sms FROM users WHERE username = '$username'");
$row = mysql_fetch_row($check); 




$_SESSION['name'] = $row[0];
$_SESSION['firstname'] = $row[1]; 
$_SESSION['active'] = $row[2];
$_SESSION['sms'] = $row[3];
$_SESSION['username'] = $username;

echo $sus;
?>


<style type="text/css" media="all">
@import "main.css";
</style>
<script type="text/JavaScript">
<!--
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

function popUp(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=450,height=200,left = 100,top = 100');");
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>

<body bgcolor="#FFFFFF" onLoad="MM_preloadImages('images/over_02.jpg','images/over_04.jpg','images/over_06.jpg','images/over_08.jpg','images/over_10.jpg','images/over_12.jpg','images/over_14.jpg','images/mhome2.jpg','images/profile2.jpg','images/sms2.jpg','images/history2.jpg','images/free2.jpg','images/purchase2.jpg','imagesforums2.jpg','images/signout2.jpg')">
<div align="center">
<table id="Table_01" width="790" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="7">
			<img src="images/index_01.jpg" width="249" height="77" alt=""></td>
		<td colspan="10" style="background-image: url(images/index_02.jpg);">
		<p align="right" class="txt" style="margin-right: 25px">
Welcome, <? echo $_SESSION['name']; echo " "; echo $_SESSION['firstname']; ?>! You have <? echo $_SESSION['sms']; ?> SMS credits for your account.</tr>
	<tr>
		<td colspan="17">
			<img src="images/top3.jpg" alt="" width="790" height="151"></td>
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
<table id="table1" width="144" height="144" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td>
			<p style="margin-left: 1px">
			<a href="myaccount.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('MemberHome','','images/mhome2.jpg',1)"><img src="images/mhome.jpg" name="MemberHome" width="144" height="18" border="0" alt="Member Home"></a></td>
	</tr>
	<tr>
		<td>
			<p style="margin-left: 1px">
			<a href="profile.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Profile','','images/profile2.jpg',1)"><img src="images/profile.jpg" alt="Profile" name="Profile" width="144" height="18" border="0"></a></td>
	</tr>
	<tr>
		<td>
			<p style="margin-left: 1px">
			<a href="sendsms.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('SMS','','images/sms2.jpg',1)"><img src="images/sms.jpg" alt="Send SMS" name="SMS" width="144" height="18" border="0"></a></td>
	</tr>
		<tr>
		<td>
			<p style="margin-left: 1px">
			<a href="addressbook.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Address Book','','images/address2.jpg',1)"><img src="images/address.jpg" alt="Address Book" name="Address Book" width="144" height="18" border="0"></a></td>
	</tr>
	<tr>
		<td>
			<p style="margin-left: 1px">
			<a href="history.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('History','','images/history2.jpg',1)"><img src="images/history.jpg" alt="Message History" name="History" width="144" height="18" border="0"></a></td>
	</tr>
	<tr>
		<td>
			<p style="margin-left: 1px">
			<a href="freesms.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Free','','images/free2.jpg',1)"><img src="images/free.jpg" alt="Get Free SMSs" name="Free" width="144" height="18" border="0"></a></td>
	</tr>
	<tr>
		<td>
			<p style="margin-left: 1px">
			<a href="purchase.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Purchase','','images/purchase2.jpg',1)"><img src="images/purchase.jpg" alt="Purchase SMS" name="Purchase" width="144" height="18" border="0"></a></td>
	</tr>
	<tr>
		<td>
			<p style="margin-left: 1px">
			<a href="forum" target="_blank" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Forums','','imagesforums2.jpg',1)"><img src="imagesforums.jpg" alt="Forums" name="Forums" width="144" height="18" border="0"></a></td>
	</tr>
	<tr>
		<td>
			<p style="margin-left: 1px">
			<a href="signout.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Signout','','images/signout2.jpg',1)"><img src="images/signout.jpg" alt="Sign Out" name="Signout" width="144" height="18" border="0"></a></td>
	</tr>
</table>
<br><br><br>
<table id="table3" width="145" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="2">
			<img src="images/tabel_01.jpg" width="145" height="13" alt=""></td>
	</tr>
	<tr>
		<td width="142">
			<p style="margin-left: 3px">
			<img border="0" src="images/fav.jpg" width="24" height="24" alt="Test our service" style="vertical-align:middle;"> 
			<span class="txtn">Favorite List</span></p>
			<p class="o" style="margin-left: 6px; margin-top:0; margin-bottom:5px" align="left">
			Click <a href="fav.php">here</a> to access it</p>
			</td>
		<td style="background-image: url(images/tabel_03.jpg);" width="3" height="136">
		  </td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="images/tabel_04.jpg" width="145" height="11" alt=""></td>
	</tr>
</table>
		 	  

		<p><br>		</td>
		<td colspan="13">
			<img src="images/addressb.jpg" alt="" width="639" height="23"></td>
		<td>
			<img src="images/index_20.jpg" width="2" height="23" alt=""></td>
	</tr>
	<tr>
		<td style="background-image: url(images/backft2.jpg);"> 	  </td>
		<td colspan="13" style="background-image: url(images/index_22.jpg);">		<p align="center">
					<br><table cellspacing=0 cellpadding=2 border=0 width=99% style="border:1 Solid #CCCCCC" bgcolor=EEEEEE>
				  <tr bgcolor=#444444>
				    <td><p class="o2">#</p></td>
				    <td><p class="o2">Nickname</p></td>
				    <td><p class="o2">Full Name</p></td>
				    <td><p class="o2">Email</p></td>
				    <td><p class="o2">Mobile Phone</p></td>
				    <td><p class="o2">Group</p></td>
				    <td><p class="o2">Action</p></td>
				     </tr>
				     <?
$sql = "SELECT * FROM  addressbook WHERE owner = '$username'";
$result = mysql_query($sql);

$totale = 0;
while ($rand = mysql_fetch_assoc($result)) {
				$totale = $totale + 1;

				echo "					  <tr bgcolor=EEEEEE>
					    <td><p class=\"o\">$totale</p></td>
					    <td><a class=\"o\" href=\"addressbook.php?profile=$rand[id]#form\">$rand[nickname]</a></td>
					    <td><p class=\"o\">$rand[first] $rand[last]</p></td>
					    <td><a class=\"o\" href=\"mailto:$rand[email]\">$rand[email]</a></td>
					    <td><p class=\"o\">$rand[phone]</p></td>
					    <td><p class=\"o\">$rand[grup]</p></td>
						<td><a class=\"o\" href=\"addressedit.php?user=$rand[id]\">Edit</a>
					      | <a class=\"o\" href=\"addressbook_del.php?profile=$rand[id]\">Delete</a>
					      | <a class=\"o\" href=\"sendsms.php?phone=$rand[phone]\">SMS</a>  
					    </td>

					  </tr>"; 							
			}			
?>
      </table>
<br><form method="POST" action="addressbook2.php" >
  				<p> </p>
  <table width="100%"  border="0" cellpadding="5" cellspacing="1" class="box_inner" id="table2">

          <tr>
		    <td width="172" class="o">Nickname<font color="#FF0000"> *</font><span class="o"> </span></td>
		    <td >
			<input name="nickname" type="text" class="o"  value="" size="30" maxlength="65" />
 </td>
    		</tr>

          <tr>
            <td width="172" class="o">Mobile Phone
	  
	  
      <font color="#FF0000">*</font><span class="o"> </span></td>
            <td >
			<input name="mobile" type="text" class="o" id="email"  value="" size="30" maxlength="65" /></td>
          </tr>
          <tr>
		    <td width="172" class="o">Fax</td>
		    <td >
			<input name="fax" type="text" class="o"  value="" size="30" maxlength="65" />
 </td>
    		</tr>
			<tr>
		    <td width="172" class="o">Home Phone</td>
		    <td >
			<input name="home" type="text" class="o"  value="" size="30" maxlength="65" />
 </td>
    		</tr>
          <tr>
            <td width="172" class="o">Group</td>
            <td ><select size="1" name="group" class="o">
            <option selected value="">No group</option>
 <?

$owner = $_SESSION['username'];

$sql = "SELECT grup FROM groups WHERE owner = '$owner'";
$result = mysql_query($sql);

$totale = 0;
while ($rand = mysql_fetch_assoc($result)) {
				$totale = $totale + 1;

				echo "<option value=\"$rand[grup]\">$rand[grup]</option>";  							
			}			
?>

			</select>            </td>
          </tr>

          <tr>
            <td width="172" class="o">First Name</td>
            <td >
			<input name="first" class="o"  value="" maxlength="65" size="30" />            </td>
          </tr>
		  <tr>
            <td width="172" class="o">Last Name</td>
            <td >
			<input name="last" class="o"  value="" maxlength="65" size="30" />            </td>

          </tr>
			<tr>
		    <td width="172" class="o">E-mail</td>
		    <td >
			<input name="email" type="text" class="o"  value="" size="30" maxlength="65" />
 </td>
    		</tr>
		  <tr>
		    <td width="172" class="o">Address</td>
		    <td >
			<input name="address" type="text" class="o"  value="" size="30" maxlength="65" />
 </td>
    		</tr>
			<tr>
		    <td width="172" class="o">City</td>
		    <td >
			<input name="city" type="text" class="o"  value="" size="30" maxlength="65" />
 </td>
    		</tr>
			<tr>
		    <td width="172" class="o">State</td>
		    <td >
			<input name="state" type="text" class="o"  value="" size="30" maxlength="65" />
 </td>
    		</tr>
			<tr>
		    <td width="172" class="o">ZIP</td>
		    <td >
			<input name="zip" type="text" class="o"  value="" size="30" maxlength="65" />
 </td>
    		</tr>
			<tr>
		    <td width="172" class="o">Country</td>
		    <td >
			<input name="country" type="text" class="o"  value="" size="30" maxlength="65" />
 </td>
    		</tr>
		  <tr>
		    <td width="172" class="o">Details</td>
		    <td >
			<textarea rows="6" name="details" cols="42"></textarea>
 </td>
    </tr>
	
	 </table>
	<p>
	  
	  
      <font color="#FF0000">*</font><span class="o"> - Required field.</span></p>

	<p>
				<input type="image" src="images/pressme.jpg"  name="B3" class="o" value="Submit">
	</p>
</form>
		<form method="POST" action="addgroup.php">
			<p class="o" align="center">Add new user group:     <input type="text" name="T1" size="20" class="o"></p>
				<input type="image" src="images/pressme.jpg"  name="B3" class="o" value="Submit">
		</form>
<?
if ($totale != 0)
{		
$owner = $_SESSION['username'];

$sql = "SELECT id, grup FROM groups WHERE owner = '$owner'";
$result = mysql_query($sql);

$totale = 0;
while ($rand = mysql_fetch_assoc($result)) {
				$totale = $totale + 1;

echo "<form method=\"POST\" action=\"grup.php\">
	<p><input type=\"text\" name=\"grp\" size=\"20\" class=\"o\" value=\"$rand[grup]\">  <input type=\"submit\" value=\"Delete\" name=\"delete\" class=\"o\"> <input type=\"submit\" value=\"Rename\" name=\"rename\" class=\"o\"></p>
<input type=\"hidden\" name=\"id\" value=\"$rand[id]\">
</form>";

			}			
}
?>
			</p> </td>
	</tr>
	<tr>
		<td colspan="17">
			<img src="images/index_23.jpg" width="790" height="30" alt=""></td>
	</tr>
<? echo $footer; ?>	<tr>
		<td>
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