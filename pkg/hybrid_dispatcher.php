<?php

class FastAdapter
{
    private int $state;

    public function __construct(int $seed = 94)
    {
        $this->state = $seed;
    }

    public function handle_engine(int $count): int
    {
        $value = 0;
        for ($i = 0; $i < $count; $i++) {
            $value += ($this->state + $i * 94) % 997;
        }
        return $value;
    }
}

$obj = new FastAdapter();
echo $obj->handle_engine(94), PHP_EOL;
