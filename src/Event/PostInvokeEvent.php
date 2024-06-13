<?php

declare(strict_types=1);

namespace Spiral\RoadRunner\GRPC\Event;

use Google\Protobuf\Internal\Message;

final class PostInvokeEvent extends Event
{
    public function __construct(
        private readonly Message $output,
    ) {
    }

    public function getOutput(): Message
    {
        return $this->output;
    }
}
