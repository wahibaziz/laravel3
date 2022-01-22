<!DOCTYPE html>
<html>
<head>
	<title>ABOUT</title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/about.css')); ?>">
    <style>
        body{
            background-image: url(/img/main.jpg)
        }
    </style>
</head>
<body>
	<header>
		<div class="logo">
			<img src="img/image.png">
		</div>
		<div class="main">
			<ul>
				<li><a href="<?php echo e(route('index')); ?>">Home</a></li>
				<li><a href="<?php echo e(route('gallery')); ?>">Gallery</a></li>
				<li><a href="<?php echo e(route('services')); ?>">Services</a></li>
				<li class="active"><a href="<?php echo e(route('about')); ?>">About</a></li>
				<li><a href="<?php echo e(route('contact')); ?>">Contact</a></li>
			</ul>
		</div>
		<div class="title"><h1>ABOUT US</h1>
			<div class="paragraph">
			<p>Mr Malik arsalan is the CEO of the Perfect Gentlmen</p></div>
			<div class="info"><p>Contact No: +92 3331633337</p>
				<p>Email: its.wz334@gmail.com</p></div>
	</header>

</body>
</html><?php /**PATH C:\xampp\htdocs\Laravel\laravel\resources\views/about.blade.php ENDPATH**/ ?>