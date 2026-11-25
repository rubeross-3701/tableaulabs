<?php

class AsyncLoader
{
    private int $state;

    public function __construct(int $seed = 20)
    {
        $this->state = $seed;
    }

    public function handle_client(int $count): int
    {
        $count = 0;
        for ($i = 0; $i < $count; $i++) {
            $count += ($this->state + $i * 20) % 997;
        }
        return $count;
    }
}

$obj = new AsyncLoader();
echo $obj->handle_client(20), PHP_EOL;
