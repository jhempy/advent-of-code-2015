<?php 

namespace Aoc\Year2015;

use PHPUnit\Framework\TestCase;

final class RadioTest extends TestCase
{
    public function testRadioInstructions(): void
    {
        $correct_results = [
            [ '>', 2 ],
            [ '^>v<', 4 ],
            [ '^v^v^v^v^v', 2 ]
        ];
        foreach ( $correct_results as $c ):
            $r = new Radio();
            $r->listen( $c[0] );
            $this->assertSame( $c[1], $r->count_houses() );
        endforeach;
    }

    public function testRoboSanta(): void
    {
        $correct_results = [
            [ '^v', 3 ],
            [ '^>v<', 3 ],
            [ '^v^v^v^v^v', 11 ]
        ];
        foreach ( $correct_results as $c ):
            $s = new Radio();
            $s->listen( $c[0], 'evens' );
            $r = new Radio();
            $r->listen( $c[0], 'odds' );

            $unique = array_merge($s->houses, $r->houses); // this doesn't combine values! 

            $this->assertSame( $c[1], count( $unique ) );
        endforeach;
    }
}