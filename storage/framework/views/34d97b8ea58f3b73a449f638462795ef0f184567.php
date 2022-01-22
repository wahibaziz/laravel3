<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/signup.css')); ?>">
    <style>
        body{
            background-image: url(/img/main.jpg)
        }
    </style>
</head>
<body>
	<div class="logo">
			<img src="img/image.png">
		</div>
		<div class="main">
			<ul>
				<li><a href="<?php echo e(route('index')); ?>">Home</a></li>
				<li><a href="<?php echo e(route('gallery')); ?>">Gallery</a></li>
				<li><a href="<?php echo e(route('services')); ?>">Services</a></li>
				<li><a href="<?php echo e(route('about')); ?>">About</a></li>
				<li><a href="<?php echo e(route('contact')); ?>">Contact</a></li>
			</ul>
		</div>

	<form class="box" action="signup.html" method="post">
		<h1>SIGN UP</h1>
		<input type="text" name="" placeholder="Username">
		<input type="text" name="" placeholder="Email Address">
		<input type="Password" name="" placeholder="Password">
		<input type="Password" name="" placeholder="re-enter Password">
		<input type="submit" name="" value="Login">
	</form>

</body>
</html><?php /**PATH C:\xampp\htdocs\Laravel\laravel\resources\views/signup.blade.php ENDPATH**/ ?>