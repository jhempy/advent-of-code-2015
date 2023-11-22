<?php

namespace Aoc\Year2015;

require( __DIR__ . "/../src/Radio.php"  );

$input = file_get_contents( __DIR__ . '/../input/day03.txt', FILE_USE_INCLUDE_PATH);

$r = new Radio();
$r->listen( $input );
echo $r->count_houses() . "\n";

?>