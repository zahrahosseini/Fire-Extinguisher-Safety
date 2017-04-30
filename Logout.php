<html>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<head>
<script type="text/javascript">

function confirmation() {
	var answer = confirm("آیا مایلید از سیستم اطفا حریق دانشگاه شهید بهشتی خارج شوید؟" )
	if (answer){
		window.location = 'login.php';
	}
	else{
		window.location = 'ph1.php';
	}
}
//-->
</script>
</head>
<body onload="confirmation()">
<form >
</form>
</body>
</html>
<?php

unset($_SESSION["Login"]);

?>