@extends('master')

<script src="{{ asset('js/chat.js') }}"></script>

@section('content')

<h2>Broadcasting Events</h2>

<br />

Laravel Echo:
<pre>Laravel Echo is a JavaScript library that makes it painless to subscribe to channels and listen for events broadcast by Laravel.</pre>

Chat:

<div class="row" style="height: 200px; overflow-y: scroll;">
    <div class="col-md-12" id="chat-messages">
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <form onsubmit="return false;" id="chat">
            Name: <b>{{ $name }}</b>
            {{ csrf_field() }}
            <input type="hidden" name="name" id="name" value="{{ $name }}" />
            <input type="text" name="message" id="message" placeholder="Type here your message!" />
            <button value="Send" name="send" id="send" class="btn btn-primary">Send</button>
        </form>
    </div>
</div>
<script>

    Echo.channel('chat')
            .listen('.messages', (e) => {
                $('#chat-messages').append('<div class="row"><div class="col-md-5 text-right">' + e.name + ' <small>' + (new Date($.now())).toLocaleTimeString() + '</small></div><div class="col-md-7 text-left">' + e.message + '</div></div>');
            });

    $(document).ready(function () {
        $('#send').click(function () {
            //send message to server
            $.post("{{ route('websockets.send-message') }}", $('#chat').serialize());

            //clean input text message
            $('#message').val('');

        });

    });
</script>

@endsection