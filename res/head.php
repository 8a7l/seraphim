<?php
include_once("phaccess.php");

$head_page = '<!DOCTYPE html>
<html>
	<head>
	   <meta charset="utf-8">
	   <meta name="viewport" content="width=device-width, initial-scale=1">
	   <meta name="author" content="Василь Онуфрійчук">
	   <title>Проект seraphim.</title>
	   <link rel="stylesheet" type="text/css" href="./res/css.css">
	   <link rel="stylesheet" type="text/css" href="./res/font-awesome.css">
	   <link rel="stylesheet" type="text/css" href="./res/style.css">
	   <script src="./res/pbjp.js"></script>
	   <script src="./res/jquery.min.js"></script>
	   <script src="./res/prefixfree.min.js"></script>
	</head>
	<body>
		<header>
			<form method="POST">
				<input name="page_id" type="text" title="Ввести ім&apos;я сторінки." />
				<button type="submit" title="Шукати сторінку за ім&apos;ям і відкрити її .">Шукати</button>
			</form>
			<br />
		</header>
		<div id="page">
';
echo $head_page;
?>
