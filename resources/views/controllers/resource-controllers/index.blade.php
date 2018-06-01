@extends('master')

@section('content')

<h2>Resource Controllers <small>Effective way to provide Cruds</small></h2>

<br />

@if(old('message'))
<div class="alert alert-{{ old('status') ?? 'success' }} alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {!! old('message') !!}
</div>
<br />
@endif

<br />
Artisan
<pre><b>php artisan make:controller ResourceControllersController --resource</b></pre>
Routes
<pre><b>Route::resource('resource-controllers', 'ResourceControllersController');</b></pre>

<br />

<div class="row">
    <div class="col-md-6 col-md-offset-3" style="font-size: 20px">
        <b>Photos available</b>
    </div>
    <div class="col-md-3 text-right">
        <a href="{{ route('resource-controllers.create') }}"><button class="btn btn-primary">Include new photos</button></a>
    </div>
</div>

<br />

<table class="table table-striped">
    <thead>
        <tr>
            <th>File</th>
            <th class="text-center">Edit</th>
            <th class="text-center">Remove</th>
        </tr>
    </thead>
    <tbody>
        @foreach($photos as $file)
        @php ($file = basename($file))
        <tr>
            <td class="text-left"><a href="{{ route('resource-controllers.show', ['file' => $file]) }}">{{ $file }}</a></td>
            <td class=""><a href="{{ route('resource-controllers.edit', ['file' => $file]) }}"><span class="glyphicon glyphicon-edit text-warning" aria-hidden="true"></span></a></td>
            <td class=""><a class="delete" style="cursor: pointer;" path="{{ $file }}"><span class="glyphicon glyphicon-remove-circle text-danger" aria-hidden="true"></span></a></td>
        </tr>
        @endforeach
    </tbody>
</table>

<form name="delete_file" id="delete_file" method="POST">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
</form>

<script>
    $(document).ready(function () {
        $('.delete').click(function () {
            $('#delete_file').attr('action', "{{ route('resource-controllers.index') }}" + '/' + $(this).attr('path'));
            $('#delete_file').submit();
        });
    });
</script>

<h2>API Resource Controllers <small>Effective way to provide API's</small></h2>

<br />
API response is a json response.

Example: <a href="{{ route('api.index') }}">images</a>
<br />
<br />
<br />
@endsection
