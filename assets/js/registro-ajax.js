$(document).ready(function(){
  console.log("Carga el js")
  $("#formulario").submit(function(e){
    e.preventDefault()
    console.log("entra en el submit")
    $.ajax({
      type: "POST",
      url: "?url=registro",
      data: $(this).serialize(),
      success: function (response) {
        var data = JSON.parse(response);

        console.log(data)
      }
    });
  })
})