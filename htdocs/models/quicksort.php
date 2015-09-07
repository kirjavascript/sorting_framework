<?php

class QuickSort {

  // name of sorting algorithm used
  public $typename = "quicksort";

  // data to be sorted
  public $arr;

	public function sort()
	{
	 $cur = 1;
	 $stack[1]['l'] = 0;
	 $stack[1]['r'] = count($this->arr)-1;

	 do
	 {
	  $l = $stack[$cur]['l'];
	  $r = $stack[$cur]['r'];
	  $cur--;

	  do
	  {
	   $i = $l;
	   $j = $r;
	   $tmp = $this->arr[(int)( ($l+$r)/2 )];

	   // partion the array in two parts.
	   // left from $tmp are with smaller values,
	   // right from $tmp are with bigger ones
	   do
	   {
	    while( $this->arr[$i] < $tmp )
	     $i++;

	    while( $tmp < $this->arr[$j] )
	     $j--;

	    // swap elements from the two sides
	    if( $i <= $j )
	    {
	     $w = $this->arr[$i];
	     $this->arr[$i] = $this->arr[$j];
	     $this->arr[$j] = $w;

	     $i++;
	     $j--;
	    }

	   }while( $i <= $j );


	   if( $i < $r )
	   {
	    $cur++;
	    $stack[$cur]['l'] = $i;
	    $stack[$cur]['r'] = $r;
	   }
	   $r = $j;

	  }while( $l < $r );

	 }while( $cur != 0 );
	}

}

?>
