<?php

namespace Aoc\Year2015;

class Coin {
  // Properties
  public $secret;

  // Constructor
  function __construct( $secret ) {
    $this->secret = $secret;
  }

  // Methods
  function lowest( $starts_with ) {

    $i = 0;
    $target_length = strlen( $starts_with );
    $latest = md5( $this->secret . $i );

    while ( substr( $latest, 0, $target_length ) !== $starts_with ):
        $i++;
        $latest = md5( $this->secret . $i );
    endwhile;

    return $i;

  }

}