<?php

  ini_set('error_reporting', E_ALL);
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);

  class Greetings
  {

      public $Variable;


      public function __construct()
      {
        $this->Variable = 'Ноунейм';
      }


      public function greeting1()
      {
        echo 'Доброе утро!';
      }

      public function greeting2()
      {
        echo 'Добрый день!';
      }

      public function GreetingHumanByName($Variable)
      {

        // $this->Variable = $Name;

        echo 'Привет, ' . $Variable;

      }

      public function Greeting3()
      {

          $this->GreetingHumanByName('Игорь');
          echo '<br/>Сработала функция Greeting3';

      }

  }

?>
