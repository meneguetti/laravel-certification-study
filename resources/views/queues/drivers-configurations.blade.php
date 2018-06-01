@extends('master')

@section('content')

<h2>{{ $actionName }}</h2>

<br />

Connections Vs. Queues:
<pre>In your config/queue.php configuration file, 
there is a  connections configuration option. 
This option defines a particular connection to a 
backend service such as Amazon SQS, Beanstalk, or Redis. 
However, any given queue connection may have multiple "queues" 
which may be thought of as different stacks or piles of queued jobs.

// This job is sent to the default queue...
<b>Job::dispatch();</b>

// This job is sent to the "emails" queue...
<b>Job::dispatch()->onQueue('emails');</b>

</pre>

Horizon:
<pre>https://laravel.com/docs/5.5/horizon
Package to check current Redis queues information</pre>

@endsection