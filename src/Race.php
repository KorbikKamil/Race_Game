<?php

namespace Project;

class Race implements Observable
{
    private $distance = 0.0;
    private $maxTours = 5;
    private $weather;
    /**
     * @var Vehicle[]
     */
    private $vehicles = [];

    use ObservedTrait;

    public function __construct(Weather $weather, float $distance = 5)
    {
        $this->weather = $weather;
        $this->distance = $distance;
    }

    public function addVehicle(Vehicle_interface $vehicle): void
    {
        $this->addObserver($vehicle);
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

    public function addObserver(Observer $observer): void
    {
        $this->observers[] = $observer;
    }

    private function tour(int $tour)
    {
        $this->weather->randomizeWeather();
        $this->displayTourInfo($tour);

        foreach ($this->observers as $observer) {
            $observer->notify('nextTurn');
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
            if ($this->isWinner($winners, $vehicle)) {
                $winners[$category] = $vehicle;
            }
        }

        return $winners;
    }

    private function isWinner(array $winners, Vehicle_interface $vehicle)
    {
        $category = $vehicle->getType();

        if (!isset($winners[$category])) {
            return true;
        } else {
            if ($vehicle->getDistance() > $winners [$category]->getDistance()) {
                return true;
            }
        }
        return false;
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