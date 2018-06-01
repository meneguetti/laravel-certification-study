@extends('master')

@section('content')

<h2>{{ $actionName }}</h2>

<br />

Select All:
<pre><b>\Illuminate\Support\Facades\DB::table('users')->get()</b>
Users in users table (Mysql): {{ count($usersMysql) }}

In different connection:
<b>\Illuminate\Support\Facades\DB::connection('sqlite')->table('users')->get()</b>
Users in users table (Sqlite):  {{ count($usersSqlite) }}

</pre>

<a href="{{ route('database.insert') }}">Insert new user</a>
@endsection