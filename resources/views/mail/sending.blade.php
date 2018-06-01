@extends('master')

@section('content')

<h2>{{ $actionName }}</h2>

<br />

.env:
<pre>MAIL_DRIVER=smtp
MAIL_FROM_ADDRESS=laravel_certification_study@example.com
MAIL_FROM_NAME="Laravel Certification Study"
MAIL_ENCRYPTION=TLS
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your_user@gmail.com
MAIL_PASSWORD=your_pass

MAIL_ALLOW_SELF_SIGNED=true
MAIL_VERIFY_PEER=false
MAIL_VERIFY_PEER_NAME=false</pre>

config/mail.php:
<pre>'stream' => [
        'ssl' => [
            'allow_self_signed' => env('MAIL_ALLOW_SELF_SIGNED'),
            'verify_peer' => env('MAIL_VERIFY_PEER'),
            'verify_peer_name' => env('MAIL_VERIFY_PEER_NAME'),
        ],
    ],</pre>

Send:
<form action="{{ route('mail.send') }}" method="POST" >
    {{ csrf_field() }}
    <input type="text" name="email" id="email" placeholder="Type here the sender email" />
    <input type="submit" value="Send" />
</form>

<br />
<br />

@endsection