<?php

include("geo/geoip.inc");




$gi = geoip_open("/home/ms/public_html/ads/GeoIP.dat",GEOIP_STANDARD);

$usr = $REMOTE_ADDR;


if ((geoip_country_code_by_addr($gi, $usr) == "US") or (geoip_country_code_by_addr($gi, $usr) == "CA"))
{
geoip_close($gi); 
include "freesms2.php";
}
else
{
geoip_close($gi); 
include "freesms2.php";
}





?>
