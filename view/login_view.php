<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login.css">
  <link rel="stylesheet" href="vendor/twbs/bootstrap-icons/font/bootstrap-icons.css">

  <script src="static/js/jquery-3.6.0.min.js"></script>
  <script src="assets/js/sweetalert2.js"></script>

</head>

<body class="h-100">
  <div class="container-fluid ">
    <section class="h-100 gradient-form" style="background-color: #eee;">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-xl-10">
            <div class="card rounded-3 text-black">
              <div class="row g-0">
                <div class="col-lg-6">
                  <div class="card-body p-md-5 mx-md-4">
                    <div class="text-center">
                      <img class="rounded-circle" src="assets/img/composer.jpg" style="width: 185px;" alt="logo">
                      <h4 class="mt-1 mb-5 pb-1">¡Bienvenido al sistema de MVC  con composer!</h4>
                    </div>
                    <form  method="post" action="?url=home">
                      <div class="col-sm mb-4" id="grupo__nombre">
                        <div class="relative">
                          <i class="input-icon fs-5"></i>
                          <label class="form-label"  for="">Usuario</label>
                          <input type="text" id="nombre" name="nombre" class="form-control" placeholder="example@gmail.com" />
                          <label class="form-label mt-3"  for="">Clave</label>
                          <input type="password" id="nombre" name="nombre" class="form-control" placeholder="******" />
                        </div>
                        <p class="text-danger d-none">Debes escribir al menos 4 letras sin numeros ni caracteres especiales</p>
                      </div>

                      <div class="text-center pt-1 mb-5 pb-1">
                        <button name="jugar" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">¡Iniciar sesion!</button>
                        <br> <a class="text-dark mb-3" href="?url=registro">¿No tienes usuario? Registrate</a>
                      </div>


                    </form>
                    
              
                  </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                  <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                    <h4 class="mb-4 text-center"> Info </h4>
                    <p class="small mb-0">Composer es un gestor de archivos basado en PHP con el cual se puede usr psr-4 y organizar las dependencias de tu proyecto</p>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>


<script src="assets/js/login.js"></script>
</body>

</html>