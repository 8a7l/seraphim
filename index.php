<?php
include_once("phaccess.php");


$status_cookies = $_POST['cookies']; 
$status_page = $_POST['page_id']; 
$status_block = $_POST['block']; 


if(empty($status_cookies)){
	}else{
		setcookie('cookies', $status_cookies);
		echo '<meta http-equiv="refresh" content="0">';
	};
if(empty($status_page)){
	}else{
		setcookie('page_id', $status_page);
		echo '<meta http-equiv="refresh" content="0">';
	};
if(empty($status_block)){
	}else{
		setcookie('block', $status_block);
		echo '<meta http-equiv="refresh" content="0">';
	};


if ($_COOKIE['block']==null){
	}else{
			die();
			exit();
		};
if ($_COOKIE['cookies']=='Дозволити'){
	}else{
			echo '<!DOCTYPE html>
<html>
	<head>
	   <meta charset="utf-8">
	   <meta name="viewport" content="width=device-width, initial-scale=1">
	   <meta name="author" content="Василь Онуфрійчук">
	   <title>OsW</title>
	   <link rel="stylesheet" type="text/css" href="./res/css.css">
	   <link rel="stylesheet" type="text/css" href="./res/font-awesome.css">
	   <link rel="stylesheet" type="text/css" href="./res/style.css">
	   <script src="./res/pbjp.js"></script>
	   <script src="./res/jquery.min.js"></script>
	   <script src="./res/prefixfree.min.js"></script>
	</head>

	<body>
		<header>
			Щоб переглядати даний сайт вам необхідно дозволити обробку cookies.
			<br />
			<form method="POST">
				<button type="submit" name="cookies" value="Дозволити">Дозволити</button>
				<button type="submit" name="block" value="Заборонити">Заборонити</button>
			</form>
		</header>

		<div class="creator_info"><p align="right">Author <a href="https://facebook.com/Onufriychuk.Vasyl.Vasyliovych" target="_blank" title="Перейти на профіль facebook.">Василь Онуфрійчук</a><br />Copyright <a href="http://www.osw.pp.ua/" target="_blank" title="Перейти на OsW.">OsW</a> © 2014.</p></div>
		<script>window.onload = load_page();</script>
	</body>
</html>
				';
			die();
			exit();
		};


include_once("./res/head.php");
include_once("./data/data.php");
include_once("./res/foot.php");
?>
