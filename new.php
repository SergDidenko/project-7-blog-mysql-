<?php 
session_start();
if (!isset($_SESSION['user'])) {
	header('Location:/');
	exit();
}

if ($_SERVER['REQUEST_METHOD']==='POST') {
	if (isset($_POST['title']) && isset($_POST['content'])) {
		$title=$_POST['title'];
		$content=$_POST['content'];
		$user=$_SESSION['user'];
		$conn=mysqli_connect('Localhost','root','','test');
		mysqli_query($conn,"INSERT INTO posts VALUES ('{$user}','{$title}','{$content}','{}');");
		header('Location:/');
	}
}


require "header.php";
$title_form='Add post';
$btn_form='Create';
require "new_post_form.php";
require "footer.php";
