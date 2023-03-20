<?php 
session_start();
use ElectivaMvcPractica\Content\config\settings\sysConfig as sysConfig;

$global_config = new sysConfig();

$_SESSION['token'] = $global_config->get_token_();


if(isset($_POST['token'])){
  if(hash_equals($_SESSION['token'],$_POST['token'])){
    die("El envio del token es correcto");
  }else{
    die("El envioo del token es incorrecto y malicioso");
  }
}

require_once("view/registro_view.php");
?>