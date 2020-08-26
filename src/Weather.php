<?php

namespace Project;

class Weather{
    const SHINING = 'shining';
    const RAINING = 'raining';
    private $current = self::SHINING;

    public function randomizeWeather() : void {
        $this->current = 0 === random_int(0, 2) ? self::RAINING : self::SHINING;
    }

    public function isRaining() : bool{
        return $this->current === self::RAINING;
    }

    public function __toString() : string
    {
        return "Current weather {$this->current}";
    }
}