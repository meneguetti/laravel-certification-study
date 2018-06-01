<head>
    <link rel="stylesheet" href="{{ asset('css/mail/user-created.css') }}" type='text/css' />
</head>

@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent