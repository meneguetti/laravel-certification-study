@extends('master')

@section('content')

<h2>{{ $actionName }}</h2>

<br />

Json
<br />
<pre>return response()->json([
    'name' => 'Abigail',
    'state' => 'CA'
]);</pre>
<a href="{{ route('responses.response-types') }}?json=true">example json response</a>

@endsection