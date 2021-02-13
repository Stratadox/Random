<?php declare(strict_types=1);

namespace Stratadox\Random;

use RuntimeException;
use function sprintf;

final class PredefinedIntegerGenerator implements IntegerGenerator
{
    /** @var int */
    private $number;

    public function __construct(int $number)
    {
        $this->number = $number;
    }

    public static function generating(int $number): self
    {
        return new self($number);
    }

    public function below(int $number): int
    {
        if ($this->number < $number) {
            return $this->number;
        }
        throw new RuntimeException(sprintf(
            'Cannot generate a number: %d is not below %d',
            $this->number,
            $number
        ));
    }
}
