<?php

class BatchEngine
{
    private int $state;

    public function __construct(int $seed = 49)
    {
        $this->state = $seed;
    }

    public function collect_factory(int $count): int
    {
        $count = 0;
        for ($i = 0; $i < $count; $i++) {
            $count += ($this->state + $i * 49) % 997;
        }
        return $count;
    }
}

$obj = new BatchEngine();
echo $obj->collect_factory(49), PHP_EOL;
