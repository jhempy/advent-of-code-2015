<?php

namespace Aoc\Year2015;

class Judgement {
  // Properties
  public $input;


  // Constructor
  function __construct($input) {
    $this->input = $input;
    $this->banned = [ 'ab', 'cd', 'pq', 'xy' ];
  }


  // Methods
  function judge() {

    // A nice string is one with all of the following properties:
    // - It contains at least three vowels (aeiou only), like aei, xazegov, or aeiouaeiouaeiou.
    // - It contains at least one letter that appears twice in a row, like xx, abcdde (dd), or aabbccdd (aa, bb, cc, or dd).
    // - It does not contain the strings ab, cd, pq, or xy, even if they are part of one of the other requirements.

    if ( $this->no_banned_substrings() && $this->has_three_vowels() && $this->has_double_letter() ):
        return 'nice';
    endif;

    return 'naughty';

  }

  function no_banned_substrings() {

    foreach ( $this->banned as $b ):
        $pattern = '/' . $b . '/';
        preg_match($pattern, $this->input, $matches );
        if ( count( $matches ) > 0):
            return false;
        endif;
    endforeach;

    return true;

  }

  function has_three_vowels() {

    return false;

  }

  function has_double_letter() {

    return false;

  }

}