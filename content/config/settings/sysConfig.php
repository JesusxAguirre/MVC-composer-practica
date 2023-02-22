<?php

namespace ElectivaMvcPractica\Content\config\settings;

//los define predeterminados
define("_DIRECTORY_", "http://localhost/electiva-mvc-practica/");
define("_ROUTE_", "_controller.php");
define("_CONTROLLER_", "content/controllers/");
define("_INDEX_FILE_", "http://localhost/electiva-mvc-practica/index.php");
define("_THEME_", "http://localhost/electiva-mvc-practica/assets/");
define("_MODEL_", "content/modelo");
define("_DB_SERVER_", "http://localhost/");
define("_DB_WEB_", "DB_PRACTICA");
//los 4 adicionales
define("_version_", "1.0.0");
define("_DB_PASS_", "");
define("_DB_USER_", "root");
define("_AUTHOR_", "Jesus Aguirre");
define("_AUTHOR_GIT_", "https://github.com/JesusxAguirre");

class sysConfig
{
  public function _init()
  {
    if (!file_exists("content/controllers/frontController.php")) {
      require_once("content/component/error.php");
    }
  }

  protected function get_directory_()
  {
    return _DIRECTORY_;
  }
  protected function get_route_()
  {
    return _ROUTE_;
  }

  protected function get_controller_()
  {
    return _CONTROLLER_;
  }

  protected function get_index_file_()
  {
    return _INDEX_FILE_;
  }
  protected function get_theme_()
  {
    return _THEME_;
  }

  protected function get_model_()
  {
    return _MODEL_;
  }

  protected function get_db_server_()
  {
    return _DB_SERVER_;
  }

  protected function get_db_web_()
  {
    return _DB_WEB_;
  }

  protected function get_db_user_()
  {
    return _DB_USER_;
  }

  protected function get_db_pass_()
  {
    return _DB_PASS_;
  }

  protected function get_author_()
  {
    return _AUTHOR_;
  }

  protected function get_author_git_()
  {
    return
      _AUTHOR_GIT_;
  }

  protected function get_version_()
  {
    return _version_;
  }
}
