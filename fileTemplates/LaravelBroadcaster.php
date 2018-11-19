<?php
#if (${NAMESPACE})

namespace ${NAMESPACE};

#end
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;

class ${NAME} implements ShouldBroadcastNow
{
    use InteractsWithSockets;

    public function __construct()
    {
        // TODO: Implement construct() method.
    }

    /**
     * @return array
     */
    public function broadcastWith(): array
    {
        // TODO: Implement broadcastWith() method.
    }

    /**
     * @return string
     */
    public function broadcastAs(): string
    {
        // TODO: Implement broadcastWith() method.
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|\Illuminate\Broadcasting\Channel[]
     */
    public function broadcastOn()
    {
        // TODO: Implement broadcastOn() method.
    }
}