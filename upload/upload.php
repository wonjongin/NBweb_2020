<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>업로드</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">


</head>
<body>
<?php
	$password = $_GET["pw"];
	if($password == "1091735823"){
		echo file_get_contents("form.txt");
	}
	else{
		echo "비밀번호가 틀렸습니다.";
	}
?>
</body>
</html>
