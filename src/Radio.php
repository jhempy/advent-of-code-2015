<?php

namespace Aoc\Year2015;

class Radio {
  // Properties
  public $houses;
  public $current_x;
  public $current_y;

  // Constructor
  function __construct() {
    $this->houses = Array();
    $this->current_x = 0;
    $this->current_y = 0;
    $this->deliver();
  }


  // Methods
  function listen( $list, $subset = 'all' ) {

    $all = $list;
    $evens = '';
    $odds = '';

    for ($i = 0; $i < strlen($list); $i++):
        if ($i % 2 == 0):
            $evens .= $list[$i];
        else:
            $odds .= $list[$i];
        endif;
    endfor;

    while ( strlen( $$subset ) > 0 ):
        $this->visit( $$subset[0] );
        $$subset = substr( $$subset, 1 );
    endwhile;
  }

  function visit( $direction ) {
    switch ( $direction ) {
        case '^':
            $this->current_y++;
            $this->deliver();
            break;
        case '<':
            $this->current_x--;
            $this->deliver();
            break;
        case '>':
            $this->current_x++;
            $this->deliver();
            break;
        case 'v':
            $this->current_y--;
            $this->deliver();
            break;
    }
  }

  function deliver() {
    $key = $this->current_x . '|' . $this->current_y;
    if ( array_key_exists( $key, $this->houses ) ):
        $this->houses[ $key ]++;
    else:
        $this->houses[ $key ] = 1;
    endif;
  }

  function count_houses() {
    return count($this->houses);
  }

}