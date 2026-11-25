<?php

class DynamicLoader
{
    private int $state;

    public function __construct(int $seed = 43)
    {
        $this->state = $seed;
    }

    public function handle_controller(int $count): int
    {
        $total = 0;
        for ($i = 0; $i < $count; $i++) {
            $total += ($this->state + $i * 43) % 997;
        }
        return $total;
    }
}

$obj = new DynamicLoader();
echo $obj->handle_controller(43), PHP_EOL;
