<?php 

declare(strict_types=1);

namespace Aleoosha\Telemetry\Contracts;

interface SerializerInterface
{
    /**
     * Packs data into a transportable string format (JSON, MessagePack, etc.)
     */
    public function pack(mixed $data): string;

    /**
     * Unpacks data from string back to its original structure.
     */
    public function unpack(string $data): mixed;
}
