<?
include "mysql.php";

session_start(); 
if ($_SESSION['username'] == '')
{
include "loginerror.php";
die;
exit;
break;
}
$price = $_POST[R1];

$check = mysql_query("SELECT credits FROM paypal WHERE price = '$price'");
$no = mysql_fetch_row($check); 

 $check = mysql_query("SELECT content FROM configuration WHERE description = 'paypal'");
	$mail = mysql_fetch_row($check);
	
	$n = base64_encode($no[0]);

$username = $_SESSION['username'];

$username = base64_encode($username);

$full_url = 'http://';
$full_url .= sprintf($HTTP_HOST); 

$full_url .= "/paypal/returnok.php?id=$username&n=$n";


$cancel = 'http://';
$cancel .= sprintf($HTTP_HOST); 
$cancel .= "/paypal/returnnegative.php?id=$username";

session_destroy();
?>
<HTML>
  	    <body onLoad="frmAutoPost()">
  	    Please wait...
		
            <form name=frm method=post action="https://www.paypal.com/cgi-bin/webscr">
			<input type=hidden name="cmd" value="_xclick">
			<input type=hidden name="business" value="<? echo $mail[0]; ?>">
			<input type=hidden name="item_name" value="SMS Credit Purchase">
			<input type=hidden name="amount" value="$<? echo $price; ?>">
			<input type=hidden name="return" value="<? echo $full_url; ?>">
			<input type=hidden name="cancel_return" value="<? echo $cancel; ?>">
			<input type=hidden name="shipping" value="0.00">
			<input type=hidden name="undefined_quantity" value="1">
			<input type=hidden name="quantity" value="1">
			<input type=hidden name="currency" value="USD">
			<input type=hidden name="currency_code" value="USD">
			</form>
	    </body>
	    </HTML>
	    
<script language=javascript>
function frmAutoPost(){
 myTimer=setTimeout("document.frm.submit()",0);

}
</script>