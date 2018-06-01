@extends('master')

@section('content')

<h2>{{ $actionName }}</h2>

<br />

Put method or the session helper:
<pre>
<small>// Via a request instance...</small>
$request->session()->put('key', 'value');

<small>// Via the global helper...</small>
session(['key' => 'value']);    
</pre>

@endsection