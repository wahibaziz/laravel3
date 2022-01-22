<!DOCTYPE html>
<html>
<head>
	<title>The Perfect Gentlemen</title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">
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
				<li class="active"><a href="<?php echo e(route('index')); ?>">Home</a></li>
				<li><a href="<?php echo e(route('gallery')); ?>">Gallery</a></li>
				<li><a href="<?php echo e(route('services')); ?>">Services</a></li>
				<li><a href="<?php echo e(route('about')); ?>">About</a></li>
				<li><a href="<?php echo e(route('contact')); ?>">Contact</a></li>
			</ul>
		</div>
		<div class="title">
			<h1>THE PERFECT GENTLEMEN</h1>
		</div>
		<div class="button">
			<a href="<?php echo e(route('signup')); ?>" class="btn">SIGN UP</a>
			<a href="<?php echo e(route('signin')); ?>" class="btn">LOG IN</a>
		</div>
	</header>

</body>
</html><?php /**PATH C:\xampp\htdocs\Laravel\laravel\resources\views/index.blade.php ENDPATH**/ ?>