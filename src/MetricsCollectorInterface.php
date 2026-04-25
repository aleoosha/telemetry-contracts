<?php declare(strict_types=1);

namespace Aleoosha\Telemetry\Contracts;

use Aleoosha\Telemetry\Contracts\DTO\NodeMetrics;
use Aleoosha\Telemetry\Contracts\DTO\HardwareContext;

/**
 * Interface for system telemetry collection.
 * Defines how the system gathers raw performance data.
 */
interface MetricsCollectorInterface
{
    /**
     * Collect current resource usage metrics from the node.
     */
    public function collect(): NodeMetrics;

    /**
     * Get the hardware specifications of the current environment.
     */
    public function getHardwareContext(): HardwareContext;

    /**
     * Add this method to the interface!
     */
    public function recordApiLatency(float $milliseconds): void;
}
