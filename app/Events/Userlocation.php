<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

use Carbon\Carbon;

class Userlocation implements shouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $data;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public $user_id;
    // public $statue;

    // public $type;
    // public $y_lacation;
    // public $x_lacation;
    // public $time;
    public function __construct($data=[])
    {
        //  $this->user_id = $data['user_id'];
        //  $this->user_name = $data['statue'];
        //  $this->comment = $data['type'];
            $this->x_lacation = $data;
        //  $this->y_lacation = $data['1'];
        //  $this->date = date("Y-m-d", strtotime(Carbon::now()));
        //  $this->time = date("h:i A", strtotime(Carbon::now()));
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('userdata');
    }
}
