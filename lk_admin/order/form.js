$(document).ready(function() {
btn_status.onclick=status_change;
btn_update.onclick=update;
btn_change.onclick=change;
btn_change_order.onclick=change_order;
//Проверка ID
function CheckID(){
  var id = $("#id").val();
  if(id.length===0){
    alert("Введите ID!");
  return false;
  }
else {
      return true;}

};
function Check_Name_Lastname_driver(){
  var lastname_user = $("#lastname_user").val();
  var name_user = $("#name_user").val();
  if(lastname_user.length===0 || name_user.length===0){
    alert("Введите Фамилию и Имя водителя!");
  return false;
  }
else {
      return true;}

};

//
function status_change(){
  var id = $("#id").val();
  var status = $("#status").val();
  if (CheckID()==false){return false;}
  else{

  $("errorMess").text("");
  $.ajax({
    url: 'status_update.php',
    type: 'POST',
    cache: false,
    asych:false,
    data: {'id': id, 'status': status},
    dataType: 'text',
    beforeSend: function(){
      $("#btn_status").prop("disable",true);

    },
    success: function(data){
          if (data === "login_exist") {

              // alert("Статус успешно обновлен!");
               //$("#btn_status").trigger("reset");
          }else{alert("Статус успешно обновлен!");}


      },




  });
return 0;
}

};
function change(){
  var id = $("#id").val();
  var lastname_user = $("#lastname_user").val();
  var name_user = $("#name_user").val();
  if (CheckID()==false){return false;}
  else if (Check_Name_Lastname_driver()==false){return false;}
  else{

  $("errorMess").text("");
  $.ajax({
    url: 'change_driver.php',
    type: 'POST',
    cache: false,
    asych:false,
    data: {'id': id, 'lastname_user': lastname_user, 'name_user': name_user},
    dataType: 'text',
    beforeSend: function(){
      $("#btn_change").prop("disable",true);

    },
    success: function(data){
      if(data==="login_exist"){
            // alert("Водитель назначен!");

              alert("Такого водителя нет, убедитесь в правильности ввода Фамилии и Имени водителя!");
                $("#btn_change").trigger("reset");

}else{

  alert("Водитель назначен!");
    // alert("Такого водителя нет, убедитесь в правильности ввода Фамилии и Имени водителя!");
    // $("#btn_change").trigger("reset");
}



      },


  });
// swal("Good job!", "You clicked the button!", "success");
// alert("Водитель назначен!");
}


};

function change_order(){
  var id = $("#id").val();
  var status = $("#status").val();
  var sel1 = $("#sel1").val();
  var name = $("#name").val();
  var lastname = $("#lastname").val();
  var email = $("#email").val();
  var telephone = $("#telephone").val();
  var date = $("#date").val();
  var time = $("#time").val();
  var adress1 = $("#adress1").val();
  var numofair = $("#numofair").val();
  var numoftrain = $("#numoftrain").val();
  var adress2 = $("#adress2").val();
  var sel2 = $("#sel2").val();
  var passenger =$("#passenger").val();
  var children = $("#children").val();
  var bigbag = $("#bigbag").val();
  var smallbag = $("#smallbag").val();
  var sel3 = $("#sel3").val();
  var comment = $("#comment").val();
  var price = $("#price").val();

  //var th = $(this);
  if (CheckID()==false){return false;}
  else{

  $("errorMess").text("");
  $.ajax({
    url: 'change_order.php',
    type: 'POST',
    cache: false,
    asych:false,
    data: {'id': id, 'status': status, 'sel1': sel1 , 'name': name, 'lastname': lastname, 'email':email,
     'telephone': telephone, 'date': date, 'time': time, 'adress1': adress1, 'numofair': numofair, 'numoftrain': numoftrain,
   'adress2': adress2, 'sel2': sel2, 'passenger': passenger, 'children': children, 'bigbag': bigbag,
 'smallbag': smallbag, 'sel3': sel3, 'comment': comment, 'price': price},
    dataType: 'text',
    beforeSend: function(){
      $("#btn_change_order").prop("disable",true);

    },
    success: function(data){
          if (data === "error") {

          }else{alert("Заказ успешно изменен!");}


      },


  });
}
};

function update(){
  var id = $("#id").val();
  var status = $("#status").val();


  $("errorMess").text("");
  $.ajax({
    url: 'update.php',
    type: 'POST',
    cache: false,
    asych:false,
    data: {'id': id, 'status': status},
    dataType: 'text',
    beforeSend: function(){
      $("#btn_update").prop("disable",true);

    },
    success: function(data){
          if (data === "error") {

          }else{alert("Обновление прошло успешно!");}


      }




  });

};
$("#users tr").click(function(){
  $(this).find("[for]").each(function(){
  var value = $(this).text(),
    id = $(this).attr("for");
    $("#"+id).val(value)
  })
});

  });
