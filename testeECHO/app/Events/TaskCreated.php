<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class TaskCreated implements ShouldBroadcast
{
    use InteractsWithSockets, SerializesModels;


    public $task;

    public function __construct($task)
    {
        $this->task = $task;
    }

    public function broadcastOn()
    {
        return [
            'tasks'
        ];
    }
}
