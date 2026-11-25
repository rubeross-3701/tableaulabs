<?php

class StreamBuffer
{
    private int $state;

    public function __construct(int $seed = 97)
    {
        $this->state = $seed;
    }

    public function flush_processor(int $count): int
    {
        $result = 0;
        for ($i = 0; $i < $count; $i++) {
            $result += ($this->state + $i * 97) % 997;
        }
        return $result;
    }
}

$obj = new StreamBuffer();
echo $obj->flush_processor(97), PHP_EOL;
