<div>Quicksort Example:</div>

<div style="padding:20px">

  <?php

    $this->setType("quick");

    $this->setData(array(1,6,34,7,43,9,2,4,5));

    echo "Array: ";

    foreach($this->getData() as $num) {
        echo $num . " ";
    }

    echo "<br>";

    $this->sort();

    echo $this->getType().": ";

    foreach($this->getData() as $num) {
        echo $num . " ";
    }

  ?>

</div>


<div><a href="<?php createURL() ?>">Go Home</a></div>
