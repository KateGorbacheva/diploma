$(document).ready(function() {
btn_status.onclick=status_change;
btn_update.onclick=update;


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

//
function status_change(){
  var id = $("#id").val();
  var status = $("#status").val();
  if (CheckID()==false){return false;}
  else{
  // $("errorMess").text("Успех");

  $.ajax({
    url: 'status_update.php',
    type: 'POST',
    cache: false,
    data: {'id': id, 'status': status},
    dataType: 'text',
    beforeSend: function(){
      $("#btn_status").prop("disable",true);

    },




  });
  // alert('Статус успешно изменен!');
}
// alert('Статус успешно изменен!');
};

function update(){
  var id = $("#id").val();
  var status = $("#status").val();



  $.ajax({
    url: 'update.php',
    type: 'POST',
    cache: false,
    data: {'id': id, 'status': status},
    dataType: 'text',
    beforeSend: function(){
      $("#btn_status").prop("disable",true);

    },




  });
  // alert('База данных обновлена!');
};



  $("#users tr").click(function(){
    $(this).find("[for]").each(function(){
    var value = $(this).text(),
      id = $(this).attr("for");
      $("#"+id).val(value)
    })
  });
  // $(function() {
  //   $("#telephone").mask("+7(000)000-00-00", {
  //     placeholder: "+7(___)___-__-__",
  //     clearIfNotMatch: true
  //   });
  // });

  });
