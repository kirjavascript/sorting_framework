<?php

  // this method controls what controller and method are called on the page
  function init($controller, $method) {

    // include controller file
    require_once('controllers/' . $controller . '.php');

    // create controller objects
    switch($controller) {
      // special cases
      case 'pages':
        $controller = new PagesController();
        $controller->showPage($method);
      break;
      case 'error':
        $controller = new ErrorController();
        $controller->showError($method);
      break;

      // standard controllers
      case 'sorting':
        $controller = new SortingController();
    }

    // 'pages' and 'error' controllers do not use this
    if(method_exists($controller,$method)) {
      // call requested method from controller
      $controller->{ $method }();
    }

  }

  // function for creating absolute urls to circumvent navigation errors
  function createURL($url = "") {
    // var_dump($_SERVER);
    // TODO: add SSL support

    // set base directory1
    $base = "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/';
    echo $base . $url;
  }

?>
