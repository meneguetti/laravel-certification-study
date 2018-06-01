@extends('master')

@section('content')

<h2>{{ $actionName }}</h2>

<br />

Getting all users:
<pre>$users = \App\User::all()

First user name => ($users->first()->name) => <b>{{ $users->first()->name }}</b>
</pre>

Users with string 'vi' in name:
<pre>$usersWithVi = \App\User::where('name', 'like', '%vi%')->get(['name'])->implode('name', ', ');

Users found with string 'vi' in name:

<b>{{ $usersWithVi }}</b>
</pre>

@endsection