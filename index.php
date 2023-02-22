<?php
if (file_exists("vendor/autoload/php")) {

  require_once("vendor/autoload.php");
} else {
  if (file_exists("content/component/error.php")) {

    require_once("content/component/error.php");
    die();
  }else{
    echo "ERROR COMUNIQUISE CON EL EQUIPO DE MANTENIMIENTO";
  }
}

use config\settings\sysConfig as sysConfig;

$global_config = new sysConfig();

$global_config->_init();
