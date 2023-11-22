<?php

namespace Aoc\Year2015;

require( __DIR__ . "/../src/Radio.php"  );

$input = file_get_contents( __DIR__ . '/../input/day03.txt', FILE_USE_INCLUDE_PATH);

$s = new Radio();
$s->listen( $input, 'evens' );
$r = new Radio();
$r->listen( $input, 'odds' );

$unique = array_merge($s->houses, $r->houses); // this doesn't combine values! 

echo count($unique) . "\n";

?>