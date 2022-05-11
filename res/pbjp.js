function b64_to_utf8(str) {
	return decodeURIComponent(escape(window.atob(str)));
}
function load_page(){
	var str = document.getElementById('page') ;
	var txt = str.textContent || str.innerText;
	var str = b64_to_utf8(txt);
	document.getElementById('page').innerHTML = str ;
}
