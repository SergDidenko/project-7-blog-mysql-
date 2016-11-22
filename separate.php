<?php 
session_start();
if (!isset($_SESSION['user'])) {
	header('Location:/');
	exit();
}
if (isset($_GET['id'])) {
	$id=$_GET['id'];
}

if ($_SERVER['REQUEST_METHOD']==='POST') {
	if (isset($_POST['comment'])) {
		$comment=$_POST['comment'];
		$user=$_SESSION['user'];
		$conn=mysqli_connect('Localhost','root','','test');
		mysqli_query($conn,"INSERT INTO comments VALUES('{$id}','{$user}','{$comment}','{}');");
	}
}

require "init.php";
require 'header.php';
foreach ($posts as $post) {
	if(in_array($id, $post)) {
		require 'post_item.php';
	}else{
		$post=null;
	}
}
$comments=mysqli_query($conn, "SELECT * FROM comments WHERE id='{$id}'");
foreach ($comments as $comment) {
	$id_c=$comment['id_c'];
	require 'comment.php';
}
$com_title='Comment';
require 'comment_form.php';
require 'footer.php';
