@component('mail::message')
# Introduction

This is an example message.

@component('mail::button', ['url' => ''])
See the mailable
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
