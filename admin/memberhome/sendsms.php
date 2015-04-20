<?
include "igwt.php";
include "mysql.php";

$number = $_GET[phone];

session_start(); 



if ($_SESSION['username'] == '')
{
include "loginerror.php";
die;
exit;
break;
}
$username = $_SESSION['username'];

$check = mysql_query("SELECT name, firstname, active, sms FROM users WHERE username = '$username'");
$row = mysql_fetch_row($check); 


$grouplist = $_GET[grouplist];

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

<script type="text/javascript">
<!--
function getObject(obj) {
  var theObj;
  if(document.all) {
    if(typeof obj=="string") {
      return document.all(obj);
    } else {
      return obj.style;
    }
  }
  if(document.getElementById) {
    if(typeof obj=="string") {
      return document.getElementById(obj);
    } else {
      return obj.style;
    }
  }
  return null;
}

//Contador de caracteres.
function Contar(entrada,salida,texto,caracteres) {
  var entradaObj=getObject(entrada);
  var salidaObj=getObject(salida);
  var longitud=caracteres - entradaObj.value.length;
  if(longitud <= 0) {
    longitud=0;
    texto='<span class="disable"> '+texto+' </span>';
    entradaObj.value=entradaObj.value.substr(0,caracteres);
  }
  salidaObj.innerHTML = texto.replace("{CHAR}",longitud);
}

//-->
</script>

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

function popUp2(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=1,width=450,height=500,left = 100,top = 100');");
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
			Welcome, <? echo $_SESSION['name']; echo " "; echo $_SESSION['firstname']; ?>! You have <? echo $_SESSION['sms']; ?> SMS credits for your account.</td>
	</tr>
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
<table id="table2" width="145" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="2">
			 <p>
			<img src="images/tabel_01.jpg" width="145" height="13" alt=""></td>
	</tr>
	<tr>
		<td width="142">
			<p style="margin-left: 3px">
			<img border="0" src="images/chat.jpg" width="24" height="24" alt="Test our service" style="vertical-align:middle;">
			<span class="txtn">Quick Tip</span></p>
			<p class="o" style="margin-left: 6px; margin-top:0; margin-bottom:5px">
			<u>Abbreviations</u></p>
			<p class="o" style="margin-left: 6px; margin-top:0; margin-bottom:5px">
			AFAIK ~ As far as I know<br>
			Cm ~ Call me<br>
			Cul ~ See you later<br>
			Gr8 ~ Great<br>
			PCM ~ Please call me<br>
			SRY ~ Sorry</p>
			</td>
		<td style="background-image: url(images/tabel_03.jpg);" width="3" height="136">
		  </td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="images/tabel_04.jpg" width="145" height="11" alt=""></td>
	</tr>
</table> <p> </p>
<p> </p>
<p><br>
		</td>
		<td colspan="13">
			<img src="images/smstop.jpg" alt="" width="639" height="23"></td>
		<td>
			<img src="images/index_20.jpg" width="2" height="23" alt=""></td>
	</tr>
	<tr>
		<td style="background-image: url(images/backft2.jpg);"> 	  </td>
		<td colspan="13" style="background-image: url(images/index_22.jpg);">
               		<p align="center"><br>
					</p>
               		<p align="center" class="o"><b><font color="#FF0000">Need more messages? Please 
					<a href="freesms.php"><font color="#FF0000">click here</font></a> to get some free ones!</font></b></p>
               		<img border="0" src="images/mail.jpg" style="vertical-align:middle;" alt="" width="32" height="32">  
		                    <span class="txtn">Let's send SMS messages!</span>		
							<p style="margin-top: 0; margin-bottom: 0"> </p>
							<form name="sms" action="sendsms2.php" method="post">
							<div align="center">
							<table id="Table_01" width="499" height="80" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td class="o" width="163">
			<p style="margin-left: 40px"> To:</td>
		<td>
			    <input name="receiver" type="text" class="o" size="26" value="<? echo $number; ?>">			  <input type="hidden" name="r_receiver" value="Receiver">
  
				<a href="javascript:popUp('numberformat.html')" class="o">
				<font color="#0000FF">Number format</font></a>, <span class="o">
				<a href="coverage.php">country codes</a></span></td>
	</tr>
	<tr>
		<td width="163">
			    <p style="margin-left: 40px">
			    <span class="o"> From (sender ID):</span></td>
		<td>
			    <input name="from" type="text" class="o" size="26"></td>
	</tr>
</table>

			  				</div>

			  <table align="center" class="0" border="0" cellspacing="1" cellpadding="5" width="423">
  <tr>
    <td align="right" class="1">
	<p align="left" class="o">SMS Message</td>
    <td class="2" width="293">
	<textarea name="message" cols="44" rows="6" class="o" id="eBann" onKeyUp="Contar('eBann','sBann','{CHAR} characters left.',160);" maxlength="100" size="60"></textarea>
	<br><span id="sBann" class="o">160 characters left.</span></td>
  </tr>
</table>
		  					<p style="margin-top: 0; margin-bottom: 0"> </p>
		  <table cellspacing=0 cellpadding=2 border=0 width=250 style="border:1 #666666 Solid" align="center">
		    <tr>
		       <td height=20 bgcolor="#EEEEEE" class="o"><b>Favorite 
				List     [<font color=#FFFFFF><a href="fav.php">edit</a></font>]</b><font size="1" face="Verdana, Arial, Helvetica, sans-serif"> </font></td>

		    </tr>
		   
<?
$sql = "SELECT addrid, nickname FROM favlsit WHERE owner = '$username'";
$result = mysql_query($sql);
while ($rand = mysql_fetch_assoc($result)) {
				

  $check = mysql_query("SELECT phone FROM addressbook WHERE id = '$rand[addrid]'");
	$row = mysql_fetch_row($check);
				echo " <tr><td height=18 bgcolor=EEEEEE><a href=\"javascript:AddReceiver('$row[0]')\" class=\"o\">  
						$rand[nickname]</a></td></tr>"; 							
			}			
?>
			<tr>
			  <td bgcolor=#EEEEEE>
			    <div align="center" class="o">
			      <p align="left"><b>Address Book</b></div></td>
			</tr>
<?
if ($grouplist == '') {
$sql = "SELECT nickname, phone FROM addressbook WHERE owner = '$username'";
$result = mysql_query($sql);
while ($rand = mysql_fetch_assoc($result)) {
				
				echo " <tr><td height=18 bgcolor=EEEEEE><a href=\"javascript:AddReceiver('$rand[phone]')\" class=\"o\">  
						$rand[nickname]</a></td></tr>"; 							
			}	
}
else
{

$sql = "SELECT nickname, phone, grup FROM addressbook WHERE owner = '$username'";
$result = mysql_query($sql);
while ($rand = mysql_fetch_assoc($result)) {
				if ($rand[grup] == $grouplist){
				echo " <tr><td height=18 bgcolor=EEEEEE><a href=\"javascript:AddReceiver('$rand[phone]')\" class=\"o\">  
						$rand[nickname]</a></td></tr>"; }
			}	


}
		
?>			<tr>
			  <td bgcolor=#EEEEEE>
			    <div align="center" class="o">
			      <p align="left">Address book groups: <select onChange="javascript:go2group(this.value);" name="grouplist" size="1" class="o">
						<option value="">Select Group</option>
						<option value="">All Groups</option>

<?
$sql = "SELECT grup FROM groups WHERE owner = '$username'";
$result = mysql_query($sql);
while ($rand = mysql_fetch_assoc($result)) {
				
				echo "<option value=\"$rand[grup]\">$rand[grup]</option>"; 							
			}			
?>						   </select>
</div></td>
			</tr>

		  </table>
				<p align="center">
				<input type="image" src="images/pressme.jpg"  name="B2" class="o" value="Submit"></p>
</form><p>
                                          			

							<img border="0" src="images/desp.jpg" width="400" height="5" alt=""></p>
							<p>
                                          			

							<img border="0" src="images/help.jpg" style="vertical-align:middle;" alt="" width="36" height="36"> <span class="txtn">Info</span></p>
							<p style="margin-left: 5px">
			<span class="o">
			<img border="0" src="images/arr2.jpg" width="10" height="7" alt=""> 
							In order to send the message to more than one 
			recipient, please separate the phone numbers with a comma. Eg.: 
			1555987456, 1549634896, 1892475654</span></p>
					<p style="margin-left: 5px">
			<span class="o">
			<img border="0" src="images/arr2.jpg" width="10" height="7" alt=""> 
							If you want a reply on your mobile phone, enter your 
							mobile number in the same format as for the 
							recipient (in the "sender ID" field)</span></p>
							<p style="margin-left: 5px">
			<span class="o">
			<img border="0" src="images/arr2.jpg" width="10" height="7" alt=""> 
							<font color="#FF0000">If you want to trick your friends, you may enter 
							someone else's mobile phone number in the "sender ID" 
							field. You may also use characters, not just 
							numbers. When the message is received, the recipient 
			of the message will see the number which was specified by you (in 
			the "sender ID" field).</font></span></p>
							<p style="margin-left: 5px; margin-bottom: 10px">
			<span class="o">
			<img border="0" src="images/arr2.jpg" width="10" height="7" alt="">			Eg. the number in the UK (+44) 0848 9123 456 becomes 
			448489123456</span></p>		<p align="center"><br>
			</p>
</td>
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
<script language="Javascript">

  function go2group(url){
		location.replace("?grouplist="+url);
		
  }
  
function AddMessage(content){
	if(content!="")
		document.sms.message.value=content;
		textCounter(document.sms.message,document.sms.chrLabel,158);
}

function AddReceiver(content){
	var temp=document.sms.receiver.value;
	var temp_s;
	var finalStr;
	if(content!=""){
		if(temp!=""){
			temp +=","+content;
			finalStr=removeDuplicates(temp);
		}else
			finalStr=content;
		
		document.sms.receiver.value=finalStr;
	}
}


function removeDuplicates(field){ 
	var temp = field; 
	var array = temp.split(","); 
	array.sort(); 
	temp = array.join(","); 

	var orig = field.split(",");
	var finalStr = ""; 
	for (var i=0; i<orig.length; i++) { 
		//alert(temp+"<==>"+orig[i]);
		if (temp.indexOf(orig[i] + ",") != -1) { 
			finalStr += orig[i] + ","; 
			temp = temp.split(orig[i] + ",").join(","); 
			temp = temp.split("," + orig[i]).join(","); 
		} else if (temp.indexOf("," + orig[i]) != -1) { 
			finalStr += orig[i] + ","; 
			temp = temp.split(orig[i] + ",").join(","); 
			temp = temp.split("," + orig[i]).join(","); 
		} 
		//alert(finalStr);
	} 
	if (finalStr.substring(finalStr.length-1, finalStr.length) == ",") { 
		finalStr = finalStr.substring(0, finalStr.length-1); 
	} 
	return finalStr; 
}

function CheckLimitChars(TotalLength,ObjTextBox,ObjDiv){

	var UsedLength=ObjTextBox.value.length;
	LastComment=ObjTextBox.value;
	var credit;
	credit=UsedLength/160;
	credit=Math.ceil(credit);
	var RemChar=(credit*TotalLength)-UsedLength;		
	if(RemChar<0) RemChar=0;
	
	document.sms.chrLabel.value="Total "+credit+" credit used. "+RemChar+" chars remaining";
	
	/*
	if(document.layers){
		document.DivRemChar.document.write("<font color=CCCCCC>"+credit+" credit used. "+RemChar+" chars remaining</font>");
		document.DivRemChar.document.close();
	}
	else if(document.getElementById)
		document.getElementById("DivRemChar").innerHTML="<font color=CCCCCC>"+credit+" credit used. "+RemChar+" chars remaining</font>";
	else
		document.all.DivRemChar.innerHTML="<font color=CCCCCC>"+credit+" credit used. "+RemChar+" chars remaining</font>";
	*/	
		
}

function textCounter(field,cntfield,maxilimit) {
	var maxlimit = 453;
	var TotalLength=field.value.length;
	var credit=TotalLength/158;
	credit=Math.ceil(credit);
	if (field.value.length > maxlimit) // if too long...trim it!
		//cntfield.value = "There is a limit of 3 linked messages per receipient.";//       "  + chr + " characters left.";		
		field.value = field.value.substring(0, maxlimit);
		
	// otherwise, update 'characters left' counter
	else{
		chrlimit=credit*maxlimit;
		chr=chrlimit - field.value.length;
		cntfield.value = "This message: "+ credit +" credit(s) per receipient.";//       "  + chr + " characters left.";
	}	
}

function CheckCreditCounts(ObjTextBox){
	var PerCredit=156;
	var TotalCharacters=ObjTextBox.value.length;
	var TotalCredit=TotalCharacters/PerCredit;
	var OverallUsed=0;
	TotalCredit=Math.ceil(TotalCredit);
	
	
	var Receiver=document.sms.receiver.value;
	var msg="";
	
	var Count;
	Count=CountReceiver(Receiver);
	OverallUsed=TotalCredit*Count
	if(Receiver=="")
		msg=msg+"Receiver is blank\n";
	if(ObjTextBox.value=="")
		msg=msg+"Message is blank\n";

    if(OverallUsed <= 3)
		return true;

	if(msg!=""){
		alert(msg);
		return false;
	}else
			return true;	
}

function CountReceiver(field){
	var temp = field;
	
	var array = temp.split(","); 
	array.sort(); 
	temp = array.join(","); 

	var orig = field.split(",");
	var CountReceiver=orig.length;
	return CountReceiver; 
}

function updateMessage(me){
      while(me.indexOf("\"")!=-1) {
        me=me.replace("\"","`")
    }
    document.sms.message.value=me

}

</script>