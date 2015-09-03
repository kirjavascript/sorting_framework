<?php
  class SortingController {

    // call models for methods and views for view
    public function quicksort() {
      require_once('models/quicksort.php');
      require_once('views/quicksort.php');
    }
    public function bubblesort() {
      require_once('models/bubblesort.php');
      require_once('views/bubblesort.php');
    }
  }
?>
