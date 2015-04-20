<?
include "igwt.php";
session_start(); 

if ($_SESSION['admin'] == '')
{
include "login.php";
die;
exit;
break;
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Administrator Area</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<META http-equiv="Content-Language" content="en-us">
<META name="robots" content="index,follow">
<META name="revisit-after" content="30 days">
<META name="keywords" content="free, sms, anonymous, cheap sms, spoofed sms, spoofed, spoof sms header, sms header, sms forum, sms for free, worldwide coverage sms, wordlwide, text messages">
<meta name="description" content="delivers the best free sms service on the internet! Trick your friends by sending them spoofed sender messages.">
<META name="page-topic" content="Free SMS">


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
<body bgcolor="#FFFFFF" onLoad="MM_preloadImages('images/over_02.jpg','images/over_04.jpg','images/over_06.jpg','images/over_08.jpg','images/over_10.jpg','images/over_12.jpg','images/over_14.jpg','images/signout2.jpg','images/admin2.jpg','images/faq2.jpg','images/credits2.jpg','images/conf2.jpg','images/news2.jpg','images/sql2.jpg','images/mass2.jpg','images/member2.jpg','images/hom2.jpg')">
<table id="Table_01" width="790" border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td colspan="7">
			<img src="images/index_01.jpg" width="249" height="77" alt=""></td>
		<td colspan="10" style="background-image: url(images/index_02.jpg);">
		<p align="right" class="txt" style="margin-right: 25px">
Welcome back, Administrator!</td>
	</tr>
	<tr>
		<td colspan="17">
			<img src="images/top2.jpg" alt="" width="790" height="151"></td>
	</tr>
	<tr>
		<td>
			<a onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Home','','images/over_02.jpg',1)" href="../index.php"><img src="images/index_04.jpg" name="Home" width="110" height="24" border="0" alt="Home"></a></td>
		<td>
			<img src="images/index_05.jpg" width="2" height="24" alt=""></td>
		<td colspan="3">
			<a onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('My Account','','images/over_04.jpg',1)" href="../myaccount.php"><img src="images/raw2_05.jpg" name="My Account" width="110" height="24" border="0" alt="My Account"></a></td>
		<td>
			<img src="images/index_07.jpg" width="2" height="24" alt=""></td>
		<td colspan="2">
			<a onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Sign Up','','images/over_06.jpg',1)" href="../signup.php"><img src="images/raw2_06.jpg" name="Sign Up" width="110" height="24" border="0" alt="Sign Up"></a></td>
		<td>
			<img src="images/index_09.jpg" width="2" height="24" alt=""></td>
		<td>
			<a onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Features','','images/over_08.jpg',1)" href="../features.php"><img src="images/raw2_08.jpg" name="Features" width="110" height="24" border="0" alt="Features"></a></td>
		<td>
			<img src="images/index_11.jpg" width="2" height="24" alt=""></td>
		<td>
			<a onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Coverage','','images/over_10.jpg',1)" href="../coverage.php"><img src="images/raw2_10.jpg" name="Coverage" width="113" height="24" border="0" alt="Coverage"></a></td>
		<td>
			<img src="images/index_13.jpg" width="2" height="24" alt=""></td>
		<td>
			<a onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Forum','','images/over_12.jpg',1)" href="../forum"><img src="images/index_14.jpg" name="Pricing" width="113" height="24" border="0" alt="Pricing"></a></td>
		<td>
			<img src="images/index_15.jpg" width="2" height="24" alt=""></td>
		<td colspan="2">
			<a onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Support','','images/over_14.jpg',1)" href="../faq.php"><img src="images/index_16.jpg" name="Support" width="112" height="24" border="0" alt="Suport"></a></td>
	</tr>
	<tr>
		<td colspan="17">
			<img src="images/index_17.jpg" width="790" height="23" alt=""></td>
	</tr>
	<tr>
<? echo $adminlink; ?>		</td>
		<td colspan="13">
			<img src="images/admin.jpg" width="639" height="23" alt=""></td>
		<td>
			<img src="images/index_20.jpg" width="2" height="23" alt=""></td>
	</tr>
	<tr>
		<td style="background-image: url(images/backft.jpg);">&nbsp;	  </td>
		<td colspan="13" style="background-image: url(images/index_22.jpg);">
			<p align="center" class="o">
			<p align="center" class="o">
			<p align="center" class="o">
			<form method="POST" action="sendmail.php">
				<p align="center" class="o">
				Mail Subject:
				<input name="subject" type="text" class="o" size="35">
				</p>
				<p align="center" class="o">
				Mail body:</p>
				<p align="center" class="o">
				<textarea name="body" cols="95" rows="15" class="o"></textarea>
				</p>
				<p align="center" class="o">
				Send to users in this country:&nbsp;
				  <select name="country" size="1" class="o">
                        <option value="Afghanistan"> 
            Afghanistan</option>
            			<option value="newsletter">Newsletter</option>
            			<option selected value="all">All users</option>
            <option value="Albania"> 
            Albania</option>

            <option value="Algeria"> 
            Algeria</option>
            <option value="American Samoa"> 
            American Samoa</option>
            <option value="Andorra"> 
            Andorra</option>
            <option value="Angola"> 
            Angola</option>
            <option value="Anguilla"> 
            Anguilla</option>

            <option value="Antigua and Barbuda"> 
            Antigua and Barbuda</option>
            <option value="Argentina"> 
            Argentina</option>
            <option value="Armenia"> 
            Armenia</option>
            <option value="Aruba"> 
            Aruba</option>
            <option value="Australia"> 
            Australia</option>

            <option value="Austria"> 
            Austria</option>
            <option value="Azerbaijan"> 
            Azerbaijan</option>
            <option value="Bahamas"> 
            Bahamas</option>
            <option value="Bahrain"> 
            Bahrain</option>
            <option value="Bangladesh"> 
            Bangladesh</option>

            <option value="Barbados"> 
            Barbados</option>
            <option value="Belarus"> 
            Belarus</option>
            <option value="Belgium"> 
            Belgium</option>
            <option value="Belize"> 
            Belize</option>
            <option value="Benin"> 
            Benin</option>

            <option value="Bermuda"> 
            Bermuda</option>
            <option value="Bhutan"> 
            Bhutan</option>
            <option value="Bolivia"> 
            Bolivia</option>
            <option value="Bosnia and Herzegovina"> 
            Bosnia and Herzegovina</option>
            <option value="Botswana"> 
            Botswana</option>

            <option value="Brazil"> 
            Brazil</option>
            <option value="British Virgin Islands"> 
            British Virgin Islands</option>
            <option value="Brunei Darussalam"> 
            Brunei Darussalam</option>
            <option value="Bulgaria"> 
            Bulgaria</option>
            <option value="Burkina Faso"> 
            Burkina Faso</option>

            <option value="Burundi"> 
            Burundi</option>
            <option value="Cambodia"> 
            Cambodia</option>
            <option value="Cameroon"> 
            Cameroon</option>
            <option value="Canada"> 
            Canada</option>
            <option value="Cape Verde"> 
            Cape Verde</option>

            <option value="Cayman Islands"> 
            Cayman Islands</option>
            <option value="Central African Republic"> 
            Central African Republic</option>
            <option value="Chad"> 
            Chad</option>
            <option value="Chile"> 
            Chile</option>
            <option value="China"> 
            China</option>

            <option value="Colombia"> 
            Colombia</option>
            <option value="Comoros"> 
            Comoros</option>
            <option value="Congo"> 
            Congo</option>
            <option value="Cook Islands"> 
            Cook Islands</option>
            <option value="Costa Rica"> 
            Costa Rica</option>

            <option value="Côte d'Ivoire"> 
            Côte d'Ivoire</option>
            <option value="Croatia"> 
            Croatia</option>
            <option value="Cuba"> 
            Cuba</option>
            <option value="Curacao"> 
            Curacao</option>
            <option value="Cyprus"> 
            Cyprus</option>

            <option value="Czech Republic"> 
            Czech Republic</option>
            <option value="Denmark"> 
            Denmark</option>
            <option value="Djibouti"> 
            Djibouti</option>
            <option value="Dominica"> 
            Dominica</option>

            <option value="Dominican Republic"> 
            Dominican Republic</option>
            <option value="Ecuador"> 
            Ecuador</option>
            <option value="Egypt"> 
            Egypt</option>
            <option value="El Salvador"> 
            El Salvador</option>
            <option value="Equatorial Guinea"> 
            Equatorial Guinea</option>

            <option value="Eritrea"> 
            Eritrea</option>
            <option value="Estonia"> 
            Estonia</option>
            <option value="Ethiopia"> 
            Ethiopia</option>
            <option value="Faroe Islands"> 
            Faroe Islands</option>
            <option value="Fiji"> 
            Fiji</option>

            <option value="Finland"> 
            Finland</option>
            <option value="France"> 
            France</option>
            <option value="French Guiana"> 
            French Guiana</option>
            <option value="French Polynesia"> 
            French Polynesia</option>
            <option value="Gabon"> 
            Gabon</option>

            <option value="Gambia"> 
            Gambia</option>
            <option value="Georgia"> 
            Georgia</option>
            <option value="Germany"> 
            Germany</option>
            <option value="Ghana"> 
            Ghana</option>
            <option value="Gibraltar"> 
            Gibraltar</option>

            <option value="Greece"> 
            Greece</option>
            <option value="Greenland"> 
            Greenland</option>
            <option value="Grenada"> 
            Grenada</option>
            <option value="Guadeloupe"> 
            Guadeloupe</option>
            <option value="Guam"> 
            Guam</option>

            <option value="Guatemala"> 
            Guatemala</option>
            <option value="Guinea"> 
            Guinea</option>
            <option value="Guinea-Bissau"> 
            Guinea-Bissau</option>
            <option value="Guyana"> 
            Guyana</option>
            <option value="Haiti"> 
            Haiti</option>

            <option value="Honduras"> 
            Honduras</option>
            <option value="Hungary"> 
            Hungary</option>
            <option value="Iceland"> 
            Iceland</option>
            <option value="India"> 
            India</option>
            <option value="Indonesia"> 
            Indonesia</option>

            <option value="Iran"> 
            Iran</option>
            <option value="Iraq"> 
            Iraq</option>
            <option value="Ireland"> 
            Ireland</option>
            <option value="Israel"> 
            Israel</option>
            <option value="Italy"> 
            Italy</option>

            <option value="Ivory Coast"> 
            Ivory Coast</option>
            <option value="Jamaica"> 
            Jamaica</option>
            <option value="Japan"> 
            Japan</option>
            <option value="Jordan"> 
            Jordan</option>
            <option value="Kazakhstan"> 
            Kazakhstan</option>

            <option value="Kenya"> 
            Kenya</option>
            <option value="Kiribati"> 
            Kiribati</option>
            <option value="Kuwait"> 
            Kuwait</option>
            <option value="Kyrgyzstan"> 
            Kyrgyzstan</option>
              <option value="Latvia"> 
            Latvia</option>
            <option value="Lebanon"> 
            Lebanon</option>
            <option value="Lesotho"> 
            Lesotho</option>
            <option value="Liberia"> 
            Liberia</option>
            <option value="Libya"> 
            Libya</option>

            <option value="Liechtenstein"> 
            Liechtenstein</option>
            <option value="Lithuania"> 
            Lithuania</option>
            <option value="Luxembourg"> 
            Luxembourg</option>
            <option value="Macau"> 
            Macau</option>
            <option value="Madagascar"> 
            Madagascar</option>

            <option value="Malawi"> 
            Malawi</option>
            <option value="Malaysia"> 
            Malaysia</option>
            <option value="Maldives"> 
            Maldives</option>
            <option value="Mali"> 
            Mali</option>
            <option value="Malta"> 
            Malta</option>

            <option value="Marshall Islands"> 
            Marshall Islands</option>
            <option value="Mauritania"> 
            Mauritania</option>
            <option value="Mauritius"> 
            Mauritius</option>
            <option value="Mexico"> 
            Mexico</option>
            <option value="Micronesia"> 
            Micronesia</option>

            <option value="Moldova"> 
            Moldova</option>
            <option value="Monaco"> 
            Monaco</option>
            <option value="Mongolia"> 
            Mongolia</option>
            <option value="Montserrat"> 
            Montserrat</option>
            <option value="Morocco"> 
            Morocco</option>

            <option value="Mozambique"> 
            Mozambique</option>
            <option value="Myanmar"> 
            Myanmar</option>
            <option value="Namibia"> 
            Namibia</option>
            <option value="Nauru"> 
            Nauru</option>
            <option value="Nepal"> 
            Nepal</option>

            <option value="Netherlands"> 
            Netherlands</option>
            <option value="Netherlands Antilles"> 
            Netherlands Antilles</option>
            <option value="New Caledonia"> 
            New Caledonia</option>
            <option value="New Zealand"> 
            New Zealand</option>
            <option value="Nicaragua"> 
            Nicaragua</option>

            <option value="Niger"> 
            Niger</option>
            <option value="Nigeria"> 
            Nigeria</option>
            <option value="Norway"> 
            Norway</option>
            <option value="Oman"> 
            Oman</option>
            <option value="Pakistan"> 
            Pakistan</option>

            <option value="Palau"> 
            Palau</option>
            <option value="Palestine"> 
            Palestine</option>
            <option value="Panama"> 
            Panama</option>
            <option value="Papua New Guinea"> 
            Papua New Guinea</option>
            <option value="Paraguay"> 
            Paraguay</option>

            <option value="Peru"> 
            Peru</option>
            <option value="Philippines"> 
            Philippines</option>
            <option value="Poland"> 
            Poland</option>
            <option value="Portugal"> 
            Portugal</option>
            <option value="Puerto Rico"> 
            Puerto Rico</option>

            <option value="Qatar"> 
            Qatar</option>
            <option value="Republic of Korea"> 
            Republic of Korea</option>
            <option value="Reunion"> 
            Reunion</option>
            <option value="Romania"> 
            Romania</option>
            <option value="Russia"> 
            Russia</option>

            <option value="Rwanda"> 
            Rwanda</option>
            <option value="Saipan"> 
            Saipan</option>
            <option value="San Marino"> 
            San Marino</option>
            <option value="Sao Tome and Principe"> 
            Sao Tome and Principe</option>
            <option value="Saudi Arabia"> 
            Saudi Arabia</option>

            <option value="Senegal"> 
            Senegal</option>
            <option value="Seychelles"> 
            Seychelles</option>
            <option value="Sierra Leone"> 
            Sierra Leone</option>
            <option value="Singapore"> 
            Singapore</option>
            <option value="Slovakia"> 
            Slovakia</option>

            <option value="Slovenia"> 
            Slovenia</option>
            <option value="Solomon Islands"> 
            Solomon Islands</option>
            <option value="Somalia"> 
            Somalia</option>
            <option value="South Africa"> 
            South Africa</option>
            <option value="Spain"> 
            Spain</option>

            <option value="Sri Lanka"> 
            Sri Lanka</option>
            <option value="St. Eustatius"> 
            St. Eustatius</option>
            <option value="St. Kitts and Nevis"> 
            St. Kitts and Nevis</option>
            <option value="St. Lucia"> 
            St. Lucia</option>
            <option value="St. Maarten"> 
            St. Maarten</option>
            <option value="Sudan"> 
            Sudan</option>
            <option value="Suriname"> 
            Suriname</option>
            <option value="Swaziland"> 
            Swaziland</option>
            <option value="Sweden"> 
            Sweden</option>

            <option value="Switzerland"> 
            Switzerland</option>
            <option value="Syrian Arab Republic"> 
            Syrian Arab Republic</option>
            <option value="Taiwan"> 
            Taiwan</option>
            <option value="Tajikistan"> 
            Tajikistan</option>
            <option value="Tanzania"> 
            Tanzania</option>

            <option value="Thailand"> 
            Thailand</option>
            <option value="Togo"> 
            Togo</option>
            <option value="Tonga"> 
            Tonga</option>
            <option value="Trinidad and Tobago"> 
            Trinidad and Tobago</option>
            <option value="Tunisia"> 
            Tunisia</option>

            <option value="Turkey"> 
            Turkey</option>
            <option value="Turkmenistan"> 
            Turkmenistan</option>
            <option value="Turks and Caicos Islands"> 
            Turks and Caicos Islands</option>
            <option value="Tuvalu"> 
            Tuvalu</option>
            <option value="U.S. Virgin Islands"> 
            U.S. Virgin Islands</option>

            <option value="U.S.A."> 
            U.S.A.</option>
            <option value="Uganda"> 
            Uganda</option>
            <option value="Ukraine"> 
            Ukraine</option>
            <option value="United Arab Emirates"> 
            United Arab Emirates</option>
            <option value="United Kingdom"> 
            United Kingdom</option>

            <option value="Uruguay"> 
            Uruguay</option>
            <option value="Uzbekistan"> 
            Uzbekistan</option>
            <option value="Vanuatu"> 
            Vanuatu</option>
            <option value="Vatican City"> 
            Vatican City</option>
            <option value="Venezuela"> 
            Venezuela</option>

            <option value="Vietnam"> 
            Vietnam</option>
            <option value="Wallis & Futuna"> 
            Wallis &amp; Futuna</option>
            <option value="Yemen"> 
            Yemen</option>
            <option value="Yugoslavia"> 
            Yugoslavia</option>

            <option value="Zambia"> 
            Zambia&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
            <option value="Zimbabwe"> 
            Zimbabwe</option>
</select></p>
				<p align="center" class="o">
				<input type="radio" value="V1" checked name="R1">Send this text 
				mail <input type="radio" name="R1" value="V2">Send this
				<a target="_blank" href="editable/mail.html">html</a> mail 
				editable <a target="_blank" href="editor2.php">here</a>.</p>
				<p align="center" class="o">
				<input name="B1" type="submit" class="o" value="Submit">
				<input name="B2" type="reset" class="o" value="Reset">
				</p>
			</form>
			<p align="center" class="o">
			<p align="center" class="o">
			<p align="center" class="o">
			<p align="center" class="o">
			<p></td>
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