<?php

declare(strict_types=1);

namespace App\Tests;

use App\Request;
use PHPUnit\Framework\TestCase;

class RequestTest extends TestCase
{
    protected Request $request;

    public function setUp(): void
    {
        $this->request = new Request();
    }

    public function test_request_is_array(): void
    {
        $this->assertIsArray($this->request->all());
    }

    public function test_request_check_merge(): void
    {
        $this->request->merge(['name' => 'john']);

        $this->assertArrayHasKey('name', $this->request->all());
    }

}