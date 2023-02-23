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
  <link rel="stylesheet" href="assets/css/mi-perfil.css">
  <script src="static/js/jquery-3.6.0.min.js"></script>

</head>

<body class="h-100" style="background-color: #F8F9F9;">
  <div class="container ">
    <div class="row">
      <div class="col-xl-12">
        <!-- Edit profile START -->
        <div class="card   border rounded-3">
          <!-- Card header -->
          <div class="card-header bg-primary text-white    border-bottom">
            <h3 class=" mb-0">Editar perfil</h3>
          </div>
          <!-- Card body START -->
          <div class="card-body">
            <!-- Form -->
            <form class="row g-4">

              <!-- Profile picture -->
              <div class="col-12 justify-content-center align-items-center">
                <label class="form-label">Foto de perfil</label>
                <div class="d-flex align-items-center">
                  <label class="position-relative me-4" for="uploadfile-1" title="Replace this pic">
                    <!-- Avatar place holder -->
                    <span class="avatar avatar-xl">
                      <img id="uploadfile-1-preview" class="avatar-img rounded-circle border border-white border-3 shadow" src="assets/img/avatar.jpg" alt="">
                    </span>
                    <!-- Remove btn -->
                    <button type="button" class="uploadremove"><i class="bi bi-x text-white"></i></button>
                  </label>
                  <!-- Upload button -->
                  <label class="btn btn-primary-soft mb-0" for="uploadfile-1">Cambiar</label>
                  <input id="uploadfile-1" class="form-control d-none" type="file">
                </div>
              </div>

              <!-- Full name -->
              <div class="col-12">
                <label class="mt-5 form-label">Nombre completo</label>
                <div class="input-group">
                  <input type="text" class="form-control" value="Lori" placeholder="First name">
                  <input type="text" class="form-control" value="Stevens" placeholder="Last name">
                </div>
              </div>

              <!-- Username -->
              <div class="col-md-6">
                <label class="form-label">Nombre de usuario</label>
                <div class="input-group">
                  <span class="input-group-text">MVC.COM</span>
                  <input type="text" class="form-control" value="loristev">
                </div>
              </div>

              <!-- Email id -->
              <div class="col-md-6">
                <label class="form-label">Email</label>
                <input class="form-control" type="email" value="example@gmail.com" placeholder="Email">
              </div>

              <!-- Phone number -->
              <div class="col-md-6">
                <label class="form-label">Numero de telefono</label>
                <input type="text" class="form-control" value="1234567890" placeholder="Phone number">
              </div>

              <!-- Location -->
              <div class="col-md-6">
                <label class="form-label">Localidad</label>
                <input class="form-control" type="text" value="California">
              </div>

              <!-- About me -->
              <div class="col-12">
                <label class="form-label">Sobre mi</label>
                <textarea class="form-control" rows="3">Escribe algo sobre ti</textarea>

         
              <!-- Save button -->
              <div class="d-sm-flex justify-content-end">
                <button type="button" class="btn btn-primary mb-0">Guardar Cambios</button>
              </div>
            </form>
          </div>
          <!-- Card body END -->
        </div>
        <!-- Edit profile END -->

        <div class="row g-4 mt-3">


          <!-- EMail change START -->
          <div class="col-lg-6">
            <div class="card   border rounded-3">
              <!-- Card header -->
              <div class="card-header bg-primary text-white    border-bottom">
                <h5 class=" mb-0">Actualizar Email</h5>
              </div>
              <!-- Card body -->
              <div class="card-body">
                <p>Your current email address is <span class="text-primary">example@gmail.com</span></p>
                <!-- Email -->
                <form>
                  <label class="form-label">Introduce tu nuevo email</label>
                  <input class="form-control" type="email" placeholder="Enter new email">
                  <div class="d-flex justify-content-end mt-4">
                    <button type="button" class="btn btn-primary mb-0">Actualizar Email</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- EMail change end -->

          <!-- Password change START -->
          <div class="col-lg-6">
            <div class="card border    rounded-3">
              <!-- Card header -->
              <div class="card-header bg-primary text-white    border-bottom">
                <h5 class=" mb-0">Actualizar Password</h5>
              </div>
              <!-- Card body START -->
              <div class="card-body">
                <!-- Current password -->
                <div class="mb-3">
                  <label class="form-label">Current password</label>
                  <input class="form-control" type="password" placeholder="Enter current password">
                </div>
                <!-- New password -->
                <div class="mb-3">
                  <label class="form-label"> Enter new password</label>
                  <div class="input-group">
                    <input class="form-control" type="password" placeholder="Enter new password">
                    <span class="input-group-text p-0   ">
                      <i class="far fa-eye cursor-pointer p-2 w-40px"></i>
                    </span>
                  </div>
                  <div class="rounded mt-1" id="psw-strength"></div>
                </div>
                <!-- Confirm password -->
                <div>
                  <label class="form-label">Confirm new password</label>
                  <input class="form-control" type="password" placeholder="Enter new password">
                </div>
                <!-- Button -->
                <div class="d-flex justify-content-end mt-4">
                  <button type="button" class="btn btn-primary mb-0">Cambiar Password</button>
                </div>
              </div>
              <!-- Card body END -->
            </div>
          </div>
          <!-- Password change end -->
        </div>
      </div>
    </div>
  </div>
</body>

</html>