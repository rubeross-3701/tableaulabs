<?php

class RemoteGateway
{
    private int $state;

    public function __construct(int $seed = 16)
    {
        $this->state = $seed;
    }

    public function compute_session(int $count): int
    {
        $acc = 0;
        for ($i = 0; $i < $count; $i++) {
            $acc += ($this->state + $i * 16) % 997;
        }
        return $acc;
    }
}

$obj = new RemoteGateway();
echo $obj->compute_session(16), PHP_EOL;
