<?php

namespace App\Listeners;

use App\Events\SendChatMessage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ThingToDoAfterEventWasFired
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  SendChatMessage  $event
     * @return void
     */
    public function handle()
    {
        //
    }
}
