@extends('master')

@section('content')

<h2>Edit</h2>

@if(old('message'))
<div class="alert alert-danger alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{ old('message') }}
</div>
<br />
@endif

<form action="{{ route('resource-controllers.update', $id) }}" method="POST">

    {{ csrf_field() }}
    {{ method_field('PUT') }}

    <input type="hidden" name="name_old" value="{{ $id }}"/>

    <div class="form-group">    
        <input type="text" style="width: 100%" name="name" value="{{ $id }}" placeholder="Type the file name"/>
    </div>
    <input type="submit" class="btn btn-primary" name="submit" value="Save" />

</form>

@endsection
