<?php
ob_start ();
session_start ();
if (@$_SESSION ["Login"] != "go") {
	header ( "Location: login.php" );
	exit ();
}?>
<?php
	if(isset($_POST[Number])){
		$NUM=$_POST[Number];
		$server=mysql_connect("localhost","root","");
		mysql_select_db("quenchfiredb", $server);
		mysql_query('set character set utf8;');
		$query=mysql_query("DELETE FROM quenchfire_t WHERE NumberOfNewProperty=$NUM",$server);
		$count=mysql_affected_rows();
		if($count>0)
			echo ("<script type = 'text/javascript'>
			alert('کپسول  از سیستم حذف گردید');
			</script>");
		else 
			echo ("<script type = 'text/javascript'>
			alert('کپسولی با این شماره موجود نمی باشد');
			</script>");
		unset($_POST[Number]);}
?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<head>
<title>گزارش تعداد کپسول ها</title>
<div  style="position: absolute;top:  8px;right:0px; width: 1000px; height: 70px;"align="right" >
	<img src="Image/img0012.gif" align="right" width="2000" height="70"></div>
<div style="position: absolute;  top: 30px; left:0px; width: 1000px; height: 45px;"align="left">
 	<a  href="ph1.php"  ><input type="button" value="بازگشت"  /></a>
	<a href="logout.php" ><input type="button" value="خروج" /></a></div>
	<div style="position: absolute;  top: 10px; right:20px;"align="right"><p><font color="336699" face="B Nazanin" size="5">گزارش تعداد کپسول ها </font>   </p></div>
</head>

<body >
<?php
$server = mysql_connect ( "localhost", "root", "" );
mysql_select_db ( "quenchfiredb", $server );
mysql_query('set character set utf8;'); 
echo("<font face='B Nazanin'>");
$u=mysql_query("SELECT Name FROM unit ORDER BY  Name",$server);
$num=0;$num1=0;$num2=0;$num3=0;$num4=0;$num5=0;
echo ("<TABLE BORDER='1' dir='rtl' style='position: absolute;  top: 100px;  right: 40;  border-style:inset;border-color:#030303;'>\n");
echo ("<TR  VALIGN=MIDDLE BGCOLOR=#E9E3E9>\n");
echo ("<TH> عنوان واحد</TH> <TH>تعداد کل کپسول ها</TH> <TH>  تعدادکپسول های BCF</TH><TH>تعداد کسپول هایCO2</TH><TH> تعداد کپسول های آب و گاز </TH><TH>تعداد کپسول های پودر گاز</TH><TH>تعدادکپسول های نامشخص</TH>");("<TR>\n");
while ($raw=mysql_fetch_row($u)){
	$q=mysql_query("SELECT * FROM  quenchfire_t WHERE NameOfUnit='$raw[0]' ",$server);
	$t1=mysql_query("SELECT * FROM  quenchfire_t WHERE TypeOfCapsole='BCF' AND NameOfUnit='$raw[0]'",$server);
	$t2=mysql_query("SELECT * FROM  quenchfire_t WHERE TypeOfCapsole='CO2' AND NameOfUnit='$raw[0]'",$server);
	$t3=mysql_query("SELECT * FROM quenchfire_t WHERE TypeOfCapsole='اب وگآز' AND NameOfUnit='$raw[0]'",$server);
	$t4=mysql_query("SELECT * FROM  quenchfire_t WHERE TypeOfCapsole='پودر گآز' AND NameOfUnit='$raw[0]' ",$server);
	$t5=mysql_query("SELECT * FROM  quenchfire_t WHERE TypeOfCapsole='ندارد' AND NameOfUnit='$raw[0]' ",$server);
	$N=mysql_num_rows($q); $num+=$N;
	$N1=mysql_num_rows($t1); $num1+=$N1;
	$N2=mysql_num_rows($t2); $num2+=$N2;
	$N3=mysql_num_rows($t3); $num3+=$N3;
	$N4=mysql_num_rows($t4); $num4+=$N4;
	$N5=mysql_num_rows($t5); $num5+=$N5;

	echo ("<TR ALIGN=CENTER VALIGN=MIDDLE BGCOLOR=FFCCCC>\n");
		echo (" <TD  BGCOLOR=#EE99ED>$raw[0]</TD>");
		echo ("<TD  BGCOLOR=#A1B4F8>$N</TD>");
		echo ("<TD  BGCOLOR=#C4CFF7>$N1</TD>");
		echo ("<TD BGCOLOR=#A1B4F8>$N2</TD>");
		echo ("<TD  BGCOLOR=#C4CFF7>$N3</TD>");
		echo ("<TD  BGCOLOR=#A1B4F8>$N4</TD>");
		echo ("<TD  BGCOLOR=#C4CFF7>$N5</TD>");
		
	echo ("\n</TR>");
}
echo ("<tr> <td>تعداد کل کپسول ها</td><TD  >$num</TD></tr>");
echo ("<tr><td> تعدادکپسول های BCF</td> <TD  >$num1</TD></tr>");
echo ("<tr><td>تعداد کسپول هایCO2 </td><TD  >$num2</TD></tr>");
echo ("<tr> <td>تعداد کپسول های آب و گاز</td><TD  >$num3</TD></tr>");
echo ("<tr><td>تعداد کپسول های پودر گاز</td> <TD  >$num4</TD></tr>");
echo ("<tr><td>تعدادکپسول های نامشخص</td> <TD  >$num5</TD></tr>");
echo ("</TABLE>\n");
echo ("</font>");

?>
</body>
</html>
<?php
ob_end_flush ();
?>