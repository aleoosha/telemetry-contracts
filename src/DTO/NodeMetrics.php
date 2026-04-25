<?php 

declare(strict_types=1);

namespace Aleoosha\Telemetry\Contracts\DTO;

use Aleoosha\Support\Types\FixedPoint;

/**
 * Immutable object representing a single node's metrics at a point in time.
 */
final class NodeMetrics
{
    public function __construct(
        public readonly FixedPoint $cpu,
        public readonly FixedPoint $memory,
        public readonly FixedPoint $dbLatency,
        public readonly FixedPoint $apiLatency,
        public readonly int $timestampMs,
        public readonly string $nodeId
    ) {}
}
