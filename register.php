<?php
session_start();
if (isset($_SESSION['user'])) {
	header('Location:/');
	exit();
}

require 'form_validation.php';

if ($_SERVER['REQUEST_METHOD']==='POST') {
	if (isset($_POST['username']) && isset($_POST['password'])) {
		if (!in_array(false,$result_validation)) {	
			$username=$_POST['username'];
			$password=password_hash($_POST['password'],1);
			$conn=mysqli_connect('Localhost', 'root', '', 'test');
			mysqli_query($conn, "INSERT INTO users VALUES('{$username}','{$password}');");
			header('Location:/');
		}
	}
}
require 'header.php';
$userTitle='Register';
require 'user_form.php';
require 'footer.php';
