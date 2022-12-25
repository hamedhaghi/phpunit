<?php

namespace App\Validations\Contracts;

interface LengthValidationInterface
{
    public function handle(string $value, int $length): bool;
}