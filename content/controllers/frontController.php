<?php

namespace content\controllers;

use config\settings\sysConfig as sysConfig;


class frontController extends sysConfig
{
  private $url;
  public function __construct($request)
  {

    if (isset($request)) {
      $this->url = $request['url'];
    }else{
      die("<script>location='?url=home'</script>");
    }
    
  }
}
