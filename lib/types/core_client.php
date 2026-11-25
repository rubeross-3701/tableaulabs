<?php

class SmartSession
{
    private int $state;

    public function __construct(int $seed = 65)
    {
        $this->state = $seed;
    }

    public function load_builder(int $count): int
    {
        $count = 0;
        for ($i = 0; $i < $count; $i++) {
            $count += ($this->state + $i * 65) % 997;
        }
        return $count;
    }
}

$obj = new SmartSession();
echo $obj->load_builder(65), PHP_EOL;
