@extends('master')

@section('content')

<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th class="text-center">All params options</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>request/{{ '<value of parameter>' }}</td>
        </tr>
        <tr>
            <td>?name=name-value</td>
        </tr>
        <tr>
            <td>?redirect=redirect-name</td>
        </tr>
        <tr>
            <td>?json=true</td>
        </tr>
        <tr>
            <td>ex: <a href="{{ route('request') . '/vitor?name=vitor2&redirect=true' }}">{{ route('request') . '/vitor?name=vitor2&redirect=true' }}</a></td>
        </tr>
    </tbody>
</table>
<br />
<h2>Params values passed:</h2>
name passed through get: {{ $nameGet }}
<br />
<br />
message: {{ $msg }}
<br />
<br />
name passed through parameter: {{ $nameParameter }}
<br />

@endsection