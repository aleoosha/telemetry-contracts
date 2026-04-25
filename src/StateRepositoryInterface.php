<?php declare(strict_types=1);

namespace Aleoosha\Telemetry\Contracts;

use Aleoosha\Telemetry\Contracts\DTO\NodeMetrics;
use Aleoosha\Support\Types\FixedPoint;

interface StateRepositoryInterface
{
    public function updateLocal(NodeMetrics $metrics): void;

    /**
     * Returns the global health score (0 to 1000 using FixedPoint logic)
     */
    public function getGlobalHealth(): FixedPoint;

    public function flushLocalCache(): void;
}
