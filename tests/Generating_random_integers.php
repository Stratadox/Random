<?php declare(strict_types=1);

namespace Stratadox\Random\Test;

use PHPUnit\Framework\TestCase;
use RuntimeException;
use Stratadox\Random\RandomIntegerGenerator;
use function count;

/**
 * @testdox Generating random integers
 */
class Generating_random_integers extends TestCase
{
    /** @test */
    function generating_200_integers_between_0_and_100()
    {
        $random = RandomIntegerGenerator::make();

        $numbers = [];
        for ($i = 0; $i < 200; $i++) {
            $numbers[] = $random->below(100);
        }

        $map = [];
        foreach ($numbers as $number) {
            self::assertGreaterThanOrEqual(0, $number);
            self::assertLessThan(100, $number);
            $map[$number] = true;
        }

        self::assertGreaterThan(
            1,
            count($map),
            '200 random numbers below 100 should not all be the same.'
        );
    }

    /** @test */
    function generating_200_integers_between_0_and_500()
    {
        $random = RandomIntegerGenerator::make();

        $numbers = [];
        for ($i = 0; $i < 200; $i++) {
            $numbers[] = $random->below(500);
        }

        $map = [];
        foreach ($numbers as $number) {
            self::assertGreaterThanOrEqual(0, $number);
            self::assertLessThan(500, $number);
            $map[$number] = true;
        }

        self::assertGreaterThan(
            1,
            count($map),
            '200 random numbers below 500 should not all be the same.'
        );
    }

    /** @test */
    function comparing_the_averages_of_sets_of_random_numbers()
    {
        $random = RandomIntegerGenerator::make();

        $below_10 = 0;
        $below_20 = 0;
        for ($i = 0; $i < 100; $i++) {
            $below_10 += $random->below(10);
            $below_20 += $random->below(20);
        }
        $below_10 /= 100;
        $below_20 /= 100;

        self::assertEqualsWithDelta(
            $below_20,
            $below_10 * 2,
            1.5,
            'Expecting the average of random below 20 to be roughly double ' .
            'the average of random below 10.'
        );
    }

    /** @test */
    function not_generating_a_number_below_minus_10()
    {
        $random = RandomIntegerGenerator::make();

        $this->expectException(RuntimeException::class);

        $random->below(-10);
    }
}
