<?php 

declare(strict_types=1);

namespace Aleoosha\Telemetry\Contracts\DTO;

use Aleoosha\Support\Types\FixedPoint;

/**
 * Technical passport of the underlying hardware/environment.
 */
final class HardwareContext
{
    public function __construct(
        public readonly int $cpuCores,
        public readonly FixedPoint $ramTotalGb,
        public readonly string $os,
        public readonly string $phpVersion
    ) {}
}
