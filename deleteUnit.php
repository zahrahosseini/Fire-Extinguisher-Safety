<?php
ob_start ();
session_start ();
if (@$_SESSION ["Login"] != "go") {
	header ( "Location: login.php" );
	exit ();}
?>
<?php
	if(isset($_POST[NameOfUnit])){
		$_NameOFUNit=$_POST[NameOfUnit];
		$server=mysql_connect("localhost","root","");
		mysql_select_db("quenchfiredb", $server);
		mysql_query('set character set utf8;');
		$unitquery="SELECT Name from unit WHERE Number=$_NameOFUNit";
		$q=mysql_query($unitquery,$server);
		$_N=mysql_result($q,0,0); 
		//echo($_N);
		$query=mysql_query("DELETE FROM unit WHERE Number='$_NameOFUNit'",$server);
		$count=mysql_affected_rows();
		$nadarad='ندارد';
		$query2 = mysql_query("UPDATE quenchfire_t SET WhereInstall= '$nadarad',NameOfUnit='$nadarad' 
					WHERE  NameOfUnit='$_N'",$server);
		if($count>0)
			echo ("<script type = 'text/javascript'>
			alert('واحد از سیستم حذف گردید');
			</script>");
		else 
			echo ("<script type = 'text/javascript'>
			alert('واحدی با این نام موجود نمی باشد');
			</script>");
		unset($_POST[NameOfUnit]);}
?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<head>
<title>حذف واحد</title>
<div  style="position: absolute;top:  8px;right:0px; width: 1000px; height: 70px;"align="right" >
	<img src="Image/img0012.gif" align="right" width="2000" height="70"></div>
<div style="position: absolute;  top: 30px; left:0px; width: 1000px; height: 45px;"align="left">
 	<a  href="ph1.php"  ><input type="button" value="بازگشت"  /></a>
	<a href="logout.php" ><input type="button" value="خروج" /></a></div>
	<div style="position: absolute;  top: 10px; right:20px;"align="right"><p><font color="336699" face="B Nazanin" size="5">حذف واحد </font>   </p></div>
</head>
<body background="Image/page1_bkgrnd.png";>

	<form action="deleteUnit.php" method="post" dir="rtl" >
	<div style="position: absolute;  top: 100px; right:20px;"align="right"><p><font face="B Nazanin" size="4">
	پس از وارد کردن نام واحد و زدن دکمه حذف
	<br>
واحد از سیستم حذف شده و محل نصب کپسول هایی که در آن واحد نصب شده بودند به گزینه "ندارد" تغییر می یابد	
	 </p></font></p></div>
<table      align="right"   style="  right:20px; margin-top: 200; position:fixed;  border-style:outset;border-color:00CCFF;   "; cellpadding="20" cellspacing="5"><thead><tr><th colspan="2"> حذف یک واحد موجود در سیستم</th> </tr></thead>
		<tr>
			<td> &nbsp  عنوان واحد &nbsp </td>	
			<td rowspan="2"><?php
					echo ("<select name='NameOfUnit'>");
					$server=mysql_connect("localhost","root","");
					mysql_select_db("quenchfiredb", $server);
					mysql_query('set character set utf8;');  
					$query="SELECT * from unit";
					$table=mysql_query($query,$server);
					while ($raw=mysql_fetch_row($table))
						echo ("<option value= $raw[1] >$raw[0]</option>");
					echo ("</select>");
					?></br></br>
					<p align="left"><input type="submit" value="  حذف  "></p>
			</td>
		</tr>
		<tr>
		<td align="center"> <img src='Image/delete.png'/></td>
		</table>
	 </form>
</body>
</html>
<?php
ob_end_flush ();
?>