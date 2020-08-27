<?php

namespace Project;

class Race
{
    private $distance = 0.0;
    private $maxTours = 5;
    private $weather;
    private $vehicles = [];

    public function __construct(Weather $weather, float $distance = 5)
    {
        $this->weather = $weather;
        $this->distance = $distance;
    }

    public function addVehicle(Vehicle_interface $vehicle): void
    {
        $this->vehicles[] = $vehicle;
    }

    public function run(): void
    {
        $this->displayInfo();

        foreach (range(1, $this->maxTours) as $tour) {
            $this->tour($tour);
        }

        $this->displayWinners();
    }

    private function tour(int $tour)
    {
        $this->weather->randomizeWeather();
        $this->displayTourInfo($tour);
        foreach ($this->vehicles as $vehicle) {
            $vehicle->move();
        }
    }

    private function displayWinners(): void
    {
        $winners = $this->getWinners();
        echo "\n WINNERS:";
        foreach ($winners as $category => $winner) {
            echo sprintf("\n Category: %s (%s) - %d", $category, $winner->getName(), $winner->getDistance());
        }
    }

    private function getWinners(): array
    {
        $winners = [];

        foreach ($this->vehicles as $vehicle) {
            $category = $vehicle->getType();
            if (!isset($winners[$category])) {
                $winners[$category] = $vehicle;
            } else {
                if ($vehicle->getDistance() > $winners [$category]->getDistance()) {
                    $winners[$category] = $vehicle;
                }
            }
        }

        return $winners;
    }

    private function displayInfo(): void
    {
        echo sprintf("\n Distance: \t %d", $this->distance);
        echo sprintf("\n Vehicles: \t %s", count($this->vehicles));
    }

    private function displayTourInfo(int $tour): void
    {
        echo sprintf("\n Tour %s began:", $tour);
        echo sprintf("\n %s", $this->weather);
    }
}