<?php

declare(strict_types=1);

namespace App\Validations\Contracts;

interface ValidationInterface
{
    public function handle(mixed $value): bool;
}