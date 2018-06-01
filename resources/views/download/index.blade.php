@extends('master')

@section('content')

@if(old('message_success'))
<div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {!! old('message_success') !!}
</div>
<br />
@endif

<h2>Listing files</h2>
<br />
<pre><b>\Illuminate\Support\Facades\Storage::files('images');</b></pre>

<table class="table table-hover">
    <thead>
        <tr>
            <th>File</th>
            <th>Remove</th>
        </tr>
    </thead>
    <tbody>
        @foreach($files as $file)
        <tr>
            <td class="text-left"><a href="{{ route('download.get', ['file' => $file]) }}">{{ $file }}</a></td>
            <td class="alert alert-danger"><a href="{{ route('file.delete', ['file' => $file]) }}"><span class="glyphicon glyphicon-remove-circle alert-danger" aria-hidden="true"></span></a></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection