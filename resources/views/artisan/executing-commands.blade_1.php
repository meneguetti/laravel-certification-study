@extends('master')

@section('content')

<h2>Executing Commands</h2>

<br />

Queue:
<pre>php artisan queue:work redis --queue=lara_cert_test</pre>

Security:
<pre>php artisan make:auth</pre>
<pre>php artisan migrate</pre>

@endsection