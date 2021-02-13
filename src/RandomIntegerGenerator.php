<?php declare(strict_types=1);

namespace Stratadox\Random;

use RuntimeException;
use function random_int;

final class RandomIntegerGenerator implements IntegerGenerator
{
    public static function make(): self
    {
        return new self();
    }

    public function below(int $number): int
    {
        if ($number < 1) {
            throw new RuntimeException('Not generating negative numbers');
        }
        return random_int(0, $number - 1);
    }
}
