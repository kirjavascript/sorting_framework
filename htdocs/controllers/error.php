<?php
  class ErrorController {

    public $error = "Unknown error";

    public function showError($error) {
      $this->error = $error;
      require_once('views/error.php');
    }
  }
?>
