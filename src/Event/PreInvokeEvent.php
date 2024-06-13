<?php

declare(strict_types=1);

namespace Spiral\RoadRunner\GRPC\Event;

use Google\Protobuf\Internal\Message;
use Spiral\RoadRunner\GRPC\ContextInterface;

final class PreInvokeEvent extends Event
{
    public function __construct(
        private readonly ContextInterface $ctx,
        private readonly Message $input,
    ) {
    }

    public function getContext(): ContextInterface
    {
        return $this->ctx;
    }

    public function getInput(): Message
    {
        return $this->input;
    }
}
