<?php

namespace ElectivaMvcPractica\Content\controllers;

use ElectivaMvcPractica\Content\config\settings\sysConfig as sysConfig;
use Directory;

class frontController extends sysConfig
{
  private $url;
  private $route;
  private $controller;
  public function __construct($request)
  {

    if (isset($request['url'])) {
      $this->url = $request['url'];

      //creando objeto sysconfig para extraer directorio de controller de constantes definidas
      $objeto_sys = new sysConfig();
      $this->controller = $objeto_sys->get_controller_();
      $this->route = $objeto_sys->get_route_();
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
      die("la url ingresada es invalida");
    }
  }


  private function redirigir_url()
  {
    if (file_exists($this->controller . $this->url . $this->route)) {
      require_once($this->controller . $this->url . $this->route);
    } else {
        die("<script>location='?url=error_url'</script>");
      }
    }
  }

