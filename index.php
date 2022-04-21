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
			echo '
				Щоб переглядати даний сайт вам необхідно дозволити обробку cookies.
				<br />
				<form method="POST">
					<button type="submit" name="cookies" value="Дозволити">Дозволити</button>
					<button type="submit" name="block" value="Заборонити">Заборонити</button>
				</form>
				';
			die();
			exit();
		};


include_once("./res/head.php");
include_once("./data/data.php");
include_once("./res/foot.php");
?>
