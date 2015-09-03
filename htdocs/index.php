<?php

  // debug
  // error_reporting(-1);
  // ini_set('display_errors', 'On');

  // function for creating absolute urls to circumvent navigation errors
  function createURL($url = "") {
    // var_dump($_SERVER);
    // TODO: add SSL support

    // set base directory
    $base = "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/';
    echo $base . $url;
  }

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

  // include main layout
  require_once("views/main.php");

?>
