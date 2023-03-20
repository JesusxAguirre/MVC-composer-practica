<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login.css">

  <script src="assets/js/jquery-3.6.0.min.js"></script>

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
                    <form id="formulario" action="?url=registro" method="POST">
                      <div class="container-fluid">
                        <div class="row mt-2">
                          <div class="mb-3 row">

                            <div id="grupo__correo" class="col-sm col-md-6 ">
                              <div class="relative">
                                <label class="form-label fw-bold">Correo</label>
                                <i class="input-icon fs-5"></i>
                                <input id="correo" placeholder=" example@gmail.com" name="correo" class="form-control">
                              </div>
                              <p id="mensaje_correo" class="text-danger d-none">El formato de correo es ejemplo@gmail.com </p>

                            </div>
                            <div id="grupo__clave" class="col-sm col-md-6 ">
                              <div class="relative">
                                <label class="form-label fw-bold">Clave</label>
                                <i class="input-icon fs-5"></i>
                                <input id="clave" type="password" placeholder="******" name="clave" class="form-control">
                              </div>
                              <p class="text-danger d-none">La clave debe contener de 7 a 12 digitos </p>
                              <input type="hidden" name="token" value="<?php echo $_SESSION['token'] ?>">
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                    <a class="btn btn-secondary" href="?url=login"> Regresar</a>
                    <button type="submit" id="registrar" name="registrar" class="btn btn-primary">Enviar</button>
                  </div>

                  </form>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>


    </section>
  </div>


  <script src="assets/js/registro-ajax.js"></script>
</body>

</html>