@extends('master')

@section('content')

<h2>{{ $actionName }}</h2>

<br />

SQLite Configuration:
<pre>touch database/database.sqlite

DB_CONNECTION=sqlite
DB_DATABASE=/absolute/path/to/database.sqlite</pre>

@endsection