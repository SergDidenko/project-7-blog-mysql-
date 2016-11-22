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
$conn=mysqli_connect('Localhost','root','','test');
$comments=mysqli_query($conn, "SELECT * FROM comments;");

foreach ($comments as $comment) {
	if ($id===$comment['id_c']) {
		mysqli_query($conn,"DELETE FROM comments WHERE id_c='{$id}';");
		header('Location:/separate.php?id='.$comment['id']);
	}
}