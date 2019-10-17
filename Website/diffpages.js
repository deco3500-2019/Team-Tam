var option = document.forms["body"]["optiontype"]

function diffpages(e){
e.preventDefault();
console.log('hello')
	if (option.value == "Private Log") {
	//	window.location = "log.php";
	}
	
	if (option.value == "Share") {
	//	window.location = "share.php";

	}
}