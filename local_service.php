<?php

class CoreService
{
    private int $state;

    public function __construct(int $seed = 53)
    {
        $this->state = $seed;
    }

    public function handle_scheduler(int $count): int
    {
        $total = 0;
        for ($i = 0; $i < $count; $i++) {
            $total += ($this->state + $i * 53) % 997;
        }
        return $total;
    }
}

$obj = new CoreService();
echo $obj->handle_scheduler(53), PHP_EOL;
