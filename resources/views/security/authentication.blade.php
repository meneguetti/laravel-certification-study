@extends('master')

@section('content')

<h2>Authentication</h2>

<br />

Protecting Routes:
<br />
<pre class="text-left" style="width:60%; margin: 0 auto;">
//in controller
public function __construct(){
    $this->middleware('auth');
}

//in routes/web.php
Route::get('/security/authentication', 'SecurityController@authentication')
    ->name('security.authentication')
    ->middleware('auth');
</pre>

@endsection