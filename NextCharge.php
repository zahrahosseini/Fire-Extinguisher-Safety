<?php
ob_start ();
session_start ();
if (@$_SESSION ["Login"] != "go") {
	header ( "Location: login.php" );
	exit ();
}
//else echo "SET";
?>
<html>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php

function div($a, $b) {
	return ( int ) ($a / $b);
}

function gregorian_to_jalali($g_y, $g_m, $g_d) {
	$g_days_in_month = array (31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31 );
	$j_days_in_month = array (31, 31, 31, 31, 31, 31, 30, 30, 30, 30, 30, 29 );
	
	$gy = $g_y - 1600;
	$gm = $g_m - 1;
	$gd = $g_d - 1;
	
	$g_day_no = 365 * $gy + div ( $gy + 3, 4 ) - div ( $gy + 99, 100 ) + div ( $gy + 399, 400 );
	
	for($i = 0; $i < $gm; ++ $i)
		$g_day_no += $g_days_in_month [$i];
	if ($gm > 1 && (($gy % 4 == 0 && $gy % 100 != 0) || ($gy % 400 == 0))) 
      /* leap and after Feb */ 
      $g_day_no ++;
	$g_day_no += $gd;
	
	$j_day_no = $g_day_no - 79;
	
	$j_np = div ( $j_day_no, 12053 ); /* 12053 = 365*33 + 32/4 */
	$j_day_no = $j_day_no % 12053;
	
	$jy = 979 + 33 * $j_np + 4 * div ( $j_day_no, 1461 ); /* 1461 = 365*4 + 4/4 */
	
	$j_day_no %= 1461;
	
	if ($j_day_no >= 366) {
		$jy += div ( $j_day_no - 1, 365 );
		$j_day_no = ($j_day_no - 1) % 365;
	}
	
	for($i = 0; $i < 11 && $j_day_no >= $j_days_in_month [$i]; ++ $i)
		$j_day_no -= $j_days_in_month [$i];
	$jm = $i + 1;
	$jd = $j_day_no + 1;
	
	return array ($jy, $jm, $jd );
}

function jalali_to_gregorian($j_y, $j_m, $j_d) {
	$g_days_in_month = array (31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31 );
	$j_days_in_month = array (31, 31, 31, 31, 31, 31, 30, 30, 30, 30, 30, 29 );
	
	$jy = $j_y - 979;
	$jm = $j_m - 1;
	$jd = $j_d - 1;
	
	$j_day_no = 365 * $jy + div ( $jy, 33 ) * 8 + div ( $jy % 33 + 3, 4 );
	for($i = 0; $i < $jm; ++ $i)
		$j_day_no += $j_days_in_month [$i];
	
	$j_day_no += $jd;
	$milk = $j_day_no;
	$g_day_no = $j_day_no + 79;
	
	$gy = 1600 + 400 * div ( $g_day_no, 146097 ); /* 146097 = 365*400 + 400/4 - 400/100 + 400/400 */
	$g_day_no = $g_day_no % 146097;
	
	$leap = true;
	if ($g_day_no >= 36525) /* 36525 = 365*100 + 100/4 */ 
   {
		$g_day_no --;
		$gy += 100 * div ( $g_day_no, 36524 ); /* 36524 = 365*100 + 100/4 - 100/100 */
		$g_day_no = $g_day_no % 36524;
		
		if ($g_day_no >= 365)
			$g_day_no ++;
		else
			$leap = false;
	}
	
	$gy += 4 * div ( $g_day_no, 1461 ); /* 1461 = 365*4 + 4/4 */
	$g_day_no %= 1461;
	
	if ($g_day_no >= 366) {
		$leap = false;
		
		$g_day_no --;
		$gy += div ( $g_day_no, 365 );
		$g_day_no = $g_day_no % 365;
	}
	
	for($i = 0; $g_day_no >= $g_days_in_month [$i] + ($i == 1 && $leap); $i ++)
		$g_day_no -= $g_days_in_month [$i] + ($i == 1 && $leap);
	$gm = $i + 1;
	$gd = $g_day_no + 1;
	
	return array ($gy, $gm, $gd, $milk );
}

?>


<body background="Image/page1_bkgrnd.png";>

<?php

$server = mysql_connect ( "localhost", "root", "" );
mysql_select_db ( "quenchfiredb", $server );
mysql_query ( 'set character set utf8;' );
$free = "TRUNCATE TABLE `time`";
mysql_query ( $free );
$query = "SELECT NumberOfNewProperty,NextCharge FROM quenchfire_t  ";
$r = mysql_query ( $query );
$numrows = mysql_numrows ( $r );
$miladijoomfa = date ( "Y-m-d" );
list ( $gyear, $gmonth, $gday ) = preg_split ( '/-/', $miladijoomfa );

list ( $jyear, $jmonth, $jday ) = gregorian_to_jalali ( $gyear, $gmonth, $gday );

//$shamsijoomfa = $jyear."/".$jmonth."/".$jday;
list ( $syear, $smounth, $sday, $smilk ) = jalali_to_gregorian ( $jyear, $jmonth, $jday );
$setday = 0;
if (isset ( $_GET ["time"] )) {
	
	$setday = ( int ) $_GET ["time"];
	//	echo $setday;
}  if ( $_GET ["Nday"] !="") {
	$setday = ( int ) $_GET ["Nday"];
} else if ($_GET ["Nweek"] !="")
	$setday = ( int ) $_GET ["Nweek"] * 7;
else if ($_GET ["NMounth"] !="")
	$setday = ( int )$_GET ["NMounth"]*30;
while ( $raw = mysql_fetch_row ( $r ) ) //echo $raw[1];
{
	$date = $raw [1];
	list ( $year, $month, $day ) = split ( '[/.-]', $date );
	list ( $lyear, $lmounth, $lday, $lmilk ) = jalali_to_gregorian ( $year, $month, $day );
	$dif = $lmilk - $smilk;
	if (($dif < $setday)) 
	{
		$nquery = "INSERT INTO time(returnTime,NumberOfNewProperty) VALUES ('$dif','$raw[0]')";
		mysql_query ( $nquery );
		//echo "$raw[0] \n";
	}
}
$query = "SELECT * FROM time  ORDER BY 1";
$table = mysql_query ( $query, $server );
$numrows = mysql_num_rows ( $table );

echo ("<TABLE BORDER=1  dir='rtl' style='position: absolute;  top: 77px;'   WIDTH=100%>\n");
echo ("<TR ALIGN=CENTER VALIGN=MIDDLE BGCOLOR=#B2E2F9>\n");
echo (" 
	<TH> <font face='B Nazanin'>عنوان واحد</font></TH>
 	<TH><font face='B Nazanin'>شماره اموال قدیم</font></TH>
  	<TH><font face='B Nazanin'>	شماره اموال جدید </font></TH>
	<TH><font face='B Nazanin'>	شماره سریال</font></TH>
 	<TH><font face='B Nazanin'>	</font>نوع کپسول</TH>
 	<TH><font face='B Nazanin'>وزن</font></TH>
  	<TH><font face='B Nazanin'>محل نصب در واحد </font></TH>
 	<TH><font face='B Nazanin'>تاریخ آخرین شارژ</font></TH>
 	<TH><font face='B Nazanin'>	</font>تاریخ شارژ بعدی</TH>
 	<TH><font face='B Nazanin'> ملاحظات</font></TH>
 	<TH><font face='B Nazanin'> زمان باقی مانده</font> </TH>");	
("<TR>\n");
while ($raw=mysql_fetch_row($table))
{
	echo ("<TR ALIGN=CENTER VALIGN=MIDDLE BGCOLOR=#CBD4E2>\n");
	{
		$writequery="SELECT * from quenchfire_t where NumberOfNewProperty='$raw[1]'";
		$writetable=mysql_query($writequery,$server);
		$writeraw=mysql_fetch_row($writetable);
		for ($i=0;$i<mysql_num_fields($writetable);$i++)
			{echo ("<TD><font face='B Nazanin'> $writeraw[$i]</font></TD>");}
	}
	$col='#CCCCFF';
	$mes=$raw[0];
	if($raw[0]<0){$col='#F07DB6';$mes="زمان شارژ مجدد به پایان رسیده";}
	else if($raw[0]>=0 and $raw[0]<7)$col='FF6633';
	else if($raw[0]>=7 and $raw[0]<14)$col='FF9933';
	else if($raw[0]>=14 and $raw[0]<21)$col='FFCC33';
	else if($raw[0]>=21 and $raw[0]<28)$col='FFFF33';
	else $col='CCFF33';
	
	echo(" <TD BGCOLOR=$col ><font face='B Nazanin'>$mes</font></TD>" );
}
echo ("</TABLE>\n");
?>
</body>
</html>
<?php

ob_end_flush ();
?>