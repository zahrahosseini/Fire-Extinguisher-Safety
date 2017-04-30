<?php
ob_start(); 
session_start();
if(@$_SESSION["Login"]!="go")
{
	header("Location: login.php");
	exit();
}
?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<head>
<title>جستجو</title>
<div
	style="position: absolute; top: 8px; right: 0px; width: 1000px; height: 70px;"
	align="right"><img src="Image/img0012.gif" align="right" width="2000"
	height="70"></div>

<div style="position: absolute; top: 10px; right: 20px;" align="right">
<p><font color="336699" face="B Nazanin" size="5">نتایج جستجو
</font></p>
</div>
</head>
<body background="Image/page1_bkgrnd.png" >
</body></html>
<?php


$server=mysql_connect("localhost","root","");
mysql_select_db("quenchfiredb", $server);
mysql_query('set character set utf8;'); 
echo("<br/><br/><br/><br/>");
if($_GET[Unit]!="" && $_GET[type]==""&& $_GET[weight]==""){
	$unitquery="SELECT Name from unit WHERE Number='$_GET[Unit]'";
	$q=mysql_query($unitquery,$server);
	$_N=mysql_result($q,0,0); 
	$query="SELECT * FROM quenchfire_t WHERE NameOfUnit='$_N'";
	$table=mysql_query($query,$server);	
}
elseif($_GET[Unit]=="" && $_GET[type]!=""&& $_GET[weight]==""){
	$query="SELECT * FROM quenchfire_t WHERE TypeOfCapsole='$_GET[type]'";
	$table=mysql_query($query,$server);	
}
elseif($_GET[Unit]=="" && $_GET[type]==""&& $_GET[weight]!=""){
	$query="SELECT * FROM quenchfire_t WHERE Weight='$_GET[weight]'";
	$table=mysql_query($query,$server);	
}
elseif($_GET[Unit]=="" && $_GET[type]!=""&& $_GET[weight]!=""){
	$query="SELECT * FROM quenchfire_t WHERE Weight='$_GET[weight]' and TypeOfCapsole='$_GET[type]' ";
	$table=mysql_query($query,$server);	
}
elseif($_GET[Unit]!="" && $_GET[type]!=""&& $_GET[weight]==""){
	$unitquery="SELECT Name from unit WHERE Number='$_GET[Unit]'";
	$q=mysql_query($unitquery,$server);
	$_N=mysql_result($q,0,0); 
	$query="SELECT * FROM quenchfire_t WHERE NameOfUnit='$_N' and TypeOfCapsole='$_GET[type]'";
	$table=mysql_query($query,$server);	
}
elseif($_GET[Unit]!="" && $_GET[type]==""&& $_GET[weight]!=""){
	$unitquery="SELECT Name from unit WHERE Number='$_GET[Unit]'";
	$q=mysql_query($unitquery,$server);
	$_N=mysql_result($q,0,0); 
	$query="SELECT * FROM quenchfire_t WHERE NameOfUnit='$_N' and Weight='$_GET[weight]'";
	$table=mysql_query($query,$server);	
}
elseif($_GET[Unit]!="" && $_GET[type]!=""&& $_GET[weight]!=""){
	$unitquery="SELECT Name from unit WHERE Number='$_GET[Unit]'";
	$q=mysql_query($unitquery,$server);
	$_N=mysql_result($q,0,0); 
	$query="SELECT * FROM quenchfire_t WHERE NameOfUnit='$_N' and TypeOfCapsole='$_GET[type]' and Weight='$_GET[weight]'";
	$table=mysql_query($query,$server);	
}
elseif($_GET[Unit]=="" && $_GET[type]==""&& $_GET[weight]==""){
	$query="SELECT * FROM quenchfire_t ";
	$table=mysql_query($query,$server);	
}

$countr=mysql_num_rows($table);

if($countr>0)
{	echo("<font face='B Nazanin'>");
	echo ("<TABLE dir='rtl' BORDER=1 WIDTH=100%>\n");
	echo ("<TR ALIGN=CENTER VALIGN=MIDDLE BGCOLOR=#CCCCFF>\n");
	echo ("<TH> عنوان واحد</TH> <TH>شماره اموال قدیم</TH> <TH>	شماره اموال جدید </TH> <TH>	شماره سریال</TH> <TH>	نوع کپسول</TH><TH>	وزن</TH> 	<TH>محل نصب در واحد </TH> 	<TH>تاریخ آخرین شارژ</TH><TH>	تاریخ شارژ بعدی</TH><TH> 	ملاحظات</TH>");	echo ("<TR>\n");
	
	while ($raw=mysql_fetch_row($table)){
		echo ("<TR ALIGN=CENTER VALIGN=MIDDLE BGCOLOR=FFCCCC>\n");
		for ($i=0;$i<mysql_num_fields($table);$i++)
		{if($i==0)echo ("<TD><a>$raw[$i]</a></TD>");else echo ("<TD>$raw[$i]</TD>");}
		echo ("\n</TR>");}
	echo ("</TABLE>\n");
	echo("</font>");}
else echo("چنین موردی یافت نشد!!!");
?>

<?php
ob_end_flush(); 
?>