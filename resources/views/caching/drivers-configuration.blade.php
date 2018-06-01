@extends('master')

@section('content')

<h2>{{ $actionName }}</h2>

<br />

Configuration:
<pre>config/cache.php

<b>File</b> is the default cache driver, which stores the serialized, cached objects in the filesystem.

For larger applications, it is recommended that you use a more robust driver such as
<b>Memcached or Redis</b>.
You may even configure multiple cache configurations for the same driver.
</pre>

@endsection