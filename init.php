<?php

$conn=mysqli_connect('Localhost','root','','test');
$posts=mysqli_query($conn,'SELECT * FROM posts;');