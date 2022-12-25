<?php

declare(strict_types=1);

namespace App\Validations;

use App\Validations\Contracts\ValidationInterface;

class EmailValidation implements ValidationInterface
{
    public function handle(mixed $value): bool
    {
        return !(filter_var($value, FILTER_VALIDATE_EMAIL) === false);
    }
}