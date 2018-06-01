@extends('master')

@section('content')

<h2>{{ $actionName }}</h2>

<br />

Control Structures:
<pre>
<b>forelse</b>
@@forelse ($users as $user)
    @{{ $user->name }}
@@empty
    No users
@@endforelse

<b>if</b>
@@if (Route::has('login'))
    do something
@@endif

<b>auth</b>
@@auth
    @{{ Auth::user()->name }}
@@else
    {{ "<a href='/login'>Login</a>" }}
    {{ "<a href='/register'>Register</a>" }}
@@endauth
</pre>

@endsection