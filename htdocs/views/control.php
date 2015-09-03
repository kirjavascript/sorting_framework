<?php

  // this method controls what controller and method are called on the page
  function init($controller, $method) {

    // include controller file
    require_once('controllers/' . $controller . '.php');

    // create controller objects
    switch($controller) {
      case 'pages':
        $controller = new PagesController();
      break;
      case 'error':
        $controller = new ErrorController();
      break;
      case 'sorting':
        $controller = new SortingController();
    }

    if(method_exists($controller,$method)) {
      // call requested method from controller
      $controller->{ $method }();
    }
    else {
        // you could add error handling here, I'm going to make it do nothing for now
    }

  }

  /*
    we ensured at least a controller and method were set in index.php,
    we need to check the controller exists here, otherwise throw an error
  */

  if(!file_exists('controllers/' . $controller . '.php')) {
      $controller = "error";
      $method = "nocontroller";
  }

  // call controller and method
  init($controller,$method);


?>
