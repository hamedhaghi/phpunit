<?php

declare(strict_types=1);

namespace App\Tests\Validations;

use App\Validations\Validation;
use PHPUnit\Framework\TestCase;

class LengthValidationTest extends TestCase
{
    protected Validation $validation;

    public function setUp(): void
    {
        $this->validation = new Validation();
    }

    public function test_min_length_success(): void
    {
        $value = 'john';

        $this->assertTrue($this->validation->validate($value, 'min:1'));
    }

    public function test_min_length_fail(): void
    {
        $value = 'john';

        $this->assertFalse($this->validation->validate($value, 'min:5'));
    }

    public function test_max_length_success(): void
    {
        $value = 'john';

        $this->assertTrue($this->validation->validate($value, 'max:5'));
    }

    public function test_max_length_fail(): void
    {
        $value = 'j';

        $this->assertFalse($this->validation->validate($value, 'min:2'));
    }
}