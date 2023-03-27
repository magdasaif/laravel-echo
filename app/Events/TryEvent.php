<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class TryEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $data;
    public function __construct($data)
    {
        $this->data=$data;
    }
    //===============================================================
    public function broadcastOn()
    {
        // return new PrivateChannel('channel-name');
        return new Channel('CartChannel');
        // return ['my-channel'];
    }
    //===============================================================
    public function broadcastWith()
    {
        return [
            'data'=>$this->data,
        ];
    }
    //===============================================================
    public function broadcastas()
    {
        return 'try_event';
    }
}
