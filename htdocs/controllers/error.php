<?php
  class ErrorController {

    // if errors had more complexity than this I would split them into views
    public function malformedurl() {
      echo "ERROR: MalformedURL";
    }
    public function nocontroller() {
      echo "ERROR: No Controller!";
    }
  }
?>
