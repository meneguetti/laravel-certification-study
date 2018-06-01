@extends('master')

@section('content')

<h2>{{ $actionName }}</h2>

<br />

driver:
<pre>config/session.php

file - sessions are stored in storage/framework/sessions.
cookie - sessions are stored in secure, encrypted cookies.
database - sessions are stored in a relational database.
memcached / redis - sessions are stored in one of these fast, cache based stores.
array - sessions are stored in a PHP array and will not be persisted.
</pre>

@endsection