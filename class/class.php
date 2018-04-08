<?php

  ini_set('error_reporting', E_ALL);
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);

  class Greetings
  {

      public $SystemStatus;

      public function __construct()
      {
        echo $this->SystemStatus = 'Система инициализирована';
      }

  }

?>
