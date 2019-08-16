<?php
include_once(ROOT . DS . 'config' . DS . 'config.php');
include_once(ROOT . DS . 'app' . DS . 'lib' . DS . 'helpers' . DS . 'functions.php');

// Autoload Classes
spl_autoload_register(function ($class) {
  if(file_exists(ROOT . DS . 'core' . DS . $class . '.php')) {
    require_once(ROOT . DS . 'core' . DS . $class . '.php');
  } else if (file_exists(ROOT . DS . 'app' . DS . 'controllers' . DS . $class . '.php')) {
    require_once(ROOT . DS . 'app' . DS . 'controllers' . DS . $class . '.php');
  } else if (file_exists(ROOT . DS . 'app' . DS . 'models' . DS . $class . '.php')) {
    require_once(ROOT . DS . 'app' . DS . 'models' . DS . $class . '.php');
  }
});

// Router request
Router::route($url);