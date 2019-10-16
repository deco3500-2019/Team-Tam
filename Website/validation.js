var fname = document.forms["purchase"]["firstname"];
var lname = document.forms["purchase"]["lastname"];
var e = document.forms["purchase"]["email"];

fname.addEventListener('blur', firstVerify, true);
lname.addEventListener('blur', lastVerify, true);
e.addEventListener('blur', emailVerify, true);

function validation() {
	if (fname.value == null || fname.value == "") {
		fname.style.border = "1px solid red";
		document.getElementById('first_name_error').textContent = "First name is required";
		fname.focus();
		return false;
	}
	
	if (lname.value == null || lname.value == "") {
		lname.style.border = "1px solid red";
		document.getElementById('last_name_error').textContent = "Last name is required";
		lname.focus();
		return false;
	}
	
	if (e.value == null || e.value == "") {
		e.style.border = "1px solid red";
		document.getElementById('email_error').textContent = "Email is required";
		e.focus();
		return false;
	}
}

function firstVerify() {
	if (fname.value != null || fname.value != "") {
		fname.style.border = "1px solid #5e6e66";
		document.getElementById('first_name').style.color="1px solid #5e6e66";
		first_name_error.innerHTML="";
		return true;
	}
}


function lastVerify() {
	if (lname.value != null || lname.value != "") {
		lname.style.border = "1px solid #5e6e66";
		document.getElementById('last_name').style.color="1px solid #5e6e66"
		last_name_error.innerHTML="";
		return true;
	}
}	

function emailVerify() {
	if (e.value != null || e.value != "") {
		e.style.border = "#5e6e66";
		document.getElementById('email_div').style.color="1px solid #5e6e66"
		email_error.innerHTML="";
		return true;
	}
	
}