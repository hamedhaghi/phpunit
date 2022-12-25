<?php

declare(strict_types=1);

namespace App\Validations;

class Validation
{
    public function validate(string $value, string $rule): bool
    {
        $params = explode(':', $rule);

        $rule = $params[0];

        $param = null;

        if (count($params) > 1) {
            $param = $params[1];
        }

        return match ($rule) {
            'email' => (new EmailValidation())->handle($value),
            'min' => (new MinimumLengthValidation())->handle($value, (int)$param),
            'max' => (new MaximumLengthValidation())->handle($value, (int)$param),
            default => false,
        };

    }
}