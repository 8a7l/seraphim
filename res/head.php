<?php
include_once("phaccess.php");
$head_page_js_script = "
function b64_to_utf8(str) {
	return decodeURIComponent(escape(window.atob(str)));
}
function load_page(){
	var str = document.getElementById('page') ;
	var txt = str.textContent || str.innerText;
	var str = b64_to_utf8(txt);
	document.getElementById('page').innerHTML = str ;
}
";
$head_page = '<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Проект seraphim.</title>
		<script language="javascript">
			'.$head_page_js_script.'
		</script>
		<style type="text/css">
			body {
				background-color:black;
				color: rgb(0,255,0);
			}
			button {
				background-color: green;
				color: lightgreen;
			}
			input {
				background-color: green;
				color: lightgreen;
			}
			textarea {
				border-color: lightgreen;
				background-color: green;
				color: lightgreen;
			}
			.creator_info {
				color: lightgreen;
				position: absolute;
				bottom: 0;
				right: 0;
			}
		</style>
	</head>
	<body>
		<form method="POST">
			<input name="page_id" type="text" title="Ввести ім&apos;я сторінки." />
			<button type="submit" title="Шукати сторінку за ім&apos;ям і відкрити її .">Шукати</button>
		</form>
		<br />
		<div id="page">
';
echo $head_page;
?>
