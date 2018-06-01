@extends('master')

@section('content')

<h2>Cookies</h2>

<br />

Is any cookie set?
<br />
<pre>@if(Cookie::get('app_previous_name')) Yes: {{ Cookie::get('app_previous_name') }} =) @else No... no cookie for you =/ @endif</pre>

Fill below to set a new cookie with the content filled
<form action="{{ route('responses.cookies.save') }}" method="post">
    {{ csrf_field() }}
    <input type="text" name="new-cookie-value" placeholder="Type the new cookie value" />
    <input type="submit" class="btn btn-primary" name="Save" />
</form>

@endsection