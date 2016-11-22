<?php 
session_start();
if (isset($_SESSION['user'])) {
	header('Location:/');
	exit();
}

require 'form_validation.php';

if ($_SERVER['REQUEST_METHOD']==='POST') {
	if (isset($_POST['username']) && isset($_POST['password'])) {
		$username=$_POST['username'];
		$password=$_POST['password'];
		$user=null;
		$conn=mysqli_connect('Localhost', 'root', '', 'test');
		$users=mysqli_query($conn, 'SELECT username, pass as password FROM users WHERE 1;');
		foreach($users as $val) {
			if ($username===$val['username']) {
				$user=$val;
				break;
			}
		}
		if ($user===null) {
			echo 'User not valid';
		}else{
			if (password_verify($password, $user['password'])) {
				$_SESSION['user']=$user['username'];
				header('Location:/');
				exit();
			}
			else{
				echo 'Password incorrect';
			}
		}
			
	}
		
}

require 'header.php';
$userTitle='Login';
require 'user_form.php';
require 'footer.php';