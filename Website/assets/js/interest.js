$(document).ready(function(){
	$("#submit").click(function(){
		console.log("js run");
		var name = $("#name").val();
		var email = $("#email").val();
		var subject = $("#subject").val();
		var message = $("#message").val();
		// Returns successful data submission message when the entered information is stored in database.
		var dataString = 'name='+ name + '&email='+ email + '&subject='+ subject + '&message='+ message;
		if(name==''||email=='') {
			alert("Please fill in required fields");
		}
		else {
			// AJAX Code To Submit Form.
			$.ajax({
				type: "POST",
				url: "interestsubmit.php",
				data: dataString,
				cache: false,
				success: function(result){
					alert(result);
				}
			});
		}
		return false;
	});
});
