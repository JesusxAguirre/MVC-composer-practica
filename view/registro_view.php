<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login.css">

  <script src="static/js/jquery-3.6.0.min.js"></script>

</head>

<body class="h-100">
  <div class="container-fluid ">
    <section class="h-100 gradient-form" style="background-color: #eee;">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-xl-10">
            <div class="card rounded-3 text-black">
              <div class="row g-0">
                <div class="col-lg-12">
                  <div class="card-body p-md-5 mx-md-4">
                    <div class="text-center">
                      <img class="rounded-circle" src="assets/img/composer.jpg" style="width: 185px;" alt="logo">
                      <h4 class="mt-1 mb-5 pb-1">¡Registrate en el sistema de composer!</h4>
                    </div>
                    <form id="formulario" action="?pagina=iniciar-sesion" method="POST">
                      <div class="container-fluid">
                        <div class="row mt-2">
                          <div class="mb-3 row">
                            <div id="grupo__nombre" class="col-sm col-md-3 ">
                              <div class="relative">
                                <label class="form-label fw-bold">Primer Nombre</label>
                                <i class="input-icon fs-5"></i>
                                <input placeholder="Juan" id="nombre" name="nombre" type="text" class="form-control">
                              </div>
                              <p class="text-danger d-none">El nombre que ser de 3 a 20 dígitos y solo puede contener letras </p>
                            </div>
                            <div id="grupo__apellido" class="col-sm col-md-3 ">
                              <div class="relative">
                                <label class="form-label fw-bold">Primer Apellido</label>
                                <i class="input-icon fs-5"></i>
                                <input placeholder="Jimenez" id="apellido" name="apellido" type="text" class="form-control">
                              </div>
                              <p class="text-danger d-none">El apellido deben ser de 3 a 20 dígitos y solo puede contener letras </p>
                            </div>
                            <div id="grupo__cedula" class="col-sm col-md-3 ">
                              <div class="relative">
                                <label class="form-label fw-bold" ">Cedula</label>    
                                        <i class=" input-icon fs-5"></i>
                                  <input placeholder=" 22222222" id="cedula" name="cedula" class="form-control">
                              </div>
                              <p id="mensaje_cedula" class="text-danger d-none">La cedula deben de ser de 7 a 8 dígitos y solo puede contener numeros </p>
                            </div>
                            <div id="grupo__edad" class="col-sm col-md-3 ">
                              <div class="relative">
                                <label class="form-label fw-bold">Edad</label>
                                <i class="input-icon fs-5"></i>
                                <input placeholder="21" id="edad" name="edad" type="text" class="form-control">
                              </div>
                              <p class="text-danger d-none">La edad deben de ser de 1 a 2 dígitos y solo puede contener numeros </p>
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <div id="grupo__sexo" class="col-sm col-md-3 ">
                              <div class="relative">
                                <label class="form-label fw-bold">Sexo</label>
                                <i class="input-icon fs-5"></i>
                                <select name="sexo" id="sexo" class="form-select form-select" aria-label=".form-select-sm example">
                                  <option value=''>Escoge</option>
                                  <option value="hombre">Hombre</option>
                                  <option value="mujer">Mujer</option>
                                </select>
                              </div>
                              <p class="text-danger d-none">No puede dejar este campo vacio </p>
                            </div>
                            <div id="grupo__civil" class="col-sm col-md-3 ">
                              <div class="relative">
                                <label class="form-label fw-bold">Estado civil</label>
                                <i class="input-icon fs-5"></i>
                                <select name="civil" id="civil" class="form-select form-select" aria-label=".form-select-sm example">
                                  <option value="">Escoge tu estado civil</option>
                                  <option value="soltero">Soltero</option>
                                  <option value="soltera">Soltera</option>
                                  <option value="matrimonio">Casada/o</option>
                                </select>
                              </div>
                              <p class="text-danger d-none">No puede dejar este campo vacio </p>
                            </div>
                            <div id="grupo__nacionalidad" class="col-sm col-md-3 ">
                              <div class="relative">
                                <label class="form-label fw-bold">Nacionalidad</label>
                                <i class="input-icon fs-5"></i>
                                <select id="nacionalidad" name="nacionalidad" class="form-select form-select" aria-label=".form-select-sm example">
                                  <option value="">Escoge tu nacionalidad</option>
                                  <option value="venezolana">Venezolana</option>
                                  <option value="colombiana">Colombiana</option>
                                  <option value="española">Española</option>
                                </select>
                              </div>
                              <p class="text-danger d-none">No puede dejar este campo vacio </p>
                            </div>
                            <div id="grupo__estado" class="col-sm col-md-3 ">
                              <div class="relative">
                                <label class="form-label fw-bold">Estado en el que vive</label>
                                <i class="input-icon fs-5"></i>
                                <select id="estado" name="estado" class="form-select form-select" aria-label=".form-select-sm example">
                                  <option value="">Escoge tu estado</option>
                                  <option value="css">Distritio Capital</option>
                                  <option value="lara">Lara</option>
                                  <option value="yaracuy">Yaracuy</option>
                                </select>
                              </div>
                              <p class="text-danger d-none">No puede dejar este campo vacio </p>
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <div id="grupo__telefono" class="col-sm col-md-3 ">
                              <div class="relative">
                                <label class="form-label fw-bold">Telefono</label>
                                <i class="input-icon fs-5"></i>
                                <input id="telefono" placeholder=" XXXXXXXX" name="telefono" class="form-control">
                              </div>
                              <p class="text-danger d-none">el formato de telefono debe ser 0412xxxxxxx (10 números) </p>
                            </div>
                            <div id="grupo__correo" class="col-sm col-md-3 ">
                              <div class="relative">
                                <label class="form-label fw-bold">Correo</label>
                                <i class="input-icon fs-5"></i>
                                <input id="correo" placeholder=" example@gmail.com" name="correo" class="form-control">
                              </div>
                              <p id="mensaje_correo" class="text-danger d-none">El formato de correo es ejemplo@gmail.com </p>

                            </div>
                            <div id="grupo__clave" class="col-sm col-md-3 ">
                              <div class="relative">
                                <label class="form-label fw-bold">Clave</label>
                                <i class="input-icon fs-5"></i>
                                <input id="clave" type="password" placeholder="******" name="clave" class="form-control">
                              </div>
                              <p class="text-danger d-none">La clave debe contener de 7 a 12 digitos </p>

                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                   <a class="btn btn-secondary" href="?url=login"> Regresar</a>
                    <button type="button" id="registrar" name="registrar" class="btn btn-primary">Enviar</button>
                  </div>
                  </form>
                </div>
              </div>
             
            </div>
          </div>
        </div>
      </div>
  </div>
  </section>
  </div>

</body>

</html>