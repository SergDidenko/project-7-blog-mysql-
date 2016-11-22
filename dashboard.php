<?php
session_start();
if (!isset($_SESSION['user'])) {
	header('Location:/');
	exit();
}
require 'header.php';
require 'init.php';
foreach ($posts as $post) {
	if ($post['user']===$_SESSION['user']) {
		$id=$post['id'];
		require 'post_item.php';
	}
}
$comments=mysqli_query($conn, "SELECT * FROM comments;");
foreach ($comments as $comment) {
	if ($comment['user']===$_SESSION['user']) {
		require 'comment.php';
	}
}
require 'footer.php';