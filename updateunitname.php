<?php
ob_start ();
session_start ();
if (@$_SESSION ["Login"] != "go") {
	header ( "Location: login.php" );
	exit ();
}

?>
<?php
 if (isset ( $_GET ["NNU"] ) && isset ( $_GET ["NOU"] ) ) {
	$_NNU = $_GET ["NNU"];
	$_NOU = $_GET ["NOU"];
	if($_NNU!=""){
	$server = mysql_connect ( "localhost", "root", "" );
	mysql_select_db ( "quenchfiredb", $server );
	mysql_query ( 'set character set utf8;' );
	$runit="bbm";
	$unitquery="SELECT Name FROM unit WHERE Number=$_NOU";
	$unit=mysql_query($unitquery,$server);
	while($raw=mysql_fetch_row($unit))
	$runit=$raw[0];
	$q="SELECT * FROM unit WHERE Name='$_NNU' ";
	$rq=mysql_query ( $q, $server );
	$Numrow=mysql_num_rows($rq);
	if($Numrow==0){ 
		$query = "UPDATE unit SET Name='$_NNU' WHERE  Number='$_NOU'";
		$quer=mysql_query("UPDATE quenchfire_t SET NameOfUnit='$_NNU' WHERE  NameOfUnit='$runit'",$server);
		if (mysql_query( $query, $server ))
			{echo ("<script type = 'text/javascript'>alert('تغییر نام واحد با موفقیت انجام شد');</script>");}
	} 
	else {echo ("<script type = 'text/javascript'>alert('تغییر نام واحد با موفقیت انجام نشد');</script>");}
	}
	unset( $_GET ["NNU"]);
	unset($_GET ["NOU"] );
}
?>

<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<head>
<title> ویرایش نام واحد </title>
<div  style="position: absolute;top:  8px;right:0px; width: 1000px; height: 70px;"align="right" >
<img src="Image/img0012.gif" align="right" width="2000" height="70"></div>
<div style="position: absolute;  top: 30px; left:0px; width: 1000px; height: 45px;"align="left">
 	<a  href="ph1.php"  ><input type="button" value="بازگشت"  /></a>
	<a href="logout.php" ><input type="button" value="خروج" /></a></div>
	<div style="position: absolute;  top: 10px; right:20px;"align="right"><p><font color="336699" face="B Nazanin" size="5"> ویرایش نام واحد </font>   </p></div>
</head>
<body background="Image/page1_bkgrnd.png";>
<form action="updateunitname.php" method="get" dir="rtl">
<div style="position: absolute;  top: 100px; right:20px;"align="right"><p><font face="B Nazanin" size="4">پس از انتخاب  نام واحد ،وارد کردن نام واحد جدید و زدن دکمه تایید<br>
درصورت تکراری نبودن نام واحد، تغییر نام واحد صورت گرفته و محل نصب کپسول هایی که در آن واحد نصب شده بودند به نام واحد جدید تغییر می یابد	
</p></font></p></div>
<table  border="5"     align="right"   style="  right:20px; margin-top: 200; position:fixed;  border-style:outset;border-color:00CCFF;   "; cellpadding="20" cellspacing="5">
		<thead>
		<td colspan="3">
		<p><b> ویرایش نام واحد</b></p>
		</td>
	</thead>
	<tr>
		<td rowspan="3"><img src='Image/data_edit.png' /></td>
		<td><label for="NameOfUnit"> نام واحد</label></td>
		<td><?php
	echo ("<select name='NOU' id='NameOfUnit'>");
	$server=mysql_connect("localhost","root","");
mysql_select_db("quenchfiredb", $server);
mysql_query('set character set utf8;');  
	$query="SELECT * from unit";
	 $table=mysql_query($query,$server);

	while ($raw=mysql_fetch_row($table))
	{
		{
			echo ("<option value= $raw[1] >$raw[0]</option>");
		}
	}
	echo ("</select>");
	?>
	 <br />
		</td>
	</tr>
	<tr>
		<td><label for="INU">نام واحد جدید</label></td>
		<td>	<input type="text" name="NNU" ID="INU"> <br />
		</td>
	</tr>

	<tr>
		<td colspan="3" align="center"><input type="submit" name="SBubtton"
			ID="ISB" value="تایید"> <br />
		</td>
	</tr>
</table>
</form>
</body>
</html>
<?php
ob_end_flush ();
?>
