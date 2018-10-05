<?php
if(!isset($_GET['r'])){
	$r = 'main';
}else{
	$r = $_GET['r'];
}

if($r == 'main'){
	include "./view/main.php";
}else if($r == 'oke'){
	include './view/oke.php';
}

?>