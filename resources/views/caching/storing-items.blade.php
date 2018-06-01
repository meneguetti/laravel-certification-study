@extends('master')

@section('content')

<h2>{{ $actionName }}</h2>

<br />

Accessing Multiple Cache Stores:
<pre>$value = Cache::store('file')->get('foo');

Cache::store('redis')->put('bar', 'baz', 10);</pre>

Store/Replace - Using Facades (\Illuminate\Support\Facades\Cache):
<pre>Cache::put('key', 'value', $minutes);</pre>

Store If Not Present:
<pre>Cache::add('key', 'value', $minutes);</pre>

Storing Items Forever:
<pre>Cache::forever('key', 'value');</pre>

Removing Items From The Cache:
<pre>Cache::forget('key');</pre>

Clear the entire cache:
<pre>Cache::flush();</pre>

@endsection