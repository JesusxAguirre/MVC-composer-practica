<?php
session_start();

use ElectivaMvcPractica\Content\config\settings\sysConfig as sysConfig;



if (!isset($_SESSION['token'])) {
  $global_config = new sysConfig();
  $_SESSION['token'] = $global_config->get_token_();
}

if (isset($_POST['token'])) {

  if ($_SESSION['usuario'] == $_POST['usuario'] && password_verify($_POST['clave'], $_SESSION['clave'])) {
    echo json_encode(array("response" => 1));
    return true;
  } else {
    echo json_encode(array("response" => 0));
    return false;
  }
}


require_once("view/login_view.php");
