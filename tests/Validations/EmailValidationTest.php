<?php

declare(strict_types=1);

namespace App\Tests\Validations;

use App\Validations\Validation;
use PHPUnit\Framework\TestCase;

class EmailValidationTest extends TestCase
{
    protected Validation $validation;

    public function setUp(): void
    {
        $this->validation = new Validation();
    }

    public function test_email_is_valid(): void
    {
        $this->assertTrue($this->validation->validate('john@gmail.com', 'email'));
    }

    public function test_email_is_invalid(): void
    {
        $this->assertFalse($this->validation->validate('jackgmail.com', 'email'));
    }
}