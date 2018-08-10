<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		.card {
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
			max-width: 300px;
			margin: auto;
			text-align: center;
		}

		.title {
			color: grey;
			font-size: 18px;
		}

		a {
			text-decoration: none;
			font-size: 22px;
			color: black;
		}

		a:hover {
			opacity: 0.7;
		}

		a.button {
			border: none;
			outline: 0;
			display: inline-block;
			padding: 8px;
			color: white;
			background-color: #000;
			text-align: center;
			cursor: pointer;
			width: 284px;
			font-size: 18px;
		}
	</style>
</head>
<body>
	<div class="card">
		<img src="<?= $person['gender']==1 ? 'img_avatar.png' : 'img_avatar2.png'; ?>" alt="John" style="width:100%">
		<h1><?= $person['name']; ?></h1>
		<p class="title"><?= $person['position']; ?></p>
		<p><?=$person['company']; ?></p>

		<?php if($person['dribbble']): ?>
			<a href="http://dribbble.com/<?= $person['dribbble']; ?>"><i class="fa fa-dribbble"></i></a>
		<?php endif; ?>
		<?php if($person['twitter']): ?>
			<a href="http://twitter.com/<?= $person['twitter']; ?>"><i class="fa fa-twitter"></i></a>
		<?php endif; ?>
		<?php if($person['linkedin']): ?>
			<a href="http://linkedin.com/<?= $person['linkedin']; ?>"><i class="fa fa-linkedin"></i></a>
		<?php endif; ?>
		<?php if($person['facebook']): ?>
			<a href="http://facebook.com/<?= $person['facebook']; ?>"><i class="fa fa-facebook"></i></a>
		<?php endif; ?>

		<p><a class="button" href="index.php">Go Back</a></p>
	</div>
</body>
</html>










