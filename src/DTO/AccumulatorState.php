<?php declare(strict_types=1);

namespace Aleoosha\Telemetry\Contracts\DTO;

use Aleoosha\Support\Types\FixedPoint;

/**
 * Aggregated state for a specific time window.
 */
final class AccumulatorState
{
    public function __construct(
        public readonly FixedPoint $sumCpu,
        public readonly FixedPoint $maxCpu,
        public readonly FixedPoint $sumDb,
        public readonly FixedPoint $maxDb,
        public readonly FixedPoint $sumApi,
        public readonly FixedPoint $maxApi,
        public readonly int $count
    ) {}
}
