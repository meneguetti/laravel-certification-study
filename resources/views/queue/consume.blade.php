@extends('master')

@section('content')

@if(!empty($item))
<h2 class="jumbotron">
    <b>Item consumed: </b>{{ $item->time }}
</h2>
<h3 class="jumbotron">
    <b>Current queue length: </b>{{ $size }}
</h3>
@else
The queue is empty!
@endif

@endsection