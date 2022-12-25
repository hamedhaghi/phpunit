<?php

declare(strict_types=1);

namespace App\Tests\Controllers;

use App\Config;
use App\Controllers\LoginController;
use App\Request;
use PHPUnit\Framework\TestCase;

class LoginControllerTest extends TestCase
{
    protected Request $request;
    protected LoginController $loginController;

    public function setUp(): void
    {
        $this->request = new Request();
        $this->loginController = new LoginController();
    }

    public function test_login_success(): void
    {
        $this->request->merge(['email' => Config::get('email'), 'password' => Config::get('password')]);

        $this->assertTrue($this->loginController->login($this->request));
    }

    public function test_login_with_wrong_password(): void
    {
        $this->request->merge(['email' => Config::get('email'), 'password' => '123']);

        $this->assertFalse($this->loginController->login($this->request));
    }

    public function test_login_with_wrong_email(): void
    {
        $this->request->merge(['email' => 'test1@example.com', 'password' => Config::get('password')]);

        $this->assertFalse($this->loginController->login($this->request));
    }
}