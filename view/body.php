<!DOCTYPE html>
	<html>
		<head>
			<title>
			<?php echo $title.print_title(); ?>
			</title>
			<!-- <link rel="shortcut icon" href="/favicon.ico"> -->
			<link rel="stylesheet" href="/style/main.css" type="text/css">
			<meta charset="utf-8" />
			<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
			<link rel="shortcut icon" href="NBfavicon.ico">

			<!-- Global site tag (gtag.js) - Google Analytics -->
				<script async src="https://www.googletagmanager.com/gtag/js?id=UA-151378583-1"></script>
				<script>
				  window.dataLayer = window.dataLayer || [];
  				function gtag(){dataLayer.push(arguments);}
  				gtag('js', new Date());

				gtag('config', 'UA-151378583-1');
				</script>

			
		</head>
		<body>
			<div id="body">
			<div id="grid2">
			<h1><?php echo $title;?></h1>

			<form action="index.php">
					<div id="gridsearch">
					<input type="search" name="id" placeholder="검색어를 입력하세요">
					<input type="submit" value="검색">
					</div>
				</form>
			</div>

			

			<div id="grid1">
				
			<div>
			<h2>
				<?php 
				 print_title();
				?>
			</h2>
				<p>
				<?php
					print_description();
				?>
				</p>
			</div>
			<ul>
				<?php		
					print_list();
				?>
			</ul>	
			</div>
			<!--<a href="./contents/nanobyte.html">nanobyte</a>-->
		</div>
		</body>
	</html>
