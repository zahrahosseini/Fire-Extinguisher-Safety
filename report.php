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
<div
	style="position: absolute; top: 30px; left: 0px; width: 1000px; height: 45px;"
	align="left"><a href="ph1.php"><input type="button" value="بازگشت" /></a>
<a href="logout.php"><input type="button" value="خروج" /></a></div>
<div style="position: absolute; top: 10px; right: 20px;" align="right">
<p><font color="336699" face="B Nazanin" size="5">جستجو
</font></p>
</div>
</head>
<body background="Image/page1_bkgrnd.png";>
<form action="search2.php" method="get" dir="rtl" target="_blank">
<table      align="right"   style="  right:20px; margin-top: 200; position:fixed;  border-style:outset;border-color:00CCFF;   "; cellpadding="10" cellspacing="2">

<tr><th > جستجو </th></tr>
<tr>
<td rowspan="3"><img src='Image/data_view.png' /></td>
<td>
<p> جستجو بر اساس واحد</p>
</td><td>
	<?php
	echo ("<select name='Unit'>");
	$server=mysql_connect("localhost","root","");
mysql_select_db("quenchfiredb", $server);
mysql_query('set character set utf8;');  
	$query="SELECT * from unit";
	 $table=mysql_query($query,$server);
	 $C="";
	echo ("<option value= $C > $C</option>");
	while ($raw=mysql_fetch_row($table))
	{
		{
			echo ("<option value= $raw[1] >$raw[0]</option>");
		}
	}	
	echo ("</select>");
	?>
</td></tr><tr><td>
<p> جستجو بر اساس نوع کپسول</p>
</td><td><select name="type">
	<option value="" selected="selected">
	</option>
	<option value="BCF">
	BCF</option>
	<option value="CO2">
	CO2</option>
	<option value="اب وگآز">
	اب وگآز</option>
	<option value="پودر گآز">
	پودر گآز</option>
	<option value="ندارد">
	ندارد</option>
</select></td></tr><tr><td>
<p> جستجو بر اساس وزن</p></td><td>
<input type="text" name="weight"></td></tr><tr><td>
<p>نتایج جستجو</p></td><td>
<input type="submit" name="Submit" value="مشاهده"></td></tr>
</table>
</form>

</body>
</html>

<?php
ob_end_flush(); 
?>