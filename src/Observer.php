<?php

namespace Project;

interface Observer
{
    public function notify(string $event): void;
}
