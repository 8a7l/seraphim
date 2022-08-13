<?php
include_once("phaccess.php");

$head_page = file_get_contents("./res/head.html");
$footer_page = file_get_contents("./res/foot.html");;


$status_cookies = $_POST['cookies']; 
$status_page = $_POST['page_id']; 
$status_page_key = $_POST['page_key'];
$status_block = $_POST['block']; 

function status($value,$cookies_name){
	if(empty($value)){
	}else{
		setcookie($cookies_name, $value);
		echo '<meta http-equiv="refresh" content="0">';
	};
};
function https(){
	if($_SERVER['HTTP_X_FORWARDED_PROTO']=='http') {
	header("HTTP/1.1 301 Moved Permanently");
	header('Location: https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	exit();
	}
};
//https(); // Якщо сайт процює за протоколом https просто розкоментувати.
status($status_cookies,'cookies');
status($status_page,'page_id');
status($status_page_key,'page_key');
status($status_block,'block');

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

		<div class="creator_info">Powered by <a href="https://github.com/8a7l" target="_blank" title="Перейти на GitHub.">8a7l</a>.</div>
		<script>window.onload = load_page();</script>
	</body>
</html>
				';
			die();
			exit();
		};


echo $head_page;
include_once("./data/data.php");
echo $footer_page;
?>
