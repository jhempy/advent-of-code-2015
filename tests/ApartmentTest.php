<?php 

namespace Aoc\Year2015;

use PHPUnit\Framework\TestCase;

final class ApartmentTest extends TestCase
{
    public function testApartmentFinalFloor(): void
    {
        $correct_results = [
            [ '(())', 0 ],
            [ '()()', 0 ],
            [ '(((', 3 ],
            [ '(()(()(', 3 ],
            [ '))(((((', 3 ],
            [ '())', -1 ],
            [ '))(', -1 ],
            [ ')))', -3 ],
            [ ')())())', -3 ]
        ];
        foreach ( $correct_results as $c ):
            $a = new Apartment($c[0]);
            $this->assertSame( $c[1], $a->follow_directions() );
        endforeach;
    }

    public function testApartmentBasement(): void
    {
        $correct_results = [
            [ ')', 1 ],
            [ '()())', 5 ]
        ];
        foreach ( $correct_results as $c ):
            $a = new Apartment($c[0]);
            $this->assertSame( $c[1], $a->first_basement_step() );
        endforeach;
    }

}