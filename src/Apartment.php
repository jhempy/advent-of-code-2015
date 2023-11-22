<?php

namespace Aoc\Year2015;

class Apartment {
  // Properties
  public $directions;
  public $first_floor;
  public $basement;


  // Constructor
  function __construct($directions) {
    $this->directions = $directions;
    $this->first_floor = 0;
    $this->basement = -1;
  }


  // Methods
  function set_directions($directions) {
    $this->directions = $directions;
  }

  function get_directions() {
    return $this->directions;
  }

  function follow_directions() {
    $floor = $this->first_floor;
    $steps = str_split( $this->directions );
    foreach ( $steps as $s ):
      // echo "Step is $s, floor starts at $floor, ";
      switch ( $s ) {
        case '(':
          $floor++;
          break;
        case ')':
          $floor--;
          break;
      }
      // echo "floor ends at $floor.\n";
    endforeach;
    return $floor;
  }

  function first_basement_step() {
    $floor = $this->first_floor;
    $steps = str_split( $this->directions );
    $tally = 0;
    foreach ( $steps as $s ):
      $tally++;
      switch ( $s ) {
        case '(':
          $floor++;
          break;
        case ')':
          $floor--;
          break;
      }
      if ($floor == $this->basement):
        break;
      endif;
    endforeach;
    return $tally;
  }

}

?>