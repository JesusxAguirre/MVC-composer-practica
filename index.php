<?php
header('Access-Control-Allow-Origin: *');
if(file_exists("vendor/autoload.php")){
  require_once("vendor/autoload.php");
}else{
  if(file_exists("content/component/error.php")) {
    require_once("content/component/error.php");
  }else{
    die( "ERROR COMUNIQUISE CON EL EQUIPO DE MANTENIMIENTO");
  }
}
/* use ElectivaMvcPractica\Content\clase_test;

new clase_test(); */

use ElectivaMvcPractica\Content\config\settings\sysConfig as sysConfig;

$global_config = new sysConfig();

$global_config->_init();

use ElectivaMvcPractica\Content\controllers\frontController as frontController;

$index_system = new frontController($_REQUEST);

?>
