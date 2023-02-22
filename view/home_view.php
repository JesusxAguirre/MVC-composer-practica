<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.6">

    <!-- Bostrap 5 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/twbs/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/inicio.css">
    <!-- Js boostrap -->
    <script src="assets/js/bootstrap.min.js"></script>

</head>

<body style="background-color: #eee;">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Menu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="?url=home">Home</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse  justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="?url=login"><button class=" btn btn-outline-light">Iniciar sesion</button></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="?url=mi-pefil"><button class="btn btn-outline-light"><i class=" bi bi-person-circle"></i></button></a>
                    </li>

                </ul>
                
      <ul class="navbar-nav">
        <input  class="d-none" type="text" ">
        <input  class="d-none" type="text" >
        <input class="d-none" type="text">
        <li class="nav-item dropdown">
          <a  class="fs-3 nav-link btn-dark text-light  ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="text-light bi bi-bell-fill fs-3"></i>
          </a>
          <ul  class="dropdown-menu dropdown-menu-end">
            <!-- DATOS PRUEBA -->
            <li>
              <a class="dropdown-item" href="#">Primera notificacion</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Segunda notificaicon</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Tercera notificacion</a>
            </li>
          </ul>
        </li>
      </ul>
            </div>
        </div>
    </nav>
    <main>
        <section class="py-5">
            <div class="container">
                <div class="row position-relative">

                    <!-- Title -->
                    <h1 class="text-center">Noticias</h1>

                </div>
            </div>
            </div>
        </section>

        <section class="position-relative pt-0 pt-lg-5">
            <div class="container">
                <div class="row g-4">
                    <!-- Card item START -->
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="card bg-transparent">
                            <div class="overflow-hidden rounded-3">
                                <img src="assets/img/django_noticia.png" class="card-img" alt="noticia imagen">
                                <!-- Overlay -->
                                <div class="bg-overlay bg-dark opacity-4"></div>
                                <div class="card-img-overlay d-flex align-items-start p-3">
                                    <!-- badge -->
                                    <a href="https://aws.amazon.com/es/what-is/django/" class="badge bg-danger">Link de fuente</a>
                                </div>
                            </div>

                            <!-- Card body -->
                            <div class="card-body">
                                <!-- Title -->
                               <h5 class="card-title">¿Qué es Django?</h5>
                                <p class="text-truncate-2">Django es un software que puede utilizar para desarrollar aplicaciones web de forma rápida y eficiente. Los desarrolladores utilizan el marco web de Django para organizar y escribir su código de manera más eficiente y reducir significativamente el tiempo de desarrollo web.</p>
                                <!-- Info -->
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0"><a href="#">Jesus Aguirre</a></h6>
                                    <span class="small">22 de febrero del 2023</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="card bg-transparent">
                            <div class="overflow-hidden rounded-3">
                                <img src="assets/img/flask_noticia.png" class="card-img" alt="noticia imagen">
                                <!-- Overlay -->
                                <div class="bg-overlay bg-dark opacity-4"></div>
                                <div class="card-img-overlay d-flex align-items-start p-3">
                                    <!-- badge -->
                                    <a href="https://devcamp.es/que-es-flask/" class="badge bg-success">Link de fuente</a>
                                </div>
                            </div>

                            <!-- Card body -->
                            <div class="card-body">
                                <!-- Title -->
                                <h5 class="card-title"><a href="#">¿Qué es flask?</a></h5>
                                <p class="text-truncate-2">Empecemos por la definición. Flask es un framework escrito en Python que permite crear aplicaciones de forma sencilla y rápida. <br> Es decir, un acelerador de tareas que funciona con pocas líneas de código y que ejecuta las aplicaciones rápidamente.                            
Cuando instalamos Flask, tenemos de forma instantánea todas las herramientas necesarias para poder crear cualquier app web. ¿Y si necesitas alguna nueva funcionalidad? ¡Fácil! Te descargas rápidamente alguno de los plugins (o extensiones) que permite el programa.  

</p>
                                <!-- Info -->
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0"><a href="#">Jesus Aguirre</a></h6>
                                    <span class="small">23 de enero del 2023</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="card bg-transparent">
                            <div class="overflow-hidden rounded-3">
                                <img src="assets/img/flaskvsdjango_noticia.png" class="card-img" alt="noticia imagen">
                                <!-- Overlay -->
                                <div class="bg-overlay bg-dark opacity-4"></div>
                                <div class="card-img-overlay d-flex align-items-start p-3">
                                    <!-- badge -->
                                 
                                </div>
                            </div>

                            <!-- Card body -->
                            <div class="card-body">
                                <!-- Title -->
                                <h5 class="card-title"><a href="#">Flask VS Django</a></h5>
                                <p class="text-truncate-2">Ambos son bastantes potentes y principales frameworks de Python. Generalmente se suele usar Flask para proyectos pequeños medianos y Django para proyectos grandes ya que este viene con muchas funciones listas. Dependera del proyecto escoger el uno al otro, django mas acorta el tiempo de desarrollo de lo habitual, flask mas flexible y rapido</p>
                                <!-- Info -->
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0"><a href="#">Jesus Aguirre</a></h6>
                                    <span class="small">22 de febrero del 2023</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="card bg-transparent">
                            <div class="overflow-hidden rounded-3">
                                <img src="assets/img/pythonanywhere.png" class="card-img-top" alt="noticia imagen">
                                <!-- Overlay -->
                                <div class="bg-overlay bg-dark opacity-4"></div>
                                <div class="card-img-overlay d-flex align-items-start p-3">
                                    <!-- badge -->
                        
                                </div>
                            </div>

                            <!-- Card body -->
                            <div class="card-body">
                                <!-- Title -->
                                <h5 class="card-title"><a href="#">Subir app a web con Flask Gratis</a></h5>
                                <p class="text-truncate-2">Para implementar su aplicación Flask, puede usar PythonAnywhere .

Esto pone su aplicación en línea, para que cualquiera pueda acceder. Mantienen el servidor por usted, para que usted no tenga que hacerlo. Además de eso, es gratis para aplicaciones pequeñas .</p>
                                <!-- Info -->
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0"><a href="#">Jesus Aguirre</a></h6>
                                    <span class="small">23 febrero del 2023</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

               
                </div> <!-- Row end -->

                <!-- Pagination START -->
                <nav class="d-flex justify-content-center mt-5" aria-label="navigation">
                    <ul class="pagination pagination-primary-soft rounded mb-0">
                        <li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i class="bi bi-arrow-left"></i></i></a></li>
                        <li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
                        <li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item mb-0"><a class="page-link" href="#">..</a></li>
                        <li class="page-item mb-0"><a class="page-link" href="#">6</a></li>
                        <li class="page-item mb-0"><a class="page-link" href="#"><i class="bi bi-arrow-right"></i></i></a></li>
                    </ul>
                </nav>


            </div>
        </section>

    </main>
    <footer class="pt-5 bg-light">
        <div class="container">
            <!-- Row START -->
            <div class="row g-4">

                <!-- Widget 1 START -->
                <div class="col-lg-12">
                    <h1 class="text-center">Desarrollador</h1>

                    <div class="divider-custom divider-light">
                        <div class="divider-custom-line"></div>
                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                        <div class="divider-custom-line"></div>
                    </div>
                    <!-- About Section Content-->
                    <div class="row">
                        <div class="col-lg-12 mb-5 mb-lg-0 text-center">
                            <h4 class="text-uppercase mb-4">Jesus Aguirre </h4>
                            <a class="btn btn-outline-dark btn-social mx-1" href="https://www.linkedin.com/in/jesus-david-aguirre-bastidas-12b349242"><i class="bi bi-linkedin"></i></a>
                            <a class="btn btn-outline-dark btn-social mx-1" href="https://github.com/JesusxAguirre"><i class="bi bi-github"></i></a>
                            <a class="btn btn-outline-dark btn-social mx-1" href="//wa.me/584122689578"><i class="bi bi-whatsapp"></i></a>
                        </div>

                    </div>
                </div>
                <!-- Widget 1 END -->


              
            </div><!-- Row END -->

            <!-- Divider -->
            <hr class="mt-4 mb-0">

            <!-- Bottom footer -->
            <div class="py-3">
                <div class="container px-0">
                    <div class="d-lg-flex justify-content-between align-items-center py-3 text-center text-md-left">
                        <!-- copyright text -->
                        <div class="text-primary-hover"> Copyrights <a href="https://github.com/JesusxAguirre" target="_blank" class="text-body">©2023 JesusxAguirre</a>. Todos los derecho reservados. </div>
                        <!-- copyright links-->
                        <div class="justify-content-center mt-3 mt-lg-0">
                            <ul class="nav list-inline justify-content-center mb-0">
                                
                                <li class="list-inline-item"><a class="nav-link" href="#">Terms of use</a></li>
                                <li class="list-inline-item"><a class="nav-link pe-0" href="#">Privacy policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>