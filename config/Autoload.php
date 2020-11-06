<?php
class Autoload
{
     public function __construct()
     {
          spl_autoload_register(function ($class) 
          {
               if (file_exists('controllers/frontend/'.$class.'.php'))
               {
                    require 'controllers/frontend/'.$class.'.php';
               }
               if (file_exists('controllers/backend/'.$class.'.php'))
               {
                    require 'controllers/backend/'. $class . '.php';
               }
               if (file_exists('models/'.$class.'.php'))
               {
                    require_once 'models/'. $class . '.php';
               }
          });
     }
}
