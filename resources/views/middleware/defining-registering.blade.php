@extends('master')

@section('content')

<h2>Defining Registering</h2>

<br />

Defining / Creating in Artisan:
<pre>php artisan make:middleware ExceptionCatcher</pre>

Registering:
<pre>include the brand new middleware in app/Http/Kernel.php:

protected $routeMiddleware = [
    ...
    'exception.catcher' => \App\Http\Middleware\ExceptionCatcher::class,
];

After that, you can bind the middleware in routes/web. For example:

//with routeMiddleware declared
Route::get('/queue', 'QueueController@index')->name('queue')->middleware('exception.catcher');

//without routeMiddleware declared, just use the FQN
Route::get('/queue', 'QueueController@index')->name('queue')->middleware(\App\Http\Middleware\ExceptionCatcher::class);

</pre>

@endsection