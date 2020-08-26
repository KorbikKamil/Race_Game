<?php

namespace Project;

class Race
{
    private $distance = 0.0;
    private $maxTours = 5;
    private $weather;

    public function __construct(Weather $weather, float $distance = 5)
    {
        $this->weather = $weather;
        $this->distance = $distance;
    }

    public function run(): void
    {
        $this->displayInfo();

        foreach (range(1, $this->maxTours) as $tour) {
            $this->displayTourInfo($tour);
        }
    }

    public function displayInfo(): void
    {
        echo "\n Distance: \t {$this->distance}";
    }

    private function displayTourInfo(int $tour): void
    {
        echo "\n Tour {$tour} began:";
    }
}