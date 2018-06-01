@extends('master')

@section('content')

<h2>{{ $actionName }}</h2>

<br />

Creating new fake user:
<pre>$user = factory(App\User::class)->connection('sqlite')->make();
$user->save();</pre>

@endsection