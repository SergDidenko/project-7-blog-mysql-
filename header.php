<?php 
$user=isset($_SESSION['user']) ? $_SESSION['user'] : 'Anon';
$is_anon=$user==='Anon' ? true : false;
 ?>
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" href="file.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body style='background: <?= $_COOKIE['color'] ?>'>
	
		<div class="container">
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
					<a class="navbar-brand" href="/"><?= $user?></a>
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="/">Home</a>
						</li>
					<?php if (!$is_anon) {?>
						<li>
							<a href="/new.php">Add post</a>
						</li>
					<?php }?>
					<?php if($is_anon){ ?>
						<li>
							<a href="/register.php">Register</a>
						</li>
						<li>
							<a href="/login.php">Login</a>
						</li>
					<?php } else {?>
						
						<li>
							<a href="/dashboard.php">Dashboard</a>
						</li>
						<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Color <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="/color_page.php?type=1">Grey</a></li>
								<li><a href="/color_page.php?type=2">Navy</a></li>
								<li><a href="/color_page.php?type=3">Green</a></li>
								<li><a href="/color_page.php?type=4">Yellow</a></li>
								<li><a href="/color_page.php?type=5">Moccasin</a></li>
								<li><a href="/color_page.php?type=6">Gold</a></li>
								<li><a href="/color_page.php?type=7">White</a></li>
								<li><a href="/color_page.php?type=8">Lime</a></li>

							</ul>
						</li>
						<li>
							<a href="/logout.php">Logout</a>
						</li>
			
					<?php } ?>
					</ul>
				</div>
			</nav>



		