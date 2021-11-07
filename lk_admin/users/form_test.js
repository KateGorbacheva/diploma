$(document).ready(function() {
btn_add.onclick=add;
btn_change.onclick=change;
btn_delete.onclick=del;

//Проверка пароля
function CheckPassword(){
    var password = $("#password").val();
  var s_letters = "qwertyuiopasdfghjklzxcvbnm"; // Буквы в нижнем регистре
    var b_letters = "QWERTYUIOPLKJHGFDSAZXCVBNM"; // Буквы в верхнем регистре
    var digits = "0123456789"; // Цифры
    var specials = "!@#$%^&*()_-+=\|/.,:;[]{}"; // Спецсимволы
    var is_s = false; // Есть ли в пароле буквы в нижнем регистре
    var is_b = false; // Есть ли в пароле буквы в верхнем регистре
    var is_d = false; // Есть ли в пароле цифры
    var is_sp = false; // Есть ли в пароле спецсимволы
    for (var i = 0; i < password.length; i++) {
      /* Проверяем каждый символ пароля на принадлежность к тому или иному типу */
      if (!is_s && s_letters.indexOf(password[i]) != -1) is_s = true;
      else if (!is_b && b_letters.indexOf(password[i]) != -1) is_b = true;
      else if (!is_d && digits.indexOf(password[i]) != -1) is_d = true;
      else if (!is_sp && specials.indexOf(password[i]) != -1) is_sp = true;
    }
    if (password.length===0) {
      alert("Введите пароль!");
    return false;
    }
    else if (!is_s){alert("Введите в пароль буквы нижнего регистра!");
  return false;}
    else if (!is_b){alert("Введите в пароль буквы верхнего регистра!");
  return false;}
    else if (!is_d){alert("Введите в пароль цифры!");
  return false;}
    else if (!is_sp){alert("Введите в пароль спец.символы !@#$%^&*()_-+=\|/.,:;[]{}!");
  return false;}
  else if (password.length<8) {
    alert("Введите пароль длиной не менее 8");
  return false;
  }
  else if (password.length>15) {
    alert("Введите пароль длиной не более 15");
  return false;
  }

};
//Проверка ID
function CheckID(){
  var id = $("#id").val();
  if(id.length===0){
    alert("Введите ID");
  return false;
  }
else {
      return true;}

};
//Проверка Логина
function CheckLogin(){

}
//Добавление
function add(){
  var name = $("#name").val();
  var lastname = $("#lastname").val();
  var telephone = $("#telephone").val();
  var email = $("#email").val();
  var login = $("#login").val();
  var password = $("#password").val();
  var flag = $("#flag").val();
if(CheckPassword()==false){return false;}

  //return false;
else{

  $("errorMess").text("");
  $.ajax({
    url: 'check.php',
    type: 'POST',
    cache: false,
    asych:false,
    data: {'name': name, 'lastname': lastname, 'telephone': telephone, 'email': email,
     'login': login, 'password': password,	'flag': flag},
    dataType: 'text',
    beforeSend: function(){
      $("#btn_add").prop("disable",true);

    },

    success: function(data){
          if (data === "login_exist") {

              alert("Такой логин уже существует!");
             // $("#login").trigger("reset");
          }else{alert("Пользователь успешно добавлен!");}


      },


  });

}
//alert("Запись успешно добавлена!"); //работает неправильно,выводится до сообщения об отсутвии логина
};

//Изменение
function change(){
  var id = $("#id").val();
  var name = $("#name").val();
  var lastname = $("#lastname").val();
  var telephone = $("#telephone").val();
  var email = $("#email").val();
  var login = $("#login").val();
  var password = $("#password").val();
  var flag = $("#flag").val();
if (CheckID()==false){return false;}
else{

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


  });
 }
   alert("Запись успешно обнавлена!");
};

//Удаление
function del(){

    var id = $("#id").val();
    if (CheckID()==false){return false;}
    else{
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
  }
   alert("Запись успешно удалена!");
  };
  $("#users tr").click(function(){
    $(this).find("[for]").each(function(){
    var value = $(this).text(),
      id = $(this).attr("for");
      $("#"+id).val(value)
    })
  });
  $(function() {
    $("#telephone").mask("+7(000)000-00-00", {
      placeholder: "+7(___)___-__-__",
      clearIfNotMatch: true
    });
  });

  });
