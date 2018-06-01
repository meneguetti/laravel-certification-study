@extends('master')

@section('content')

<h2>{{ $actionName }}</h2>

<br />

Introduction:
<pre>
When building JSON APIs, you will often need to convert your models and 
relationships to <b>arrays</b> or <b>JSON</b>. 

Eloquent includes convenient methods for making these conversions, 
as well as controlling which attributes are included in your serializations.    
</pre>

Serializing Models & Collections:
<pre>
$users = App\User::all();

<b>$users->toArray();</b>
<b>$users->toJson();</b>
</pre>

@endsection