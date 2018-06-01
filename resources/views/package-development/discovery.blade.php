@extends('master')

@section('content')

<h2>{{ $actionName }}</h2>

<br />

Introduction:
<pre>Packages may work independently of framework as standalone or as Laravel Package.</pre>

Package Discovery:
<pre>
config/app.php
==> providers (list)

<b>OR AUTOMATICALLY INCLUDING IN composer.json, for example:</b>
"extra": {
    "laravel": {
        "providers": [
            "Barryvdh\\Debugbar\\ServiceProvider"
        ],
        "aliases": {
            "Debugbar": "Barryvdh\\Debugbar\\Facade"
        }
    }
},    
</pre>

Opting Out Of Package Discovery:
<pre>
"extra": {
    "laravel": {
        "<b>dont-discover</b>": [
            "*"
        ]
    }
},    
</pre>

@endsection