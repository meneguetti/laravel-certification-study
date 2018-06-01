@extends('master')

@section('content')

<h2>Writing To Specific Channels</h2>

<br />
Check:
<pre>storage/logs/laravel.log</pre>

You should see something like:
<pre>local.INFO: aaa  
insolog.INFO: bbb  
local.INFO: ccc  
</pre>

The last 3 lines of the log file are:
<pre>{{ $logLastMessages }}</pre>

@endsection