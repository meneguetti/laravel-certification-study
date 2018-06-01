@extends('master')

@section('content')
<br />
@if(old('message'))
<div class="alert alert-danger alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{ old('message') }}
</div>
<br />
@endif
<br />

{!! $contentRendered !!}

<script>
    $(function () {
        $('[data-toggle="popover"]').popover();
        
        document.title += ' (' + $('.custom-content .glyphicon-exclamation-sign').length + ')';
    })
</script>
@endsection