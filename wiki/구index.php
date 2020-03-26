<!DOCTYPE html>
	<html>
		<head>
			<title>NB WIKI</title>
			<meta charset="utf-8" />
			
			
		</head>
		<body>
			<h1>Nanobyte Wiki 에 오신걸 환영합니다</h1>
			<h2>Ctrl(Cmd)+f를눌러 검색하시고 원하시는 문서로 들어가십시오</h2>
			
			<?php
                    echo file_get_contents("list.txt");
                ?>
			<!--<a href="./contents/nanobyte.html">nanobyte</a>-->
			
		</body>
	</html>