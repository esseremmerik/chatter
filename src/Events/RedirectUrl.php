<?php
namespace DevDojo\Chatter\Events;

use App\Order;
use App\Events\Event;
use DevDojo\Chatter\Models\Discussion;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class RedirectUrl extends Event
{
    use SerializesModels;

    public $discussion;

    public $request;

    public $redirectUrl = "";

    public $type = "";

    /**
     * Create a new event instance.
     *
     * @param  Order  $order
     * @return void
     */
    public function __construct(Discussion $discussion, Request $request, String $url, $type = "discussion")
    {
        $this->discussion = $discussion;
        $this->request = $request;
        $this->redirectUrl = $url;
        $this->type = $type;

    }
}
