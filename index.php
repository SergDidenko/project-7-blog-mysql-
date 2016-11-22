<?php 
session_start();

$page=1;
$max=5;
if (isset($_GET['page'])) {
	$page=$_GET['page'];
}
$start=($page-1)*$max;
$conn=mysqli_connect('Localhost','root','','test');
$posts=mysqli_query($conn, "SELECT * FROM posts LIMIT $start, $max;");
require "header.php";
foreach ($posts as $post) {
	$id=$post['id'];
	require "post_item.php";
}
require 'pager.php';
require "footer.php";
