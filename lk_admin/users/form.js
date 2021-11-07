// $(document).ready(function() {
//
// 	//E-mail Ajax Send
// 	$("form").submit(function() { //Change
// 		var th = $(this);
//
// 		$.ajax({
// 			type: "POST",
// 			url: "check.php", //Change
// 			data: th.serialize(),
// 			beforeSend: function(){
// 			$("#btn_add").prop("disable",true);}
// 		}).done(function() {
// 			alert("Пользователь успешно добавлен!");
// 			$("#btn_add").prop("disable",false);
// 			th.trigger("reset");
// 			// setTimeout(function() {
// 			// 	// Done Functions
// 			// 	th.trigger("reset");
// 			// }, 1000);
// 		});
// 		return false;
// 	});
//
// });
//ADD
$(document).ready(function() {
// $("form").on('click', '#btn_add', function() {
// $("#users tr").click(function(){
//   $(this).find("td").each(function(){
//   var value = $(this).text(),
//   	id = $(this).attr("for");
//     $("#"+id).val(value)
//   })
// });
// function selectedRowToInput()
//           {
//
//               for(var i = 1; i < users.rows.length; i++)
//               {
//                   users.rows[i].onclick = function()
//                   {
//                     // get the seected row index
//                     rIndex = this.rowIndex;
//                     document.getElementById("name").value = this.cells[1].innerHTML;
//                     document.getElementById("lastname").value = this.cells[2].innerHTML;
//                     document.getElementById("telephone").value = this.cells[3].innerHTML;
//                   };
//               }
//           });
$("form").submit('#btn_add', function() {
  var name = $("#name").val();
  var lastname = $("#lastname").val();
  var telephone = $("#telephone").val();
  var email = $("#email").val();
  var login = $("#login").val();
  var password = $("#password").val();
  var flag = $("#flag").val();

  // if(name == ""){
  //   //$("#errorMes").text("Введите имя");
  //   return false;
  //
  // }else if(lastname == ""){
  //   //$("#errorMes").text("Введите фамилию");
  //   //alert("Введите фамилию");
  //   return false;}
  if(telephone.length < 11 ){
    alert("Ошибка в телефоне, недосаточная длина!");
    return false;
  }else if(telephone.length > 15){
alert("Ошибка в телефоне, большая длина!");
return false;
  }

	$("errorMess").text("");
	$.ajax({
		url: 'check.php',
		type: 'POST',
		cache: false,
		data: {'name': name, 'lastname': lastname, 'telephone': telephone, 'email': email,
     'login': login, 'password': password,	'flag': flag},
		dataType: 'text',
		beforeSend: function(){
			$("#btn_add").prop("disable",true);

		},
	// 	success: function(data) {
	// 		if(!data){
	// 			alert("Возникла ошибка, сообщение не отправлено!");
	// 		}
	// 		else {
	// 			$("form").trigger("reset");
  //       alert("Заявка успешно отправлена!");}
  //
	// 			$("#btn_add").prop("disable",false);
	// }
    success: function(data){
          if (data === "login_exist") {

              alert("Такой логин уже существует!");
             // $("#login").trigger("reset");
          }else if(data === "add_success") {
            alert("Запись успешно добавлена!");
          }
      },

	});


});

});

//UPDATE
$(document).ready(function() {

  $("form").submit('#btn_change', function() {
    var id = $("#id").val();
    var name = $("#name").val();
    var lastname = $("#lastname").val();
    var telephone = $("#telephone").val();
    var email = $("#email").val();
    var login = $("#login").val();
    var password = $("#password").val();
    var flag = $("#flag").val();



  	$("errorMess").text("");
  	$.ajax({
  		url: 'update.php',
  		type: 'POST',
  		cache: false,
  		data: {'id': id,'name': name, 'lastname': lastname, 'telephone': telephone, 'email': email,
       'login': login, 'password': password,	'flag': flag},
  		dataType: 'text',
  		beforeSend: function(){
  			$("#btn_change").prop("disable",true);

  		},

      success: function(data){
            if (data === "add_success") {

                alert("Запись успешно обнавлена!");
               // $("#login").trigger("reset");
            }
        },
  	});


  });


  });

//DELETE

  $(document).ready(function() {

    $("form").submit('#btn_delete', function() {
      var id = $("#id").val();




    	$("errorMess").text("");
    	$.ajax({
    		url: 'delete.php',
    		type: 'POST',
    		cache: false,
    		data: {'id': id},
    		dataType: 'text',
    		beforeSend: function(){
    			$("#btn_delete").prop("disable",true);

    		},


    	});


    });


    });
