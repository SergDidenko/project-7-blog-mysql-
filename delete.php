<?php
session_start();
if (!isset($_SESSION['user'])) {
	header('Location:/');
	exit();
}
if(isset($_GET['id'])){
	$id=$_GET['id'];
}else{
	header('Location:/');
	exit();
}
require 'init.php';
foreach ($posts as $post) {
	if (in_array($id, $post)) {
			mysqli_query($conn, "DELETE FROM posts WHERE id='{$id}'");
			header('Location:/');
		}	
}