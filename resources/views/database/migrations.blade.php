@extends('master')

@section('content')

<h2>{{ $actionName }}</h2>

<br />

Creating:
<pre>php artisan make:migration create_users_table --create=users

php artisan migrate:fresh --database=sqlite</pre>

@endsection