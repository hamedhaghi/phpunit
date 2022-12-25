<?php

declare(strict_types=1);

namespace App;

use Dotenv\Dotenv;

final class Config
{
    private static $instance;

    private function __construct()
    {
        $dotenv = Dotenv::createImmutable(dirname(__DIR__));
        $dotenv->load();
    }

    public static function getInstance(): self
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public static function get(string $key, $default = null): ?string
    {
        self::getInstance();
        return $_SERVER[strtoupper($key)] ?? $default;
    }
}