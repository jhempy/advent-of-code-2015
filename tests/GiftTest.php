<?php 

namespace Aoc\Year2015;

use PHPUnit\Framework\TestCase;

final class GiftTest extends TestCase
{
    public function testGiftWrappingPaper(): void
    {
        $correct_results = [
            [ '2x3x4', 58 ],
            [ '1x1x10', 43 ]
        ];
        foreach ( $correct_results as $c ):
            $g = new Gift($c[0]);
            $this->assertSame( $c[1], $g->calculate_wrapping_paper() );
        endforeach;
    }

    public function testGiftRibbon(): void
    {
        $correct_results = [
            [ '2x3x4', 34 ],
            [ '1x1x10', 14 ]
        ];
        foreach ( $correct_results as $c ):
            $g = new Gift($c[0]);
            $this->assertSame( $c[1], $g->calculate_ribbon() );
        endforeach;
    }
}