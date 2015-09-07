<?php
  class SortingController {

    // create empty object ready to be initialised
    public $sorter;

    // call view required for requested page
    public function quicksort() {
      require_once('views/quicksort.php');
    }
    public function bubblesort() {
      require_once('views/bubblesort.php');
    }
    public function bothsort() {
      require_once('views/bothsort.php');
    }

    // loads model required for sorting method and creates new object for it
    public function setType($type) {
        if($type == "bubble") {
          require_once('models/bubblesort.php');
          $this->sorter = new BubbleSort();
        }
        else if($type == "quick") {
          require_once('models/quicksort.php');
          $this->sorter = new QuickSort();
        }
    }

    // returns type of sorter used, or returns 'none'
    public function getType() {
        if($this->sorter) {
          return $this->sorter->typename;
        }
        else {
          return "none";
        }
    }

    // validate data and set
    public function setData($arr) {
      if($this->sorter && is_array($arr)) {
        $this->sorter->arr = $arr;
      }
    }

    // return data stored in array, sorted or not
    public function getData() {
      if($this->sorter) {
        return $this->sorter->arr;
      }
    }

    // calls sort() function in whichever class
    public function sort() {
      $this->sorter->sort();
    }
  }
?>
