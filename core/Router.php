<?php

class Router {

  public function __construct() {
    echo 'Router Construct';
  }

  public static function route($url) {
    var_dump($url);
    die();
  }
}