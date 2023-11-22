<?php

namespace Aoc\Year2015;

class Gift {
  // Properties
  public $length;
  public $width;
  public $height;
  public $volume;


  // Constructor
  function __construct($dimensions) {
    $dims = explode( 'x', $dimensions);
    $this->length = $dims[0];
    $this->width = $dims[1];
    $this->height = $dims[2];
  }


  // Methods
  function calculate_wrapping_paper() {

    $area = 0;
    $extra = 0;

    // Fortunately, every present is a box (a perfect right rectangular prism), 
    // which makes calculating the required wrapping paper for each gift a little 
    // easier: find the surface area of the box, which is 2*l*w + 2*w*h + 2*h*l. 
    // The elves also need a little extra paper for each present: the area of the 
    // smallest side.

    $sides = [ $this->length * $this->width, $this->width * $this->height, $this->height * $this->length ];
    $area = 2 * $sides[0] + 2 * $sides[1] + 2 * $sides[2];
    $extra = min( $sides );
    return $area + $extra;

  }

  function calculate_ribbon() {

    // The ribbon required to wrap a present is the shortest distance around its 
    // sides, or the smallest perimeter of any one face. Each present also requires 
    // a bow made out of ribbon as well; the feet of ribbon required for the perfect 
    // bow is equal to the cubic feet of volume of the present. Don't ask how they tie 
    // the bow, though; they'll never tell.

    $dims = [ $this->length, $this->width, $this->height ];
    sort($dims);
    $smallest_perimeter = 2 * $dims[0] + 2 * $dims[1];
    $volume = $this->length * $this->width * $this->height;
    return $smallest_perimeter + $volume;

  }

}