@extends('master')

@section('content')

<br />
@if(old('file_missing'))
<div class="alert alert-danger alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    File missing.
</div>
<br />
@endif

@if(old('filename'))
<div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>{{ old('filename') }}</strong> was saved into 'storage/app/images/photos'.
</div>
<br />
@endif
<br />

<form action="{{ route('resource-controllers.store') }}" enctype="multipart/form-data" method="post" class="form-inline">

    <div class="form-group">
        <input type="file" name="file" class="input-lg"/>
    </div>

    {{ csrf_field() }}

    <input type="submit" value="Submit" class="btn btn-primary" />


</form>

@endsection