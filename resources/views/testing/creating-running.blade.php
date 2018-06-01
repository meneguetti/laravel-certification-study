@extends('master')

@section('content')

<h2>{{ $actionName }}</h2>

<br />

Introduction:
<pre>
phpunit.xml

Two types
    - Feature (integration)
    - Unit

An example provided for each ExampleTest.php

tests are within tests folder
</pre>

Creation:
<pre>
<small>// Create a test in the Feature directory...</small>
php artisan make:test UserTest

<small>// Create a test in the Unit directory...</small>
php artisan make:test UserTest --unit
</pre>

@endsection