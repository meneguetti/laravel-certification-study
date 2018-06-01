@extends('master')

@section('content')

<h2>{{ $actionName }}</h2>

<br />

Configuring The Sender:
<pre>Into build method in App\Mail\TestEmail:

return $this->from('example@example.com')
                ->view('emails.orders.shipped');
</pre>

Previewing Mailables In The Browser:
<pre>Route::get('/mailable', function () {
    return new App\Mail\TestEmail2();
});
</pre>

<a href="{{ url('/mailable') }}">See sample email</a>
<br />
<br />

@endsection