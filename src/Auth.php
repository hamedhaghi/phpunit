<?php

declare(strict_types=1);

namespace App;

class Auth
{
    public function attempt(string $email, string $password): bool
    {
        return $email === Config::get('email') && $password === Config::get('password');
    }
}