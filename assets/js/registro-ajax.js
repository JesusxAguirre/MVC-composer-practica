$(document).ready(function(){
  $("#formulario").submit(function(e){
    e.preventDefault()

    $.ajax({
      type: "POST",
      url: "registro_view.php",
      data: $(this).serialize(),
      success: function (response) {
        var data = JSON.parse(response);
      }
    });
  })
})