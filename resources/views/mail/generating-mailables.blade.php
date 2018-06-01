@extends('master')

@section('content')

<h2>{{ $actionName }}</h2>

<br />

Artisan:
<pre><b>php artisan make:mail TestEmail</b>

After that, a class is created with following FQN:
<b>App\Mail\TestEmail</b>

That class extends:
<b>Illuminate\Mail\Mailable</b>
</pre>

@endsection