# Telemetry Contracts

Fundamental interfaces and Data Transfer Objects (DTOs) for system monitoring and telemetry within the Hive-mind ecosystem.

## Overview
This library defines how the system "senses" its environment. It standardizes node metrics (CPU, RAM, Latency) using high-precision `FixedPoint` math to ensure consistent data interpretation across all decision-making layers.

## Key Components
- **NodeMetrics DTO**: Precise snapshot of a single node's resource usage.
- **HardwareContext DTO**: Environment specifications (CPU cores, Total RAM).
- **StateRepositoryInterface**: Abstract storage for persisting system health.
- **SerializerInterface**: Standard for inter-node communication.

## Installation
```bash
composer require aleoosha/telemetry-contracts
```

## Level in Architecture
**Level 0 (Atmospheric)**: No dependencies on logic or infrastructure.
