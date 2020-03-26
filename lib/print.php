<?php
	//$title="Nanobyte Wiki";
	header("Cache-Control:no-cache");

function print_title(){
	if(isset($_GET['id'])){	
		echo $_GET['id']; 
	}
	else{
        global $title;
		echo $title."홈";
	}
}

function print_description(){

	if(isset($_GET['id'])){	
		echo file_get_contents("data/".$_GET['id']);
	}
	else{
        global $title;
		echo $title."에 오신 걸 환영합니다!!";
	}
	
}

function print_list(){
	$list = scandir('./data');
	$i = 0;
	while($i<count($list)){
		if($list[$i]!='.'&&$list[$i]!='..'){
		echo "<li><a href=\"index.php?id=".$list[$i]."\">".$list[$i]."</a></li>\n";}
		$i = $i+1;
	}
	//echo file_get_contents("list.txt");
}
// function search(){
// 	$found = array_search($_GET['id'],$list);
// 	if($found){

// 	}
// }
?>