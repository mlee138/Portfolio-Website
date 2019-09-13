$("form").submit(function(e){
	var error = "";

	if($("input[name='email-address']").val() == ""){
		error += "Please enter an email-address.<br>"
	}
	if($("input[name='subject']").val() == ""){
		error += "Please add a subject.<br>"
	}
	if($("textarea[name='content']").val() == ""){
		error += "Please include some content.<br>"
	}

	if(error != ""){
		$(".error-msg").html(error);
		$(".error-msg").css("display", "block");
		$(".success-msg").css("display", "none");
		return false;
	} else {
		$(".success-msg").html("Your message was sent, I will get back to you ASAP!");
		$(".success-msg").css("display", "block");
		$(".error-msg").css("display", "none");
		return true;
	}
});