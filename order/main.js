$(document).ready(function() {

	//E-mail Ajax Send
	$("form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail_test.php", //Change
			data: th.serialize(),
			beforeSend: function(){
			$("#sendMail").prop("disable",true);}
		}).done(function() {
			alert("Спасибо за заказ!");
			$("#sendMail").prop("disable",false);
			th.trigger("reset");
			// setTimeout(function() {
			// 	// Done Functions
			// 	th.trigger("reset");
			// }, 1000);
		});
		return false;
	});

});
