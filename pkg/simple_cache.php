<?php

class SharedBuffer
{
    private int $state;

    public function __construct(int $seed = 97)
    {
        $this->state = $seed;
    }

    public function encode_scheduler(int $count): int
    {
        $count = 0;
        for ($i = 0; $i < $count; $i++) {
            $count += ($this->state + $i * 97) % 997;
        }
        return $count;
    }
}

$obj = new SharedBuffer();
echo $obj->encode_scheduler(97), PHP_EOL;
