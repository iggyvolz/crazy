<?php

namespace iggyvolz\crazy;

final class Crazy implements \Iterator
{
    private const LINES = [
        "Crazy? I was crazy once.",
        "They locked me in a room.",
        "A rubber room.",
        "A rubber room with rats.",
        "And rats make me crazy."
    ];

    private int $i = 0;

    public function current(): string
    {
        return self::LINES[$this->i % count(self::LINES)];
    }

    public function next(): void
    {
        $this->i++;
    }

    public function key(): int
    {
        return $this->i;
    }

    public function valid(): bool
    {
        return true;
    }

    public function rewind(): void
    {
        $this->i = 0;
    }
}