@extends('master')

@section('content')

<h2>{{ $actionName }}</h2>

<br />

Generating Markdown Mailables:
<pre><b>php artisan make:mail UserCreated --markdown=emails.user.created</b>

After that the following files will be created:
Class: <b>App\Mail\UserCreated</b>
View: <b>resources\views\emails\user\created.blade.php</b>
</pre>

Customizing The Components:
<pre><b>php artisan vendor:publish --tag=laravel-mail</b>

</pre>

@endsection