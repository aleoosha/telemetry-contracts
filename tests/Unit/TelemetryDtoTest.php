<?php

use Aleoosha\Support\Types\FixedPoint;
use Aleoosha\Telemetry\Contracts\DTO\AccumulatorState;

test('AccumulatorState can be instantiated with FixedPoint values', function () {
    $state = new AccumulatorState(
        sumCpu: FixedPoint::fromInt(100),
        maxCpu: FixedPoint::fromInt(50),
        sumDb: FixedPoint::fromInt(20),
        maxDb: FixedPoint::fromInt(10),
        sumApi: FixedPoint::fromInt(30),
        maxApi: FixedPoint::fromInt(15),
        count: 5
    );

    expect($state->count)->toBe(5)
        ->and($state->sumCpu->value)->toBe(100000);
});
