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
  console.log("Carga el js")
  $("#formulario").submit(function (e) {
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