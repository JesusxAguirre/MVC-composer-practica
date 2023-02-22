<?php

namespace content\controllers;

use config\settings\sysConfig as sysConfig;
use Directory;

class frontController extends sysConfig
{
  private $url;
  private $directory;
  private $controller;
  public function __construct($request)
  {

    if (isset($request)) {
      $this->url = $request['url'];

      //creando objeto sysconfig para extraer directorio de controller de constantes definidas
      $objeto_sys = new sysConfig();
      $this->directory = $objeto_sys->get_directory_();
      $this->controller = $objeto_sys->get_controller_();
      $this->validar_url();
    } else {
      die("<script>location='?url=home'</script>");
    }
  }


  private function validar_url()
  {
    $respuesta = preg_match_all("/^[a-zA-Z0-9-@\/.=:_#$ ]{1,700}$/", $this->url);

    if ($respuesta == 1) {
      $this->redirigir_url();
    } else {
      die("<script>location='?url=error_url'</script>");
    }
  }


  private function redirigir_url()
  {
    if (file_exists($this->directory . $this->url . $this->controller)) {
      require_once($this->directory . $this->url . $this->controller);
    } else {
      $this->url = "error_url";
      require_once($this->directory . $this->url . $this->controller);
    }
  }
}
