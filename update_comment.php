<?php
session_start();
if (!isset($_SESSION['user'])) {
	header('Location:/');
	exit();
}
if (isset($_GET['id'])) {
	$id=$_GET['id'];
}else{
	header('Location:/');
	exit();
}

if ($_SERVER['REQUEST_METHOD']==='POST') {
	if (isset($_POST['comment'])) {
		$com=$_POST['comment'];
		$user=$_SESSION['user'];
		$conn=mysqli_connect('Localhost','root','','test');
		$comments=mysqli_query($conn, "SELECT * FROM comments WHERE id_c='{$id}';");
		foreach ($comments as $comment) {
			if ($com!==$comment['comment'] && $user===$comment['user']) {
				mysqli_query($conn, "UPDATE comments SET comment='{$com}' WHERE id_c='{$id}'");
				header('Location:/separate.php?id='.$comment['id']);
			}
		}
	}
}

require 'header.php';
$conn=mysqli_connect('Localhost','root','','test');
$comments=mysqli_query($conn, "SELECT * FROM comments WHERE id_c='{$id}';");
foreach ($comments as $comment) {
	$com_title='Update';
	require 'comment.php';
	require 'comment_form.php';
}
require 'footer.php';
