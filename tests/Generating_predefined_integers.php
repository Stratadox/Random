<?php declare(strict_types=1);

namespace Stratadox\Random\Test;

use PHPUnit\Framework\TestCase;
use RuntimeException;
use Stratadox\Random\PredefinedIntegerGenerator;

/**
 * @testdox "Generating" predefined integers
 */
class Generating_predefined_integers extends TestCase
{
    /** @test */
    function generating_4_a_bunch_of_times()
    {
        $random = PredefinedIntegerGenerator::generating(4);

        for ($i = 0; $i < 10; $i++) {
            self::assertEquals(4, $random->below(100));
        }
    }

    /** @test */
    function generating_100_a_bunch_of_times()
    {
        $random = PredefinedIntegerGenerator::generating(100);

        for ($i = 0; $i < 10; $i++) {
            self::assertEquals(100, $random->below(300));
        }
    }

    /** @test */
    function not_generating_10_when_asking_for_a_number_below_5()
    {
        $random = PredefinedIntegerGenerator::generating(10);

        $this->expectException(RuntimeException::class);

        $random->below(5);
    }

    /** @test */
    function not_generating_7_when_asking_for_a_number_below_7()
    {
        $random = PredefinedIntegerGenerator::generating(7);

        $this->expectException(RuntimeException::class);

        $random->below(7);
    }
}
