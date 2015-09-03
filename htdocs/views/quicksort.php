<div>Quicksort Example:</div>

<div style="padding:20px">

  <?php

    $arr = array(1,6,34,7,43,9,2,4,5);

    echo "Array: ";

    foreach($arr as $num) {
        echo $num . " ";
    }

    echo "<br>";

    $arr = quicksort($arr);

    echo "Quicksorted: ";

    foreach($arr as $num) {
        echo $num . " ";
    }

  ?>

</div>


<div><a href="<?php createURL() ?>">Go Home</a></div>
