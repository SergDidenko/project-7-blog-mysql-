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

require 'init.php';

if ($_SERVER['REQUEST_METHOD']==='POST') {
	if (isset($_POST['title']) && isset($_POST['content'])) {
		$title=$_POST['title'];
		$content=$_POST['content'];
		foreach ($posts as $post) {
			if ($title!==$post['title'] && $content!==$post['content']) {
				$conn=mysqli_connect('Localhost', 'root', '', 'test');
				mysqli_query($conn, "UPDATE posts SET title='{$title}', content='{$content}' WHERE id='{$id}';");
				header('Location:/');
			}else{
				header('Location:/');
				exit();
			}
		}
		
	}
}

require 'header.php';
$title_form='Update post';
$btn_form='Update';
require 'new_post_form.php';
require 'footer.php';
