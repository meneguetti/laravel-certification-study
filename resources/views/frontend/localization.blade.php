@extends('master')

@section('content')

<h2>{{ $actionName }}</h2>

<br />

Directory:
<pre>
/resources
    /lang
        /en
            messages.php
        /pt
            messages.php

All language files return an array of keyed strings. For example:

&LT;?php
return [
    'welcome' => 'Welcome to our application'
];

Using Translation Strings As Keys

resources/lang/pt.json
{
    "I love programming.": "Eu amo programar."
}
</pre>
<a href="{{ route('frontend.localization') }}?lang=en">EN</a>
...
<a href="{{ route('frontend.localization') }}?lang=pt">PT</a>
<br />
<b>{{ __('I love programming.') }}</b>

<br />
<br />
<br />

Configuring the locale:
<pre>
\Illuminate\Support\Facades\App::setLocale($request->input('lang'));
</pre>

<br />
<br />

@endsection