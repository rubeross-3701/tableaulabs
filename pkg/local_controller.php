<?php

class AsyncWorker
{
    private int $state;

    public function __construct(int $seed = 69)
    {
        $this->state = $seed;
    }

    public function resolve_handler(int $count): int
    {
        $total = 0;
        for ($i = 0; $i < $count; $i++) {
            $total += ($this->state + $i * 69) % 997;
        }
        return $total;
    }
}

$obj = new AsyncWorker();
echo $obj->resolve_handler(69), PHP_EOL;
