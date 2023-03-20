$(document).ready(function () {
 
  $("#formulario").submit(function (e) {
      console.log("entra en el submit")
      $.ajax({
        type: "POST",
        url: "?url=registro",
        data: $(this).serialize(),
        success: function (response) {
          var data = JSON.parse(response);
          console.log(data)
          if (data.response == "1") {
            Swal.fire({
              icon: 'success',
              title: 'Se inicio sesion correctamente'
            })
          const myTimeout = setTimeout(recarga, 4000);

         
          } else {
            Swal.fire({
              icon: 'error',
              title: 'Lo siento ',
              text: 'Datos incorrectos por favor ingresa datos validos'
            })
          }
        }
      })
  })

  function recarga() {
    window.location = "?url=home";
}














 
})