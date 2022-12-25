<?php

declare(strict_types=1);

namespace App\Validations;

use App\Validations\Contracts\LengthValidationInterface;

class MinimumLengthValidation implements LengthValidationInterface
{
    public function handle(string $value, int $length): bool
    {
        return strlen($value) >= $length;
    }
}