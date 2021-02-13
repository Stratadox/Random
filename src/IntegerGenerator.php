<?php declare(strict_types=1);

namespace Stratadox\Random;

use Exception;

interface IntegerGenerator
{
    /** @throws Exception */
    public function below(int $number): int;
}
