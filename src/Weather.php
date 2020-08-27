<?php

namespace Project;

final class Weather
{
    const SHINING = 'shining';
    const RAINING = 'raining';
    private $current = self::SHINING;

    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance(): self
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function randomizeWeather(): void
    {
        $this->current = 0 === random_int(0, 2) ? self::RAINING : self::SHINING;
    }

    public function isRaining(): bool
    {
        return $this->current === self::RAINING;
    }

    public function __toString(): string
    {
        return "Current weather {$this->current}";
    }
}