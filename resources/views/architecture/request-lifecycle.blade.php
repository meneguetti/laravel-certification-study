@extends('master')

@section('content')

<h2>Request Lifecycle</h2>

<br />

<pre>
    - vendor/autoload.php
    public/index.php
    bootstrap/app.php
    app/Http/Kernel.php
        - also defines a list of HTTP middleware that all requests must pass through before being handled by the application
        - These middleware handle reading and writing the HTTP session, determining if the application is in maintenance mode, verifying the CSRF token, and more.
        - Handle Method
            - The method signature for the HTTP kernel's handle method is quite simple: receive a Request and return a Response.
            - Think of the Kernel as being a big black box that represents your entire application. Feed it HTTP requests and it will return HTTP responses.
</pre>

@endsection