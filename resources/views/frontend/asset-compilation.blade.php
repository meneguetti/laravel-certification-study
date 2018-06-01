@extends('master')

@section('content')

<h2>{{ $actionName }}</h2>

<br />

Laravel Mix:
<pre>
webpack.mix.js

<b>mix.js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/chat.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .sass('resources/views/vendor/mail/html/themes/user-created.scss', 'public/css/mail');</b>

// Run all Mix tasks...
<b>npm run dev</b>

// Run all Mix tasks and minify output...
<b>npm run production</b>
</pre>

@endsection