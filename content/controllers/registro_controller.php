<?php 
session_start();
use ElectivaMvcPractica\Content\config\settings\sysConfig as sysConfig;

$global_config = new sysConfig();

$_SESSION['token'] = $global_config->get_token_();


if(isset($_POST['token'])){
  if(hash_equals($_SESSION['token'],$_POST['token'])){
    $_SESSION['usuario']=  $_POST['usuario'];
    $_SESSION['clave'] = password_hash($_POST['usuario'],PASSWORD_DEFAULT);
    echo json_encode(array("response"=>1));
  }else{
    
    echo json_encode(array("response"=>0));
    die("envio malicioso");
  }
}

require_once("view/registro_view.php");
?>