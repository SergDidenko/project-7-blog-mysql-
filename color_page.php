<?php
session_start();
if (!isset($_SESSION['user'])) {
	header('Location:/');
	exit();
}
if (isset($_GET['type'])) {
	$type=$_GET['type'];
}
$color=[
'1'=>'grey', 
'2'=>'navy', 
'3'=>'green', 
'4'=>'yellow', 
'5'=>'moccasin', 
'6'=>'gold', 
'7'=>'white', 
'8'=>'lime'
];
foreach ($color as $k=>$v) {
	if ($k==$type) {
		setcookie('color',$v);
		header('Location:/');
	}
}