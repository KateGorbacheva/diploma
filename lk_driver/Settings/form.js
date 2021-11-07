$(document).ready(function() {
btn_change.onclick=change;

//Проверка пароля
function CheckPassword(){
    var newpassword = $("#newpassword").val();
  var s_letters = "qwertyuiopasdfghjklzxcvbnm"; // Буквы в нижнем регистре
    var b_letters = "QWERTYUIOPLKJHGFDSAZXCVBNM"; // Буквы в верхнем регистре
    var digits = "0123456789"; // Цифры
    var specials = "!@#$%^&*()_-+=\|/.,:;[]{}"; // Спецсимволы
    var is_s = false; // Есть ли в пароле буквы в нижнем регистре
    var is_b = false; // Есть ли в пароле буквы в верхнем регистре
    var is_d = false; // Есть ли в пароле цифры
    var is_sp = false; // Есть ли в пароле спецсимволы
    for (var i = 0; i < newpassword.length; i++) {
      /* Проверяем каждый символ пароля на принадлежность к тому или иному типу */
      if (!is_s && s_letters.indexOf(newpassword[i]) != -1) is_s = true;
      else if (!is_b && b_letters.indexOf(newpassword[i]) != -1) is_b = true;
      else if (!is_d && digits.indexOf(newpassword[i]) != -1) is_d = true;
      else if (!is_sp && specials.indexOf(newpassword[i]) != -1) is_sp = true;
    }
    // if (newpassword.length===0) {
    //   alert("Введите пароль!");
    // return false;
    // }
    if (!is_s){alert("Введите в пароль буквы нижнего регистра!");
  return false;}
    else if (!is_b){alert("Введите в пароль буквы верхнего регистра!");
  return false;}
    else if (!is_d){alert("Введите в пароль цифры!");
  return false;}
    else if (!is_sp){alert("Введите в пароль спец.символы !@#$%^&*()_-+=\|/.,:;[]{}!");
  return false;}
  else if (newpassword.length<8) {
    alert("Введите пароль длиной не менее 8");
  return false;
  }
  else if (newpassword.length>15) {
    alert("Введите пароль длиной не более 15");
  return false;
  }

};

//Проверка Логина
function CheckLogin(){
  var login = $("#login").val();
  if(login.length<6) {
    alert("Введите логин длиной не менее 6");
  return false;
  }
  else if (login.length>15) {
    alert("Введите логин длиной не более 15");
  return false;}
  else{
    return true;
  }
};

//Изменение
function change(){

  var telephone = $("#telephone").val();
  var email = $("#email").val();
  var login = $("#login").val();
  var password = $("#password").val();
  var newpassword = $("#newpassword").val();

// if (CheckID()==false){return false;}
// else{

if(password.length==0 && newpassword.length>0){
  alert("Введите старый пароль!");
  if (CheckPassword()===false){return false;}
  else{return true};
}
else if(password.length>0 && newpassword.length==0){
  alert("Введите новый пароль!");

}
else if(password.length>0 && newpassword.length>0){
  if (CheckPassword()===false){return false;}
  else{return true};
}
// if(login.length>0){
//   if (CheckLogin()===false){return false;}
//   else{return true;};
// }


else{
  $("errorMess").text("");
  $.ajax({
    url: 'update.php',
    type: 'POST',
    cache: false,
    asych:false,
    data: {'telephone': telephone, 'email': email,
     'login': login, 'password': password,	'newpassword': newpassword},
    dataType: 'text',
    beforeSend: function(){
      $("#btn_change").prop("disable",true);

    },
    success: function(data){
          if (data === 'change_success') {

              alert("Данные успешно обновлены!");
             // $("#login").trigger("reset");
          }else if(data === 'error'){
            alert("Ошибка в старом пароле, попробуйте еще раз!");
          }else if(data != 'change_success' && data != 'change_login')
          {alert("Успешно обновлен логин. При нажатии ок вы перейдете на вход в личный кабинет!");}


          //if{alert("Данные успешно обновлены");}

      },

  }).done(function(msg){
    alert(msg);
  });
 }
   //alert("Запись успешно обнавлена!");
};

  $(function() {
    $("#telephone").mask("+7(000)000-00-00", {
      placeholder: "+7(___)___-__-__",
      clearIfNotMatch: true
    });
  });

  });
