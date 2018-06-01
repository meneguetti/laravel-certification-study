@extends('master')

@section('content')

<h2>Writing To Specific Channels</h2>

<p class="bg-warning">
    Laravel 5.5 ... logging config is within config/app.php
    <br />
    Laravel 5.6 ... logging config is within config/logging.php
</p>
<br />

<pre class="text-left" style="width: 70%; margin: 0 auto;"><a href="{{ route('logging.writing-to-single-channel') }}">Laravel 5.5
/* @var $loginso \Monolog\Logger */
$loginso = (\Illuminate\Support\Facades\Log::getMonolog())->withName('insolog');
$loginso->log('info', 'bbb');
</a>

Laravel 5.6
Log::channel('insolog')->info('This is my inso example log!');
</pre>

<br />

<pre>Log::stack(['single', 'slack'])->info('Something happened!');</pre>

@endsection