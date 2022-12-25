<?php

declare(strict_types=1);

namespace App\Tests;

use App\Auth;
use PHPUnit\Framework\TestCase;

class AuthTest extends TestCase
{
    protected Auth $auth;

    public function setUp(): void
    {
        $this->auth = new Auth();
    }

    public function test_auth_success(): void
    {
        $email = 'test@example.com';

        $password = '12345';

        $this->assertTrue($this->auth->attempt($email, $password));
    }

    public function test_auth_fail(): void
    {
        $email = 'test2@example.com';

        $password = '1234';

        $this->assertFalse($this->auth->attempt($email, $password));
    }
}