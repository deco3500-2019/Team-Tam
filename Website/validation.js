var fname = document.forms['purchase']['firstname'].value;
var lname = document.forms['purchase']['lastname'].value;
var email = document.forms['purchase']['email'].value;

var firstname_error = document.getElementById('first_name_error');
var lastname_error = document.getElementById('last_name_error');
var email_error = document.getElementById('email_error');

fname.addEventListener('blur', fnameVerify, true);
lname.addEventListener('blur', lnameverify, true);
email.addEventListener('blur', emailVerify, true);

function validation() {
	if (fname == null || fname == ""){
		fname.style.border = "1px solid red";
		document.getElementById('first_name').style.color = "red";
		firstname_error.textContent = "first name is required";
		fname.focus();
		return false;
	}
}

function fnameVerify() {
	if (fname != ""){
		fname.style.border = "1px solid blue;
		document.getElementByID('first_name').style.color = "blue";
		firstname_error.innerHTML = "";
		return true;
		}
}