@extends('master')

@section('content')

<h2>{{ $actionName }}</h2>

<br />

Insert using faker:
<pre><b>$user = \Faker\Factory::create();

\Illuminate\Support\Facades\DB::table('users')->insert([
    'name' => $user->name,
    'email' => $user->email,
    'password' => $user->password,
    'created_at' => \Carbon\Carbon::now(),
    'updated_at' => \Carbon\Carbon::now(),
]);

User created:
name: {{ $user->name }}
email: {{ $user->email }}
password: {{ $user->password }}
</pre>

@endsection