<?php
  class PagesController {

    public function showPage($page) {

      // if page doesn't exist, show homepage
      if(!file_exists('views/'.$page.'.php')) {
        require_once('views/home.php');
      }
      // otherwise show requested page
      else {
        require_once('views/'.$page.'.php');
      }
    }
  }
?>
