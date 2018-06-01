@extends('master')

@section('content')

<h2>{{ $actionName }}</h2>

<br />

EventServiceProvider:
<pre>
protected $listen = [
    'App\Events\OrderShipped' => [
        'App\Listeners\SendShipmentNotification',
    ],
];    
</pre>

Generating Events & Listeners:
<pre>
Of course, manually creating the files for each event and listener is cumbersome. Instead, 
add listeners and events to your EventServiceProvider and use the event:generate command. 
This command will generate any events or listeners that are listed in your EventServiceProvider. 
Of course, events and listeners that already exist will be left untouched:  

<b>php artisan event:generate</b>
</pre>

Defining Events:
<pre>

<b>&LT;?php

namespace App\Events;

use App\Order;
use Illuminate\Queue\SerializesModels;

class OrderShipped
{
    use SerializesModels;

    public $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }
}</b>

The SerializesModels trait used by the event will gracefully serialize any Eloquent 
models if the event object is serialized using PHP's serialize function.
</pre>

Defining Listeners:
<pre>
<b>&lt;?php

namespace App\Listeners;

use App\Events\OrderShipped;

class SendShipmentNotification
{
    public function __construct(){ /**/ }

    public function handle(OrderShipped $event)
    {
        // Access the order using $event->order...
    }
}</b>

Event listeners receive the event instance in their handle method.
Within the handle method, you may perform any actions necessary to respond to the event.
</pre>

@endsection