$(document).ready(function () {
  const formulario = document.getElementById('formulario'); //declarando una constante con la id formulario
  const inputs = document.querySelectorAll('#formulario input'); //declarando una constante con todos los inputs dentro de la id formulario

  const campos = {
    correo: false,
    clave: false,
  }

  const expresiones = { //objeto con varias expresiones regulares
    password: /^.{7,12}$/, // 4 a 12 digitos.
    correo: /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i,
    vacio: /^\s*$/
  }


  const ValidarFormulario = (e) => {
    switch (e.target.name) {
      case "usuario":
        ValidarCampo(expresiones.correo, e.target, 'usuario');
        break;
      case "clave":
        ValidarCampo(expresiones.password, e.target, 'clave');
        break;
    }
  }
  inputs.forEach((input) => {
    input.addEventListener('keyup', ValidarFormulario);
    input.addEventListener('blur', ValidarFormulario);
    // input.addEventListener('click', ValidarFormulario);
  });



  const ValidarCampo = (expresion, input, campo) => {
    if (expresion.test(input.value)) {
      document.querySelector(`#grupo__${campo} i`).classList.remove('bi', 'bi-exclamation-triangle-fill', 'text-danger', 'input-icon');
      document.querySelector(`#grupo__${campo} p`).classList.remove('d-block');
      document.querySelector(`#grupo__${campo} i`).classList.add('bi', 'bi-check-circle-fill', 'text-check', 'input-icon2');
      document.querySelector(`#grupo__${campo} p`).classList.add('d-none');
      campos[campo] = true;
    } else {
      document.querySelector(`#grupo__${campo} i`).classList.remove('bi', 'bi-check-circle-fill', 'text-check', 'input-icon2');
      document.querySelector(`#grupo__${campo} p`).classList.remove('d-none');
      document.querySelector(`#grupo__${campo} i`).classList.add('bi', 'bi-exclamation-triangle-fill', 'text-danger', 'input-icon');
      document.querySelector(`#grupo__${campo} p`).classList.add('d-block');
      campos[campo] = false;
    }
  }

  $("#formulario").submit(function (e) {
    e.preventDefault()
    if (!(campos.usuario && campos.clave)) {
      e.preventDefault();
      Swal.fire({
        icon: 'error',
        title: 'Lo siento ',
        text: 'Registra el formulario correctamente '
      })
    } else {
      console.log("entra en el submit")
      $.ajax({
        type: "POST",
        url: "?url=registro",
        data: $(this).serialize(),
        success: function (response) {
          var data = JSON.parse(response);
          console.log(data)
          if (data.response == "1") {
            document.getElementById("respuesta").innerHTML = "<div class='alert alert-success' role='alert'>" +
              "Te has registrado correctamente te redirigemos al login para que inicies sesion" +
              "</div>"
          const myTimeout = setTimeout(recarga, 5000);

         
          } else {
            console.log("Envio malicioso de datos")
          }
        }
      })
    }
  })

  function recarga() {
    window.location = "?url=login";
}














 
})