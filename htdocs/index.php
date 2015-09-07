<?php

  // debug
  // error_reporting(-1);
  // ini_set('display_errors', 'On');

  require_once("functions.php");

  // set a controller and method to call within that controller
  if(isset($_GET['url'])) {
    $url = $_GET['url'];

    $url = explode("/",$url); // $url is now of the format array('controller','method')

    // ensure a controller and method are specified
    if(count($url)<2) {
      $controller = "error";
      $method = "malformedurl";
    }
    // set requested controller and method
    else {
      $controller = $url[0];
      $method = $url[1];
    }
  }

  // otherwise set a default controller and method
  else {
    $controller = "pages";
    $method = "home";
  }

  /*
    we ensured at least a controller and method were set, now
    we need to check the controller exists here, otherwise throw an error
  */

  if(!file_exists('controllers/' . $controller . '.php')) {
      $controller = "error";
      $method = "nocontroller";
  }

  // include main layout
  require_once("views/main.php");

?>
