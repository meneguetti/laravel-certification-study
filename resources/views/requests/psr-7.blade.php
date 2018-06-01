@extends('master')

@section('content')

<h2>{{ $actionName }}</h2>

<br />

Dependencies:
<pre>
composer require symfony/psr-http-message-bridge
composer require zendframework/zend-diactoros
</pre>

Parameter injected into method (action):
<pre>
public function psr7(\Psr\Http\Message\ServerRequestInterface $request)

$request becomes an object from <b>\Zend\Diactoros\ServerRequest</b> class
</pre>

@endsection