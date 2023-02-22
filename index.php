<?php
if (file_exists("vendor/autoload/php")) {

  require_once("vendor/autoload.php");
} else {
  if (file_exists("content/component/error.php")) {

    require_once("content/component/error.php");
  }else{
    echo "ERROR COMUNIQUISE CON EL EQUIPO DE MANTENIMIENTO";
  }
}

use ElectivaMvcPractica\Content\clase_test as clase_test;

new clase_test();
