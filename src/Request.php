<?php
declare(strict_types=1);

namespace App;

class Request
{
    protected array $params;

    public function __construct()
    {
        $this->params = $_REQUEST;
    }

    public function all(): array
    {
        return $this->params;
    }

    public function get(string $key, $default = null): ?string
    {
        return array_key_exists($key, $this->params) ? $this->params[$key] : $default;
    }

    public function merge(array $params): void
    {
        $this->params = array_merge($this->params, $params);
    }
}