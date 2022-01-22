<!DOCTYPE html>
<html>
<head>
	<title>CONTACT</title>
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
				<li><a href="<?php echo e(route('about')); ?>">About</a></li>
				<li class="active"><a href="<?php echo e(route('contact')); ?>">Contact</a></li>
			</ul>
		</div>
		<div class="title"><h1>CONTACT US</h1>
			<div class="paragraph">
			<p>Contact us on:</p></div>
			<div class="info"><p>intagram: @gentlemen_perfect</p>
				<p>Email: its.wz344@gmail.com</p></div>
	</header>

</body>
</html><?php /**PATH C:\xampp\htdocs\Laravel\laravel\resources\views/contact.blade.php ENDPATH**/ ?>