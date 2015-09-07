<?php

class BubbleSort {

  // name of sorting algorithm used
  public $typename = "bubblesort";

  // data to be sorted
  public $arr;

  // taken from http://stackoverflow.com/questions/9001294/bubble-sort-implementation-in-php

  public function sort() {
      $size = count($this->arr);
      for ($i=0; $i<$size; $i++) {
          for ($j=0; $j<$size-1-$i; $j++) {
              if ($this->arr[$j+1] < $this->arr[$j]) {
                  $this->swap($j, $j+1);
              }
          }
      }
  }

  public function swap($a, $b) {
      $tmp = $this->arr[$a];
      $this->arr[$a] = $this->arr[$b];
      $this->arr[$b] = $tmp;
  }

}

?>
