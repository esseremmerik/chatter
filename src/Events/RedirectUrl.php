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
     * @param Request $request
     * @param Discussion $discussion
     * @param String $url
     * @param string $type
     * @internal param Order $order
     */
    public function setData(Request $request, Discussion $discussion, String $url, $type = "discussion")
    {
        $this->discussion = $discussion;
        $this->request = $request;
        $this->redirectUrl = $url;
        $this->type = $type;
    }
}
